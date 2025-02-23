<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training_Activity extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        // Load any models or libraries needed
        $this->load->model('TrainingActivityModel');
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
            $this->load->view('lnd/training-activity', $data);
        } else {
            redirect('error_session');
        }
    }

    public function datatables()
    {
        // Ambil parameter dari request
        $trainingActivityId = $this->input->get('trainingActivityId', true); // Sanitize input GET
        $page = $this->input->post('page');
        $rows = $this->input->post('rows');
        
        // Pagination
        $page   = isset($page) ? intval($page) : 1;
        $rows   = isset($rows) ? intval($rows) : 10;
        $offset = ($page - 1) * $rows;

        // Query Builder
        $this->db->start_cache(); // Cache query sebelum count_all_results
        $this->db->select('a.*, ROW_NUMBER() OVER (ORDER BY id) AS `index`');
        $this->db->from('lnd_training_activity a');
        
        if (!empty($trainingActivityId)) {
            $this->db->like('a.trainingActivityId', $trainingActivityId);
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
        $data = $this->TrainingActivityModel->get_all_data();

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, [], 'Get Training Activity data failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get Training Activity data successfully');
        } 
    }

    public function get_detail($id) {
        $data = $this->TrainingActivityModel->get_detail_data($id);

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, null, 'Get Training Activity data failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get Training Activity data successfully');
        } 
    }

    public function create_data() {
        // Ambil request body secara manual
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);
        // Generate trainingActivityId
        $idGenerateDate = $this->crud->autoidPrifix('lnd_training_activity', 'trainingActivityId', 'T'); 
        $data['trainingActivityId'] = $idGenerateDate;

        // Pembuatan temporary Indexing
        $this->db->select_max('index');
        $query = $this->db->get('lnd_training_activity');
        $last_number = $query->row()->index ?? 0; // Jika kosong, mulai dari 1

        // Tambahkan nilai record_number baru
        $data['index'] = $last_number + 1;

        // Validasi dan proses data
        if (!empty($data)) {
            $dataTemp = $this->TrainingActivityModel->insert_data($data);
            $this->response->send(ResponseStatus::CREATED, $dataTemp, 'Training Activity created successfully');
        } else {
            $this->response->send(ResponseStatus::BAD_REQUEST, null, 'Training Activity creation failed.');
        }
    }
    

    public function update_data($id) {
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);
        // $payloadId   = base64_decode($id);

        if (!empty($data)) {
            $dataTemp = $this->TrainingActivityModel->update_data($id, $data);
            $this->response->send(200, $dataTemp, 'Training Activity updated successfully');
        } else {
            $this->response->send(400, null, 'Training Activity updated failed.');
        }
    }

    public function delete_data($id) {
        $data = $this->TrainingActivityModel->get_detail_data($id);

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, null, 'Data not found');
        } else {
            $this->TrainingActivityModel->delete_data($id);
            $this->response->send(200, $id, 'Training Activity delete successfully');
        }
    }

    public function list()
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $trainingActivityId = $this->input->get('trainingActivityId') ? $this->input->get('trainingActivityId') : "";
        $send = $this->crud->reads('lnd_training_activity', ["trainingActivityId" => $post, "trainingActivityId" => $trainingActivityId]);
        echo json_encode($send);
    }
}
