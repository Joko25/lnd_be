<?php
date_default_timezone_set("Asia/Bangkok");
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
            $username = $this->session->username;
            
            $data['button'] = $this->getbutton($this->id_menu());
            $data['user'] = $this->crud->read("users", [], ["username" => $username]);

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

                //Ambil Employee berdasarkan departement dan divisionnnya
                $this->db->select("
                    a.id as employee_id, 
                    a.number, a.name, 
                    a.division_id, 
                    a.departement_id, 
                    a.departement_sub_id, 
                    c.name as division_name, 
                    d.name as departement_name, 
                    e.name as departement_sub_name, 
                    g.name as shift_name,
                    h.days");
                $this->db->from('employees a');
                $this->db->join('divisions c', 'a.division_id = c.id');
                $this->db->join('departements d', 'a.departement_id = d.id');
                $this->db->join('departement_subs e', 'a.departement_sub_id = e.id');
                $this->db->join('shift_employees f', 'a.id = f.employee_id');
                $this->db->join('shifts g', 'f.shift_id = g.id');
                $this->db->join('shift_details h', 'h.shift_id = g.id');
                $this->db->where('a.status', '0');
                $this->db->where('a.division_id', $record['division_id']);
                $this->db->where('a.departement_id', $record['departement_id']);
                $this->db->like('a.departement_sub_id', $filter_departement_sub);
                $this->db->like('a.id', $filter_employee);
                $this->db->group_by('a.number');
                $this->db->order_by('e.name, a.name', 'asc');
                $employees = $this->db->get()->result_array();

                $attandance_absece = 0;
                $attandance_total = 0;
                $attandance_days = 0;
                $attadance_libur = 0;
                foreach ($employees as $data) {

                    $employee_id = $data['employee_id'];
                    $start = strtotime($filter_from);
                    $finish = strtotime($filter_to);
                    $working = 0;
                    $absence = 0;
                    $libur = 0;
                    $weekday = [];

                    for ($i = $start; $i <= $finish; $i += (60 * 60 * 24)) {
                        $working_date = date('Y-m-d', $i);

                        //Calendars
                        $this->db->select('description');
                        $this->db->from('calendars');
                        $this->db->where('trans_date', $working_date);
                        $holiday = $this->db->get()->row();

                        //Attandance
                        $this->db->select("*");
                        $this->db->from('attandances');
                        $this->db->where("date_in = '$working_date'");
                        $this->db->where('number', $data['number']);
                        $attandance = $this->db->get()->row();

                        //Change Days
                        $this->db->select("*");
                        $this->db->from('change_days');
                        $this->db->where('employee_id', $data['employee_id']);
                        $this->db->where('(start='.$working_date.' or end='.$working_date.')');
                        $change_day = $this->db->get()->row();
                        
                        //Shifts
                        $tolerance_hour_min = date("H:i:s", strtotime('-2 Hour', strtotime(@$attandance->time_in)));
                        $tolerance_hour_plus = date("H:i:s", strtotime('+2 Hour', strtotime(@$attandance->time_in)));
                        $this->db->select("d.start, d.end, d.days, d.working, d.tolerance, c.name, d.name as shift_name");
                        $this->db->from('shift_employees b');
                        $this->db->join('shifts c', 'c.id = b.shift_id');
                        $this->db->join('shift_details d', 'd.shift_id = c.id');
                        $this->db->where('b.employee_id', $employee_id);
                        $this->db->where("d.start >=  '$tolerance_hour_min' and d.start <= '$tolerance_hour_plus'");
                        $shift = $this->db->get()->row();

                        //Permits
                        $queryPermit = $this->db->query("SELECT SUM(a.duration) as amount, b.absence
                            FROM permits a
                            JOIN permit_types b ON a.permit_type_id = b.id
                            WHERE (a.approved_to = '' or a.approved_to is null) and a.employee_id = '$data[employee_id]' and a.permit_date = '$working_date'
                            GROUP BY a.employee_id");
                        $rowPermit = $queryPermit->row();

                        //Jika hari kerja nya adalah 5 hari
                        if (@$shift->days == "5") {
                            if (date('w', $i) !== '0' && date('w', $i) !== '6') {
                                $weekday[] = date('Y-m-d', $i);

                                if (!empty($holiday->description)) {
                                    $working += 0;
                                    $absence += 0;
                                    $libur += 1;
                                } else {
                                    if (@$rowPermit->absence == "YES") {
                                        $working += 1;
                                        $absence += 0;
                                    } elseif (@$rowPermit->absence == "NO") {
                                        $working += 0;
                                        $absence += 0;
                                    } elseif (@$change_day->start != null) {
                                        $working += 1;
                                        $absence += 0;
                                    } elseif (@$attandance->time_in == null && @$attandance->time_out == null) {
                                        $working += 0;
                                        $absence += 1;
                                    } else {
                                        $working += 1;
                                        $absence += 0;
                                    }

                                    $libur += 0;
                                }
                            } else {
                                $weekend[] = date('Y-m-d', $i);
                                $working += 0;
                                $absence += 0;
                                $libur += 0;
                            }
                        }else{
                            if (date('w', $i) !== '0') {
                                $weekday[] = date('Y-m-d', $i);

                                if (!empty($holiday->description)) {
                                    $working += 0;
                                    $absence += 0;
                                    $libur += 1;
                                } else {
                                    if (@$rowPermit->absence == "YES") {
                                        $working += 1;
                                        $absence += 0;
                                    } elseif (@$rowPermit->absence == "NO") {
                                        $working += 0;
                                        $absence += 0;
                                    } elseif (@$change_day->start != null) {
                                        $working += 1;
                                        $absence += 0;
                                    } elseif (@$attandance->time_in == null && @$attandance->time_out == null) {
                                        $working += 0;
                                        $absence += 1;
                                    } else {
                                        $working += 1;
                                        $absence += 0;
                                    }

                                    $libur += 0;
                                }
                            }else {
                                $weekend[] = date('Y-m-d', $i);
                                $working += 0;
                                $absence += 0;
                                $libur += 0;
                            }
                        }
                    }

                    //Permit
                    $q_permit = $this->db->query("SELECT b.name, COUNT(a.duration) as permit
                            FROM permit_types b
                            LEFT JOIN permits a ON a.permit_type_id = b.id and a.employee_id = '$data[employee_id]' and a.permit_date >= '$filter_from' and a.permit_date <= '$filter_to'
                            WHERE (a.approved_to = '' or a.approved_to is null)
                            GROUP BY b.id ORDER BY b.name asc");
                    $r_permit = $q_permit->result_array();

                    $html .= '<tr>
                                <td>' . $no . '</td>
                                <td>' . $data['departement_sub_name'] . '</td>
                                <td style="mso-number-format:\@;">' . $data['number'] . '</td>
                                <td>' . $data['name'] . '</td>
                                <td>' . $data['shift_name'] . '</td>';
                    $total_permit = 0;
                    foreach ($r_permit as $data_permit) {
                        $html .= '<td style="text-align:center;">' . $data_permit['permit'] . '</td>';
                        $total_permit += $data_permit['permit'];
                    }

                    $html .= '  <td style="text-align:center;">' . $absence . '</td>
                                <td style="text-align:center;">' . $working . '</td>
                                <td style="text-align:center;">' . (count($weekday) - $libur) . '</td>
                            </tr>';

                    $attandance_absece += $absence;
                    $attandance_total += $working;
                    $attadance_libur += $libur;
                    $attandance_days += count($weekday);
                    $no++;
                }

                //Total Permit Final
                $this->db->select("b.name, COUNT(a.duration) as permit");
                $this->db->from("permit_types b");
                $this->db->join(
                    "(SELECT a.employee_id, a.permit_type_id, a.permit_date, a.duration, b.departement_id, b.departement_sub_id FROM permits a JOIN employees b ON a.employee_id = b.id WHERE (a.approved_to = '' or a.approved_to is null)) a",
                    "a.permit_type_id = b.id and a.permit_date >= '$filter_from' and a.permit_date <= '$filter_to' and a.employee_id LIKE '%$filter_employee%' and a.departement_id LIKE '%$filter_departement%' and a.departement_sub_id LIKE '%$filter_departement_sub%'",
                    "left"
                );
                $this->db->group_by("b.id");
                $this->db->order_by("b.name", "ASC");
                $rt_permit = $this->db->get()->result_array();

                //Total Permit Final MP
                $q_permit_mp = $this->db->query("SELECT a.name, COUNT(b.employee_id) as employee FROM permit_types a 
                LEFT JOIN (SELECT a.employee_id, a.permit_type_id, a.permit_date, a.duration, b.departement_id, b.departement_sub_id FROM permits a JOIN employees b ON a.employee_id = b.id WHERE (a.approved_to = '' or a.approved_to is null) 
                and a.permit_date BETWEEN '$filter_from' and '$filter_to' and a.employee_id LIKE '%$filter_employee%' and b.departement_id LIKE '%$filter_departement%' and b.departement_sub_id LIKE '%$filter_departement_sub%'
                GROUP BY a.employee_id, a.permit_type_id) b ON a.id = b.permit_type_id
                GROUP BY a.id ORDER BY a.name ASC");
                $rt_permit_mp = $q_permit_mp->result_array();

                //Grand Total Permit
                $html .= '  <tr><th colspan="5" style="text-align:right;">Grand Total Permit</th>';
                foreach ($rt_permit as $row) {
                    $html .= '<td style="text-align:center;">' . $row['permit'] . '</td>';
                }
                $html .= '  <th style="text-align:center;">' . $attandance_absece . '</th>
                            <th style="text-align:center;">' . $attandance_total . '</th>
                            <th style="text-align:center;">' . ($attandance_days - $attadance_libur) . '</th>
                        </tr>';

                //Grand Total MP
                $html .= '  <tr><th colspan="5" style="text-align:right;">Grand Total MP</th>';
                foreach ($rt_permit_mp as $row_mp) {
                    $html .= '<td style="text-align:center;">' . $row_mp['employee'] . '</td>';
                }
                $html .= '  <th style="text-align:center;"></th>
                            <th style="text-align:center;"></th>
                            <th style="text-align:center;"></th>
                        </tr>';

                $html .= '</table></div><br><br>';
            }

            $html .= '</body></html>';
            echo $html;
        }
    }
}
