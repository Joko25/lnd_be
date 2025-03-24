<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curiculum extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load any models or libraries needed
        $this->load->model('CuriculumModel');
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

            $this->load->view('template/header', $data);
            $this->load->view('lnd/curiculum');
        } else {
            redirect('error_session');
        }
    }

    public function datatables() {
        // Ambil parameter dari request
        $curiculum_id = $this->input->get('curiculumId', true); // Sanitize input GET
        $page = $this->input->post('page');
        $rows = $this->input->post('rows');
        
        // Pagination
        $page   = isset($page) ? intval($page) : 1;
        $rows   = isset($rows) ? intval($rows) : 10;
        $offset = ($page - 1) * $rows;

        $this->db->start_cache(); // Cache query sebelum count_all_results
        $this->db->select('a.*, b.name as compentece_standard, c.trainingActivity as training_activity');
        $this->db->from('lnd_curriculum a');
        $this->db->join('lnd_competence b', 'a.competenceId = b.competenceId', 'left');
        $this->db->join('lnd_training_activity c', 'a.trainingActivityId = c.trainingActivityId', 'left');
        
        if (!empty($curiculum_id)) {
            $this->db->like('a.curiculumId', $curiculum_id);
        }
        $this->db->stop_cache();

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
        $data = $this->CuriculumModel->get_all_data();

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, [], 'Get Curiculum data failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get Curiculum data successfully');
        } 
    }

    public function get_detail($id) {
        $data = $this->CuriculumModel->get_detail_data($id);

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, null, 'Get Curiculum data failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get Curiculum data successfully');
        } 
    }

    public function create_data() {
        $rawInput = file_get_contents("php://input");
        $data = json_decode($rawInput, true);
        
        if (!is_array($data)) {
            $this->response->send(ResponseStatus::BAD_REQUEST, null, 'Invalid data format');
            return;
        }

        $idGenerateDate = $this->crud->autoidPrifix('lnd_curriculum', 'curiculumId', 'I');
        $data['curiculumId'] = $idGenerateDate;

        // Validasi field yang diperlukan
        $requiredFields = ['competenceId', 'trainingActivityId', 'indicators'];
        foreach ($requiredFields as $field) {
            if (!isset($data[$field]) || empty($data[$field])) {
                $this->response->send(ResponseStatus::BAD_REQUEST, null, $field . ' is required');
                return;
            }
        }

        $dataTemp = $this->CuriculumModel->insert_data($data);
        if ($dataTemp) {
            $this->response->send(ResponseStatus::CREATED, $dataTemp, 'Curiculum created successfully');
        } else {
            $this->response->send(ResponseStatus::BAD_REQUEST, null, 'Failed to create curriculum');
        }
    }

    public function update_data($id) {
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);

        if (!empty($data)) {
            $dataTemp = $this->CuriculumModel->update_data($id, $data);
            $this->response->send(200, $dataTemp, 'Curiculum updated successfully');
        } else {
            $this->response->send(400, null, 'Curiculum updated failed.');
        }
    }

    public function delete_data($id) {
        $data = $this->CuriculumModel->get_detail_data($id);

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, null, 'Data not found');
        } else {
            $this->CuriculumModel->delete_data($id);
            $this->response->send(200, $id, 'Curiculum delete successfully');
        }
    }

    public function list()
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $curiculumId = $this->input->get('curiculumId') ? $this->input->get('curiculumId') : "";
        $send = $this->crud->reads('lnd_curriculum', ["curiculumId" => $post, "curiculumId" => $curiculumId]);
        echo json_encode($send);
    }
}