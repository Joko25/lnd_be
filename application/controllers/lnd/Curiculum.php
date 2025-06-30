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
            e.name AS competenceName
        ');
        $this->db->from('lnd_curriculum a');
        $this->db->join('lnd_curriculum_training_activity b', 'a.id = b.competence_id', 'left');
        $this->db->join('lnd_curriculum_indicator c', 'b.id = c.training_id', 'left');
        $this->db->join('lnd_training_activity d', 'b.training_activity = d.id', 'left'); // join ke master activity
        $this->db->join('lnd_competence e', 'e.competenceId = a.competence_standard', 'left'); // join ke master activity

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
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(404)
            ->set_output(json_encode([
                'code' => 404,
                'status' => ResponseStatus::NOT_FOUND,
                'data' => null,
                'message' => 'Get Curiculum data failed'
            ]));
        } else {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'code' => 200,
                'status' => ResponseStatus::SUCCESS,
                'data' => $data,
                'message' => 'Get Curiculum data successfully.'
            ]));
        } 
    }

    public function get_detail($id) {
        $data = $this->CuriculumModel->get_detail_data($id);

        if(empty($data)) {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(404)
            ->set_output(json_encode([
                'code' => 404,
                'status' => ResponseStatus::NOT_FOUND,
                'data' => null,
                'message' => 'Get Curiculum data failed'
            ]));
        } else {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'code' => 200,
                'status' => ResponseStatus::SUCCESS,
                'data' => $data,
                'message' => 'Get Curiculum data successfully'
            ]));
        } 
    }

    public function save()
    {
        // Ambil JSON dari frontend
        $json = $this->input->post('data');
        $data = json_decode($json, true);
        $curriculum_id = $this->crud->autoidPrifix('lnd_curriculum', 'curriculum_id', 'I');

        $dataTemp = $this->CuriculumModel->save_curriculum($curriculum_id, $data);
        
        if ($dataTemp) {
            $response = [
                'code' => 201,
                'status' => 'success',
                'message' => 'Curicullum created successfully',
                'data' => $dataTemp
            ];
        } else {
            $response = [
                'code' => 400, 
                'status' => 'error',
                'message' => 'Curicullum creation failed',
                'data' => null
            ];
        }
        
        echo json_encode($response);
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
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(400)
            ->set_output(json_encode([
                'code' => 400,
                'status' => ResponseStatus::BAD_REQUEST,
                'data' => null,
                'message' => 'Invalid data format'
            ]));
            return;
        }

        $idGenerateDate = $this->crud->autoidPrifix('lnd_curriculum', 'curiculumId', 'I');
        $data['curiculumId'] = $idGenerateDate;

        // Validasi field yang diperlukan
        $requiredFields = ['competenceId', 'trainingActivityId', 'indicators'];
        foreach ($requiredFields as $field) {
            if (!isset($data[$field]) || empty($data[$field])) {
                $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output(json_encode([
                    'code' => 400,
                    'status' => ResponseStatus::BAD_REQUEST,
                    'data' => null,
                    'message' => $field . ' is required'
                ]));
                return;
            }
        }

        $dataTemp = $this->CuriculumModel->insert_data($data);
        if ($dataTemp) {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(201)
            ->set_output(json_encode([
                'code' => 201,
                'status' => ResponseStatus::CREATED,
                'data' => null,
                'message' => 'Curiculum created successfully'
            ]));
        } else {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(400)
            ->set_output(json_encode([
                'code' => 400,
                'status' => ResponseStatus::BAD_REQUEST,
                'data' => null,
                'message' => 'Failed to create curriculum'
            ]));
        }
    }

    public function update_data($id) {
        $raw = file_get_contents('php://input');
        // $json = $this->input->post('data');
        // Jika isinya dalam bentuk "data=....", decode dari format urlencoded
        parse_str($raw, $output);
        $jsonData = isset($output['data']) ? $output['data'] : null;

        // Fallback: jika format JSON biasa
        if (!$jsonData) {
            $jsonData = $raw;
        }
        $data = json_decode($jsonData, true);

        if (!$data) {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(400)
            ->set_output(json_encode([
                'code' => 400,
                'status' => ResponseStatus::BAD_REQUEST,
                'data' => null,
                'message' => 'Invalid data format'
            ]));
        }

        $dataTemp = $this->CuriculumModel->update_curriculum($id, $data);
        if ($dataTemp) {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'code' => 200,
                'status' => ResponseStatus::SUCCESS,
                'data' => null,
                'message' => 'Curiculum updated successfully'
            ]));
        } else {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(400)
            ->set_output(json_encode([
                'code' => 400,
                'status' => ResponseStatus::BAD_REQUEST,
                'data' => null,
                'message' => 'Curiculum update failed'
            ]));
        }
    }

    public function get_curiculum_by_id($curriculum_id)
    {
        $data = $this->CuriculumModel->get_curriculum_detail($curriculum_id);

        echo json_encode([
            'success' => true,
            'data' => $data
        ]);
    }

    public function delete_data($id) {
        $data = $this->CuriculumModel->get_curriculum_detail($id);

        if(empty($data)) {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(404)
            ->set_output(json_encode([
                'code' => 404,
                'status' => ResponseStatus::NOT_FOUND,
                'data' => null,
                'message' => 'Data not found'
            ]));
        } else {
            $this->CuriculumModel->delete_curriculum($id);
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'code' => 200,
                'status' => ResponseStatus::SUCCESS,
                'data' => null,
                'message' => 'Curiculum delete successfully'
            ]));
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