<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cash_carries extends CI_Controller
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
            $this->load->view('report/cash_carries');
        } else {
            redirect('error_access');
        }
    }

    public function readYears()
    {
        $query  = $this->db->query("SELECT DATE_FORMAT(permit_date, '%Y') as `year` FROM permits WHERE DATE_FORMAT(permit_date, '%Y') != '0000' GROUP BY `year`");
        $data   = $query->result();

        echo json_encode($data);
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
            $filter_created_by = $this->input->get('filter_created_by');
            $filter_group = $this->input->get('filter_group');
            $filter_display = $this->input->get('filter_display');
            $filter_status = $this->input->get('filter_status');
            $aprvDepartement = $this->checkApprovalAccess('cash_carries');

            $html = '<html><head><title>Print Data</title></head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 10px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>';
            $this->db->select('a.*, 
                g.users_id_from as status_check,
                g.users_id_to as status_notification, 
                g.updated_date as status_date,
                c.name as division_name,
                d.name as departement_name,
                e.name as departement_sub_name,
                b.number as employee_number,
                b.name as employee_name,
                f.name as fullname
            ');

            $this->db->from('cash_carries a');
            $this->db->join('employees b', 'a.employee_id = b.id');
            $this->db->join('divisions c', 'b.division_id = c.id');
            $this->db->join('departements d', 'b.departement_id = d.id');
            $this->db->join('departement_subs e', 'b.departement_sub_id = e.id');
            $this->db->join('users f', "a.created_by = f.username");
            $this->db->join('notifications g', "a.id = g.table_id and g.table_name = 'cash_carries'", 'left');
            $this->db->where('b.deleted', 0);
            $this->db->where('b.status', 0);
            $this->db->where('a.deleted', 0);
            $this->db->like('b.departement_id', $aprvDepartement);
            if ($filter_from != "" && $filter_to != "") {
                $this->db->where('a.trans_date >=', $filter_from);
                $this->db->where('a.trans_date <=', $filter_to);
            }
            $this->db->like('b.division_id', $filter_division);
            $this->db->like('b.departement_id', $filter_departement);
            $this->db->like('b.departement_sub_id', $filter_departement_sub);
            $this->db->like('b.id', $filter_employee);
            $this->db->like('a.created_by', $filter_created_by);
            $this->db->group_by('a.trans_date');
            $this->db->group_by('a.employee_id');
            $this->db->group_by('a.type');
            $this->db->order_by('a.trans_date', 'DESC');
            $records = $this->db->get()->result_array();

            //Config
            $this->db->select('*');
            $this->db->from('config');
            $config = $this->db->get()->row();

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
                    <h3 style="margin:0;">Report Cash Carry</h3>
                    Period : ' . $filter_from . ' to ' . $filter_to . '
                    <br>
                </center>
                <br><br><br>
        
                <table id="customers" border="1">
                    <tr>
                        <th width="20">No</th>
                        <th>Request Date</th>
                        <th>Request No</th>
                        <th>Request Name</th>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Division</th>
                        <th>Departement</th>
                        <th>Departement Sub</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Type</th>
                        <th>Duration</th>
                        <th>Convert</th>
                        <th>Amount</th>
                        <th>Remarks</th>
                    </tr>';
            $no = 1;
            foreach ($records as $data) {
                $html .= '  <tr>
                                <td>' . $no . '</td>
                                <td>' . date("d F Y", strtotime($data['trans_date'])) . '</td>
                                <td>' . $data['request_code'] . '</td>
                                <td>' . $data['fullname'] . '</td>
                                <td>' . $data['employee_id'] . '</td>
                                <td>' . $data['employee_name'] . '</td>
                                <td>' . $data['division_name'] . '</td>
                                <td>' . $data['departement_name'] . '</td>
                                <td>' . $data['departement_sub_name'] . '</td>
                                <td>' . $data['start'] . '</td>
                                <td>' . $data['end'] . '</td>
                                <td>' . $data['type'] . '</td>
                                <td>' . $data['duration_hour'] . '</td>
                                <td>' . $data['duration_convert'] . '</td>
                                <td>' . number_format($data['amount']) . '</td>
                                <td>' . $data['remarks'] . '</td>
                            </tr>';
                $no++;
            }

            $html .= '</body></html>';
            echo $html;
        }
    }
}
