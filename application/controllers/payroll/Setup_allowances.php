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

        //VALIDASI FORM
        $this->form_validation->set_rules('amount', 'Amount', 'required|min_length[1]|max_length[20]|is_unique[setup_allowances.amount]');
    }

    //HALAMAN UTAMA
    public function index()
    {
        if (empty($this->session->username)) {
            redirect('error_session');
        } elseif ($this->checkuserAccess($this->id_menu()) > 0) {
            $data['button'] = $this->getbutton($this->id_menu());

            $this->load->view('template/header', $data);
            $this->load->view('payroll/setup_allowances');
        } else {
            redirect('error_access');
        }
    }

    //GET DATA
    public function reads()
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $send = $this->crud->reads('setup_allowances', ["name" => $post]);
        echo json_encode($send);
    }

    //GET DATATABLES
    public function datatables()
    {
        if ($this->input->post()) {
            $filter_division = $this->input->get('filter_division');
            $filter_departement = $this->input->get('filter_departement');
            $filter_departement_sub = $this->input->get('filter_departement_sub');
            $filter_employee = $this->input->get('filter_employee');
            $filter_allowance = $this->input->get('filter_allowance');

            $page = $this->input->post('page');
            $rows = $this->input->post('rows');
            //Pagination 1-10
            $page   = isset($page) ? intval($page) : 1;
            $rows   = isset($rows) ? intval($rows) : 10;
            $offset = ($page - 1) * $rows;
            $result = array();
            //Select Query
            $this->db->select('a.*, b.name as allowance_name, c.number as employee_number, c.name as employee_name, d.name as division_name, e.name as departement_name, f.name as departement_sub_name');
            $this->db->from('setup_allowances a');
            $this->db->join('allowances b', 'a.allowance_id = b.id');
            $this->db->join('employees c', 'a.employee_id = c.id');
            $this->db->join('divisions d', 'c.division_id = d.id');
            $this->db->join('departements e', 'c.departement_id = e.id');
            $this->db->join('departement_subs f', 'c.departement_sub_id = f.id');
            $this->db->where('a.deleted', 0);
            $this->db->where('c.deleted', 0);
            $this->db->where('c.status', 0);
            $this->db->like('b.id', $filter_allowance);
            $this->db->like('c.id', $filter_employee);
            $this->db->like('d.id', $filter_division);
            $this->db->like('e.id', $filter_departement);
            $this->db->like('f.id', $filter_departement_sub);
            $this->db->order_by('c.name', 'ASC');
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
                $setup_allowance = $this->crud->read("setup_allowances", [], ["allowance_id" => $post['allowance_id'], "employee_id" => $post['employee_id']]);

                if (empty($setup_allowance)) {
                    $send   = $this->crud->create('setup_allowances', $post);
                    echo $send;
                } else {
                    show_error("Employee and Allowance has been created");
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
            $send = $this->crud->update('setup_allowances', ["id" => $id], $post);
            echo $send;
        } else {
            show_error("Cannot Process your request");
        }
    }

    //DELETE DATA
    public function delete()
    {
        $data = $this->input->post();
        $send = $this->crud->delete('setup_allowances', $data);
        echo $send;
    }

    public function upload()
    {
        error_reporting(0);
        require_once 'assets/vendors/excel_reader2.php';
        $target = basename($_FILES['file_upload']['name']);
        move_uploaded_file($_FILES['file_upload']['tmp_name'], $target);
        chmod($_FILES['file_upload']['name'], 0777);
        $file = $_FILES['file_upload']['name'];
        $data = new Spreadsheet_Excel_Reader($file, false);
        $total_row = $data->rowcount($sheet_index = 0);

        for ($i = 3; $i <= $total_row; $i++) {
            $datas[] = array(
                'employee_number' => $data->val($i, 2),
                'allowance_number' => $data->val($i, 3),
                'amount' => $data->val($i, 4)
            );
        }

        $datas['total'] = count($datas);
        echo json_encode($datas);
        unlink($_FILES['file_upload']['name']);
    }

    public function uploadclearFailed()
    {
        @unlink('failed/setup_allowances.txt');
    }

    public function uploadcreateFailed()
    {
        if ($this->input->post()) {
            $message = $this->input->post('message');
            $textFailed = fopen('failed/setup_allowances.txt', 'a');
            fwrite($textFailed, $message . "\n");
            fclose($textFailed);
        }
    }

    public function uploadDownloadFailed()
    {
        $file = "failed/setup_allowances.txt";

        header('Content-Description: File Failed');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . @filesize($file));
        header("Content-Type: text/plain");
        @readfile($file);
    }

    public function uploadcreate()
    {
        if ($this->input->post()) {
            $data = $this->input->post('data');
            $employees = $this->crud->read('employees', ["number" => $data['employee_number'], "status" => 0]);
            $allowances = $this->crud->read('allowances', ["number" => $data['allowance_number']]);

            if (!empty($employees)) {
                if (!empty($allowances)) {
                    $this->db->select('*');
                    $this->db->from('setup_allowances');
                    $this->db->where("employee_id", $employees->id);
                    $this->db->where("allowance_id", $allowances->id);
                    $setup_allowance = $this->db->get()->row();

                    if (!empty($setup_allowance)) {
                        echo json_encode(array("title" => "Available", "message" => $employees->name . " and " . $allowances->name . " has been created", "theme" => "error"));
                    } else {
                        $post = array(
                            'employee_id' => $employees->id,
                            'allowance_id' => $allowances->id,
                            'amount' => $data['amount']
                        );

                        $send = $this->crud->create('setup_allowances', $post);
                        echo $send;
                    }
                } else {
                    echo json_encode(array("title" => "Not Found", "message" => $data['allowance_number'] . " Allowance ID Not Found", "theme" => "error"));
                }
            } else {
                echo json_encode(array("title" => "Not Found", "message" => $data['employee_number'] . " Employee ID Not Found", "theme" => "error"));
            }
        }
    }

    //PRINT & EXCEL DATA
    public function print($option = "")
    {
        if ($option == "excel") {
            $format  = date("Ymd");
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=setup_allowances_$format.xls");
        }

        $filter_division = $this->input->get('filter_division');
        $filter_departement = $this->input->get('filter_departement');
        $filter_departement_sub = $this->input->get('filter_departement_sub');
        $filter_employee = $this->input->get('filter_employee');
        $filter_allowance = $this->input->get('filter_allowance');

        //Config
        $this->db->select('*');
        $this->db->from('config');
        $config = $this->db->get()->row();

        $this->db->select('a.*, b.name as allowance_name, c.number as employee_number, c.name as employee_name, d.name as division_name, e.name as departement_name, f.name as departement_sub_name');
        $this->db->from('setup_allowances a');
        $this->db->join('allowances b', 'a.allowance_id = b.id');
        $this->db->join('employees c', 'a.employee_id = c.id');
        $this->db->join('divisions d', 'c.division_id = d.id');
        $this->db->join('departements e', 'c.departement_id = e.id');
        $this->db->join('departement_subs f', 'c.departement_sub_id = f.id');
        $this->db->where('a.deleted', 0);
        $this->db->where('c.deleted', 0);
        $this->db->where('c.status', 0);
        $this->db->like('b.id', $filter_allowance);
        $this->db->like('c.id', $filter_employee);
        $this->db->like('d.id', $filter_division);
        $this->db->like('e.id', $filter_departement);
        $this->db->like('f.id', $filter_departement_sub);
        $this->db->order_by('c.name', 'ASC');
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
                            <small>SETUP ALLOWANCE</small>
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
                <th>Allowance</th>
                <th>Amount</th>
                <th>Description</th>
            </tr>';
        $no = 1;
        foreach ($records as $data) {
            $html .= '<tr>
                    <td>' . $no . '</td>
                    <td>' . $data['employee_number'] . '</td>
                    <td>' . $data['employee_name'] . '</td>
                    <td>' . $data['division_name'] . '</td>
                    <td>' . $data['departement_name'] . '</td>
                    <td>' . $data['departement_sub_name'] . '</td>
                    <td>' . $data['allowance_name'] . '</td>
                    <td>' . number_format($data['amount']) . '</td>
                    <td>' . $data['description'] . '</td>';
            $no++;
        }

        $html .= '</table></body></html>';
        echo $html;
    }
}
