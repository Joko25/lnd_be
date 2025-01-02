<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');
class Setup_curiculum extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load any models or libraries needed
        $this->load->model('SetupCuriculumModel');
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
            $this->load->view('lnd/setup-curiculum', $data);
        } else {
            redirect('error_session');
        }
    }

    public function datatables()
    {
        // Ambil parameter dari request
        $setup_curiculum_id = $this->input->get('setupCuriculumId', true); // Sanitize input GET
        $page = $this->input->post('page');
        $rows = $this->input->post('rows');
        
        // Pagination
        $page   = isset($page) ? intval($page) : 1;
        $rows   = isset($rows) ? intval($rows) : 10;
        $offset = ($page - 1) * $rows;

        // Query Builder
        $this->db->start_cache(); // Cache query sebelum count_all_results
        $this->db->select('a.*, lc.*, lb.*, b.name as departement_name, c.name as sub_department_name');
        $this->db->from('lnd_setup_curiculum a');
        $this->db->join('departements b', 'a.departmentId = b.id', 'left');
        $this->db->join('departement_subs c', 'a.subId = c.id', 'left');
        $this->db->join('lnd_competence lc', 'a.competenceId = lc.competenceId', 'left');
        $this->db->join('lnd_curiculum lb', 'a.curriculumId = lb.curiculumId', 'left');
        
        // if (!empty($competence_id)) {
        //     $this->db->like('a.setupCompetenceId', $competence_id);
        // }
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
        $data = $this->SetupCuriculumModel->get_all_data();

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, [], 'Get Setup Curiculum data failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get Setup Curiculum data successfully');
        } 
    }

    public function get_detail($id) {
        $data = $this->SetupCuriculumModel->get_detail_data($id);

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, null, 'Get Setup Curiculum data failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get Setup Curiculum data successfully');
        } 
    }

    public function create_data() {
        // Ambil request body secara manual
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);
        $idGenerateDate = $this->crud->autoidCreatedTime('lnd_setup_curiculum');
        $data['setupCuriculumId'] = $idGenerateDate;
    
        // Validasi dan proses data
        if (!empty($data)) {
            $dataTemp = $this->SetupCuriculumModel->insert_data($data);
            $this->response->send(ResponseStatus::CREATED, $dataTemp, 'Setup Curiculum created successfully');
        } else {
            $this->response->send(ResponseStatus::BAD_REQUEST, null, 'Setup Curiculum creation failed.');
        }
    }
    

    public function update_data($id) {
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);
        // $payloadId   = base64_decode($id);

        if (!empty($data)) {
            $dataTemp = $this->SetupCuriculumModel->update_data($id, $data);
            $this->response->send(200, $dataTemp, 'Setup curiculum updated successfully');
        } else {
            $this->response->send(400, null, 'Setup curiculum updated failed.');
        }
    }

    public function delete_data($id) {
        $data = $this->SetupCuriculumModel->get_detail_data($id);

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, null, 'Data not found');
        } else {
            $this->SetupCuriculumModel->delete_data($id);
            $this->response->send(200, $id, 'Setup curiculum delete successfully');
        }
    }

    public function list()
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $setup_curiculum_id = $this->input->get('setupCuriculumId') ? $this->input->get('setupCuriculumId') : "";
        $send = $this->crud->reads('lnd_setup_curiculum', ["setupCuriculumId" => $post, "setupCuriculumId" => $setup_curiculum_id]);
        echo json_encode($send);
    }
}