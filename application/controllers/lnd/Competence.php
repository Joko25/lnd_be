<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Competence extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load any models or libraries needed
        $this->load->model('CompetenceModel');
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
            $this->load->view('lnd/competence', $data);
        } else {
            redirect('error_session');
        }
    }

    public function datatables()
    {
        // Ambil parameter dari request
        $competence_id = $this->input->get('competenceId', true); // Sanitize input GET
        $page = $this->input->post('page');
        $rows = $this->input->post('rows');
        
        // Pagination
        $page   = isset($page) ? intval($page) : 1;
        $rows   = isset($rows) ? intval($rows) : 10;
        $offset = ($page - 1) * $rows;

        // Query Builder
        $this->db->start_cache(); // Cache query sebelum count_all_results
        $this->db->select('a.*, b.name as departement_name, c.name as sub_department_name');
        $this->db->from('lnd_competence a');
        $this->db->join('departements b', 'a.departementId = b.id', 'left');
        $this->db->join('departement_subs c', 'a.subDepartementId = c.id', 'left');
        
        if (!empty($competence_id)) {
            $this->db->like('a.competenceId', $competence_id);
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
        $data = $this->CompetenceModel->get_all_data();

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, [], 'Get Competence data failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get Competence data successfully');
        } 
    }

    public function get_detail($id) {
        $data = $this->CompetenceModel->get_detail_data($id);

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, null, 'Get Competence data failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get Competence data successfully');
        } 
    }

    public function create_data() {
        // Ambil request body secara manual
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);
        // Generate competenceId
        $idGenerateDate = $this->crud->autoidCreatedTime('lnd_competence');
        $data['competenceId'] = $idGenerateDate;
    
        // Validasi dan proses data
        if (!empty($data)) {
            $dataTemp = $this->CompetenceModel->insert_data($data);
            $this->response->send(ResponseStatus::CREATED, $dataTemp, 'Competence created successfully');
        } else {
            $this->response->send(ResponseStatus::BAD_REQUEST, null, 'Competence creation failed.');
        }
    }
    

    public function update_data($id) {
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);
        // $payloadId   = base64_decode($id);

        if (!empty($data)) {
            $dataTemp = $this->CompetenceModel->update_data($id, $data);
            $this->response->send(200, $dataTemp, 'Competence updated successfully');
        } else {
            $this->response->send(400, null, 'Competence updated failed.');
        }
    }

    public function delete_data($id) {
        $data = $this->CompetenceModel->get_detail_data($id);

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, null, 'Data not found');
        } else {
            $this->CompetenceModel->delete_data($id);
            $this->response->send(200, $id, 'Competence delete successfully');
        }
    }

    public function list()
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $competenceId = $this->input->get('competenceId') ? $this->input->get('competenceId') : "";
        $send = $this->crud->reads('lnd_competence', ["competenceId" => $post, "competenceId" => $competenceId]);
        echo json_encode($send);
    }
}