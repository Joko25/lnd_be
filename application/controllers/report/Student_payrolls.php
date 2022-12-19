<?php
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
        
        if($dateout == ""){
            $end = date_create(); // waktu sekarang
        }else{
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
            header("Content-Disposition: attachment; filename=leave_$format.xls");
        }

        if ($this->input->get()) {
            $filter_from = $this->input->get('filter_from');
            $filter_to = $this->input->get('filter_to');
            $filter_group = $this->input->get('filter_group');
            $filter_source = $this->input->get('filter_source');

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

            $no = 1;
            foreach ($records as $record) {
                $allowance_1 = $this->crud->read("allowance_students", [], ["group_id" => $record['group_id'], "months" => "1"]);
                $allowance_2 = $this->crud->read("allowance_students", [], ["group_id" => $record['group_id'], "months" => "2"]);
                $allowance_3 = $this->crud->read("allowance_students", [], ["group_id" => $record['group_id'], "months" => "3"]);

                $html .= '<div style="page-break-after:always;">
                <center>
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
                    <h3 style="margin:0;">REPORT PAYROLL ' . $record['group_name'] . ' ' . $record['source_name'] . '</h3>
                    <p style="margin:0;">Period ' . $filter_from . ' to ' . $filter_to . '</p>
                    <br><br>
                </center>
                <br>
        
                <table id="customers" border="1">
                    <tr>
                        <th rowspan="2" width="20">No</th>
                        <th rowspan="2">Employee ID</th>
                        <th rowspan="2">Employee Name</th>
                        <th rowspan="2">Join Date</th>
                        <th rowspan="2">Fit of Service</th>
                        <th rowspan="2">Division</th>
                        <th rowspan="2">Departement</th>
                        <th rowspan="2">Attandance</th>
                        <th colspan="3" style="text-align:center;">Months</th>
                        <th colspan="3" style="text-align:center;">Allowence Amount Type</th>
                        <th rowspan="2">Allowence</th>
                        <th rowspan="2">Intern Fee</th>
                        <th rowspan="2">Boarding Fee</th>
                        <th colspan="2" style="text-align:center;">Correction</th>
                        <th rowspan="2">Cash Carry</th>
                        <th rowspan="2">Total</th>
                    </tr>
                    <tr>
                        <th width="50">1</th>
                        <th width="50">2</th>
                        <th width="50">3</th>
                        <th width="50">1 (' . @number_format($allowance_1->amount) . ')</th>
                        <th width="50">2 (' . @number_format($allowance_2->amount) . ')</th>
                        <th width="50">3 (' . @number_format($allowance_3->amount) . ')</th>
                        <th width="50">PLUS</th>
                        <th width="50">MINUS</th>
                    </tr>';

                $no = 1;
                $this->db->select("a.id, a.number, a.name, a.date_sign, b.name as division_name, c.name as departement_name, e.amount, e.boarding_fee");
                $this->db->from('employees a');
                $this->db->join('divisions b', 'a.division_id = b.id');
                $this->db->join('departements c', 'a.departement_id = c.id');
                $this->db->join('groups d', 'a.group_id = d.id');
                $this->db->join('sources e', 'a.source_id = e.id');
                $this->db->where('a.group_id', $record['group_id']);
                $this->db->where('a.source_id', $record['source_id']);
                $this->db->group_by('a.number');
                $this->db->order_by('a.name', 'asc');
                $employees = $this->db->get()->result_array();

                foreach ($employees as $employee) {
                    $employee_id = $employee['id'];
                    $employee_number = $employee['number'];
                    $attandance = $this->crud->query("SELECT COUNT(`number`) as att FROM attandances WHERE date_in BETWEEN '$filter_from' and '$filter_to' and `number` = '$employee_number' GROUP BY `number`");
                    $correctionPlus = $this->crud->query("SELECT SUM(amount) as total FROM corrections WHERE trans_date BETWEEN '$filter_from' and '$filter_to' and employee_id = '$employee_id' and correction_type = 'PLUS' GROUP BY employee_id");
                    $correctionMinus = $this->crud->query("SELECT SUM(amount) as total FROM corrections WHERE trans_date BETWEEN '$filter_from' and '$filter_to' and employee_id = '$employee_id' and correction_type = 'MINUS' GROUP BY employee_id");
                    $cashCarries = $this->crud->query("SELECT SUM(amount) as total FROM cash_carries WHERE trans_date BETWEEN '$filter_from' and '$filter_to' and employee_id = '$employee_id' GROUP BY employee_id");

                    $date_sign = date_create($employee['date_sign']);
                    $payroll_end = date_create($filter_to);
                    $interval = date_diff($date_sign, $payroll_end);
                    $internship = $employee['amount'];
                    $boarding = $employee['boarding_fee'];

                    if ($interval->m >= 3) {
                        $month_3 = @$attandance[0]->att;
                        $month_2 = "0";
                        $month_1 = "0";
                    } elseif ($interval->m == 2) {
                        $month_3 = "0";
                        $month_2 = @$attandance[0]->att;
                        $month_1 = "0";
                    } else {
                        $month_1 = @$attandance[0]->att;
                        $month_2 = "0";
                        $month_3 = "0";
                    }

                    if ($interval->m >= 3) {
                        $payroll_3 = @$attandance[0]->att;
                        $payroll_2 = "0";
                        $payroll_1 = "0";
                        $allowence = (@$attandance[0]->att * @$allowance_3->amount);
                    } elseif ($interval->m == 2) {
                        $payroll_3 = "0";
                        $payroll_2 = @$attandance[0]->att;
                        $payroll_1 = "0";
                        $allowence = (@$attandance[0]->att * @$allowance_2->amount);
                    } else {
                        $payroll_3 = "0";
                        $payroll_2 = "0";
                        $payroll_1 = @$attandance[0]->att;
                        $allowence = (@$attandance[0]->att * @$allowance_1->amount);
                    }


                    $html .= '  <tr>
                                    <td>' . $no . '</td>
                                    <td class="str">' . $employee_number . '</td>
                                    <td>' . $employee['name'] . '</td>
                                    <td>' . date("d F Y", strtotime($employee['date_sign'])) . '</td>
                                    <td>' . $this->readService($employee['date_sign'], $filter_to) . '</td>
                                    <td>' . $employee['division_name'] . '</td>
                                    <td>' . $employee['departement_name'] . '</td>
                                    <td>' . @$attandance[0]->att . '</td>
                                    <td>' . $month_1 . '</td>
                                    <td>' . $month_2 . '</td>
                                    <td>' . $month_3 . '</td>
                                    <td>' . $payroll_1 . '</td>
                                    <td>' . $payroll_2 . '</td>
                                    <td>' . $payroll_3 . '</td>
                                    <td>' . number_format($allowence) . '</td>
                                    <td>' . number_format($internship * @$attandance[0]->att) . '</td>
                                    <td>' . number_format($boarding) . '</td>
                                    <td>' . number_format(@$correctionPlus[0]->total) . '</td>
                                    <td>' . number_format(@$correctionMinus[0]->total) . '</td>
                                    <td>' . number_format(@$cashCarries[0]->total) . '</td>
                                    <td>' . @number_format(($allowence + ($correctionPlus[0]->total - $correctionMinus[0]->total) + $cashCarries[0]->total + ($internship * @$attandance[0]->att) + $boarding)) . '</td>
                                </tr>';
                    $no++;
                }

                $html .= '</table></div><br><br>';
            }

            $html .= '</body></html>';
            echo $html;
        }
    }
}
