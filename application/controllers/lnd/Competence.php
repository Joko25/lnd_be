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

            $this->load->view('template/header');
            $this->load->view('lnd/competence', $data);
        } else {
            redirect('error_session');
        }
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
        $data = json_decode(file_get_contents("php://input"), true);

        $idGenerateDate = $this->crud->autoidCreatedTime('lnd_competence');
        
        $data['competenceId'] = $idGenerateDate;
        // Validate and process data
        if (!empty($data)) {
            $dataTemp = $this->CompetenceModel->insert_data($data);
            
            $this->response->send(ResponseStatus::CREATED, $dataTemp, 'Competence created successfully');
        } else {
            $this->response->send(ResponseStatus::BAD_REQUEST, null, 'Competence created failed.');
        }
    }

    public function update_data($id) {
        $data = json_decode(file_get_contents("php://input"), true);

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
}