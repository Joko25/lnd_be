<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');

class Account_coa extends CI_Controller
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
        $this->form_validation->set_rules('departement_id', 'Departement', 'required|min_length[1]|max_length[30]');
    }

    //HALAMAN UTAMA
    public function index()
    {
        if (empty($this->session->username)) {
            redirect('error_session');
        } elseif ($this->checkuserAccess($this->id_menu()) > 0) {
            $data['button'] = $this->getbutton($this->id_menu());

            $this->load->view('template/header', $data);
            $this->load->view('payroll/account_coa');
        } else {
            redirect('error_access');
        }
    }

    //GET DATA
    public function reads()
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $send = $this->crud->reads('account_coa', ["name" => $post]);
        echo json_encode($send);
    }

    //GET DATATABLES
    public function datatables()
    {
        if ($this->input->post()) {
            $filters = json_decode($this->input->post('filterRules'));
            $page = $this->input->post('page');
            $rows = $this->input->post('rows');
            //Pagination 1-10
            $page   = isset($page) ? intval($page) : 1;
            $rows   = isset($rows) ? intval($rows) : 10;
            $offset = ($page - 1) * $rows;
            $result = array();
            //Select Query
            $this->db->select('a.*, b.name as departement_name, c.name as position_name, d.name as contract_name, e.name as account_name');
            $this->db->from('account_coa a');
            $this->db->join('departements b', 'a.departement_id = b.id');
            $this->db->join('positions c', 'a.position_id = c.id');
            $this->db->join('contracts d', 'a.contract_id = d.id');
            $this->db->join('accounts e', 'a.account_id = e.id');
            $this->db->where('a.deleted', 0);
            if (@count($filters) > 0) {
                foreach ($filters as $filter) {
                    if($filter->field == "departement_name"){
                        $this->db->like("b.name", $filter->value);
                    }else if($filter->field == "position_name"){
                        $this->db->like("c.name", $filter->value);
                    }else if($filter->field == "contract_name"){
                        $this->db->like("d.name", $filter->value);
                    }else if($filter->field == "account_name"){
                        $this->db->like("e.name", $filter->value);
                    }else{
                        $this->db->like("a." . $filter->field, $filter->value);
                    }
                }
            }
            $this->db->order_by('b.name', 'ASC');
            $this->db->order_by('c.name', 'ASC');
            $this->db->order_by('d.name', 'ASC');
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
    }

    //CREATE DATA
    public function create()
    {
        if ($this->input->post()) {
            if ($this->form_validation->run() == TRUE) {
                $post   = $this->input->post();

                $account_coa = $this->crud->reads("account_coa", [], [
                    "departement_id" => $post['departement_id'],
                    "position_id" => $post['position_id'],
                    "contract_id" => $post['contract_id'],
                ]);
    
                if(count($account_coa) > 0){
                    show_error("Duplicate Data", 200);
                }else{
                    $send   = $this->crud->create('account_coa', $post);
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

            $send = $this->crud->update('account_coa', ["id" => $id], $post);
            echo $send;
        } else {
            show_error("Cannot Process your request");
        }
    }

    //DELETE DATA
    public function delete()
    {
        $data = $this->input->post();
        $send = $this->crud->delete('account_coa', $data);
        echo $send;
    }

    //PRINT & EXCEL DATA
    public function print($option = "")
    {
        if ($option == "excel") {
            $format  = date("Ymd");
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=account_coa_$format.xls");
        }

        //Config
        $this->db->select('*');
        $this->db->from('config');
        $config = $this->db->get()->row();

        $this->db->select('a.*, b.name as departement_name, c.name as position_name, d.name as contract_name, e.name as account_name');
        $this->db->from('account_coa a');
        $this->db->join('departements b', 'a.departement_id = b.id');
        $this->db->join('positions c', 'a.position_id = c.id');
        $this->db->join('contracts d', 'a.contract_id = d.id');
        $this->db->join('accounts e', 'a.account_id = e.id');
        $this->db->where('a.deleted', 0);
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
                            <small>CHART OF ACCOUNT PAYROLL</small>
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
                <th>Departement</th>
                <th>Position</th>
                <th>Employee Type</th>
                <th>Account Name</th>
                <th>Job Type</th>
            </tr>';
        $no = 1;
        foreach ($records as $data) {
            $html .= '  <tr>
                            <td>' . $no . '</td>
                            <td>' . $data['departement_name'] . '</td>
                            <td>' . $data['position_name'] . '</td>
                            <td>' . $data['contract_name'] . '</td>
                            <td>' . $data['account_name'] . '</td>
                            <td>' . $data['job_type'] . '</td>
                        </tr>';
            $no++;
        }

        $html .= '</table></body></html>';
        echo $html;
    }
}
