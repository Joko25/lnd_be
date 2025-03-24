<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_training extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        // Load any models or libraries needed
        $this->load->model('RequestTrainingModel');
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
            $this->load->view('lnd/request-training', $data);
        } else {
            redirect('error_session');
        }
    }

    public function datatables()
    {
        // Ambil parameter dari request
        // $competenceId = $this->input->get('competenceId', true); // Sanitize input GET
        // $requestTrainingId = $this->input->get('id', true); // Sanitize input GET
        $page = $this->input->post('page');
        $rows = $this->input->post('rows');
        
        // Pagination
        $page   = isset($page) ? intval($page) : 1;
        $rows   = isset($rows) ? intval($rows) : 10;
        $offset = ($page - 1) * $rows;

        // Query Builder
        $this->db->start_cache(); // Cache query sebelum count_all_results
        $this->db->select('a.*, a.status as statusTraining, a.status as statusApproval, rth.approvedBy, rth.approvedTime');
        $this->db->from('lnd_request_training a');
        $this->db->join('lnd_request_training_approvals_history rth', 'a.id = rth.trainingRequestId');
        
        // if (!empty($requestTrainingId)) {
        //     $this->db->like('a.id', $requestTrainingId);
        // }
        // if (!empty($competenceId)) {
        //     $this->db->like('a.competenceId', $competenceId);
        // }
        $this->db->stop_cache(); // Stop caching the query
        
        // Hitung total data (tanpa limit dan offset)
        $totalRows = $this->db->count_all_results();
        
        // Ambil data dengan limit dan offset
        // $this->db->order_by('a.index', 'ASC');
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
        $data = $this->RequestTrainingModel->get_all_data();

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, [], 'Get Request Training data failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get Request Training data successfully');
        } 
    }

    public function get_detail($id) {
        $data = $this->RequestTrainingModel->get_detail_data($id);

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, null, 'Get Request Training data failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get Request Training data successfully');
        } 
    }

    public function create_data() {
        // Ambil request body secara manual
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);
        // Generate trainingActivityId
        $idGenerateDate = $this->crud->autoidPrifix('lnd_request_training', 'requestTrainingId', 'T'); 
        $data['requestTrainingId'] = $idGenerateDate;

        // Validasi dan proses data
        if (!empty($data)) {
            $dataTemp = $this->RequestTrainingModel->insert_data($data);
            $this->response->send(ResponseStatus::CREATED, $dataTemp, 'Request Training created successfully');
        } else {
            $this->response->send(ResponseStatus::BAD_REQUEST, null, 'Request Training creation failed.');
        }
    }
    

    public function update_data($id) {
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);
        // $payloadId   = base64_decode($id);

        if (!empty($data)) {
            $dataTemp = $this->RequestTrainingModel->update_data($id, $data);
            $this->response->send(200, $dataTemp, 'Request Training updated successfully');
        } else {
            $this->response->send(400, null, 'Request Training updated failed.');
        }
    }

    public function delete_data($id) {
        $data = $this->RequestTrainingModel->get_detail_data($id);

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, null, 'Data not found');
        } else {
            $this->RequestTrainingModel->delete_data($id);
            $this->response->send(200, $id, 'Request Training delete successfully');
        }
    }

    public function list()
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $requestTrainingId = $this->input->get('requestTrainingId') ? $this->input->get('requestTrainingId') : "";
        $send = $this->crud->reads('lnd_request_training', ["requestTrainingId" => $post, "requestTrainingId" => $requestTrainingId]);
        // $queryTrainingActivity = $this->crud->query("SELECT a.*, b.name as competenceName FROM lnd_request_training a JOIN lnd_competence b ON a.competenceId = b.id ");
        echo json_encode($send);
    }

    public function detailTrainee() 
    {
        $trainingRequestId = $this->input->get('trainingRequestId', true); // Sanitize input GET

        $this->db->start_cache(); // Cache query sebelum count_all_results
        $this->db->select('e.fullName, e.national_id, e.date_sign, e.position, e.departement, e.departement_subs');
        $this->db->from('lnd_request_training_trainee e');
        $this->db->where('e.trainingRequestId', $trainingRequestId);
        // if (!empty($requestTrainingId)) {
        //     $this->db->like('a.id', $requestTrainingId);
        // }
        // if (!empty($competenceId)) {
        //     $this->db->like('a.competenceId', $competenceId);
        // }
        $this->db->stop_cache(); // Stop caching the query
        
        // Hitung total data (tanpa limit dan offset)
        $totalRows = $this->db->count_all_results();
        
        // Ambil data dengan limit dan offset
        // $this->db->order_by('a.index', 'ASC');
        // $this->db->limit($rows, $offset);
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
}