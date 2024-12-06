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
        $data = json_decode(file_get_contents("php://input"), true);

        $idGenerateDate = $this->crud->autoidCreatedTime('lnd_curiculum');
        
        $data['curiculumId'] = $idGenerateDate;
        // Validate and process data
        if (!empty($data)) {
            $dataTemp = $this->CuriculumModel->insert_data($data);
            
            $this->response->send(ResponseStatus::CREATED, $dataTemp, 'Curiculum created successfully');
        } else {
            $this->response->send(ResponseStatus::BAD_REQUEST, null, 'Curiculum created failed.');
        }
    }

    public function update_data($id) {
        $data = json_decode(file_get_contents("php://input"), true);

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
}