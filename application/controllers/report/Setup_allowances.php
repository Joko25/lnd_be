<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setup_allowances extends CI_Controller
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
            $this->load->view('report/setup_allowances');
        } else {
            redirect('error_access');
        }
    }

    public function print($option = "")
    {
        if ($option == "excel") {
            $format  = date("Ymd");
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=setup_allowances_$format.xls");
        }

        if ($this->input->get()) {
            $filter_division = $this->input->get('filter_division');
            $filter_departement = $this->input->get('filter_departement');
            $filter_departement_sub = $this->input->get('filter_departement_sub');
            $filter_employee = $this->input->get('filter_employee');
            $filter_allowance = $this->input->get('filter_allowance');
            $filter_status = $this->input->get('filter_status');

            $this->db->select('a.*, b.name as allowance_name, c.number as employee_number, c.name as employee_name, d.name as division_name, e.name as departement_name, f.name as departement_sub_name');
            $this->db->from('employees c');
            $this->db->join('setup_allowances a', 'a.employee_id = c.id', 'left');
            $this->db->join('allowances b', 'a.allowance_id = b.id', 'left');
            $this->db->join('divisions d', 'c.division_id = d.id');
            $this->db->join('departements e', 'c.departement_id = e.id');
            $this->db->join('departement_subs f', 'c.departement_sub_id = f.id');
            $this->db->where('c.deleted', 0);
            $this->db->where('c.status', 0);
            $this->db->like('c.id', $filter_employee);
            $this->db->like('d.id', $filter_division);
            $this->db->like('e.id', $filter_departement);
            $this->db->like('f.id', $filter_departement_sub);
            if ($filter_allowance != "") {
                $this->db->like('b.id', $filter_allowance);
            }
            if ($filter_status == "ALLOWENCE") {
                $this->db->where("a.allowance_id != ''");
            } elseif ($filter_status == "NO ALLOWENCE") {
                $this->db->where("a.allowance_id is null");
            }
            $this->db->order_by('c.name', 'ASC');
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
                <h3 style="margin:0;">Report Setup Allowence</h3>
            </center>
            <br>
            
            <table id="customers" border="1">
                <tr>
                    <th width="20">No</th>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Division</th>
                    <th>Departement</th>
                    <th>Departement Sub</th>
                    <th>Allowence</th>
                    <th>Amount</th>
                    <th>Description</th>
                </tr>';
            $no = 1;
            foreach ($records as $data) {
                $html .= '  <tr>
                            <td>' . $no . '</td>
                            <td class="str">' . $data['employee_number'] . '</td>
                            <td>' . $data['employee_name'] . '</td>
                            <td>' . $data['division_name'] . '</td>
                            <td>' . $data['departement_name'] . '</td>
                            <td>' . $data['departement_sub_name'] . '</td>
                            <td>' . $data['allowance_name'] . '</td>
                            <td>' . number_format($data['amount']) . '</td>
                            <td>' . $data['description'] . '</td>
                        </tr>';
                $no++;
            }

            $html .= '</table></body></html>';
            echo $html;
        }
    }
}
