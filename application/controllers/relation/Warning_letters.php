<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');

class Warning_letters extends CI_Controller
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
        $this->form_validation->set_rules('employee_id', 'Employee', 'required|min_length[1]|max_length[30]');
    }

    //HALAMAN UTAMA
    public function index()
    {
        if (empty($this->session->username)) {
            redirect('error_session');
        } elseif ($this->checkuserAccess($this->id_menu()) > 0) {
            $data['button'] = $this->getbutton($this->id_menu());

            $this->load->view('template/header', $data);
            $this->load->view('relation/warning_letters');
        } else {
            redirect('error_access');
        }
    }

    public function readTermination(){
        $this->db->select('b.*');
        $this->db->from('warning_letters a');
        $this->db->join('employees b', 'a.employee_id = b.id');
        $this->db->where('b.deleted', 0);
        $this->db->where('b.status', 0);
        $this->db->where('a.warning_letter', "4");
        $this->db->group_by('a.employee_id');
        $records = $this->db->get()->result_array();

        die(json_encode($records));
    }

    public function readWarningLetter($id){
        $this->db->select('MAX(warning_letter) as warning_letter');
        $this->db->from('warning_letters');
        $this->db->where('employee_id', $id);
        $records = $this->db->get()->result_array();

        if(@$records[0]['warning_letter'] == "3"){
            $data[] = array(
                "id" => "4",
                "name" => "TERMINATION",
            );
        }elseif(@$records[0]['warning_letter'] == "4"){
            $data[] = array();
        }else{
            $data[] = array(
                "id" => "1",
                "name" => "1",
            );

            $data[] = array(
                "id" => "2",
                "name" => "2",
            );

            $data[] = array(
                "id" => "3",
                "name" => "3",
            );
        }

        die(json_encode($data));
    }

    //GET DATATABLES
    public function datatables()
    {
        if ($this->input->post()) {
            $filter_from = $this->input->get('filter_from');
            $filter_to = $this->input->get('filter_to');
            $filter_division = $this->input->get('filter_division');
            $filter_departement = $this->input->get('filter_departement');
            $filter_departement_sub = $this->input->get('filter_departement_sub');
            $filter_employee = $this->input->get('filter_employee');
            $filter_warning_letter = $this->input->get('filter_warning_letter');
            $filter_violation = $this->input->get('filter_violation');

            $page = $this->input->post('page');
            $rows = $this->input->post('rows');
            //Pagination 1-10
            $page   = isset($page) ? intval($page) : 1;
            $rows   = isset($rows) ? intval($rows) : 10;
            $offset = ($page - 1) * $rows;
            $result = array();
            //Select Query
            $this->db->select('a.*, 
                b.name as employee_name, 
                b.number as employee_number, 
                b.date_sign, 
                d.name as division_name, 
                e.name as departement_name, 
                f.name as departement_sub_name, 
                c.name as violation_name');
            $this->db->from('warning_letters a');
            $this->db->join('employees b', 'a.employee_id = b.id');
            $this->db->join('violations c', 'a.violation_id = c.id');
            $this->db->join('divisions d', 'b.division_id = d.id');
            $this->db->join('departements e', 'b.departement_id = e.id');
            $this->db->join('departement_subs f', 'b.departement_sub_id = f.id');
            $this->db->where('a.deleted', 0);
            $this->db->where('a.issue_date >=', $filter_from);
            $this->db->where('a.issue_date <=', $filter_to);
            $this->db->like('b.id', $filter_employee);
            $this->db->like('b.division_id', $filter_division);
            $this->db->like('b.departement_id', $filter_departement);
            $this->db->like('b.departement_sub_id', $filter_departement_sub);
            $this->db->like('a.warning_letter', $filter_warning_letter);
            $this->db->like('a.violation_id', $filter_violation);
            $this->db->order_by('b.name', 'ASC');
            //Total Data
            $totalRows = $this->db->count_all_results('', false);
            //Limit 1 - 10
            $this->db->limit($rows, $offset);
            //Get Data Array
            $records = $this->db->get()->result_array();

            $result['total'] = $totalRows;
            $result = @array_merge($result, ['rows' => $records]);
            echo json_encode($result);
        }
    }

    //CREATE DATA
    public function create()
    {
        if ($this->input->post()) {
            if ($this->form_validation->run() == TRUE) {
                $post   = $this->input->post();
                $warning_letters = $this->crud->reads("warning_letters", [], ["employee_id" => $post['employee_id'], "warning_letter" => $post['warning_letter']]);

                if(count($warning_letters) > 0){
                    show_error("Duplicate");
                }else{
                    $send = $this->crud->create('warning_letters', $post);
                    echo $send;
                }

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
            $send = $this->crud->update('warning_letters', ["id" => $id], $post);
            echo $send;
        } else {
            show_error("Cannot Process your request");
        }
    }

    //DELETE DATA
    public function delete()
    {
        $data = $this->input->post();
        $send = $this->crud->delete('warning_letters', $data);
        echo $send;
    }

    //PRINT & EXCEL DATA
    public function print($option = "")
    {
        if ($option == "excel") {
            $format  = date("Ymd");
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=data_warning_letters_$format.xls");
        }

        $filter_from = $this->input->get('filter_from');
        $filter_to = $this->input->get('filter_to');
        $filter_division = $this->input->get('filter_division');
        $filter_departement = $this->input->get('filter_departement');
        $filter_departement_sub = $this->input->get('filter_departement_sub');
        $filter_employee = $this->input->get('filter_employee');
        $filter_warning_letter = $this->input->get('filter_warning_letter');
        $filter_violation = $this->input->get('filter_violation');

        //Config
        $this->db->select('*');
        $this->db->from('config');
        $config = $this->db->get()->row();

        $this->db->select('a.*, b.name as employee_name, b.number as employee_number, b.date_sign, d.name as division_name, e.name as departement_name, f.name as departement_sub_name, c.name as violation_name');
        $this->db->from('warning_letters a');
        $this->db->join('employees b', 'a.employee_id = b.id');
        $this->db->join('violations c', 'a.violation_id = c.id');
        $this->db->join('divisions d', 'b.division_id = d.id');
        $this->db->join('departements e', 'b.departement_id = e.id');
        $this->db->join('departement_subs f', 'b.departement_sub_id = f.id');
        $this->db->where('a.deleted', 0);
        $this->db->where('a.issue_date >=', $filter_from);
        $this->db->where('a.issue_date <=', $filter_to);
        $this->db->like('b.id', $filter_employee);
        $this->db->like('b.division_id', $filter_division);
        $this->db->like('b.departement_id', $filter_departement);
        $this->db->like('b.departement_sub_id', $filter_departement_sub);
        $this->db->like('a.warning_letter', $filter_warning_letter);
        $this->db->like('a.violation_id', $filter_violation);
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
                            <small>DATA WARNING LETTERS</small>
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
                <th>Division</th>
                <th>Departement</th>
                <th>Departement Sub</th>
                <th>Warning Letter</th>
                <th>Issue Date</th>
                <th>Violation</th>
                <th>Remarks</th>
            </tr>';
        $no = 1;
        foreach ($records as $data) {
            if($data['warning_letter'] == "4"){
                $warning_letter = "TERMINATION";
            }else{
                $warning_letter = $data['warning_letter'];
            }

            $html .= '  <tr>
                            <td>' . $no . '</td>
                            <td>' . $data['employee_number'] . '</td>
                            <td>' . $data['employee_name'] . '</td>
                            <td>' . $data['division_name'] . '</td>
                            <td>' . $data['departement_name'] . '</td>
                            <td>' . $data['departement_sub_name'] . '</td>
                            <td>' . $warning_letter . '</td>
                            <td>' . $data['issue_date'] . '</td>
                            <td>' . $data['violation_name'] . '</td>
                            <td>' . $data['remarks'] . '</td>
                        </tr>';
            $no++;
        }

        $html .= '</table></body></html>';
        echo $html;
    }
}
