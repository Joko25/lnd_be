<?php
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
                        <h3 style="margin:0;">Report Payroll Summary</h3>
                        <p style="margin:0;">Period ' . $filter_from . ' to ' . $filter_to . '</p>
                    </center>
                    <br>';
            $html .= '  <table id="customers" border="1">
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
                            <th colspan="3" style="text-align:center;">Deduction</th>
                            <th rowspan="2" style="text-align:center;">Loan</th>
                            <th rowspan="2" style="text-align:center;">Correction <br> Minus</th>
                            <th rowspan="2" style="text-align:center;">PPH21</th>
                            <th rowspan="2" style="text-align:center;">Total Reduction</th>
                            <th rowspan="2" style="text-align:center;">Nett Income</th>
                        </tr>
                        <tr>
                            <th style="text-align:center;">Allowence</th>
                            <th style="text-align:center;">BPJS</th>
                            <th style="text-align:center;">BPJS</th>
                            <th style="text-align:center;">ABSENCE (DAY)</th>
                            <th style="text-align:center;">ABSENCE (AMT)</th>
                        </tr>';
            $no = 1;
            foreach ($records as $record) {
                
                $total_allowence = 0;
                foreach (json_decode($record['allowence'], true) as $allowence => $val_allowence) {
                    $total_allowence += (int)$val_allowence;
                }

                $total_deduction = 0;
                foreach (json_decode($record['deduction'], true) as $deduction => $val_deduction) {
                    $total_deduction += (int)$val_deduction;
                }

                $html .= '<tr>
                            <td>' . $no . '</td>
                            <td class="str">' . $record['number'] . '</td>
                            <td class="str">' . $record['national_id'] . '</td>
                            <td>' . $record['name'] . '</td>
                            <td>' . $record['working_day'] . '</td>
                            <td style="text-align:right;">' . number_format($record['salary']) . '</td>
                            <td style="text-align:right;">' . number_format(($total_allowence)) . '</td>
                            <td style="text-align:right;">' . number_format(($record['bpjs_company_total'])) . '</td>
                            <td style="text-align:right;">' . number_format(($record['correction_plus'])) . '</td>
                            <td style="text-align:right;">' . number_format(($record['salary'] + $total_allowence + $record['correction_plus'] + $record['bpjs_company_total'])) . '</td>
                            <td style="text-align:right;">' . number_format(($record['bpjs_employee_total'])) . '</td>
                            <td style="text-align:right;">' . number_format($record['deduction_absence']) . '</td>
                            <td style="text-align:right;">' . number_format($record['deduction_absence_amount']) . '</td>
                            <td style="text-align:right;">' . number_format(($record['loan_cooperative'] + $record['loan_bank'] + $record['loan_other'])) . '</td>
                            <td style="text-align:right;">' . number_format($record['correction_minus']) . '</td>
                            <td style="text-align:right;">' . number_format($record['pph']) . '</td>
                            <td style="text-align:right;">' . number_format($record['deduction_absence_amount'] + $record['bpjs_employee_total'] + $record['loan_cooperative'] + $record['loan_bank'] + $record['loan_other'] + $record['correction_minus']) . '</td>
                            <td style="text-align:right;">' . number_format(($record['net_income'])) . '</td>
                        </tr>';
                $no++;
            }


            $html .= '</table>';
        }

        $html .= '</body></html>';
        echo $html;
    }
}
