<?php
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

    public function getData()
    {
        if ($this->input->get()) {
            $filter_from = $this->input->get('filter_from');
            $filter_to = $this->input->get('filter_to');
            $filter_division = $this->input->get('filter_division');
            $filter_departement = $this->input->get('filter_departement');
            $filter_departement_sub = $this->input->get('filter_departement_sub');
            $filter_employee = $this->input->get('filter_employee');

            $period_start = date("Y-m", strtotime($filter_from));
            $period_end = date("Y-m", strtotime($filter_to));
            $query = $this->db->query("SELECT a.*, b.bank_branch, b.bank_no, coalesce(c.amount_plus_correction, 0) as amount_plus_correction, coalesce(d.amount_plus_salary, 0) as amount_plus_salary, b.email FROM payrolls a
                JOIN employees b ON a.employee_id = b.id
                LEFT JOIN (SELECT employee_id, `trans_date`, SUM(amount) as amount_plus_correction FROM corrections WHERE trans_date between '$filter_from' and '$filter_to' and correction_type = 'PLUS' and correction_name = 'CORRECTION' GROUP BY employee_id) c ON a.employee_id = c.employee_id
                LEFT JOIN (SELECT employee_id, `trans_date`, SUM(amount) as amount_plus_salary FROM corrections WHERE trans_date between '$filter_from' and '$filter_to' and correction_type = 'PLUS' and correction_name = 'SALARY' GROUP BY employee_id) d ON a.employee_id = d.employee_id
                WHERE a.period_start = '$period_start'
                AND a.period_end = '$period_end'
                AND b.division_id LIKE '%$filter_division%'
                AND b.departement_id LIKE '%$filter_departement%'
                AND b.departement_sub_id LIKE '%$filter_departement_sub%'
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
        $r_bpjs_emp = $this->crud->reads('bpjs', ['status' => 0]);
        $arr_bpjs_emp_amount_total = 0;
        $html_bpjs_emp = "";
        foreach ($r_bpjs_emp as $bpjs_emp_data) {
            $arr_bpjs_emp_amount_total += round(($record['salary'] * $bpjs_emp_data->employee) / 100);
            if ($bpjs_emp_data->employee > 0) {
                $html_bpjs_emp .= ' <tr>
                                                <td style="text-align:left;">' . $bpjs_emp_data->name . '</td>
                                                <td style="text-align:right;"><b>' . number_format(round(($record['salary'] * $bpjs_emp_data->employee) / 100)) . '</b></td>
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

        $email = $this->emails->emailSalarySlip($record['email'], $record['name'], base64_encode($html));
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

            $period_start = date("Y-m", strtotime($filter_from));
            $period_end = date("Y-m", strtotime($filter_to));

            $query = $this->db->query("SELECT a.*, b.bank_branch, b.bank_no, c.amount_plus_correction, d.amount_plus_salary FROM payrolls a
                JOIN employees b ON a.employee_id = b.id
                LEFT JOIN (SELECT employee_id, `trans_date`, SUM(amount) as amount_plus_correction FROM corrections WHERE trans_date between '$filter_from' and '$filter_to' and correction_type = 'PLUS' and correction_name = 'CORRECTION' GROUP BY employee_id) c ON a.employee_id = c.employee_id
                LEFT JOIN (SELECT employee_id, `trans_date`, SUM(amount) as amount_plus_salary FROM corrections WHERE trans_date between '$filter_from' and '$filter_to' and correction_type = 'PLUS' and correction_name = 'SALARY' GROUP BY employee_id) d ON a.employee_id = d.employee_id
                WHERE a.period_start = '$period_start'
                AND a.period_end = '$period_end'
                AND b.division_id LIKE '%$filter_division%'
                AND b.departement_id LIKE '%$filter_departement%'
                AND b.departement_sub_id LIKE '%$filter_departement_sub%'
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
                $r_bpjs_emp = $this->crud->reads('bpjs', ['status' => 0]);
                $arr_bpjs_emp_amount_total = 0;
                $html_bpjs_emp = "";
                foreach ($r_bpjs_emp as $bpjs_emp_data) {
                    $arr_bpjs_emp_amount_total += round(($record['salary'] * $bpjs_emp_data->employee) / 100);
                    if ($bpjs_emp_data->employee > 0) {
                        $html_bpjs_emp .= ' <tr>
                                                <td style="text-align:left;">' . $bpjs_emp_data->name . '</td>
                                                <td style="text-align:right;"><b>' . number_format(round(($record['salary'] * $bpjs_emp_data->employee) / 100)) . '</b></td>
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
}
