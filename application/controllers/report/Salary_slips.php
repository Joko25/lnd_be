<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');

class Salary_slips extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('crud');
        $this->load->model('emails');
    }

    //HALAMAN UTAMA
    public function index()
    {
        if (empty($this->session->username)) {
            redirect('error_session');
        } elseif ($this->checkuserAccess($this->id_menu()) > 0) {
            $data['button'] = $this->getbutton($this->id_menu());

            $this->load->view('template/header', $data);
            $this->load->view('report/salary_slips');
        } else {
            redirect('error_access');
        }
    }

    public function datatables()
    {
        if ($this->input->get()) {
            $filter_from = $this->input->get('filter_from');
            $filter_to = $this->input->get('filter_to');
            $filter_division = $this->input->get('filter_division');
            $filter_departement = $this->input->get('filter_departement');
            $filter_departement_sub = $this->input->get('filter_departement_sub');
            $filter_employee = $this->input->get('filter_employee');
            $filter_group = $this->input->get('filter_group');
            $username = $this->session->username;

            $period_start = date("Y-m", strtotime($filter_from));
            $period_end = date("Y-m", strtotime($filter_to));

            //Select Query
            $this->db->select('
            b.departement_id,
            b.departement_sub_id,
            b.group_id,
            c.name as departement_name, 
            d.name as departement_sub_name, 
            e.name as group_name, 
            COUNT(b.id) as employee, 
            SUM(a.net_income) as income');
            $this->db->from('payrolls a');
            $this->db->join('employees b', "a.employee_id = b.id");
            $this->db->join('departements c', "b.departement_id = c.id");
            $this->db->join('departement_subs d', "b.departement_sub_id = d.id");
            $this->db->join('groups e', "b.group_id = e.id");
            $this->db->join('privilege_groups f', "b.group_id = f.id and f.username = '$username' and f.status = '1'", "left");
            $this->db->where('a.deleted', 0);
            $this->db->where('a.period_start =', $period_start);
            $this->db->where('a.period_end =', $period_end);
            $this->db->like('b.id', $filter_employee);
            $this->db->like('b.division_id', $filter_division);
            $this->db->like('b.departement_id', $filter_departement);
            $this->db->like('b.departement_sub_id', $filter_departement_sub);
            $this->db->like('b.group_id', $filter_group);
            $this->db->group_by(array("c.id", "d.id"));
            $this->db->order_by('c.name', 'ASC');
            $this->db->order_by('SUM(a.net_income)', 'ASC');
            //Get Data Array
            $records = $this->db->get()->result_array();

            echo json_encode($records);
        }
    }

    public function getData()
    {
        if ($this->input->get()) {
            $filter_from = $this->input->get('filter_from');
            $filter_to = $this->input->get('filter_to');
            $filter_division = $this->input->get('filter_division');
            $filter_departement = $this->input->get('filter_departement');
            $filter_departement_sub = $this->input->get('filter_departement_sub');
            $filter_employee = $this->input->get('filter_employee');
            $filter_group = $this->input->get('filter_group');
            $username = $this->session->username;

            $period_start = date("Y-m", strtotime($filter_from));
            $period_end = date("Y-m", strtotime($filter_to));
            $query = $this->db->query("SELECT a.*, b.bank_branch, b.bank_no, coalesce(c.amount_plus_correction, 0) as amount_plus_correction, coalesce(d.amount_plus_salary, 0) as amount_plus_salary, b.email FROM payrolls a
                JOIN employees b ON a.employee_id = b.id
                LEFT JOIN (SELECT employee_id, `trans_date`, SUM(amount) as amount_plus_correction FROM corrections WHERE trans_date between '$filter_from' and '$filter_to' and correction_type = 'PLUS' and correction_name = 'CORRECTION' GROUP BY employee_id) c ON a.employee_id = c.employee_id
                LEFT JOIN (SELECT employee_id, `trans_date`, SUM(amount) as amount_plus_salary FROM corrections WHERE trans_date between '$filter_from' and '$filter_to' and correction_type = 'PLUS' and correction_name = 'SALARY' GROUP BY employee_id) d ON a.employee_id = d.employee_id
                LEFT JOIN privilege_groups e ON b.group_id = e.id and e.username = '$username' and e.status = '1'
                WHERE a.period_start = '$period_start'
                AND a.period_end = '$period_end'
                AND b.division_id LIKE '%$filter_division%'
                AND b.departement_id LIKE '%$filter_departement%'
                AND b.departement_sub_id LIKE '%$filter_departement_sub%'
                AND b.group_id LIKE '%$filter_group%'
                AND a.employee_id LIKE '%$filter_employee%'
                ORDER BY a.`name` ASC");
            $records = $query->result_array();

            die(json_encode($records));
        }
    }

    public function sendMail()
    {
        $filter_from = $this->input->get('filter_from');
        $filter_to = $this->input->get('filter_to');
        $record = $this->input->post('data');
        //Config
        $this->db->select('*');
        $this->db->from('config');
        $config = $this->db->get()->row();

        $html = '<html>
                <head>
                    <title>Print Data</title>
                </head>
                <style>
                    body {font-family: Arial, Helvetica, sans-serif;}
                    #customers {border-collapse: collapse;width: 100%;font-size: 14px;}
                    #customers th {border: 1px solid black;padding: 5px;}
                    #customers td {padding-left: 5px; padding-right:5px;}
                    #customers tr:hover {background-color: #ddd;}
                    #customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}
                </style>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                <body>';

        //Deduction Amount
        $total_deduction_amount = 0;
        foreach (json_decode($record['deduction_amount'], true) as $deduction_amount => $val_deduction_amount) {
            $total_deduction_amount += $val_deduction_amount;
        }

        //Allowance Amount
        //jika dia ada tunjuangan ambil field dan isinya
        $q_allowance = $this->db->query("SELECT b.number, b.name, a.amount
                    FROM allowances b
                    LEFT JOIN setup_allowances a ON a.allowance_id = b.id and a.employee_id = '$record[employee_id]'
                    GROUP BY b.id ORDER BY b.name asc");
        $r_allowance = $q_allowance->result_array();

        $arr_allowance_amount_total = 0;
        $html_allowance = "";
        foreach ($r_allowance as $allowance_data) {
            $arr_allowance_amount_total += $allowance_data['amount'];
            $html_allowance .= ' <tr>
                                    <td style="text-align:left;">' . $allowance_data['name'] . '</td>
                                    <td style="text-align:right;"><b>' . number_format($allowance_data['amount']) . '</b></td>
                                </tr>';
        }
        //-------------------------------------------------------------------------------------------------------------------------------------------------------

        //Deduction Amount
        //Jika dia ada pemotongan gaji ambil field dan isinya
        $q_deduction = $this->db->query("SELECT b.number, b.name, a.amount
                    FROM deductions b
                    LEFT JOIN setup_deductions a ON a.deduction_id = b.id and a.employee_id = '$record[employee_id]'
                    GROUP BY b.id ORDER BY b.name asc");
        $r_deduction = $q_deduction->result_array();

        $arr_deduction_amount_total = 0;
        $html_deduction = "";
        foreach ($r_deduction as $deduction_data) {
            $arr_deduction_amount_total += $deduction_data['amount'];
            $html_deduction .= ' <tr>
                                    <td style="text-align:left;">' . $deduction_data['name'] . '</td>
                                    <td style="text-align:right;"><b>' . number_format($deduction_data['amount']) . '</b></td>
                                </tr>';
        }
        //-------------------------------------------------------------------------------------------------------------------------------------------------------

        //BPJS Employee
        //Kalo dia mempunyai BPJS
        $bpjsKeys = json_decode($record['bpjs_employee'], true);
        $html_bpjs_emp = "";
        $arr_bpjs_emp_amount_total = 0;
        foreach ($bpjsKeys as $bpjs_employee => $bpjs_value) {
            $arr_bpjs = explode("_", $bpjs_employee);
            $r_bpjs_emp = $this->crud->read('bpjs', ['status' => 0], ["number" => $arr_bpjs[0]]);

            $arr_bpjs_emp_amount_total += !empty($bpjs_value) ? $bpjs_value : 0;
            if (!empty($r_bpjs_emp->employee)) {
                $html_bpjs_emp .= ' <tr>
                                        <td style="text-align:left;">' . $r_bpjs_emp->name . '</td>
                                        <td style="text-align:right;"><b>' . number_format($bpjs_value) . '</b></td>
                                    </tr>';
            }
        }
        //-------------------------------------------------------------------------------------------------------------------------------------------------------

        $total_income = $record['salary'] + $arr_allowance_amount_total + $record['total_overtime_amount'] + $record['correction_plus'];
        $total_deduction = $record['deduction_absence_amount'] + $total_deduction_amount + $arr_deduction_amount_total + $record['loan_bank'] + $record['loan_cooperative'] + $record['loan_other'] + $record['correction_minus'];

        $html .= '  <center>
                    <div class="container" style="border:1px solid black; margin-bottom:20px; padding-top:10px; width:500px;">
                        <table style="width: 100%;">
                            <tr>
                                <td width="80" style="font-size: 12px; vertical-align: top; text-align: center; vertical-align:jus margin-right:10px;">
                                    <img src="' . $config->favicon . '" width="50">
                                </td>
                                <td style="font-size: 20px; text-align: left; margin:2px;">
                                    <b>' . $config->name . '</b>
                                </td>
                                <td style="font-size: 20px; text-align: right; margin:2px;">
                                    SALARY SLIP
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <table style="width:100%; margin-bottom: 5px; font-size: 14px;">
                            <tr>
                                <th style="text-align:left; width: 30%;">Cut Off Period</th>
                                <th style="text-align:left; width: 5%;">:</th>
                                <th style="text-align:left; width: 60%;">' . date("d M Y", strtotime($filter_from)) . ' to ' . date("d M Y", strtotime($filter_to)) . '</th>
                            </tr>
                            <tr>
                                <th style="text-align:left;">Employee ID</th>
                                <th style="text-align:left;">:</th>
                                <th style="text-align:left;">' . $record['number'] . '</th>
                            </tr>
                            <tr>
                                <th style="text-align:left;">Employee Name</th>
                                <th style="text-align:left;">:</th>
                                <th style="text-align:left;">' . $record['name'] . '</th>
                            </tr>
                            <tr>
                                <th style="text-align:left;">Departement</th>
                                <th style="text-align:left;">:</th>
                                <th style="text-align:left;">' . $record['departement_name'] . '</th>
                            </tr>
                            <tr>
                                <th style="text-align:left;">Departement Sub</th>
                                <th style="text-align:left;">:</th>
                                <th style="text-align:left;">' . $record['departement_sub_name'] . '</th>
                            </tr>
                        </table>
                        <div class="row">
                            <div class="col p-0">
                                <table id="customers" style="width:100%; border-right: 1px solid black;">
                                    <tr>
                                        <th colspan="2" style="text-align:center"><h2>INCOME</h2><hr></th>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left;" width="150">Basic Salary</td>
                                        <td style="text-align:right;" width="150"><b>' . number_format($record['salary']) . '</b></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left;">Allowences</td>
                                        <td style="text-align:right;"><b>' . number_format($arr_allowance_amount_total) . '</b></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left;">Overtime</td>
                                        <td style="text-align:right;">(<b>' . ($record['overtime_weekday'] + $record['overtime_holiday']) . '</b> Hour) <b>' . number_format(($record['overtime_amount_weekday'] + $record['overtime_amount_holiday'])) . '</b></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left;">Correction Plus</td>
                                        <td style="text-align:right;"><b>' . number_format(($record['amount_plus_correction'])) . '</b></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left;">Correction Salary</td>
                                        <td style="text-align:right;"><b>' . number_format(($record['amount_plus_salary'])) . '</b></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left;">Correction Overtime</td>
                                        <td style="text-align:right;">(<b>' . $record['overtime_correction'] . '</b> Hour) <b>' . number_format(($record['overtime_amount_correction'])) . '</b></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align:left;">TOTAL INCOME</th>
                                        <th style="text-align:right;"><b>' . number_format($total_income) . '</b></th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:left;">NETTO</th>
                                        <th style="text-align:right;"><b>' . number_format(($total_income - $total_deduction)) . '</b></th>
                                    </tr>
                                    <tr>
                                        <th colspan="2" style="text-align:center"><h2>BPJS EMPLOYEE</h2><hr></th>
                                    </tr>
                                    ' . $html_bpjs_emp . '
                                </table>
                            </div>
                            <div class="col p-0">
                                <table id="customers" style="width:100%; border-left: 1px solid black;">
                                    <tr>
                                        <th colspan="2" style="text-align:center"><h2>DEDUCTION</h2><hr></th>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left;" width="150">Absence</td>
                                        <td style="text-align:right;" width="150"><b>' . number_format($record['deduction_absence_amount'] + $total_deduction_amount) . '</b></td>
                                    </tr>
                                    ' . @$html_deduction . '
                                    <tr>
                                        <td style="text-align:left;">Pinjaman Bank</td>
                                        <td style="text-align:right;"><b>' . number_format($record['loan_bank']) . '</b></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left;">Pinjaman Koperasi</td>
                                        <td style="text-align:right;"><b>' . number_format($record['loan_cooperative']) . '</b></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left;">Pinjaman Lainnya</td>
                                        <td style="text-align:right;"><b>' . number_format($record['loan_other']) . '</b></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left;">Correction Minus</td>
                                        <td style="text-align:right;"><b>' . number_format($record['correction_minus']) . '</b></td>
                                    </tr>
                                    <tr>
                                        <th colspan="2" style="text-align:center"><h2>TOTAL SALARY</h2><hr></th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:left;">TOTAL DEDUCTION</th>
                                        <th style="text-align:right;"><b>' . number_format($total_deduction) . '</b></th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:left;">TOTAL BPJS</th>
                                        <th style="text-align:right;"><b>' . number_format(($arr_bpjs_emp_amount_total)) . '</b></th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:left;">PPH 21</th>
                                        <th style="text-align:right;"><b>' . number_format($record['pph']) . '</b></th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:left;">NET INCOME</th>
                                        <th style="text-align:right;"><b>' . number_format($record['net_income']) . '</b></th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    </center>';
        $html .= '</body></html>';

        $email = $this->emails->emailSalarySlip($record['email'], $record['name'], $config->name, base64_encode($html));
        if (!filter_var($record['email'], FILTER_VALIDATE_EMAIL)) {
            echo json_encode(array("title" => "Not Registered", "message" => "Email not register in Employee List", "theme" => "error"));
        } elseif ($email) {
            echo json_encode(array("title" => "Delivered", "message" => "Salary Slip successfully sent to " . $record['email'], "theme" => "success"));
        } else {
            echo json_encode(array("title" => "Failed", "message" => "Salary Slip unseccessfull sent to " . $record['email'], "theme" => "error"));
        }
    }

    public function print($option = "")
    {
        if ($option == "excel") {
            $format  = date("Ymd");
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=salary_slip_$format.xls");
        }

        if ($this->input->get()) {
            $filter_from = $this->input->get('filter_from');
            $filter_to = $this->input->get('filter_to');
            $filter_division = $this->input->get('filter_division');
            $filter_departement = $this->input->get('filter_departement');
            $filter_departement_sub = $this->input->get('filter_departement_sub');
            $filter_employee = $this->input->get('filter_employee');
            $filter_group = $this->input->get('filter_group');
            $username = $this->session->username;

            $period_start = date("Y-m", strtotime($filter_from));
            $period_end = date("Y-m", strtotime($filter_to));

            $query = $this->db->query("SELECT a.*, b.bank_branch, b.bank_no, c.amount_plus_correction, d.amount_plus_salary FROM payrolls a
                JOIN employees b ON a.employee_id = b.id
                LEFT JOIN (SELECT employee_id, `trans_date`, SUM(amount) as amount_plus_correction FROM corrections WHERE trans_date between '$filter_from' and '$filter_to' and correction_type = 'PLUS' and correction_name = 'CORRECTION' GROUP BY employee_id) c ON a.employee_id = c.employee_id
                LEFT JOIN (SELECT employee_id, `trans_date`, SUM(amount) as amount_plus_salary FROM corrections WHERE trans_date between '$filter_from' and '$filter_to' and correction_type = 'PLUS' and correction_name = 'SALARY' GROUP BY employee_id) d ON a.employee_id = d.employee_id
                LEFT JOIN privilege_groups e ON b.group_id = e.id and e.username = '$username' and e.status = '1'
                WHERE a.period_start = '$period_start'
                AND a.period_end = '$period_end'
                AND b.division_id LIKE '%$filter_division%'
                AND b.departement_id LIKE '%$filter_departement%'
                AND b.departement_sub_id LIKE '%$filter_departement_sub%'
                AND b.group_id LIKE '%$filter_group%'
                AND a.employee_id LIKE '%$filter_employee%'
                ORDER BY a.`name` ASC");
            $records = $query->result_array();

            //Config
            $this->db->select('*');
            $this->db->from('config');
            $config = $this->db->get()->row();

            $html = '<html>
                <head>
                    <title>Print Data</title>
                </head>
                <style>
                    body {font-family: Arial, Helvetica, sans-serif;}
                    #customers {border-collapse: collapse;width: 100%;font-size: 14px;}
                    #customers th {border: 1px solid black;padding: 5px;}
                    #customers td {padding-left: 5px; padding-right:5px;}
                    #customers tr:hover {background-color: #ddd;}
                    #customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}
                </style>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                <body>';
            $no = 1;
            //Looping per Employee
            foreach ($records as $record) {

                //Deduction Amount
                $total_deduction_amount = 0;
                foreach (json_decode($record['deduction_amount'], true) as $deduction_amount => $val_deduction_amount) {
                    $total_deduction_amount += $val_deduction_amount;
                }

                //Allowance Amount
                //jika dia ada tunjuangan ambil field dan isinya
                $q_allowance = $this->db->query("SELECT b.number, b.name, a.amount
                    FROM allowances b
                    LEFT JOIN setup_allowances a ON a.allowance_id = b.id and a.employee_id = '$record[employee_id]'
                    GROUP BY b.id ORDER BY b.name asc");
                $r_allowance = $q_allowance->result_array();

                $arr_allowance_amount_total = 0;
                $html_allowance = "";
                foreach ($r_allowance as $allowance_data) {
                    $arr_allowance_amount_total += $allowance_data['amount'];
                    $html_allowance .= ' <tr>
                                                <td style="text-align:left;">' . $allowance_data['name'] . '</td>
                                                <td style="text-align:right;"><b>' . number_format($allowance_data['amount']) . '</b></td>
                                            </tr>';
                }
                //-------------------------------------------------------------------------------------------------------------------------------------------------------

                //Deduction Amount
                //Jika dia ada pemotongan gaji ambil field dan isinya
                $q_deduction = $this->db->query("SELECT b.number, b.name, a.amount
                    FROM deductions b
                    LEFT JOIN setup_deductions a ON a.deduction_id = b.id and a.employee_id = '$record[employee_id]'
                    GROUP BY b.id ORDER BY b.name asc");
                $r_deduction = $q_deduction->result_array();

                $arr_deduction_amount_total = 0;
                $html_deduction = "";
                foreach ($r_deduction as $deduction_data) {
                    $arr_deduction_amount_total += $deduction_data['amount'];
                    $html_deduction .= ' <tr>
                                                <td style="text-align:left;">' . $deduction_data['name'] . '</td>
                                                <td style="text-align:right;"><b>' . number_format($deduction_data['amount']) . '</b></td>
                                            </tr>';
                }
                //-------------------------------------------------------------------------------------------------------------------------------------------------------

                //BPJS Employee
                //Kalo dia mempunyai BPJS
                $bpjsKeys = json_decode($record['bpjs_employee'], true);
                $html_bpjs_emp = "";
                $arr_bpjs_emp_amount_total = 0;
                foreach ($bpjsKeys as $bpjs_employee => $bpjs_value) {
                    $arr_bpjs = explode("_", $bpjs_employee);
                    $r_bpjs_emp = $this->crud->read('bpjs', ['status' => 0], ["number" => $arr_bpjs[0]]);

                    $arr_bpjs_emp_amount_total += !empty($bpjs_value) ? $bpjs_value : 0;
                    if (!empty($r_bpjs_emp->employee)) {
                        $html_bpjs_emp .= ' <tr>
                                                <td style="text-align:left;">' . $r_bpjs_emp->name . '</td>
                                                <td style="text-align:right;"><b>' . number_format($bpjs_value) . '</b></td>
                                            </tr>';
                    }
                }
                //-------------------------------------------------------------------------------------------------------------------------------------------------------

                $total_income = $record['salary'] + $arr_allowance_amount_total + $record['total_overtime_amount'] + $record['correction_plus'];
                $total_deduction = $record['deduction_absence_amount'] + $total_deduction_amount + $arr_deduction_amount_total + $record['loan_bank'] + $record['loan_cooperative'] + $record['loan_other'] + $record['correction_minus'];
                if ($no % 2 == 0) {
                    $html .= '<div style="page-break-after:always;">';
                }
                $html .= '  <div class="container" style="border:1px solid black; margin-bottom:20px; padding-top:10px;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td width="80" style="font-size: 12px; vertical-align: top; text-align: center; vertical-align:jus margin-right:10px;">
                                                <img src="' . $config->favicon . '" width="50">
                                            </td>
                                            <td style="font-size: 30px; text-align: left; margin:2px;">
                                                <b>' . $config->name . '</b>
                                            </td>
                                            <td style="font-size: 30px; text-align: right; margin:2px;">
                                                SALARY SLIP
                                            </td>
                                        </tr>
                                    </table>
                                    <hr>
                                    <table style="width:100%; margin-bottom: 5px; font-size: 14px;">
                                        <tr>
                                            <th style="text-align:left; width: 30%;">Cut Off Period</th>
                                            <th style="text-align:left; width: 5%;">:</th>
                                            <th style="text-align:left; width: 60%;">' . date("d M Y", strtotime($filter_from)) . ' to ' . date("d M Y", strtotime($filter_to)) . '</th>
                                        </tr>
                                        <tr>
                                            <th style="text-align:left;">Employee ID</th>
                                            <th style="text-align:left;">:</th>
                                            <th style="text-align:left;">' . $record['number'] . '</th>
                                        </tr>
                                        <tr>
                                            <th style="text-align:left;">Employee Name</th>
                                            <th style="text-align:left;">:</th>
                                            <th style="text-align:left;">' . $record['name'] . '</th>
                                        </tr>
                                        <tr>
                                            <th style="text-align:left;">Departement</th>
                                            <th style="text-align:left;">:</th>
                                            <th style="text-align:left;">' . $record['departement_name'] . '</th>
                                        </tr>
                                        <tr>
                                            <th style="text-align:left;">Departement Sub</th>
                                            <th style="text-align:left;">:</th>
                                            <th style="text-align:left;">' . $record['departement_sub_name'] . '</th>
                                        </tr>
                                    </table>
                                    <div class="row">
                                        <div class="col p-0">
                                            <table id="customers" style="width:100%; border-right: 1px solid black;">
                                                <tr>
                                                    <th colspan="2" style="text-align:center">INCOME</th>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:left;" width="150">Basic Salary</td>
                                                    <td style="text-align:right;" width="150"><b>' . number_format($record['salary']) . '</b></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:left;">Allowences</td>
                                                    <td style="text-align:right;"><b>' . number_format($arr_allowance_amount_total) . '</b></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:left;">Overtime</td>
                                                    <td style="text-align:right;">(<b>' . ($record['overtime_weekday'] + $record['overtime_holiday']) . '</b> Hour) <b>' . number_format(($record['overtime_amount_weekday'] + $record['overtime_amount_holiday'])) . '</b></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:left;">Correction Plus</td>
                                                    <td style="text-align:right;"><b>' . number_format(($record['amount_plus_correction'])) . '</b></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:left;">Correction Salary</td>
                                                    <td style="text-align:right;"><b>' . number_format(($record['amount_plus_salary'])) . '</b></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:left;">Correction Overtime</td>
                                                    <td style="text-align:right;">(<b>' . $record['overtime_correction'] . '</b> Hour) <b>' . number_format(($record['overtime_amount_correction'])) . '</b></td>
                                                </tr>
                                                <tr>
                                                    <th style="text-align:left;">TOTAL INCOME</th>
                                                    <th style="text-align:right;"><b>' . number_format($total_income) . '</b></th>
                                                </tr>
                                                <tr>
                                                    <th style="text-align:left;">NETTO</th>
                                                    <th style="text-align:right;"><b>' . number_format(($total_income - $total_deduction)) . '</b></th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" style="text-align:center">BPJS EMPLOYEE</th>
                                                </tr>
                                                ' . $html_bpjs_emp . '
                                                <tr>
                                                    <th style="text-align:left;">TOTAL BPJS</th>
                                                    <th style="text-align:right;"><b>' . number_format(($arr_bpjs_emp_amount_total)) . '</b></th>
                                                </tr>
                                                <tr>
                                                    <th style="text-align:left;">PPH 21</th>
                                                    <th style="text-align:right;"><b>' . number_format($record['pph']) . '</b></th>
                                                </tr>
                                                <tr>
                                                    <th style="text-align:left;">NET INCOME</th>
                                                    <th style="text-align:right;"><b>' . number_format($record['net_income']) . '</b></th>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col p-0">
                                            <table id="customers" style="width:100%; border-left: 1px solid black;">
                                                <tr>
                                                    <th colspan="2" style="text-align:center">DEDUCTION</th>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:left;" width="150">Absence</td>
                                                    <td style="text-align:right;" width="150"><b>' . number_format($record['deduction_absence_amount'] + $total_deduction_amount) . '</b></td>
                                                </tr>
                                                ' . @$html_deduction . '
                                                <tr>
                                                    <td style="text-align:left;">Pinjaman Bank</td>
                                                    <td style="text-align:right;"><b>' . number_format($record['loan_bank']) . '</b></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:left;">Pinjaman Koperasi</td>
                                                    <td style="text-align:right;"><b>' . number_format($record['loan_cooperative']) . '</b></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:left;">Pinjaman Lainnya</td>
                                                    <td style="text-align:right;"><b>' . number_format($record['loan_other']) . '</b></td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:left;">Correction Minus</td>
                                                    <td style="text-align:right;"><b>' . number_format($record['correction_minus']) . '</b></td>
                                                </tr>
                                                <tr>
                                                    <th style="text-align:left;">TOTAL DEDUCTION</th>
                                                    <th style="text-align:right;"><b>' . number_format($total_deduction) . '</b></th>
                                                </tr>
                                                <tr>
                                                    <th style="text-align:center;">Print By</th>
                                                    <th style="text-align:center;">Accept By</th>
                                                </tr>
                                                <tr>
                                                    <th style="text-align:center; height:70px;"></th>
                                                    <th style="text-align:center; height:70px;"></th>
                                                </tr>
                                                <tr>
                                                    <th style="text-align:center;">' . $this->session->name . '</th>
                                                    <th style="text-align:center;">' . $record['name'] . '</th>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>';

                if ($no % 2 == 0) {
                    $html .= '</div>';
                }
                $no++;
            }

            $html .= '</body></html>';
            echo $html;
            $html .= '</table>';
        }
    }

    public function print_recap($option = "")
    {
        if ($option == "excel") {
            $format  = date("Ymd");
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=report_summary_payroll_$format.xls");
        }

        if ($this->input->get()) {
            $filter_from = $this->input->get('filter_from');
            $filter_to = $this->input->get('filter_to');
            $filter_division = $this->input->get('filter_division');
            $filter_departement = $this->input->get('filter_departement');
            $filter_departement_sub = $this->input->get('filter_departement_sub');
            $filter_employee = $this->input->get('filter_employee');
            $filter_group = $this->input->get('filter_group');
            $username = $this->session->username;

            $period_start = date("Y-m", strtotime($filter_from));
            $period_end = date("Y-m", strtotime($filter_to));

            //Select Query
            $this->db->select('
                b.departement_id,
                b.departement_sub_id,
                b.group_id,
                c.name as departement_name, 
                d.name as departement_sub_name, 
                e.name as group_name, 
                COUNT(b.id) as employee, 
                SUM(a.net_income) as income');
            $this->db->from('payrolls a');
            $this->db->join('employees b', "a.employee_id = b.id");
            $this->db->join('departements c', "b.departement_id = c.id");
            $this->db->join('departement_subs d', "b.departement_sub_id = d.id");
            $this->db->join('groups e', "b.group_id = e.id");
            $this->db->join('privilege_groups f', "b.group_id = f.id and f.username = '$username' and f.status = '1'", "left");
            $this->db->where('a.deleted', 0);
            $this->db->where('a.period_start =', $period_start);
            $this->db->where('a.period_end =', $period_end);
            $this->db->like('b.id', $filter_employee);
            $this->db->like('b.division_id', $filter_division);
            $this->db->like('b.departement_id', $filter_departement);
            $this->db->like('b.departement_sub_id', $filter_departement_sub);
            $this->db->like('b.group_id', $filter_group);
            $this->db->group_by(array("c.id", "d.id", "e.id"));
            $this->db->order_by('c.name', 'ASC');
            $this->db->order_by('SUM(a.net_income)', 'ASC');
            //Get Data Array
            $payrolls = $this->db->get()->result_array();

            //Config Page
            $rows = 40;
            $page = ceil(count($payrolls) / $rows);

            //Config
            $this->db->select('*');
            $this->db->from('config');
            $config = $this->db->get()->row();

            $html = '<html><head><title>Print Data</title></head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 12px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>';
            $no = 1;
            $hal = 1;
            for ($i = 0; $i < $page; $i++) {
                //Select Query
                $this->db->select('
                    b.departement_id,
                    b.departement_sub_id,
                    b.group_id,
                    c.name as departement_name, 
                    d.name as departement_sub_name, 
                    e.name as group_name, 
                    COUNT(b.id) as employee, 
                    SUM(a.net_income) as income');
                $this->db->from('payrolls a');
                $this->db->join('employees b', "a.employee_id = b.id");
                $this->db->join('departements c', "b.departement_id = c.id");
                $this->db->join('departement_subs d', "b.departement_sub_id = d.id");
                $this->db->join('groups e', "b.group_id = e.id");
                $this->db->join('privilege_groups f', "b.group_id = f.id and f.username = '$username' and f.status = '1'", "left");
                $this->db->where('a.deleted', 0);
                $this->db->where('a.period_start =', $period_start);
                $this->db->where('a.period_end =', $period_end);
                $this->db->like('b.id', $filter_employee);
                $this->db->like('b.division_id', $filter_division);
                $this->db->like('b.departement_id', $filter_departement);
                $this->db->like('b.departement_sub_id', $filter_departement_sub);
                $this->db->like('b.group_id', $filter_group);
                $this->db->group_by(array("c.id", "d.id"));
                $this->db->order_by('c.name', 'ASC');
                $this->db->order_by('SUM(a.net_income)', 'ASC');
                $this->db->limit(50, ($i * 50));
                //Get Data Array
                $records = $this->db->get()->result_array();

                $html .= '  <center>
                            <div style="float: left; font-size: 12px; text-align: left;">
                                <table style="width: 100%;">
                                    <tr>
                                        <td width="50" style="font-size: 12px; vertical-align: top; text-align: center; vertical-align:jus margin-right:10px;">
                                            <img src="' . $config->favicon . '" width="30">
                                        </td>
                                        <td style="font-size: 14px; text-align: left; margin:2px;">
                                            <b>' . $config->name . '</b><br>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div style="float: right; font-size: 12px; text-align: right;">
                                Print Date ' . date("d M Y H:m:s") . ' <br>
                                Print By ' . $this->session->username . ' <br>
                                Page ' . $hal . '/' . $page . '
                            </div>
                        </center>
                        <br><br><br>
                        <center>
                            <h3 style="margin:0;">REPORT RECAP SALARY SLIP</h3>
                            <p style="margin:0;">Period <b>' . date("d F Y", strtotime($filter_from)) . '</b> to <b>' . date("d F Y", strtotime($filter_to)) . '</b></p>
                            <br>
                        </center>
                        
                        <table id="customers" border="1">
                            <tr>
                                <th width="20" style="text-align:center;">No</th>
                                <th style="text-align:center;">Departement</th>
                                <th style="text-align:center;">Departement Sub</th>
                                <th style="text-align:center;">Employee</th>
                            </tr>';
                $totalEmployee = 0;
                $totalIncome = 0;
                foreach ($records as $data) {
                    $html .= '  <tr>
                                    <td style="text-align:center;">' . $no . '</td>
                                    <td>' . $data['departement_name'] . '</td>
                                    <td>' . $data['departement_sub_name'] . '</td>
                                    <td style="text-align:right;">' . number_format($data['employee']) . '</td>
                                </tr>';
                    $totalEmployee += $data['employee'];
                    $totalIncome += $data['income'];
                    $no++;
                }

                $hal++;
                if (($i + 1) != $page) {
                    $html .= '<div style="page-break-after:always;"></div>';
                }
            }

            $html .= '</body></html>';
            echo $html;
        }
    }
}
