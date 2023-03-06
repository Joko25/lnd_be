<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');

class Mutations extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('crud');

        //VALIDASI FORM
        $this->form_validation->set_rules('employee_id', 'Employee ID', 'required|min_length[1]|max_length[30]');
    }

    //HALAMAN UTAMA
    public function index()
    {
        if (empty($this->session->username)) {
            redirect('error_session');
        } elseif ($this->checkuserAccess($this->id_menu()) > 0) {
            $data['button'] = $this->getbutton($this->id_menu());

            $this->load->view('template/header', $data);
            $this->load->view('employee/mutations');
        } else {
            redirect('error_access');
        }
    }

    //GET DATA
    public function reads()
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $send = $this->crud->reads('mutations', ["number" => $post]);
        echo json_encode($send);
    }

    //GET DATATABLES
    public function datatables()
    {
        $filter_divisions = $this->input->get('filter_divisions');
        $filter_departements = $this->input->get('filter_departements');
        $filter_departement_subs = $this->input->get('filter_departement_subs');
        $filter_employees = $this->input->get('filter_employees');
        $filter_approval = $this->input->get('filter_approval');
        $filter_status = $this->input->get('filter_status');
        $aprvDepartement = $this->checkApprovalAccess('mutations');

        $page = $this->input->post('page');
        $rows = $this->input->post('rows');
        //Pagination 1-10
        $page   = isset($page) ? intval($page) : 1;
        $rows   = isset($rows) ? intval($rows) : 10;
        $offset = ($page - 1) * $rows;
        $result = array();
        //Select Query
        $this->db->select('a.*, 
            i.users_id_from as status_check,
            i.users_id_to as status_notification, 
            b.number as employee_number, 
            b.name as employee_name, 
            c.name as division_name, 
            d.name as departement_name,
            e.name as departement_sub_name');
        $this->db->from('mutations a');
        $this->db->join('employees b', 'a.employee_id = b.id');
        $this->db->join('divisions c', 'a.division_id = c.id');
        $this->db->join('departements d', 'a.departement_id = d.id');
        $this->db->join('departement_subs e', 'a.departement_sub_id = e.id');
        $this->db->join('notifications i', "a.id = i.table_id and i.table_name = 'mutations'", 'left');
        $this->db->where('a.deleted', 0);
        $this->db->like('b.departement_id', $aprvDepartement);
        $this->db->like('b.division_id', $filter_divisions);
        $this->db->like('b.departement_id', $filter_departements);
        $this->db->like('b.departement_sub_id', $filter_departement_subs);
        $this->db->like('b.id', $filter_employees);
        $this->db->like('a.status', $filter_status);
        if ($filter_approval == "0") {
            $this->db->where("(i.users_id_to = '' or i.users_id_to is null)");
        } elseif ($filter_approval == "1") {
            $this->db->where("(i.users_id_to != '' or i.users_id_to is not null)");
        }
        $this->db->order_by('b.name', 'ASC');
        //Total Data
        $totalRows = $this->db->count_all_results('', false);
        //Limit 1 - 10
        $this->db->limit($rows, $offset);
        //Get Data Array
        $records = $this->db->get()->result_array();
        //Mapping Data
        $result['total'] = $totalRows;
        $result = array_merge($result, ['rows' => $records]);
        echo json_encode($result);
    }

    //CREATE DATA
    public function create()
    {
        if ($this->input->post()) {
            if ($this->form_validation->run() == TRUE) {
                $post = $this->input->post();
                $departement_id = $this->session->departement_id; 
                $approval = $this->crud->read('approvals', [], ["table_name" => "mutations", "departement_id" => $departement_id]);

                if ($approval) {
                    $send   = $this->crud->create('mutations', $post);
                } else {
                    $postEmployee = array(
                        "division_id" => $post['division_id'],
                        "departement_id" => $post['departement_id'],
                        "departement_sub_id" => $post['departement_sub_id']
                    );

                    if($post['type'] == "PERMANENT"){
                        $this->crud->update('employees', ["id" => $post['employee_id']], $postEmployee);
                    }

                    $send   = $this->crud->create('mutations', $post);
                    
                }
                echo $send;
            } else {
                show_error(validation_errors());
            }
        } else {
            show_error("Cannot Process your request");
        }
    }

    //UPDATE DATA
    public function update()
    {
        if ($this->input->post()) {
            $id   = base64_decode($this->input->get('id'));
            $post = $this->input->post();

            $send = $this->crud->update('mutations', ['id' => $id], $post);

            $postEmployee = array(
                "division_id" => $post['division_id'],
                "departement_id" => $post['departement_id'],
                "departement_sub_id" => $post['departement_sub_id']
            );

            if($post['type'] == "PERMANENT"){
                $this->crud->update('employees', ["id" => $post['employee_id']], $postEmployee);
            }

            echo $send;
        } else {
            show_error("Cannot Process your request");
        }
    }

    //DELETE DATA
    public function delete()
    {
        $data = $this->input->post();
        $send = $this->crud->delete('mutations', $data);
        echo $send;
    }

    //PRINT & EXCEL DATA
    public function print($option = "")
    {
        if ($option == "excel") {
            $format  = date("Ymd");
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=mutations_$format.xls");
        }

        //Filter Data
        $filter_divisions = $this->input->get('filter_divisions');
        $filter_departements = $this->input->get('filter_departements');
        $filter_departement_subs = $this->input->get('filter_departement_subs');
        $filter_employees = $this->input->get('filter_employees');
        $filter_approval = $this->input->get('filter_approval');
        $filter_status = $this->input->get('filter_status');
        $aprvDepartement = $this->checkApprovalAccess('mutations');

        //Config
        $this->db->select('*');
        $this->db->from('config');
        $config = $this->db->get()->row();

        $this->db->select('a.*, 
            i.users_id_from as status_check,
            i.users_id_to as status_notification, 
            b.number as employee_number, 
            b.name as employee_name, 
            c.name as division_name, 
            d.name as departement_name,
            e.name as departement_sub_name');
        $this->db->from('mutations a');
        $this->db->join('employees b', 'a.employee_id = b.id');
        $this->db->join('divisions c', 'a.division_id = c.id');
        $this->db->join('departements d', 'a.departement_id = d.id');
        $this->db->join('departement_subs e', 'a.departement_sub_id = e.id');
        $this->db->join('notifications i', "a.id = i.table_id and i.table_name = 'mutations'", 'left');
        $this->db->where('a.deleted', 0);
        $this->db->like('b.departement_id', $aprvDepartement);
        $this->db->like('b.division_id', $filter_divisions);
        $this->db->like('b.departement_id', $filter_departements);
        $this->db->like('b.departement_sub_id', $filter_departement_subs);
        $this->db->like('b.id', $filter_employees);
        $this->db->like('a.status', $filter_status);
        if ($filter_approval == "0") {
            $this->db->where("(i.users_id_to != '' or i.users_id_to != null)");
        } elseif ($filter_approval == "1") {
            $this->db->where("(i.users_id_to = '' or i.users_id_to = null)");
        }
        $this->db->order_by('b.name', 'ASC');
        $records = $this->db->get()->result_array();

        $html = '<html><head><title>Print Data</title></head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 12px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>
        <center>
            <div style="float: left; font-size: 12px; text-align: left;">
                <table style="width: 100%;">
                    <tr>
                        <td width="50" style="font-size: 12px; vertical-align: top; text-align: center; vertical-align:jus margin-right:10px;">
                            <img src="' . $config->favicon . '" width="30">
                        </td>
                        <td style="font-size: 14px; text-align: left; margin:2px;">
                            <b>' . $config->name . '</b><br>
                            <small>MUTATION EMPLOYEE</small>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="float: right; font-size: 12px; text-align: right;">
                Print Date ' . date("d M Y H:m:s") . ' <br>
                Print By ' . $this->session->username . '  
            </div>
        </center>
        <br><br><br>
        
        <table id="customers" border="1">
            <tr>
                <th width="20">No</th>
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Trans Date</th>
                <th>Type</th>
                <th>Division</th>
                <th>Departement</th>
                <th>Departement Sub</th>
                <th>Note</th>
            </tr>';
        $no = 1;
        foreach ($records as $data) {
            $html .= '<tr>
                    <td>' . $no . '</td>
                    <td>' . $data['employee_number'] . '</td>
                    <td>' . $data['employee_name'] . '</td>
                    <td>' . $data['trans_date'] . '</td>
                    <td>' . $data['type'] . '</td>
                    <td>' . $data['division_name'] . '</td>
                    <td>' . $data['departement_name'] . '</td>
                    <td>' . $data['departement_sub_name'] . '</td>
                    <td>' . $data['description'] . '</td>';
            $no++;
        }

        $html .= '</table></body></html>';
        echo $html;
    }
}
