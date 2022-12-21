<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Attandance_summary extends CI_Controller
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
            $this->load->view('report/attandance_summary');
        } else {
            redirect('error_access');
        }
    }

    public function print($option = "")
    {
        if ($option == "excel") {
            $format  = date("Ymd");
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=report_attandance_summary_$format.xls");
        }

        if ($this->input->get()) {
            $filter_from = $this->input->get('filter_from');
            $filter_to = $this->input->get('filter_to');
            $filter_division = $this->input->get('filter_division');
            $filter_departement = $this->input->get('filter_departement');
            $filter_departement_sub = $this->input->get('filter_departement_sub');
            $filter_employee = $this->input->get('filter_employee');

            $html = '<html><head><title>Print Data</title></head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 10px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style>
            <style> .str{ mso-number-format:\@; } </style>
            <body>';
            $this->db->select("a.id as employee_id, a.number, a.name, a.division_id, a.departement_id, a.departement_sub_id, c.name as division_name, d.name as departement_name");
            $this->db->from('employees a');
            $this->db->join('divisions c', 'a.division_id = c.id');
            $this->db->join('departements d', 'a.departement_id = d.id');
            $this->db->where('a.deleted', 0);
            $this->db->where('a.status', 0);
            $this->db->like('a.division_id', $filter_division);
            $this->db->like('a.departement_id', $filter_departement);
            $this->db->like('a.departement_sub_id', $filter_departement_sub);
            $this->db->like('a.id', $filter_employee);
            $this->db->group_by('a.departement_id');
            $this->db->order_by('d.name', 'asc');
            $records = $this->db->get()->result_array();

            //Config
            $this->db->select('*');
            $this->db->from('config');
            $config = $this->db->get()->row();

            $start = strtotime($filter_from);
            $finish = strtotime($filter_to);
            $no = 1;
            foreach ($records as $record) {
                //Permit
                $permit_types = $this->crud->reads("permit_types", [], [], "", "name", "asc");

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
                    <h3 style="margin:0;">Report Attandance Summary</h3>
                    <p style="margin:0;">Period ' . $filter_from . ' to ' . $filter_to . '</p>
                    <br><br>
                </center>
                <table style="font-size: 11px;">
                    <tr>
                        <td width="100">Division</td>
                        <td width="10">:</td>
                        <td><b>' . $record['division_name'] . '</b></td>
                    </tr>
                    <tr>
                        <td>Departement</td>
                        <td>:</td>
                        <td><b>' . $record['departement_name'] . '</b></td>
                    </tr>
                </table>
                <br>

            <table id="customers" border="1">
                <tr>
                    <th width="20" rowspan="2">No</th>
                    <th style="text-align:center;" rowspan="2">Departement Sub</th>
                    <th style="text-align:center;" rowspan="2">Employee ID</th>
                    <th style="text-align:center;" rowspan="2">Employee Name</th>
                    <th style="text-align:center;" rowspan="2">Shift</th>
                    <th style="text-align:center;" colspan="' . count($permit_types) . '">Permit</th>
                    <th style="text-align:center;" rowspan="2">Absence</th>
                    <th style="text-align:center;" rowspan="2">Working Days</th>
                    <th style="text-align:center;" rowspan="2">Total Days</th>
                </tr>
                <tr>';
                foreach ($permit_types as $permit_type) {
                    $html .= '<th style="text-align:center;">' . $permit_type->number . '</th>';
                }
                $html .= '</tr>';

                $this->db->select("a.id as employee_id, 
                    a.number, a.name, 
                    a.division_id, 
                    a.departement_id, 
                    a.departement_sub_id, 
                    c.name as division_name, 
                    d.name as departement_name, 
                    e.name as departement_sub_name, 
                    g.name as shift_name,
                    b.attandance_total,
                    h.days");
                $this->db->from('employees a');
                $this->db->join("(SELECT number, COUNT(date_in) as attandance_total FROM attandances WHERE date_in BETWEEN '$filter_from' and '$filter_to' GROUP BY number) b", 'a.number = b.number', 'left');
                $this->db->join('divisions c', 'a.division_id = c.id');
                $this->db->join('departements d', 'a.departement_id = d.id');
                $this->db->join('departement_subs e', 'a.departement_sub_id = e.id');
                $this->db->join('shift_employees f', 'a.id = f.employee_id');
                $this->db->join('shifts g', 'f.shift_id = g.id');
                $this->db->join('shift_details h', 'h.shift_id = g.id');
                $this->db->where('a.division_id', $record['division_id']);
                $this->db->where('a.departement_id', $record['departement_id']);
                $this->db->like('a.departement_sub_id', $filter_departement_sub);
                $this->db->like('a.id', $filter_employee);
                $this->db->group_by('a.number');
                $this->db->order_by('e.name, a.name', 'asc');
                $employees = $this->db->get()->result_array();

                foreach ($employees as $data) {
                    $total_days = 0;
                    $holiday = 0;
                    $weekend = 0;
                    $working_date = "";
                    for ($i = $start; $i <= $finish; $i += (60 * 60 * 24)) {
                        $working_date = date('Y-m-d', $i);

                        if (@$data['days'] == "5") {
                            //sabtu dan minggu libur
                            if (date('w', $i) !== '0' && date('w', $i) !== '6') {
                                $weekend += 0;
                            } else {
                                $weekend += 1;
                            }
                        } else {
                            //sabtu doang libur
                            if (date('w', $i) !== '0') {
                                $weekend += 0;
                            } else {
                                $weekend += 1;
                            }
                        }

                        $this->db->select('description');
                        $this->db->from('calendars');
                        $this->db->where('trans_date', $working_date);
                        $holidays = $this->db->get()->row();

                        if (@$holidays->description == null) {
                            $holiday += 0;
                        } else {
                            $holiday += 1;
                        }

                        $total_days++;
                    }
                    //Permit
                    $q_permit = $this->db->query("SELECT b.name, COUNT(a.duration) as permit
                            FROM permit_types b
                            LEFT JOIN permits a ON a.permit_type_id = b.id and a.employee_id = '$data[employee_id]' and a.permit_date >= '$filter_from' and a.permit_date <= '$filter_to'
                            GROUP BY b.id ORDER BY b.name asc");
                    $r_permit = $q_permit->result_array();

                    $html .= '<tr>
                                <td>' . $no . '</td>
                                <td>' . $data['departement_sub_name'] . '</td>
                                <td class="str">' . $data['number'] . '</td>
                                <td>' . $data['name'] . '</td>
                                <td>' . $data['shift_name'] . '</td>';
                    $total_permit = 0;
                    foreach ($r_permit as $data_permit) {
                        $html .= '<td style="text-align:center;">' . $data_permit['permit'] . '</td>';
                        $total_permit += $data_permit['permit'];
                    }

                    $absence = ($total_days - $data['attandance_total'] - $total_permit - $holiday - $weekend);
                    if ($absence >= 0) {
                        $totalAbsence = $absence;
                    } else {
                        $totalAbsence = 0;
                    }
                    $html .= '  <td style="text-align:center;">' . $totalAbsence . '</td>
                                <td style="text-align:center;">' . $data['attandance_total'] . '</td>
                                <td style="text-align:center;">' . $total_days . '</td>
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
