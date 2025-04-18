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

    public function datatables()
    {
        $curriculum_id = $this->input->get('curriculumId', true); // optional filter by curriculum_id
        $page = $this->input->post('page');
        $rows = $this->input->post('rows');

        $page   = isset($page) ? intval($page) : 1;
        $rows   = isset($rows) ? intval($rows) : 10;
        $offset = ($page - 1) * $rows;

        $this->db->start_cache();

        $this->db->select('
            a.id as curriculum_id,
            a.curriculum_id,
            a.competence_standard,
            b.id as training_id,
            b.training_activity,
            c.id as indicator_id,
            c.indicator_name,
            a.*,
            d.trainingActivity AS activityName,
        ');
        $this->db->from('lnd_curriculum a');
        $this->db->join('lnd_curriculum_training_activity b', 'a.id = b.competence_id', 'left');
        $this->db->join('lnd_curriculum_indicator c', 'b.id = c.training_id', 'left');
        $this->db->join('lnd_training_activity d', 'b.training_activity = d.id', 'left'); // join ke master activity

        if (!empty($curriculum_id)) {
            $this->db->where('a.curriculum_id', $curriculum_id);
        }

        $this->db->stop_cache();

        // Hitung total (tanpa LIMIT)
        $total = $this->db->count_all_results();

        // Data paginasi
        $this->db->limit($rows, $offset);
        $query = $this->db->get()->result_array();

        $this->db->flush_cache();

        $result = [
            'total' => $total,
            'rows'  => $query
        ];

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

    public function save()
    {
        // Ambil JSON dari frontend
        $json = $this->input->post('data');
        $data = json_decode($json, true);
        $curriculum_id = $this->crud->autoidPrifix('lnd_curriculum', 'curriculum_id', 'I');

        $this->CuriculumModel->save_curriculum($curriculum_id, $data);
        echo json_encode(['status' => 'success']);

        
    }

    public function get_curriculum_list()
    {
        $this->load->model('Curriculum_model');
        $result = $this->CuriculumModel->get_curriculum_list();

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
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