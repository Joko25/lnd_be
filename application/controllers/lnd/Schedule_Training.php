<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_Training extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        // Load any models or libraries needed
        $this->load->model('ScheduleTrainingModel');
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
            $this->load->view('lnd/schedule-training', $data);
        } else {
            redirect('error_session');
        }
    }

    public function datatables()
    {
        // Ambil parameter dari request
        $competenceId = $this->input->get('competenceId', true); // Sanitize input GET
        $trainingActivityId = $this->input->get('id', true); // Sanitize input GET
        $page = $this->input->post('page');
        $rows = $this->input->post('rows');
        
        // Pagination
        $page   = isset($page) ? intval($page) : 1;
        $rows   = isset($rows) ? intval($rows) : 10;
        $offset = ($page - 1) * $rows;

        // Query Builder
        $this->db->start_cache(); // Cache query sebelum count_all_results
        $this->db->select('a.*');
        $this->db->from('lnd_schedule_training a');
        
        // if (!empty($trainingActivityId)) {
        //     $this->db->like('a.id', $trainingActivityId);
        // }
        // if (!empty($competenceId)) {
        //     $this->db->like('a.competenceId', $competenceId);
        // }
        $this->db->stop_cache(); // Stop caching the query
        
        // Hitung total data (tanpa limit dan offset)
        $totalRows = $this->db->count_all_results();
        
        // Ambil data dengan limit dan offset
        $this->db->order_by('a.createdTime', 'ASC');
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
        $data = $this->ScheduleTrainingModel->get_all_data();

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, [], 'Get Schedule Training data failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get Schedule Training data successfully');
        } 
    }

    public function get_detail($id) {
        $data = $this->ScheduleTrainingModel->get_detail_data($id);

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, null, 'Get Schedule Training data failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get Schedule Training data successfully');
        } 
    }

    public function create_data() {
         // Ambil raw input
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);

        // Check and decode training_dates (assumed as JSON string in POST)
        $trainingDates = [];
        if (!empty($data['training_dates'])) {
            $trainingDates = json_decode($data['training_dates'], true);
            unset($data['training_dates']); // Remove from main data to avoid DB issue
        }

        // Validasi dan proses data
        if (!empty($data)) {
            $dataTemp = $this->ScheduleTrainingModel->insert_data($data, $trainingDates);
            $this->response->send(ResponseStatus::CREATED, $dataTemp, 'Schedule Training created successfully');
        } else {
            $this->response->send(ResponseStatus::BAD_REQUEST, null, 'Schedule Training creation failed.');
        }
    }
    

    public function update_data($id) {
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);
        // $payloadId   = base64_decode($id);

        if (!empty($data)) {
            $dataTemp = $this->ScheduleTrainingModel->update_data($id, $data);
            $this->response->send(200, $dataTemp, 'Schedule Training updated successfully');
        } else {
            $this->response->send(400, null, 'Schedule Training updated failed.');
        }
    }

    public function delete_data($id) {
        $data = $this->ScheduleTrainingModel->get_detail_data($id);

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, null, 'Data not found');
        } else {
            $this->ScheduleTrainingModel->delete_data($id);
            $this->response->send(200, $id, 'Schedule Training delete successfully');
        }
    }

    public function list()
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $trainingActivityId = $this->input->get('trainingActivityId') ? $this->input->get('trainingActivityId') : "";
        $send = $this->crud->reads('lnd_schedule_training', ["trainingActivityId" => $post, "trainingActivityId" => $trainingActivityId]);
        $queryTrainingActivity = $this->crud->query("SELECT a.*, b.name as competenceName FROM lnd_schedule_training a JOIN lnd_competence b ON a.competenceId = b.id ");
        echo json_encode($queryTrainingActivity);
    }

    // GET DATA COMPTENCE
    public function readsCompetence() 
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $send = $this->crud->reads('lnd_competence', [], [], "", "index", "asc");
        echo json_encode($send);
    }

    // GET DATA DEPARTEMENTS
    public function readsDepartements() 
    {
        $session_dept = $this->session->departement_id;
        $send = $this->crud->reads('employees', [], ["departement_id" => $session_dept], "");
        echo json_encode($send);
    }

    public function upload()
    {
        error_reporting(0);
        require_once 'assets/vendors/excel_reader2.php';
        $target = basename($_FILES['file_upload']['name']);
        move_uploaded_file($_FILES['file_upload']['tmp_name'], $target);
        chmod($_FILES['file_upload']['name'], 0777);
        $file = $_FILES['file_upload']['name'];
        $data = new Spreadsheet_Excel_Reader($file, false);
        $total_row = $data->rowcount($sheet_index = 0);

        for ($i = 3; $i <= $total_row; $i++) {
            $datas[] = array(
                'competenceId' => $data->val($i, 2),
                'trainingActivity' => $data->val($i, 3),
                'index' => $data->val($i, 4),
                'remarks' => $data->val($i, 5),
                'induction' => $data->val($i, 6)
            );
        }

        $datas['total'] = count($datas);
        echo json_encode($datas);
        unlink($_FILES['file_upload']['name']);
    }

    public function uploadclearFailed()
    {
        @unlink('failed/training_activity.txt');
    }

    public function uploadcreateFailed()
    {
        if ($this->input->post()) {
            $message = $this->input->post('message');
            $textFailed = fopen('failed/training_activity.txt', 'a');
            fwrite($textFailed, $message . "\n");
            fclose($textFailed);
        }
    }

    public function uploadCreate()
    {
        if ($this->input->post()) {
            $data = $this->input->post('data');
            $tempCompetenceId = $data["competenceId"];

            $queryCompetence = $this->db->query("SELECT a.id FROM lnd_competence AS a WHERE a.name = '$tempCompetenceId' ");
            $resCompetence = $queryCompetence->row_array();
            $data['competenceId'] = $resCompetence ? $resCompetence['id'] : null;

            $lnd_schedule_training = $this->crud->read('lnd_schedule_training', ["competenceId" => $data['competenceId'], "trainingActivity" => $data['trainingActivity'], "index" => $data['index'], "remarks" => $data['remarks'], "induction" => $data['induction']]);
            $idGenerateDate = $this->crud->autoidPrifix('lnd_schedule_training', 'trainingActivityId', 'T'); 
            $data['trainingActivityId'] = $idGenerateDate;

            if (empty($resCompetence)) {
                echo json_encode(array("title" => "Not Found", "message" => "Competence  " . $data['competenceId'] . " Not Found", "theme" => "error"));
            } else if(empty($data['trainingActivity'])) {
                echo json_encode(array("title" => "Not Found", "message" => "Competence Schedule Training cannot be Null", "theme" => "error"));            
            } else if(empty($data['induction'])) {
                echo json_encode(array("title" => "Not Found", "message" => "Competence Induction cannot be Null", "theme" => "error"));
            } else if(empty($data['index'])) {
                echo json_encode(array("title" => "Not Found", "message" => "Competence Index cannot be Null", "theme" => "error"));
            } else {
                $send = $this->crud->create('lnd_schedule_training', $data);
                echo $send;
            }
            // Validasi dan proses data
            // if (!empty($data)) {
            //     $dataTemp = $this->ScheduleTrainingModel->insert_data($data);
            //     echo json_encode(array("title" => "Good Job", "message" => "Data Saved Successfully", "theme" => "success"));
            //     // $this->response->send(ResponseStatus::CREATED, $dataTemp, 'Schedule Training created successfully');
            // } else {
            //     echo json_encode(array("title" => "Available", "message" => "Upload error", "theme" => "error"));
            //     // $this->response->send(ResponseStatus::BAD_REQUEST, null, 'Schedule Training creation failed.');
            // }
        }
    }

    public function uploadDownloadFailed()
    {
        $file = "failed/training_activity.txt";

        header('Content-Description: File Failed');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . @filesize($file));
        header("Content-Type: text/plain");
        @readfile($file);
    }

    //PRINT & EXCEL DATA
    public function print($option = "")
    {
        if ($option == "excel") {
            $format  = date("Ymd");
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=training_activity_$format.xls");
        }

        //Config
        $this->db->select('*');
        $this->db->from('config');
        $config = $this->db->get()->row();

        $this->db->select('a.*, b.name as competenceName');
        $this->db->from('lnd_schedule_training a');
        $this->db->join('lnd_competence b', 'a.competenceId = b.id');
        $this->db->order_by('index', 'ASC');
        $records = $this->db->get()->result_array();

        $html = '<html><head><title>Print Data</title></head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 12px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>
        <center>
            <div style="float: left; font-size: 12px; text-align: left;">
                <table style="width: 100%;">
                    <tr>
                        <td width="50" style="font-size: 12px; vertical-align: top; text-align: center; vertical-align:jus margin-right:10px;">
                            <img src="' . $config->favicon . '" width="30">
                        </td>
                        <td style="font-size: 14px; text-align: left; margin:2px;">
                            <b>' . $config->name . '</b><br>
                            <small>TER CATEGORIES</small>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="float: right; font-size: 12px; text-align: right;">
                Print Date ' . date("d M Y H:m:s") . ' <br>
                Print By ' . $this->session->username . '  
            </div>
        </center>
        <br><br><br>
        
        <table id="customers" border="1">
            <tr>
                <th width="20">No</th>
                <th>Schedule Training ID</th>
                <th>Competence Name</th>
                <th>Index</th>
                <th>Induction</th>
                <th>Schedule Training</th>
                <th>Remarks</th>
            </tr>';
        $no = 1;
        foreach ($records as $data) {
            $html .= '<tr>
                    <td>' . $no . '</td>
                    <td>' . $data['trainingActivityId'] . '</td>
                    <td>' . $data['competenceName'] . '</td>
                    <td>' . $data['index'] . '</td>
                    <td>' . $data['induction'] . '</td>
                    <td>' . $data['trainingActivity'] . '</td>
                    <td>' . $data['remarks'] . '</td>';
            $no++;
        }

        $html .= '</table></body></html>';
        echo $html;
    }
}
