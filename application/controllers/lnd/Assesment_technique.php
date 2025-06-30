<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assesment_technique extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load any models or libraries needed
        $this->load->model('AssesmentTechniqueModel');
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
            $this->load->view('lnd/assesment-technique', $data);
        } else {
            redirect('error_session');
        }
    }

    public function datatables()
    {
        // Ambil parameter dari request
        $competence_id = $this->input->get('assesmentId', true); // Sanitize input GET
        $page = $this->input->post('page');
        $rows = $this->input->post('rows');
        
        // Pagination
        $page   = isset($page) ? intval($page) : 1;
        $rows   = isset($rows) ? intval($rows) : 10;
        $offset = ($page - 1) * $rows;

        // Query Builder
        $this->db->start_cache(); // Cache query sebelum count_all_results
        $this->db->select('a.*, ROW_NUMBER() OVER (ORDER BY id) AS `index`');
        $this->db->from('lnd_assesment_technique a');
        
        if (!empty($competence_id)) {
            $this->db->like('a.assesmentId', $competence_id);
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
        $data = $this->AssesmentTechniqueModel->get_all_data();

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, [], 'Get assesment tehnique data failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get assesment tehnique data successfully');
        } 
    }

    public function get_detail($id) {
        $data = $this->AssesmentTechniqueModel->get_detail_data($id);

        if(empty($data)) {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(404)
            ->set_output(json_encode([
                'code' => 404,
                'status' => ResponseStatus::NOT_FOUND,
                'data' => null,
                'message' => 'Get Competence data failed'
            ]));
        } else {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'code' => 200,
                'status' => ResponseStatus::SUCCESS,
                'data' => $data,
                'message' => 'Get Competence data successfully'
            ]));
        } 
    }

    public function create_data() {
        // Ambil request body secara manual
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);
        // Generate assesmentId
        $idGenerateDate = $this->crud->autoidPrifix('lnd_assesment_technique', 'assesmentId', 'AT'); 
        $data['assesmentId'] = $idGenerateDate;
        // Validasi dan proses data
        if (!empty($data)) {
            $dataTemp = $this->AssesmentTechniqueModel->insert_data($data);
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'code' => 200,
                'status' => ResponseStatus::CREATED,
                'data' => $data,
                'message' => 'Competence created successfully'
            ]));
        } else {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(400)
            ->set_output(json_encode([
                'code' => 400,
                'status' => ResponseStatus::BAD_REQUEST,
                'data' => null,
                'message' => 'Competence creation failed.'
            ]));
        }
    }
    

    public function update_data($id) {
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);
        // $payloadId   = base64_decode($id);

        if (!empty($data)) {
            $dataTemp = $this->AssesmentTechniqueModel->update_data($id, $data);
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'code' => 200,
                'status' => ResponseStatus::SUCCESS,
                'data' => null,
                'message' => 'Competence updated successfully'
            ]));
        } else {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(400)
            ->set_output(json_encode([
                'code' => 400,
                'status' => ResponseStatus::BAD_REQUEST,
                'data' => null,
                'message' => 'Competence updated failed.'
            ]));
        }
    }

    public function delete_data($id) {
        $data = $this->AssesmentTechniqueModel->get_detail_data($id);

        if(empty($data)) {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(404)
            ->set_output(json_encode([
                'code' => 404,
                'status' => ResponseStatus::NOT_FOUND,
                'data' => null,
                'message' => 'Data not found.'
            ]));
        } else {
            $this->AssesmentTechniqueModel->delete_data($id);
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'code' => 200,
                'status' => ResponseStatus::SUCCESS,
                'data' => null,
                'message' => 'Competence delete successfully'
            ]));
        }
    }

    public function list()
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $assesmentId = $this->input->get('assesmentId') ? $this->input->get('assesmentId') : "";
        $send = $this->crud->reads('lnd_assesment_technique', ["assesmentId" => $post, "assesmentId" => $assesmentId]);
        echo json_encode($send);
    }
}