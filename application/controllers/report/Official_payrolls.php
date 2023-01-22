<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');

class Official_payrolls extends CI_Controller
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
            $this->load->view('report/official_payrolls');
        } else {
            redirect('error_access');
        }
    }

    public function print($option = "")
    {
        if ($option == "excel") {
            $format  = date("Ymd");
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=official_payrolls_$format.xls");
        }

        if ($this->input->get()) {
            $filter_from = $this->input->get('filter_from');
            $filter_to = $this->input->get('filter_to');
            $filter_division = $this->input->get('filter_division');
            $filter_departement = $this->input->get('filter_departement');

            $period_start = date("Y-m", strtotime($filter_from));
            $period_end = date("Y-m", strtotime($filter_to));

            $query = $this->db->query("SELECT a.id, a.name, 
                    SUM(c.net_income) as total_payroll, 
                    COUNT(c.number) as total_employee
                FROM departements a
                LEFT JOIN employees b ON a.id = b.departement_id
                LEFT JOIN payrolls c ON b.number = c.number
                WHERE c.period_start = '$period_start' and c.period_end = '$period_end'
                AND a.division_id LIKE '%$filter_division%'
                AND a.id LIKE '%$filter_departement%'
                GROUP BY a.id
                ORDER BY a.`name` ASC");
            $records = $query->result_array();

            //Config
            $this->db->select('*');
            $this->db->from('config');
            $config = $this->db->get()->row();

            $html = '<html><head><title>Print Data</title></head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 10px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style>
                    <style> .str{ mso-number-format:\@; } </style>
                    <body>
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
                        <h3 style="margin:0;">Official Payroll Report</h3>
                        <p style="margin:0;">Period ' . $filter_from . ' to ' . $filter_to . '</p>
                    </center>
                    <br>';

            $html .= '  <table id="customers" border="1">
                            <tr>
                                <th width="20">No</th>
                                <th style="text-align:center;" width="200">Departement</th>
                                <th style="text-align:center;" width="80">MP</th>
                                <th style="text-align:center;" width="100">Total Payroll</th>
                                <th style="text-align:center;" width="80">MP</th>
                                <th style="text-align:center;" width="100">Cash</th>
                                <th style="text-align:center;" width="80">MP</th>
                                <th style="text-align:center;" width="100">Bank Syariah Indonesia</th>
                                <th style="text-align:center;" width="80">MP</th>
                                <th style="text-align:center;" width="100">Bank Mandiri</th>
                                <th style="text-align:center;" width="80">Bal MP</th>
                                <th style="text-align:center;" width="100">Bal Payroll</th>
                            </tr>';
            $no = 1;
            $mp_payroll = 0;
            $mp_cash = 0;
            $mp_bsi = 0;
            $mp_mandiri = 0;
            $total_payroll = 0;
            $total_cash = 0;
            $total_bsi = 0;
            $total_mandiri = 0;
            foreach ($records as $record) {
                $departement_id = $record['id'];
                $qcash = $this->db->query("SELECT a.name, 
                    SUM(c.net_income) as total_payroll, 
                    COUNT(c.number) as total_employee
                FROM departements a
                LEFT JOIN employees b ON a.id = b.departement_id
                LEFT JOIN payrolls c ON b.number = c.number
                WHERE c.period_start = '$period_start' and c.period_end = '$period_end'
                AND a.id = '$departement_id'
                AND b.bank_name = '-'
                GROUP BY a.id
                ORDER BY a.`name` ASC");
                $rcash = $qcash->row();

                $qbsm = $this->db->query("SELECT a.name, 
                    SUM(c.net_income) as total_payroll, 
                    COUNT(c.number) as total_employee
                FROM departements a
                LEFT JOIN employees b ON a.id = b.departement_id
                LEFT JOIN payrolls c ON b.number = c.number
                WHERE c.period_start = '$period_start' and c.period_end = '$period_end'
                AND a.id = '$departement_id'
                AND b.bank_name = 'Bank Syariah Indonesia'
                GROUP BY a.id
                ORDER BY a.`name` ASC");
                $rbsm = $qbsm->row();

                $qmandiri = $this->db->query("SELECT a.name, 
                    SUM(c.net_income) as total_payroll, 
                    COUNT(c.number) as total_employee
                FROM departements a
                LEFT JOIN employees b ON a.id = b.departement_id
                LEFT JOIN payrolls c ON b.number = c.number
                WHERE c.period_start = '$period_start' and c.period_end = '$period_end'
                AND a.id = '$departement_id'
                AND b.bank_name = 'Bank Mandiri'
                GROUP BY a.id
                ORDER BY a.`name` ASC");
                $rmandiri = $qmandiri->row();

                $html .= '<tr>
                            <td>' . $no . '</td>
                            <td>' . $record['name'] . '</td>
                            <td style="text-align:center;">' . number_format($record['total_employee']) . '</td>
                            <td style="text-align:right;">' . number_format($record['total_payroll']) . '</td>
                            <td style="text-align:center;">' . number_format(@$rcash->total_employee) . '</td>
                            <td style="text-align:right;">' . number_format(@$rcash->total_payroll) . '</td>
                            <td style="text-align:center;">' . number_format(@$rbsm->total_employee) . '</td>
                            <td style="text-align:right;">' . number_format(@$rbsm->total_payroll) . '</td>
                            <td style="text-align:center;">' . number_format(@$rmandiri->total_employee) . '</td>
                            <td style="text-align:right;">' . number_format(@$rmandiri->total_payroll) . '</td>
                            <td style="text-align:center;">' . number_format(($record['total_employee'] - (@$rcash->total_employee + @$rbsm->total_employee + @$rmandiri->total_employee))) . '</td>
                            <td style="text-align:right;">' . number_format(($record['total_payroll'] - (@$rcash->total_payroll + @$rbsm->total_payroll + @$rmandiri->total_payroll))) . '</td>
                        </tr>';
                $mp_payroll += $record['total_employee'];
                $mp_cash += @$rcash->total_employee;
                $mp_bsi += @$rbsm->total_employee;
                $mp_mandiri += @$rmandiri->total_employee;
                $total_payroll += $record['total_payroll'];
                $total_cash += @$rcash->total_payroll;
                $total_bsi += @$rbsm->total_payroll;
                $total_mandiri += @$rmandiri->total_payroll;
                $no++;
            }

            $period_start_bf = date('Y-m', strtotime('-1 month', strtotime($filter_from)));
            $period_end_bf = date('Y-m', strtotime('-1 month', strtotime($filter_to)));

            $qbftotal = $this->db->query("SELECT a.name, 
                    SUM(c.net_income) as total_payroll, 
                    COUNT(c.number) as total_employee
                FROM departements a
                LEFT JOIN employees b ON a.id = b.departement_id
                LEFT JOIN payrolls c ON b.number = c.number
                WHERE c.period_start = '$period_start_bf' and c.period_end = '$period_end_bf'
                AND a.division_id LIKE '%$filter_division%'
                AND a.id LIKE '%$filter_departement%'
                GROUP BY a.id
                ORDER BY a.`name` ASC");
            $rbftotal = $qbftotal->row();

            $qbfcash = $this->db->query("SELECT a.name, 
                    SUM(c.net_income) as total_payroll, 
                    COUNT(c.number) as total_employee
                FROM departements a
                LEFT JOIN employees b ON a.id = b.departement_id
                LEFT JOIN payrolls c ON b.number = c.number
                WHERE c.period_start = '$period_start_bf' and c.period_end = '$period_end_bf'
                AND b.bank_name = 'Bank Syariah Indonesia'
                AND a.division_id LIKE '%$filter_division%'
                AND a.id LIKE '%$filter_departement%'
                GROUP BY a.id
                ORDER BY a.`name` ASC");
            $rbfcash = $qbfcash->row();

            $qbfbsi = $this->db->query("SELECT a.name, 
                    SUM(c.net_income) as total_payroll, 
                    COUNT(c.number) as total_employee
                FROM departements a
                LEFT JOIN employees b ON a.id = b.departement_id
                LEFT JOIN payrolls c ON b.number = c.number
                WHERE c.period_start = '$period_start_bf' and c.period_end = '$period_end_bf'
                AND b.bank_name = '-'
                AND a.division_id LIKE '%$filter_division%'
                AND a.id LIKE '%$filter_departement%'
                GROUP BY a.id
                ORDER BY a.`name` ASC");
            $rbfbsi = $qbfbsi->row();

            $qbfmandiri = $this->db->query("SELECT a.name, 
                    SUM(c.net_income) as total_payroll, 
                    COUNT(c.number) as total_employee
                FROM departements a
                LEFT JOIN employees b ON a.id = b.departement_id
                LEFT JOIN payrolls c ON b.number = c.number
                WHERE c.period_start = '$period_start_bf' and c.period_end = '$period_end_bf'
                AND b.bank_name = 'Bank Mandiri'
                AND a.division_id LIKE '%$filter_division%'
                AND a.id LIKE '%$filter_departement%'
                GROUP BY a.id
                ORDER BY a.`name` ASC");
            $rbfmandiri = $qbfmandiri->row();

            $html .= '<tr style="background: #BEFFAF;">
                        <td colspan="2" style="text-align:right;"><b>TOTAL PAID (NOW)</b></td>
                        <td style="text-align:center;">' . number_format($mp_payroll) . '</td>
                        <td style="text-align:right;">' . number_format($total_payroll) . '</td>
                        <td style="text-align:center;">' . number_format($mp_cash) . '</td>
                        <td style="text-align:right;">' . number_format($total_cash) . '</td>
                        <td style="text-align:center;">' . number_format($mp_bsi) . '</td>
                        <td style="text-align:right;">' . number_format($total_bsi) . '</td>
                        <td style="text-align:center;">' . number_format($mp_mandiri) . '</td>
                        <td style="text-align:right;">' . number_format($total_mandiri) . '</td>
                        <td style="text-align:center;">0</td>
                        <td style="text-align:right;">0</td>
                    </tr>
                    <tr style="background: #FFAFAF;">
                        <td colspan="2" style="text-align:right;"><b>TOTAL PAID (BEFORE)</b></td>
                        <td style="text-align:center;">' . number_format(@$rbftotal->total_employee) . '</td>
                        <td style="text-align:right;">' . number_format(@$rbftotal->total_payroll) . '</td>
                        <td style="text-align:center;">' . number_format(@$rbfcash->total_employee) . '</td>
                        <td style="text-align:right;">' . number_format(@$rbfcash->total_payroll) . '</td>
                        <td style="text-align:center;">' . number_format(@$rbfbsi->total_employee) . '</td>
                        <td style="text-align:right;">' . number_format(@$rbfbsi->total_payroll) . '</td>
                        <td style="text-align:center;">' . number_format(@$rbfmandiri->total_employee) . '</td>
                        <td style="text-align:right;">' . number_format(@$rbfmandiri->total_payroll) . '</td>
                        <td style="text-align:center;">0</td>
                        <td style="text-align:right;">0</td>
                    </tr>
                    <tr style="background: #FFF1AF;">
                        <td colspan="2" style="text-align:right;"><b>UP/DOWN</b></td>
                        <td style="text-align:center;">' . number_format(($mp_payroll - @$rbftotal->total_employee)) . '</td>
                        <td style="text-align:right;">' . number_format(($total_payroll - @$rbftotal->total_payroll)) . '</td>
                        <td style="text-align:center;">' . number_format(($mp_cash - @$rbfcash->total_employee)) . '</td>
                        <td style="text-align:right;">' . number_format(($total_cash - @$rbfcash->total_payroll)) . '</td>
                        <td style="text-align:center;">' . number_format(($mp_bsi - @$rbfbsi->total_employee)) . '</td>
                        <td style="text-align:right;">' . number_format(($total_bsi - @$rbfbsi->total_payroll)) . '</td>
                        <td style="text-align:center;">' . number_format(($mp_mandiri - @$rbfmandiri->total_employee)) . '</td>
                        <td style="text-align:right;">' . number_format(($total_mandiri - @$rbfmandiri->total_payroll)) . '</td>
                        <td style="text-align:center;">0</td>
                        <td style="text-align:right;">0</td>
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
            </center>';
        }

        $html .= '</body></html>';
        echo $html;
    }
}
