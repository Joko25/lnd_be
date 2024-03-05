<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');

class Attandances extends CI_Controller
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
            $this->load->view('report/attandances');
        } else {
            redirect('error_access');
        }
    }

    public function reads()
    {
        if ($this->input->post()) {
            $filter_from = $this->input->post('filter_from');
            $filter_to = $this->input->post('filter_to');
            $filter_division = $this->input->post('filter_division');
            $filter_departement = $this->input->post('filter_departement');
            $filter_departement_sub = $this->input->post('filter_departement_sub');
            $filter_group = $this->input->post('filter_group');
            $filter_employee = $this->input->post('filter_employee');
            $username = $this->session->username;

            $this->db->select("a.id, a.number, a.name");
            $this->db->from('employees a');
            $this->db->join('divisions c', 'a.division_id = c.id');
            $this->db->join('departements d', 'a.departement_id = d.id');
            $this->db->join('departement_subs e', 'a.departement_sub_id = e.id');
            $this->db->join('privilege_groups i', "a.group_id = i.group_id and i.username = '$username'");
            $this->db->where('a.deleted', 0);
            $this->db->where('a.status', 0);
            $this->db->like('a.division_id', $filter_division);
            $this->db->like('a.departement_id', $filter_departement);
            $this->db->like('a.departement_sub_id', $filter_departement_sub);
            $this->db->like('a.group_id', $filter_group);
            $this->db->like('a.id', $filter_employee);
            $this->db->group_by('a.id');
            $this->db->order_by('d.name', 'asc');
            $this->db->order_by('e.name', 'asc');
            $this->db->order_by('a.name', 'asc');
            $records = $this->db->get()->result_array();

            $result['total'] = count($records);
            $result['rows'] = $records;

            die(json_encode($result));
        }
    }

    public function print($option = "")
    {
        if ($option == "excel") {
            $format  = date("Ymd");
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=report_attandance_$format.xls");
        }

        if ($this->input->get()) {
            $filter_from = $this->input->get('filter_from');
            $filter_to = $this->input->get('filter_to');
            $filter_division = $this->input->get('filter_division');
            $filter_departement = $this->input->get('filter_departement');
            $filter_departement_sub = $this->input->get('filter_departement_sub');
            $filter_employee = $this->input->get('filter_employee');
            $filter_permit_type = $this->input->get('filter_permit_type');
            // $filter_status = $this->input->get('filter_status');
            $filter_status_employee = $this->input->get('filter_status_employee');
            $filter_group = $this->input->get('filter_group');
            $username = $this->session->username;

            echo '<html>
                <meta charset="UTF-8">
                <meta http-equiv="cache-control" content="no-cache">
                <meta http-equiv="expires" content="0">
                <meta http-equiv="pragma" content="no-cache">
            <head><title>Print Data</title></head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 10px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>';
            $this->db->select("a.id, a.number, a.name, c.name as division_name, d.name as departement_name, e.name as departement_sub_name, f.warning_letter, a.date_sign");
            $this->db->from('employees a');
            $this->db->join('divisions c', 'a.division_id = c.id');
            $this->db->join('departements d', 'a.departement_id = d.id');
            $this->db->join('departement_subs e', 'a.departement_sub_id = e.id');
            $this->db->join('privilege_groups i', "a.group_id = i.group_id and i.username = '$username'");
            $this->db->join('(SELECT employee_id, MAX(warning_letter) as warning_letter FROM warning_letters GROUP BY employee_id) f', 'a.id = f.employee_id', 'left');
            $this->db->where('a.deleted', 0);
            $this->db->where('a.status', $filter_status_employee);
            $this->db->like('a.division_id', $filter_division);
            $this->db->like('a.departement_id', $filter_departement);
            $this->db->like('a.departement_sub_id', $filter_departement_sub);
            $this->db->like('a.group_id', $filter_group);
            $this->db->like('a.id', $filter_employee);
            $this->db->group_by('a.id');
            $this->db->order_by('d.name', 'asc');
            $this->db->order_by('e.name', 'asc');
            $this->db->order_by('a.name', 'asc');
            $records = $this->db->get()->result_array();

            //Config
            $this->db->select('*');
            $this->db->from('config');
            $config = $this->db->get()->row();

            $start = strtotime($filter_from);
            $finish = strtotime($filter_to);

            foreach ($records as $record) {
                if (!empty($record['warning_letter'])) {
                    if ($record['warning_letter'] != "4") {
                        $warning_letter = "SP " . $record['warning_letter'];
                    } else {
                        $warning_letter = "TERMINATION";
                    }
                } else {
                    $warning_letter = "-";
                }

                $html = '<div style="page-break-after:always;"><center>
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
                    <h3 style="margin:0;">Report Attandance & Overtime</h3>
                    <p style="margin:0;">Period ' . $filter_from . ' to ' . $filter_to . '</p>
                    <br><br>
                </center>

                <table style="font-size: 11px;">    
                    <tr>
                        <td>Employee ID</td>
                        <td>:</td>
                        <td><b>' . $record['number'] . '</b></td>
                    </tr>
                    <tr>
                        <td>Employee Name</td>
                        <td>:</td>
                        <td><b>' . $record['name'] . '</b></td>
                    </tr>
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
                    <tr>
                        <td>Sub Departement</td>
                        <td>:</td>
                        <td><b>' . $record['departement_sub_name'] . '</b></td>
                    </tr>
                    <tr>
                        <td>Sign Date</td>
                        <td>:</td>
                        <td><b>' . date("d F Y", strtotime($record['date_sign'])) . '</b></td>
                    </tr>
                    <tr>
                        <td>Warning Letter</td>
                        <td>:</td>
                        <td><b>' . $warning_letter . '</b></td>
                    </tr>
                </table>
                <br>
                <table id="customers" border="1">
                    <tr>
                        <th width="20" rowspan="2">No</th>
                        <th rowspan="2" style="text-align:center;">Date</th>
                        <th colspan="3" style="text-align:center;">Attandance</th>
                        <th colspan="3" style="text-align:center;">Overtime</th>
                        <th rowspan="2" style="text-align:center;">Duration</th>
                        <th rowspan="2" style="text-align:center;">Status</th>
                        <th rowspan="2" style="text-align:center;">Remarks</th>
                    </tr>
                    <tr>
                        <th style="text-align:center;">Shift</th>
                        <th style="text-align:center;">IN</th>
                        <th style="text-align:center;">OUT</th>
                        <th style="text-align:center;">Request No</th>
                        <th style="text-align:center;">Start</th>
                        <th style="text-align:center;">End</th>
                    </tr>';
                $working_date = "";
                $description = "";
                $style = "";
                $shiftName = "";
                $no = 1;
                for ($i = $start; $i <= $finish; $i += (60 * 60 * 24)) {
                    $working_date = date('Y-m-d', $i);

                    if (date('w', $i) !== '0' && date('w', $i) !== '6') {
                        $working = "WEEKDAY";
                    } else {
                        $working = "WEEKEND";
                    }

                    //Working Calendar
                    $this->db->select('description');
                    $this->db->from('calendars');
                    $this->db->where('trans_date', $working_date);
                    $holiday = $this->db->get()->row();

                    //Resignation
                    $this->db->select('*');
                    $this->db->from('resignations');
                    $this->db->where('employee_id', $record['id']);
                    $this->db->where('resign_date <', $working_date);
                    $resignation = $this->db->get()->row();

                    //Permit
                    $this->db->select("a.*, c.name as reason_name, d.name as permit_name");
                    $this->db->from('permits a');
                    $this->db->join('reasons c', 'a.reason_id = c.id');
                    $this->db->join('permit_types d', 'a.permit_type_id = d.id');
                    $this->db->where('a.employee_id', $record['id']);
                    $this->db->where('a.permit_date', $working_date);
                    $permit = $this->db->get()->row();

                    //Attandance and Overtime
                    $this->db->select("date_in, time_in, date_out, time_out");
                    $this->db->from('attandances');
                    $this->db->where("date_in = '$working_date'");
                    $this->db->where('number', $record['number']);
                    $this->db->order_by('date_in', 'asc');
                    $attandance = $this->db->get()->row();

                    //Shift and Setting Group
                    $tolerance_hour_min = date("H:i:s", strtotime('-2 Hour', strtotime(@$attandance->time_in)));
                    $tolerance_hour_plus = date("H:i:s", strtotime('+2 Hour', strtotime(@$attandance->time_in)));
                    $this->db->select("d.start, d.end, d.days, d.working, d.tolerance, c.name, d.name as shift_name");
                    $this->db->from('shift_employees b');
                    $this->db->join('shifts c', 'c.id = b.shift_id');
                    $this->db->join('shift_details d', 'd.shift_id = c.id');
                    $this->db->where('b.employee_id', $record['id']);
                    if (@$attandance->time_in > "23:00:00") {
                        $this->db->where("d.start >= '$tolerance_hour_min'");
                    } elseif (@$attandance->time_in != "") {
                        $this->db->where("d.start >= '$tolerance_hour_min' and d.start <= '$tolerance_hour_plus'");
                    }
                    $shift = $this->db->get()->row();

                    $this->db->select("*");
                    $this->db->from('change_days');
                    $this->db->where('employee_id', $record['id']);
                    $this->db->where('start', $working_date);
                    $change_day = $this->db->get()->row();

                    $this->db->select("*");
                    $this->db->from('change_days');
                    $this->db->where('employee_id', $record['id']);
                    $this->db->where('end', $working_date);
                    $change_day_end = $this->db->get()->row();

                    $this->db->select("*");
                    $this->db->from('cash_carries');
                    $this->db->where('employee_id', $record['id']);
                    $this->db->where('trans_date', $working_date);
                    $cash_carry = $this->db->get()->row();

                    //Jika hari kerja nya adalah 5 hari
                    if (@$shift->days == "5") {
                        //sabtu dan minggu libur
                        if (date('w', $i) !== '0' && date('w', $i) !== '6') {
                            $weekend = "";
                        } else {
                            $weekend = "Weekend";
                        }
                    } else {
                        //sabtu doang libur
                        if (date('w', $i) !== '0') {
                            $weekend = "";
                        } else {
                            $weekend = "Weekend";
                        }
                    }

                    if (@$shift->start >= @$attandance->time_in) {
                        $status_masuk = "ON TIME";
                    } elseif (@$shift->start == null) {
                        $status_masuk = "UN SETTING";
                    } elseif (@$shift->start <= @$attandance->time_in) {
                        $status_masuk = "LATE";
                    } else {
                        $status_masuk = "ERROR";
                    }

                    //jika status tanggal merah nya kosong
                    if (@$holiday->description == null) {
                        //cek apakah harinya minggu jika iya maka default Weekend
                        if (@$cash_carry->start != null) {
                            $holiday = "Cash Carry " . $cash_carry->request_code;
                            $style = "style='background: #ffe9ad;'";
                        } elseif (@$change_day->start != null) {
                            $holiday = "Change Days to " . $change_day->end;

                            // $this->db->select("*");
                            // $this->db->from('attandances');
                            // $this->db->where('number', $record['number']);
                            // $this->db->where('date_in', $change_day->end);
                            // $attandance_cc_in = $this->db->get()->row();

                            // if (@$attandance_cc_in->time_in != "") {
                            $style = "style='background: #B0ADFF;'";
                            // } else {
                            //     $style = "style='background: #FFADAD;'";
                            // }
                        } elseif (@$change_day_end->end != null) {
                            $holiday = "Change Days from " . $change_day_end->start;

                            // $this->db->select("*");
                            // $this->db->from('attandances');
                            // $this->db->where('number', $record['number']);
                            // $this->db->where('date_in', $change_day_end->start);
                            // $attandance_cc_out = $this->db->get()->row();

                            // if (@$attandance_cc_out->time_in != "") {
                            $style = "style='background: #B0ADFF;'";
                            // } else {
                            //     $style = "style='background: #FFADAD;'";
                            // }
                        } elseif ($weekend == "Weekend") {
                            $holiday = $weekend;
                            $style = "style='background: #FFBEB0;'";
                        } elseif (@$permit->permit_name != null) {
                            $holiday = @$permit->note;
                            $style = "style='background: #FDFFB0;'";
                        } elseif (@$attandance->remarks != null) {
                            $holiday = @$attandance->remarks;
                            $style = "";
                        } else {
                            $holiday = @$holiday->description;
                            $style = "";
                        }
                        //isi dengan tanggal merah
                    } else {
                        $holiday = @$holiday->description;
                        $style = "style='background: #FFBEB0;'";
                    }

                    if (@$attandance->time_in == null && $holiday != 'Weekend') {
                        if (@$permit->permit_name != null) {
                            $attandance_status = @strtoupper($permit->permit_name);
                            $style_status = "style='color:black; font-weight:bold;'";
                        } elseif ($holiday != null) {
                            $attandance_status = "";
                            $style_status = "style='color:red; font-weight:bold;'";
                        } elseif (@$attandance->time_in == null && @$attandance->time_out != null) {
                            $attandance_status = "UN CHECK IN";
                            $style_status = "style='color:blue; font-weight:bold;'";
                        } elseif ($record['date_sign'] > $working_date) {
                            $attandance_status = "NOT JOIN YET";
                            $style_status = "style='color:blue; font-weight:bold;'";
                        } elseif (!empty($resignation)) {
                            $attandance_status = "RESIGN";
                            $style_status = "style='color:red; font-weight:bold;'";
                        } else {
                            $attandance_status = "ABSENCE";
                            $style_status = "style='color:red; font-weight:bold;'";
                        }
                    } else {
                        if ($holiday == "Weekend") {
                            $attandance_status = "";
                            $shiftName = "";
                        } elseif (@$permit->permit_name != null) {
                            $attandance_status = @strtoupper($permit->permit_name);
                            $shiftName = "";
                        } else {
                            $attandance_status = @$status_masuk;
                            $shiftName = @$shift->name . " - " . @$shift->shift_name;
                        }

                        if (@$status_masuk == "LATE") {
                            $style_status = "style='color:red; font-weight:bold;'";
                        } else if (@$status_masuk == "ON TIME") {
                            $style_status = "style='color:green; font-weight:bold;'";
                        } else {
                            $style_status = "style='color:orange; font-weight:bold;'";
                        }
                    }

                    if ($attandance_status == @strtoupper($filter_permit_type)) {
                        $html .= '  <tr ' . $style . '>
                                        <td>' . $no . '</td>
                                        <td>' . date('d F Y', strtotime($working_date)) . '</td>
                                        <td>' . $shiftName . '</td>
                                        <td>' . @$attandance->time_in . '</td>
                                        <td>' . @$attandance->time_out . '</td>
                                        <td>' . @$cash_carry->idm_no . '</td>
                                        <td>' . @$cash_carry->start . '</td>
                                        <td>' . @$cash_carry->end . '</td>
                                        <td></td>
                                        <td ' . $style_status . '>' . $attandance_status . '</td>
                                        <td>' . $holiday . '</td>
                                    </tr>';
                    } else if($filter_permit_type == "") {
                        $html .= '<tr ' . $style . '>
                                    <td>' . $no . '</td>
                                    <td>' . date('d F Y', strtotime($working_date)) . '</td>
                                    <td>' . $shiftName . '</td>
                                    <td>' . @$attandance->time_in . '</td>
                                    <td>' . @$attandance->time_out . '</td>
                                    <td>' . @$cash_carry->idm_no . '</td>
                                    <td>' . @$cash_carry->start . '</td>
                                    <td>' . @$cash_carry->end . '</td>
                                    <td></td>
                                    <td ' . $style_status . '>' . $attandance_status . '</td>
                                    <td>' . $holiday . '</td>
                                </tr>';
                    }
                    
                    $no++;
                }

                $html .= '</table></div><br><br>';
                echo $html;
            }
        }
    }
}
