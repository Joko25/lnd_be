<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Method_Training extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        // Load any models or libraries needed
        $this->load->model('MethodTrainingModel');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('crud');

        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
        header('Access-Control-Allow-Headers: Content-Type, Authorization');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->username != "") {
            $data['config'] = $this->crud->read('config');
            $data['session_name'] = $this->session->name;
            $data['button'] = $this->getbutton($this->id_menu());

            $this->load->view('template/header');
            $this->load->view('lnd/method-training', $data);
        } else {
            redirect('error_session');
        }
    }

    public function datatables()
    {
        // Ambil parameter dari request
        $methodTrainingId = $this->input->get('methodTrainingId', true); // Sanitize input GET
        $page = $this->input->post('page');
        $rows = $this->input->post('rows');
        
        // Pagination
        $page   = isset($page) ? intval($page) : 1;
        $rows   = isset($rows) ? intval($rows) : 10;
        $offset = ($page - 1) * $rows;

        // Query Builder
        $this->db->start_cache(); // Cache query sebelum count_all_results
        $this->db->select('a.*, ROW_NUMBER() OVER (ORDER BY id) AS `index`');
        $this->db->from('lnd_method_training a');
        
        if (!empty($methodTrainingId)) {
            $this->db->like('a.methodTrainingId', $methodTrainingId);
        }
        $this->db->stop_cache(); // Stop caching the query

        // Hitung total data (tanpa limit dan offset)
        $totalRows = $this->db->count_all_results();

        // Ambil data dengan limit dan offset
        $this->db->limit($rows, $offset);
        $records = $this->db->get()->result_array();
        $this->db->flush_cache(); // Hapus cache query

        // Mapping Data
        $result = [
            'total' => $totalRows,
            'rows' => $records
        ];

        // Kirim sebagai JSON
        echo json_encode($result);
    }

    public function get_data() {
        $data = $this->MethodTrainingModel->get_all_data();

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, [], 'Get Method Training data failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get Method Training data successfully');
        } 
    }

    public function get_detail($id) {
        $data = $this->MethodTrainingModel->get_detail_data($id);

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, null, 'Get Method Training data failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get Method Training data successfully');
        } 
    }

    public function create_data() {
        // Ambil request body secara manual
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);
        // Generate methodTrainingId
        $idGenerateDate = $this->crud->autoidPrifix('lnd_method_training', 'methodTrainingId', 'MT'); 
        $data['methodTrainingId'] = $idGenerateDate;

        // Validasi dan proses data
        if (!empty($data)) {
            $dataTemp = $this->MethodTrainingModel->insert_data($data);
            $this->response->send(ResponseStatus::CREATED, $dataTemp, 'Method Training created successfully');
        } else {
            $this->response->send(ResponseStatus::BAD_REQUEST, null, 'Method Training creation failed.');
        }
    }
    

    public function update_data($id) {
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);
        // $payloadId   = base64_decode($id);

        if (!empty($data)) {
            $dataTemp = $this->MethodTrainingModel->update_data($id, $data);
            $this->response->send(200, $dataTemp, 'Method Training updated successfully');
        } else {
            $this->response->send(400, null, 'Method Training updated failed.');
        }
    }

    public function delete_data($id) {
        $data = $this->MethodTrainingModel->get_detail_data($id);

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, null, 'Data not found');
        } else {
            $this->MethodTrainingModel->delete_data($id);
            $this->response->send(200, $id, 'Method Training delete successfully');
        }
    }

    public function list()
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $methodTrainingId = $this->input->get('methodTrainingId') ? $this->input->get('methodTrainingId') : "";
        $send = $this->crud->reads('lnd_method_training', ["methodTrainingId" => $post, "methodTrainingId" => $methodTrainingId]);
        echo json_encode($send);
    }
}
