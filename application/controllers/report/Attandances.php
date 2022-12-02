<?php
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
            $data['button'] = $this->getbutton($this->id_menu());

            $this->load->view('template/header', $data);
            $this->load->view('report/attandances');
        } else {
            redirect('error_access');
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
            $filter_status = $this->input->get('filter_status');
            $filter_group = $this->input->get('filter_group');

            $html = '<html><head><title>Print Data</title></head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 10px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>';
            $this->db->select("a.*, c.name as division_name, d.name as departement_name, e.name as departement_sub_name");
            $this->db->from('employees a');
            $this->db->join('attandances b', 'a.number = b.number');
            $this->db->join('divisions c', 'a.division_id = c.id');
            $this->db->join('departements d', 'a.departement_id = d.id');
            $this->db->join('departement_subs e', 'a.departement_sub_id = e.id');
            $this->db->join('groups f', 'a.group_id = f.id');
            $this->db->join('permits g', 'a.id = g.employee_id', 'left');
            $this->db->join('permit_types h', 'h.id = g.permit_type_id', 'left');
            $this->db->where('a.deleted', 0);
            $this->db->where('a.status', 0);
            if ($filter_from != "" && $filter_to != "") {
                $this->db->where('b.date_in >=', $filter_from);
                $this->db->where('b.date_in <=', $filter_to);
            }
            if ($filter_permit_type != "") {
                $this->db->where('h.id', $filter_permit_type);
            }
            $this->db->like('a.division_id', $filter_division);
            $this->db->like('a.departement_id', $filter_departement);
            $this->db->like('a.departement_sub_id', $filter_departement_sub);
            $this->db->like('a.id', $filter_employee);
            $this->db->like('f.id', $filter_group);
            $this->db->group_by('a.id');
            $this->db->order_by('d.name', 'asc');
            $records = $this->db->get()->result_array();

            //Config
            $this->db->select('*');
            $this->db->from('config');
            $config = $this->db->get()->row();

            $start = strtotime($filter_from);
            $finish = strtotime($filter_to);
            $no = 1;
            foreach ($records as $header) {

                $html .= '<div style="page-break-after:always;"><center>
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
                        <td><b>' . $header['number'] . '</b></td>
                    </tr>
                    <tr>
                        <td>Employee Name</td>
                        <td>:</td>
                        <td><b>' . $header['name'] . '</b></td>
                    </tr>
                    <tr>
                        <td width="100">Division</td>
                        <td width="10">:</td>
                        <td><b>' . $header['division_name'] . '</b></td>
                    </tr>
                    <tr>
                        <td>Departement</td>
                        <td>:</td>
                        <td><b>' . $header['departement_name'] . '</b></td>
                    </tr>
                    <tr>
                        <td>Sub Departement</td>
                        <td>:</td>
                        <td><b>' . $header['departement_sub_name'] . '</b></td>
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

                $this->db->select("a.id as employee_id, a.number, a.name, a.division_id, a.departement_id, a.departement_sub_id, c.name as division_name, d.name as departement_name, e.name as departement_sub_name");
                $this->db->from('employees a');
                $this->db->join('attandances b', 'a.number = b.number');
                $this->db->join('divisions c', 'a.division_id = c.id');
                $this->db->join('departements d', 'a.departement_id = d.id');
                $this->db->join('departement_subs e', 'a.departement_sub_id = e.id');
                if ($filter_from != "" && $filter_to != "") {
                    $this->db->where('b.date_in >=', $filter_from);
                    $this->db->where('b.date_in <=', $filter_to);
                }
                $this->db->like('a.id', $header['id']);
                $this->db->group_by(array('a.number'));
                $this->db->order_by('a.name', 'asc');
                $employees = $this->db->get()->result_array();

                foreach ($employees as $employee) {
                    $working_date = "";
                    $description = "";
                    $style = "";
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
                        $holiday = $this->db->get()->result_array();

                        //Permit
                        $this->db->select("a.*, c.name as reason_name, d.name as permit_name");
                        $this->db->from('permits a');
                        $this->db->join('employees b', 'a.employee_id = b.id');
                        $this->db->join('reasons c', 'a.reason_id = c.id');
                        $this->db->join('permit_types d', 'a.permit_type_id = d.id');
                        $this->db->where('b.number', $employee['number']);
                        $this->db->where('a.permit_date <=', $working_date);
                        $this->db->where('a.permit_date >=', $working_date);
                        $permit = $this->db->get()->result_array();

                        //Attandance and Overtime
                        $this->db->select("b.date_in, b.time_in, b.date_out, b.time_out, c.request_code, c.start, c.end, c.duration, c.remarks");
                        $this->db->from('employees a');
                        $this->db->join('attandances b', 'a.number = b.number');
                        $this->db->join('overtimes c', 'a.id = c.employee_id and b.date_in = c.trans_date', 'left');
                        $this->db->where('b.date_in =', $working_date);
                        $this->db->like('a.division_id', $employee['division_id']);
                        $this->db->like('a.departement_id', $employee['departement_id']);
                        $this->db->like('a.departement_sub_id', $employee['departement_sub_id']);
                        $this->db->like('a.id', $employee['employee_id']);
                        $this->db->order_by('a.name', 'asc');
                        $this->db->order_by('b.date_in', 'asc');
                        $attandance = $this->db->get()->result_array();

                        //Shift and Setting Group
                        $this->db->select("d.start, d.end, d.days, d.working, d.tolerance, d.name as shift_name");
                        $this->db->from('employees a');
                        $this->db->join('shift_employees b', 'a.id = b.employee_id');
                        $this->db->join('shifts c', 'c.id = b.shift_id');
                        $this->db->join('shift_details d', 'd.shift_id = c.id');
                        $this->db->like('a.division_id', $employee['division_id']);
                        $this->db->like('a.departement_id', $employee['departement_id']);
                        $this->db->like('a.departement_sub_id', $employee['departement_sub_id']);
                        $this->db->like('a.id', $employee['employee_id']);
                        $this->db->where('d.working', $working);

                        $shifts = $this->db->get()->result_array();

                        //Check Shift
                        $time_in = "";
                        $shift_name = "";
                        foreach ($shifts as $shift) {
                            $start_min = date_create(@$working_date . ' ' . $shift['start']);
                            date_add($start_min, date_interval_create_from_date_string('-' . $shift['tolerance'] . ' hours'));
                            $tolerance_min = date_format($start_min, 'H:i:s');
                            $tolerance_date_min = date_format($start_min, 'Y-m-d H:i:s');

                            $start_plus = date_create(@$working_date . ' ' . $shift['start']);
                            date_add($start_plus, date_interval_create_from_date_string($shift['tolerance'] . ' hours'));
                            $tolerance_plus = date_format($start_plus, 'H:i:s');
                            $tolerance_date_plus = date_format($start_plus, 'Y-m-d H:i:s');

                            if (@$shift['start'] >= @$attandance[0]['time_in'] && @$tolerance_min <= @$attandance[0]['time_in']) {
                                $time_in = $shift['start'];
                                $time_out = $shift['end'];
                                $shift_name = $shift['shift_name'];
                            } elseif (@$shift['start'] <= @$attandance[0]['time_in'] && @$tolerance_plus >= @$attandance[0]['time_in']) {
                                $time_in = $shift['start'];
                                $time_out = $shift['end'];
                                $shift_name = $shift['shift_name'];
                            }
                        }

                        $permit_description = @$permit[0]['note'];
                        $permit_name = @$permit[0]['permit_name'];

                        //Jika hari kerja nya adalah 5 hari
                        if (@$shift[0]['days'] == "5") {
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

                        if (@$time_in >= @$attandance[0]['time_in']) {
                            $status_masuk = "ON TIME";
                        } elseif (@$time_in == null) {
                            $status_masuk = "UN SETTING";
                        } elseif (@$time_in <= @$attandance[0]['time_in']) {
                            $status_masuk = "LATE";
                        } else {
                            $status_masuk = "ERROR";
                        }

                        //jika status tanggal merah nya kosong
                        if (@$holiday[0]['description'] == null) {
                            //cek apakah harinya minggu jika iya maka default Weekend
                            if ($weekend == "Weekend") {
                                $holiday = $weekend;
                                $style = "style='background: #FF5F5F; color:white;'";
                            } elseif ($permit_name != null) {
                                $holiday = @$permit_description;
                                $style = "style='background: #FFC25F; color:white;'";
                            } else {
                                $holiday = @$holiday[0]['description'];
                                $style = "";
                            }
                            //isi dengan tanggal merah
                        } else {
                            $holiday = @$holiday[0]['description'];
                            $style = "style='background: #FF5F5F; color:white;'";
                        }

                        if (@$attandance[0]['time_in'] == null && $holiday != 'Weekend') {
                            if ($permit_name != null) {
                                $attandance_status = @strtoupper($permit[0]['permit_name']);
                                $style_status = "style='color:black; font-weight:bold;'";
                            } elseif ($holiday != null) {
                                $attandance_status = "";
                                $style_status = "style='color:red; font-weight:bold;'";
                            } else {
                                $attandance_status = "ABSENCE";
                                $style_status = "style='color:red; font-weight:bold;'";
                            }
                        } else {
                            if ($holiday == "Weekend") {
                                $attandance_status = "";
                            } elseif (@$permit_name != null) {
                                $attandance_status = @strtoupper($permit[0]['permit_name']);
                            } else {
                                $attandance_status = @$status_masuk;
                            }

                            if (@$status_masuk == "LATE") {
                                $style_status = "style='color:red; font-weight:bold;'";
                            } else if (@$status_masuk == "ON TIME") {
                                $style_status = "style='color:green; font-weight:bold;'";
                            } else {
                                $style_status = "style='color:orange; font-weight:bold;'";
                            }
                        }

                        if ($filter_status != "" or $filter_permit_type != "") {
                            if ($holiday == "") {
                                if ($filter_status == $attandance_status) {
                                    $html .= '<tr ' . $style . '>
                                                    <td>' . $no . '</td>
                                                    <td>' . date('d F Y', strtotime($working_date)) . '</td>
                                                    <td>' . @$shift_name . '</td>
                                                    <td>' . @$attandance[0]['time_in'] . '</td>
                                                    <td>' . @$attandance[0]['time_out'] . '</td>
                                                    <td>' . @$attandance[0]['request_code'] . '</td>
                                                    <td>' . @$attandance[0]['start'] . '</td>
                                                    <td>' . @$attandance[0]['end'] . '
                                                    <td>' . @$attandance[0]['duration'] . '</td>
                                                    <td ' . $style_status . '>' . $attandance_status . '</td>
                                                    <td>' . $holiday . '</td>
                                                </tr>';
                                } elseif ($attandance_status == @strtoupper($filter_permit_type)) {
                                    $html .= '<tr ' . $style . '>
                                                    <td>' . $no . '</td>
                                                    <td>' . date('d F Y', strtotime($working_date)) . '</td>
                                                    <td>' . @$shift_name . '</td>
                                                    <td>' . @$attandance[0]['time_in'] . '</td>
                                                    <td>' . @$attandance[0]['time_out'] . '</td>
                                                    <td>' . @$attandance[0]['request_code'] . '</td>
                                                    <td>' . @$attandance[0]['start'] . '</td>
                                                    <td>' . @$attandance[0]['end'] . '
                                                    <td>' . @$attandance[0]['duration'] . '</td>
                                                    <td ' . $style_status . '>' . $attandance_status . '</td>
                                                    <td>' . $holiday . '</td>
                                                </tr>';
                                }
                            }
                        } else {
                            $html .= '<tr ' . $style . '>
                                                <td>' . $no . '</td>
                                                <td>' . date('d F Y', strtotime($working_date)) . '</td>
                                                <td>' . @$shift_name . '</td>
                                                <td>' . @$attandance[0]['time_in'] . '</td>
                                                <td>' . @$attandance[0]['time_out'] . '</td>
                                                <td>' . @$attandance[0]['request_code'] . '</td>
                                                <td>' . @$attandance[0]['start'] . '</td>
                                                <td>' . @$attandance[0]['end'] . '
                                                <td>' . @$attandance[0]['duration'] . '</td>
                                                <td ' . $style_status . '>' . $attandance_status . '</td>
                                                <td>' . $holiday . '</td>
                                            </tr>';
                        }

                        $no++;
                    }
                }
                $html .= '</table></div><br><br>';
            }

            $html .= '</body></html>';
            echo $html;
        }
    }
}
