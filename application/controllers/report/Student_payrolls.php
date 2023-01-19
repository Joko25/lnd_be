<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');

class Student_payrolls extends CI_Controller
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
            $this->load->view('report/student_payrolls');
        } else {
            redirect('error_access');
        }
    }

    public function readService($dateSign = "", $dateout = "")
    {
        if ($dateSign == "") {
            $date = $this->input->post('date');
        } else {
            $date = $dateSign;
        }

        if ($dateout == "") {
            $end = date_create(); // waktu sekarang
        } else {
            $end = date_create($dateout);
        }

        $start  = date_create($date);
        $diff  = date_diff($start, $end);
        $d = $diff->d . ' Days ';

        if ($diff->y == 0) {
            $y = '';
        } else {
            $y = $diff->y . ' Years, ';
        }

        if ($diff->m == 0) {
            $m = '';
        } else {
            $m = $diff->m . ' Month, ';
        }

        if ($dateSign == "") {
            echo $y . $m . $d;
        } else {
            return $y . $m . $d;
        }
    }

    public function print($option = "")
    {
        if ($option == "excel") {
            $format  = date("Ymd");
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=payroll_report_$format.xls");
        }

        if ($this->input->get()) {
            $filter_from = $this->input->get('filter_from');
            $filter_to = $this->input->get('filter_to');
            $filter_group = $this->input->get('filter_group');
            $filter_source = $this->input->get('filter_source');

            $username = $this->session->username;

            $period_start = date("Y-m", strtotime($filter_from));
            $period_end = date("Y-m", strtotime($filter_to));

            $html = '<html><head><title>Print Data</title></head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 10px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style>
            <style> .str{ mso-number-format:\@; } </style>
            <body>';
            $this->db->select('a.id as group_id, a.name as group_name, b.id as source_id, b.name as source_name');
            $this->db->from('groups a');
            $this->db->join('sources b', 'a.id = b.group_id');
            $this->db->where('a.id', $filter_group);
            $this->db->like('b.id', $filter_source);
            $this->db->group_by('b.id');
            $this->db->order_by('a.name', 'ASC');
            $this->db->order_by('b.name', 'ASC');
            $records = $this->db->get()->result_array();

            //Config
            $this->db->select('*');
            $this->db->from('config');
            $config = $this->db->get()->row();

            if (@$records[0]['group_name'] == "MAGANG") {
                foreach ($records as $record) {
                    $query = $this->db->query("SELECT a.*, b.bank_branch, b.bank_no, b.national_id FROM payrolls a
                        JOIN employees b ON a.employee_id = b.id
                        LEFT JOIN privilege_groups c ON b.group_id = c.group_id and c.username = '$username' and c.status = '1'
                        WHERE a.period_start = '$period_start' and a.period_end = '$period_end'
                        AND b.status = 0
                        AND b.group_id = '$record[group_id]'
                        AND b.source_id = '$record[source_id]'
                        ORDER BY a.`name` ASC");
                    $recordEmployees = $query->result_array();

                    //Config Page
                    $rows = 20;
                    $page = ceil(count($recordEmployees) / $rows);

                    $html .= '<div style="page-break-after:always;">';
                    $no = 1;
                    $hal = 1;
                    for ($i = 0; $i < $page; $i++) {
                        $offset = ($i * 20);
                        $query = $this->db->query("SELECT a.*, b.bank_branch, b.bank_no, b.national_id FROM payrolls a
                            JOIN employees b ON a.employee_id = b.id
                            LEFT JOIN privilege_groups c ON b.group_id = c.group_id and c.username = '$username' and c.status = '1'
                            WHERE a.period_start = '$period_start' and a.period_end = '$period_end'
                            AND b.status = 0
                            AND b.group_id = '$record[group_id]'
                            AND b.source_id = '$record[source_id]'
                            ORDER BY a.`name` ASC LIMIT 20 OFFSET $offset");
                        $employees = $query->result_array();

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
                                            Print By ' . $this->session->username . '  
                                        </div>
                                    </center><br><br><br>
                        <center>
                            <h3 style="margin:0;">PAYROLL REPORT ' . $record['group_name'] . ' ' . $record['source_name'] . '</h3>
                            <p style="margin:0;">Period <b>' . date("d F Y", strtotime($filter_from)) . '</b> to <b>' . date("d F Y", strtotime($filter_to)) . '</b></p>
                            <br>
                        </center>
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

                        $total = 0;
                        foreach ($employees as $employee) {

                            $total_allowence = 0;
                            foreach (json_decode($employee['allowence'], true) as $allowence => $val_allowence) {
                                $total_allowence += (int)$val_allowence;
                            }

                            $total_deduction = 0;
                            foreach (json_decode($employee['deduction'], true) as $deduction => $val_deduction) {
                                $total_deduction += (int)$val_deduction;
                            }

                            $html .= '<tr>
                                        <td>' . $no . '</td>
                                        <td style="mso-number-format:\@;">' . $employee['number'] . '</td>
                                        <td style="mso-number-format:\@;">' . $employee['national_id'] . '</td>
                                        <td>' . $employee['name'] . '</td>
                                        <td>' . $employee['attandance_wd'] . '</td>
                                        <td style="text-align:right;">' . number_format($employee['salary']) . '</td>
                                        <td style="text-align:right;">' . number_format(($total_allowence)) . '</td>
                                        <td style="text-align:right;">' . number_format(($employee['bpjs_company_total'])) . '</td>
                                        <td style="text-align:right;">' . number_format(($employee['correction_plus'])) . '</td>
                                        <td style="text-align:right;">' . number_format(($employee['salary'] + $total_allowence + $employee['correction_plus'] + $employee['bpjs_company_total'])) . '</td>
                                        <td style="text-align:right;">' . number_format(($employee['bpjs_employee_total'] + $employee['bpjs_company_total'])) . '</td>
                                        <td style="text-align:right;">' . number_format($total_deduction) . '</td>
                                        <td style="text-align:right;">' . number_format($employee['deduction_absence']) . '</td>
                                        <td style="text-align:right;">' . number_format($employee['deduction_absence_amount']) . '</td>
                                        <td style="text-align:right;">' . number_format(($employee['loan_cooperative'] + $employee['loan_bank'] + $employee['loan_other'])) . '</td>
                                        <td style="text-align:right;">' . number_format($employee['correction_minus']) . '</td>
                                        <td style="text-align:right;">' . number_format($employee['pph']) . '</td>
                                        <td style="text-align:right;">' . number_format($total_deduction + $employee['deduction_absence_amount'] + $employee['bpjs_employee_total'] + $employee['bpjs_company_total'] + $employee['loan_cooperative'] + $employee['loan_bank'] + $employee['loan_other'] + $employee['correction_minus']) . '</td>
                                        <td style="text-align:right;">' . number_format(($employee['net_income'])) . '</td>
                                    </tr>';
                            $total += $employee['net_income'];
                            $no++;
                        }

                        $html .= '  <tr>
                                        <th style="text-align:right;" colspan="18">GRAND TOTAL</th>
                                        <th style="text-align:right;">' . number_format($total) . '</th>
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
                        $html .= '</table><br><br>';

                        $hal++;
                        if (($i + 1) != $page) {
                            $html .= '<div style="page-break-after:always;"></div>';
                        }
                    }

                    $html .= "</div>";
                }
            } else {
                $start = strtotime($filter_from);
                $finish = strtotime($filter_to);

                foreach ($records as $record) {
                    $allowance_1 = $this->crud->read("allowance_students", [], ["group_id" => $record['group_id'], "months" => "1"]);
                    $allowance_2 = $this->crud->read("allowance_students", [], ["group_id" => $record['group_id'], "months" => "2"]);
                    $allowance_3 = $this->crud->read("allowance_students", [], ["group_id" => $record['group_id'], "months" => "3"]);

                    $this->db->select("a.id, a.number, a.name, a.date_sign, b.name as division_name, c.name as departement_name, e.amount, e.boarding_fee");
                    $this->db->from('employees a');
                    $this->db->join('divisions b', 'a.division_id = b.id');
                    $this->db->join('departements c', 'a.departement_id = c.id');
                    $this->db->join('groups d', 'a.group_id = d.id');
                    $this->db->join('sources e', 'a.source_id = e.id');
                    $this->db->where('a.status', 0);
                    $this->db->where('a.group_id', $record['group_id']);
                    $this->db->where('a.source_id', $record['source_id']);
                    $this->db->group_by('a.number');
                    $this->db->order_by('a.name', 'asc');
                    $recordEmployees = $this->db->get()->result_array();

                    //Config Page
                    $rows = 20;
                    $page = ceil(count($recordEmployees) / $rows);

                    $html .= '<div style="page-break-after:always;">';
                    $no = 1;
                    $hal = 1;
                    for ($i = 0; $i < $page; $i++) {
                        $offset = ($i * 20);
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
                                            Print By ' . $this->session->username . '  
                                        </div>
                                    </center><br><br><br>
                                    <center>
                                        <h3 style="margin:0;">PAYROLL REPORT ' . $record['group_name'] . ' ' . $record['source_name'] . '</h3>
                                        <p style="margin:0;">Period <b>' . date("d F Y", strtotime($filter_from)) . '</b> to <b>' . date("d F Y", strtotime($filter_to)) . '</b></p>
                                        <br>
                                    </center>
                                    <table id="customers">
                                        <tr>
                                            <th rowspan="2" width="20" style="text-align:center;">No</th>
                                            <th rowspan="2" style="text-align:center;">Employee ID</th>
                                            <th rowspan="2" style="text-align:center;">Employee Name</th>
                                            <th rowspan="2" style="text-align:center;">Join Date</th>
                                            <th rowspan="2" style="text-align:center;">Fit of Service</th>
                                            <th rowspan="2" style="text-align:center;">Departement</th>
                                            <th rowspan="2" width="50" style="text-align:center;">Attandance</th>
                                            <th colspan="3" style="text-align:center;">Allowence Amount Type</th>
                                            <th rowspan="2" style="text-align:center;">Allowence</th>
                                            <th rowspan="2" style="text-align:center;">Intern<br>Fee</th>
                                            <th rowspan="2" style="text-align:center;">Boarding<br>Fee</th>
                                            <th colspan="2" style="text-align:center;">Correction</th>
                                            <th rowspan="2" style="text-align:center;">Total</th>
                                        </tr>
                                        <tr>
                                            <th width="50" style="text-align:center;">Month I <br>(' . @number_format($allowance_1->amount) . ')</th>
                                            <th width="50" style="text-align:center;">Month II <br>(' . @number_format($allowance_2->amount) . ')</th>
                                            <th width="50" style="text-align:center;">Month III <br>(' . @number_format($allowance_3->amount) . ')</th>
                                            <th width="50" style="text-align:center;">PLUS</th>
                                            <th width="50" style="text-align:center;">MINUS</th>
                                        </tr>';

                        $this->db->select("a.id, a.number, a.name, a.date_sign, b.name as division_name, c.name as departement_name, e.amount, e.boarding_fee");
                        $this->db->from('employees a');
                        $this->db->join('divisions b', 'a.division_id = b.id');
                        $this->db->join('departements c', 'a.departement_id = c.id');
                        $this->db->join('groups d', 'a.group_id = d.id');
                        $this->db->join('sources e', 'a.source_id = e.id');
                        $this->db->where('a.status', 0);
                        $this->db->where('a.group_id', $record['group_id']);
                        $this->db->where('a.source_id', $record['source_id']);
                        $this->db->group_by('a.number');
                        $this->db->order_by('a.name', 'asc');
                        $this->db->limit(20, ($i * 20));
                        $employees = $this->db->get()->result_array();
                        $total = 0;
                        foreach ($employees as $employee) {
                            $employee_id = $employee['id'];
                            $employee_number = $employee['number'];

                            $correctionPlus = $this->crud->query("SELECT SUM(amount) as total FROM corrections WHERE trans_date BETWEEN '$filter_from' and '$filter_to' and employee_id = '$employee_id' and correction_type = 'PLUS' GROUP BY employee_id");
                            $correctionMinus = $this->crud->query("SELECT SUM(amount) as total FROM corrections WHERE trans_date BETWEEN '$filter_from' and '$filter_to' and employee_id = '$employee_id' and correction_type = 'MINUS' GROUP BY employee_id");
                            //$cashCarries = $this->crud->query("SELECT SUM(amount) as total FROM cash_carries WHERE trans_date BETWEEN '$filter_from' and '$filter_to' and employee_id = '$employee_id' GROUP BY employee_id");

                            $date_sign = date_create($employee['date_sign']);
                            // $payroll_end = date_create($filter_to);
                            // $interval = date_diff($date_sign, $payroll_end);
                            $internship = $employee['amount'];

                            $payroll_3 = 0;
                            $payroll_2 = 0;
                            $payroll_1 = 0;
                            $attandance_count = 0;
                            $working_date = "";
                            $tidakabsen = 0;
                            for ($z = $start; $z <= $finish; $z += (60 * 60 * 24)) {
                                $working_date = date('Y-m-d', $z);

                                $this->db->select("employee_id, SUM(duration) as duration");
                                $this->db->from('permits');
                                $this->db->where('status', 0);
                                $this->db->where('permit_type_id', '20221207000001');
                                $this->db->where('employee_id', $employee_id);
                                $this->db->where('permit_date', $working_date);
                                $this->db->group_by('employee_id');
                                $permit = $this->db->get()->row();

                                $tidakabsen += @$permit->duration;

                                $attandance = $this->crud->read("attandances", [], ["date_in" => $working_date, "number" => $employee_number]);
                                if ($attandance) {
                                    $day = 1;
                                } else {
                                    $day = 0;
                                }

                                $payroll_end = date_create($working_date);
                                $interval = date_diff($date_sign, $payroll_end);

                                if ($interval->m >= 3) {
                                    $payroll_3 += $day;
                                    $payroll_2 += 0;
                                    $payroll_1 += 0;
                                } elseif ($interval->m == 2) {
                                    $payroll_3 += 0;
                                    $payroll_2 += $day;
                                    $payroll_1 += 0;
                                } else {
                                    $payroll_3 += 0;
                                    $payroll_2 += 0;
                                    $payroll_1 += $day;
                                }

                                $attandance_count += @$day;
                            }

                            $allowence3 = ($payroll_3 * @$allowance_3->amount);
                            $allowence2 = ($payroll_2 * @$allowance_2->amount);
                            $allowence1 = ($payroll_1 * @$allowance_1->amount);
                            $allowence = ($allowence1 + $allowence2 + $allowence3);

                            if ($attandance_count == 0) {
                                $total_income = 0;
                                $intern_fee = 0;
                                $boarding = 0;
                            } else {
                                $intern_fee = ($internship * @$attandance_count);
                                $boarding = $employee['boarding_fee'];
                                $total_income = @($allowence + ($correctionPlus[0]->total - $correctionMinus[0]->total) + ($internship * @$attandance_count) + $boarding);
                            }

                            $html .= '  <tr>
                                            <td style="text-align:center;">' . $no . '</td>
                                            <td class="str">' . $employee_number . '</td>
                                            <td>' . $employee['name'] . '</td>
                                            <td>' . date("d F Y", strtotime($employee['date_sign'])) . '</td>
                                            <td>' . $this->readService($employee['date_sign'], $filter_to) . '</td>
                                            <td>' . $employee['departement_name'] . '</td>
                                            <td style="text-align:center;">' . (@$attandance_count + $tidakabsen) . '</td>
                                            <td style="text-align:center;">' . $payroll_1 . '</td>
                                            <td style="text-align:center;">' . $payroll_2 . '</td>
                                            <td style="text-align:center;">' . $payroll_3 . '</td>
                                            <td style="text-align:right;">' . number_format($allowence) . '</td>
                                            <td style="text-align:right;">' . number_format($intern_fee) . '</td>
                                            <td style="text-align:right;">' . number_format($boarding) . '</td>
                                            <td style="text-align:right;">' . number_format(@$correctionPlus[0]->total) . '</td>
                                            <td style="text-align:right;">' . number_format(@$correctionMinus[0]->total) . '</td>
                                            <td style="text-align:right;">' . @number_format($total_income) . '</td>
                                        </tr>';
                            $total += $total_income;
                            $no++;
                        }

                        $html .= '  <tr>
                                        <th style="text-align:right;" colspan="15">GRAND TOTAL</th>
                                        <th style="text-align:right;">' . number_format($total) . '</th>
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
                    $html .= '</div><br><br>';
                }
            }

            $html .= '</body></html>';
            echo $html;
        }
    }
}
