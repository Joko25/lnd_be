<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_source extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        // Load any models or libraries needed
        $this->load->model('MasterSourceModel');
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
            $this->load->view('lnd/master-source', $data);
        } else {
            redirect('error_session');
        }
    }

    public function datatables()
    {
        // Ambil parameter dari request
        $masterSourceId = $this->input->get('masterSourceId', true); // Sanitize input GET
        $page = $this->input->post('page');
        $rows = $this->input->post('rows');
        
        // Pagination
        $page   = isset($page) ? intval($page) : 1;
        $rows   = isset($rows) ? intval($rows) : 10;
        $offset = ($page - 1) * $rows;

        // Query Builder
        $this->db->start_cache(); // Cache query sebelum count_all_results
        $this->db->select('a.*, b.trainingActivity as trainingActivityName, c.name as competenceName, ROW_NUMBER() OVER (ORDER BY id) AS `index`');
        $this->db->from('lnd_master_source a');
        $this->db->join('lnd_training_activity b', 'a.trainingActivityId = b.id');
        $this->db->join('lnd_competence c', 'a.competenceId = c.id');
        
        if (!empty($masterSourceId)) {
            $this->db->like('a.masterSourceId', $masterSourceId);
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
        $data = $this->MasterSourceModel->get_all_data();

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, [], 'Get Master Source data failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get Master Source data successfully');
        } 
    }

    public function get_detail($id) {
        $data = $this->MasterSourceModel->get_detail_data($id);

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, null, 'Get Master Source data failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get Master Source data successfully');
        } 
    }

    public function create_data() {
        // Ambil request body secara manual
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);
        // Generate masterSourceId
        $idGenerateDate = $this->crud->autoidPrifix('lnd_master_source', 'masterSourceId', 'S'); 
        $data['masterSourceId'] = $idGenerateDate;

        // Validasi dan proses data
        if (!empty($data)) {
            $dataTemp = $this->MasterSourceModel->insert_data($data);
            $this->response->send(ResponseStatus::CREATED, $dataTemp, 'Master Source created successfully');
        } else {
            $this->response->send(ResponseStatus::BAD_REQUEST, null, 'Master Source creation failed.');
        }
    }
    

    public function update_data($id) {
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);
        // $payloadId   = base64_decode($id);

        if (!empty($data)) {
            $dataTemp = $this->MasterSourceModel->update_data($id, $data);
            $this->response->send(200, $dataTemp, 'Master Source updated successfully');
        } else {
            $this->response->send(400, null, 'Master Source updated failed.');
        }
    }

    public function delete_data($id) {
        $data = $this->MasterSourceModel->get_detail_data($id);

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, null, 'Data not found');
        } else {
            $this->MasterSourceModel->delete_data($id);
            $this->response->send(200, $id, 'Master Source delete successfully');
        }
    }

    public function list()
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $masterSourceId = $this->input->get('masterSourceId') ? $this->input->get('masterSourceId') : "";
        $send = $this->crud->reads('lnd_master_source', ["masterSourceId" => $post, "masterSourceId" => $masterSourceId]);
        echo json_encode($send);
    }

    
    // GET DATA TRAINING ACTIVITY
    public function readsTrainingActivity() 
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $send = $this->crud->reads('lnd_training_activity', ["trainingActivityId" => $post]);
        echo json_encode($send);
    }

    // GET DATA COMPTENCE
    public function readsCompetence() 
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $send = $this->crud->reads('lnd_competence', ["competenceId" => $post]);
        echo json_encode($send);
    }
}
