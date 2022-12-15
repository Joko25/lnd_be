<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shift_employees extends CI_Controller
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
            $this->load->view('report/shift_employees');
        } else {
            redirect('error_access');
        }
    }

    public function print($option = "")
    {
        if ($option == "excel") {
            $format  = date("Ymd");
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=shift_employees_$format.xls");
        }

        if ($this->input->get()) {
            $filter_division = $this->input->get('filter_division');
            $filter_departement = $this->input->get('filter_departement');
            $filter_departement_sub = $this->input->get('filter_departement_sub');
            $filter_employee = $this->input->get('filter_employee');
            $filter_status = $this->input->get('filter_status');

            $this->db->select('a.*, b.number as employee_number, b.name as employee_name, c.name as division_name, d.name as departement_name, e.name as departement_sub_name, f.name as shift_name, g.name as group_name');
            $this->db->from('employees b');
            $this->db->join('shift_employees a', 'a.employee_id = b.id', 'left');
            $this->db->join('divisions c', 'b.division_id = c.id');
            $this->db->join('departements d', 'b.departement_id = d.id');
            $this->db->join('departement_subs e', 'b.departement_sub_id = e.id');
            $this->db->join('shifts f', 'a.shift_id = f.id', 'left');
            $this->db->join('groups g', 'b.group_id = g.id');
            $this->db->where('b.deleted', 0);
            $this->db->where('b.status', 0);
            $this->db->like('b.id', $filter_employee);
            $this->db->like('c.id', $filter_division);
            $this->db->like('d.id', $filter_departement);
            $this->db->like('e.id', $filter_departement_sub);
            if ($filter_status == "SHIFT") {
                $this->db->where("a.shift_id != ''");
            } elseif ($filter_status == "NO SHIFT") {
                $this->db->where("a.shift_id is null");
            }
            $this->db->order_by('c.name', 'ASC');
            $this->db->order_by('d.name', 'ASC');
            $this->db->order_by('e.name', 'ASC');
            $this->db->order_by('b.name', 'ASC');
            $records = $this->db->get()->result_array();

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
                <h3 style="margin:0;">Report Shift Employee</h3>
            </center>
            <br>
            
            <table id="customers" border="1">
                <tr>
                    <th width="20">No</th>
                    <th>Division</th>
                    <th>Departement</th>
                    <th>Departement Sub</th>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Shift</th>
                    <th>Group</th>
                </tr>';
            $no = 1;
            foreach ($records as $data) {
                $html .= '  <tr>
                            <td>' . $no . '</td>
                            <td>' . $data['division_name'] . '</td>
                            <td>' . $data['departement_name'] . '</td>
                            <td>' . $data['departement_sub_name'] . '</td>
                            <td class="str">' . $data['employee_number'] . '</td>
                            <td>' . $data['employee_name'] . '</td>
                            <td>' . $data['shift_name'] . '</td>
                            <td>' . $data['group_name'] . '</td>
                        </tr>';
                $no++;
            }

            $html .= '</table></body></html>';
            echo $html;
        }
    }
}
