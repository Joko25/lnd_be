<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');

class Summary_payrolls extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('crud');
    }

    //HALAMAN UTAMA
    public function index()
    {
        if (empty($this->session->username)) {
            redirect('error_session');
        } elseif ($this->checkuserAccess($this->id_menu()) > 0) {
            $data['button'] = $this->getbutton($this->id_menu());

            $this->load->view('template/header', $data);
            $this->load->view('report/summary_payrolls');
        } else {
            redirect('error_access');
        }
    }

    //GET DATATABLES
    public function datatables()
    {
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
        $this->db->join('privilege_groups f', "b.group_id = f.id", "left");
        $this->db->where('a.deleted', 0);
        $this->db->where('a.status', 0);
        $this->db->where('a.period_start =', $period_start);
        $this->db->where('a.period_end =', $period_end);
        $this->db->where('f.username =', $username);
        $this->db->where('f.status =', "1");
        $this->db->like('b.id', $filter_employee);
        $this->db->like('b.division_id', $filter_division);
        $this->db->like('b.departement_id', $filter_departement);
        $this->db->like('b.departement_sub_id', $filter_departement_sub);
        $this->db->like('b.group_id', $filter_group);
        $this->db->group_by(array("c.id", "d.id", "e.id"));
        $this->db->order_by('c.name', 'ASC');
        $this->db->order_by('SUM(a.net_income)', 'ASC');
        //Get Data Array
        $records = $this->db->get()->result_array();

        echo json_encode($records);
    }

    public function print($option = "")
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

            $query = $this->db->query("SELECT a.*, b.bank_branch, b.bank_no, b.national_id FROM payrolls a
                JOIN employees b ON a.employee_id = b.id
                LEFT JOIN privilege_groups c ON b.group_id = c.group_id and c.username = '$username' and c.status = '1'
                WHERE a.period_start = '$period_start' and a.period_end = '$period_end'
                AND b.division_id LIKE '%$filter_division%'
                AND b.departement_id LIKE '%$filter_departement%'
                AND b.departement_sub_id LIKE '%$filter_departement_sub%'
                AND a.employee_id LIKE '%$filter_employee%'
                AND c.group_id LIKE '%$filter_group%'
                ORDER BY a.`name` ASC");
            $payrolls = $query->result_array();

            //Config Page
            $rows = 20;
            $page = ceil(count($payrolls) / $rows);

            $division = $this->crud->read("divisions", [], ["id" => $filter_division]);
            $departement = $this->crud->read("departements", [], ["id" => $filter_departement]);
            $departement_sub = $this->crud->read("departement_subs", [], ["id" => $filter_departement_sub]);
            $group = $this->crud->read("groups", [], ["id" => $filter_group]);

            if (empty($division->id)) {
                $division_name = "ALL";
            } else {
                $division_name = $division->name;
            }

            if (empty($departement->id)) {
                $departement_name = "ALL";
            } else {
                $departement_name = $departement->name;
            }

            if (empty($departement_sub->id)) {
                $departement_sub_name = "ALL";
            } else {
                $departement_sub_name = $departement_sub->name;
            }

            if (empty($group->id)) {
                $group_name = "ALL";
            } else {
                $group_name = $group->name;
            }

            //Config
            $this->db->select('*');
            $this->db->from('config');
            $config = $this->db->get()->row();

            $html = '<html><head><title>Print Data</title></head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 10px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style>
                    <body>';
            $no = 1;
            $hal = 1;
            $subtotal = 0;
            for ($i = 0; $i < $page; $i++) {
                $html .= '  <center>
                                <div style="float: left; font-size: 12px; text-align: left;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td width="50" style="font-size: 12px; vertical-align: top; text-align: center; vertical-align:jus margin-right:10px;">
                                                <img src="' . $config->favicon . '" width="30">
                                            </td>
                                            <td style="font-size: 14px; text-align: left; margin:2px;">
                                                <b>' . $config->name . '</b><br>
                                                <small>' . $config->description . '</small>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div style="float: right; font-size: 12px; text-align: right;">
                                    Print Date ' . date("d M Y H:i:s") . ' <br>
                                    Print By ' . $this->session->username . ' <br>
                                    page ' . $hal . '/' . $page . '
                                </div>
                            </center><br><br><br>
                            <center>
                                <h3 style="margin:0;">REPORT SUMMARY PAYROLL BY DEPARTEMENT & GROUP</h3>
                            </center><br>
                            <table style="font-size:10px;">
                                <tr>
                                    <td width="100">Period</td>
                                    <td width="20">:</td>
                                    <td width="300"><b>' . $filter_from . ' to ' . $filter_to . '</b></td>
                                </tr>
                                <tr>
                                    <td width="100">Plant</td>
                                    <td width="20">:</td>
                                    <td width="300"><b>' . $division_name . '</b></td>
                                </tr>
                                <tr>
                                    <td>Departement</td>
                                    <td>:</td>
                                    <td><b>' . $departement_name . '</b></td>
                                </tr>
                                <tr>
                                    <td>Departement Sub</td>
                                    <td>:</td>
                                    <td><b>' . $departement_sub_name . '</b></td>
                                </tr>
                                <tr>
                                    <td>Group</td>
                                    <td>:</td>
                                    <td><b>' . $group_name . '</b></td>
                                </tr>
                            </table>
                            <br>
                            <table id="customers" border="1">
                                <tr>
                                    <th rowspan="2" width="20">No</th>
                                    <th rowspan="2" style="text-align:center;">Employee ID</th>
                                    <th rowspan="2" style="text-align:center;">National ID</th>
                                    <th rowspan="2" style="text-align:center;">Employee Name</th>
                                    <th rowspan="2" style="text-align:center;">WD</th>
                                    <th rowspan="2" style="text-align:center;">Salary</th>
                                    <th colspan="2" style="text-align:center;">Allowance</th>
                                    <th rowspan="2" style="text-align:center;">Correction <br> Plus</th>
                                    <th rowspan="2" style="text-align:center;">Total <br> Income</th>
                                    <th colspan="4" style="text-align:center;">Deduction</th>
                                    <th rowspan="2" style="text-align:center;">Loan</th>
                                    <th rowspan="2" style="text-align:center;">Correction <br> Minus</th>
                                    <th rowspan="2" style="text-align:center;">PPH21</th>
                                    <th rowspan="2" style="text-align:center;">Total<br>Deduction</th>
                                    <th rowspan="2" style="text-align:center;">Nett Income</th>
                                </tr>
                                <tr>
                                    <th style="text-align:center;">Allowence</th>
                                    <th style="text-align:center;">BPJS</th>
                                    <th style="text-align:center;">BPJS</th>
                                    <th style="text-align:center;">Deduction</th>
                                    <th style="text-align:center;">ABS (DAY)</th>
                                    <th style="text-align:center;">ABS (AMT)</th>
                                </tr>';

                $offset = ($i * 20);
                $query = $this->db->query("SELECT a.*, b.bank_branch, b.bank_no, b.national_id FROM payrolls a
                    JOIN employees b ON a.employee_id = b.id
                    LEFT JOIN privilege_groups c ON b.group_id = c.group_id and c.username = '$username' and c.status = '1'
                    WHERE a.period_start = '$period_start' and a.period_end = '$period_end'
                    AND b.division_id LIKE '%$filter_division%'
                    AND b.departement_id LIKE '%$filter_departement%'
                    AND b.departement_sub_id LIKE '%$filter_departement_sub%'
                    AND a.employee_id LIKE '%$filter_employee%'
                    AND c.group_id LIKE '%$filter_group%'
                    ORDER BY a.`name` ASC LIMIT 20 OFFSET $offset");
                $records = $query->result_array();

                $no = 1;
                $total = 0;
                foreach ($records as $record) {

                    $total_allowence = 0;
                    foreach (json_decode($record['allowence'], true) as $allowence => $val_allowence) {
                        $total_allowence += (int)$val_allowence;
                    }

                    $total_deduction = 0;
                    foreach (json_decode($record['deduction'], true) as $deduction => $val_deduction) {
                        $total_deduction += (int)$val_deduction;
                    }

                    $total_ip = 0;
                    foreach (json_decode($record['deduction_number'], true) as $ip => $val_ip) {
                        $total_ip += (int)$val_ip;
                    }

                    $total_ip_amount = 0;
                    foreach (json_decode($record['deduction_amount'], true) as $ip_amount => $val_ip_amount) {
                        $total_ip_amount += (int)$val_ip_amount;
                    }

                    $html .= '<tr>
                                    <td>' . $no . '</td>
                                    <td style="mso-number-format:\@;">' . $record['number'] . '</td>
                                    <td style="mso-number-format:\@;">' . $record['national_id'] . '</td>
                                    <td>' . $record['name'] . '</td>
                                    <td>' . $record['attandance_wd'] . '</td>
                                    <td style="text-align:right;">' . number_format($record['salary']) . '</td>
                                    <td style="text-align:right;">' . number_format(($total_allowence)) . '</td>
                                    <td style="text-align:right;">' . number_format(($record['bpjs_company_total'])) . '</td>
                                    <td style="text-align:right;">' . number_format(($record['correction_plus'])) . '</td>
                                    <td style="text-align:right;">' . number_format(($record['salary'] + $total_allowence + $record['correction_plus'] + $record['bpjs_company_total'])) . '</td>
                                    <td style="text-align:right;">' . number_format(($record['bpjs_employee_total'] + $record['bpjs_company_total'])) . '</td>
                                    <td style="text-align:right;">' . number_format($total_deduction) . '</td>
                                    <td style="text-align:right;">' . number_format($record['deduction_absence'] + $total_ip) . '</td>
                                    <td style="text-align:right;">' . number_format($record['deduction_absence_amount'] + $total_ip_amount) . '</td>
                                    <td style="text-align:right;">' . number_format(($record['loan_cooperative'] + $record['loan_bank'] + $record['loan_other'])) . '</td>
                                    <td style="text-align:right;">' . number_format($record['correction_minus']) . '</td>
                                    <td style="text-align:right;">' . number_format($record['pph']) . '</td>
                                    <td style="text-align:right;">' . number_format($record['deduction_absence_amount'] + $record['bpjs_employee_total'] + $record['bpjs_company_total'] + $record['loan_cooperative'] + $record['loan_bank'] + $record['loan_other'] + $record['correction_minus'] + $total_ip_amount + $total_deduction) . '</td>
                                    <td style="text-align:right;">' . number_format(($record['net_income'])) . '</td>
                                </tr>';
                    $total += $record['net_income'];
                    $no++;
                }

                $html .= '  <tr>
                                    <th style="text-align:right;" colspan="18">GRAND TOTAL</th>
                                    <th style="text-align:right;">' . number_format($total) . '</th>
                                </tr>';
                $html .= '</table>
                                <br>
                                <center>
                                    <table id="customers" style="width:70%;">
                                        <tr>
                                            <th rowspan="2" width="100" style="text-align:center;">APPROVED</th>
                                            <th colspan="2" style="text-align:center;">CONFIRM OK</th>
                                            <th rowspan="2" width="100" style="text-align:center;">PREPARED</th>
                                        </tr>
                                        <tr>
                                            <th width="100" style="text-align:center;">COST CONTROL</th>
                                            <th width="100" style="text-align:center;">HRD</th>
                                        </tr>
                                        <tr>
                                            <td style="height:60px;"></td>
                                            <td style="height:60px;"></td>
                                            <td style="height:60px;"></td>
                                            <td style="height:60px;"></td>
                                        </tr>
                                        <tr>
                                            <th style="text-align:center;">BOD</th>
                                            <th style="text-align:center;">ASSISTANT MANAGER</th>
                                            <th style="text-align:center;">ASSISTANT MANAGER</th>
                                            <th style="text-align:center;">PAYROLL STAFF</th>
                                        </tr>
                                    </table>
                                </center><br><br><br>';
                $hal++;
                if (($i + 1) != $page) {
                    $html .= '<div style="page-break-after:always;"></div>';
                }
            }
            $html .= '</body></html>';
            echo $html;
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
            $this->db->where('a.status', 0);
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
                $this->db->where('a.status', 0);
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
                $this->db->limit(40, ($i * 40));
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
                            <h3 style="margin:0;">REPORT SUMMARY PAYROLL</h3>
                            <p style="margin:0;">Period <b>' . date("d F Y", strtotime($filter_from)) . '</b> to <b>' . date("d F Y", strtotime($filter_to)) . '</b></p>
                            <br>
                        </center>
                        
                        <table id="customers" border="1">
                            <tr>
                                <th width="20" style="text-align:center;">No</th>
                                <th style="text-align:center;">Departement</th>
                                <th style="text-align:center;">Departement Sub</th>
                                <th style="text-align:center;">Group</th>
                                <th style="text-align:center;">Employee</th>
                                <th style="text-align:center;">Pay Amount</th>
                            </tr>';
                $totalEmployee = 0;
                $totalIncome = 0;
                foreach ($records as $data) {
                    $html .= '  <tr>
                                    <td style="text-align:center;">' . $no . '</td>
                                    <td>' . $data['departement_name'] . '</td>
                                    <td>' . $data['departement_sub_name'] . '</td>
                                    <td>' . $data['group_name'] . '</td>
                                    <td style="text-align:right;">' . number_format($data['employee']) . '</td>
                                    <td style="text-align:right;">' . number_format($data['income']) . '</td>
                                </tr>';
                    $totalEmployee += $data['employee'];
                    $totalIncome += $data['income'];
                    $no++;
                }

                $html .= '  <tr>
                                <th style="text-align:right;" colspan="4">GRAND TOTAL</th>
                                <th style="text-align:right;">' . number_format($totalEmployee) . '</th>
                                <th style="text-align:right;">' . number_format($totalIncome) . '</th>
                            </tr>
                            </table>
                            <br>
                            <center>
                                <table id="customers" style="width:70%;">
                                    <tr>
                                        <th rowspan="2" width="100" style="text-align:center;">APPROVED</th>
                                        <th colspan="2" style="text-align:center;">CONFIRM OK</th>
                                        <th rowspan="2" width="100" style="text-align:center;">PREPARED</th>
                                    </tr>
                                    <tr>
                                        <th width="100" style="text-align:center;">COST CONTROL</th>
                                        <th width="100" style="text-align:center;">HRD</th>
                                    </tr>
                                    <tr>
                                        <td style="height:60px;"></td>
                                        <td style="height:60px;"></td>
                                        <td style="height:60px;"></td>
                                        <td style="height:60px;"></td>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">BOD</th>
                                        <th style="text-align:center;">ASSISTANT MANAGER</th>
                                        <th style="text-align:center;">ASSISTANT MANAGER</th>
                                        <th style="text-align:center;">PAYROLL STAFF</th>
                                    </tr>
                                </table>
                            </center>';

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
