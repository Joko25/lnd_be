<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_training extends CI_Controller {
    
    private $idGenerateDate;
    

    public function __construct() {
        parent::__construct();
        // Load any models or libraries needed
        $this->load->model('RequestTrainingModel');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('crud');
        $this->load->model('LndModel');

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
            $this->load->view('lnd/request-training', $data);
        } else {
            redirect('error_session');
        }
    }

    public function datatables()
    {
        // Ambil parameter dari request
        $trainingMaterial = $this->input->get('trainingActivities', true); // Sanitize input GET
        $requestTrainingId = $this->input->get('id', true); // Sanitize input GET
        $reasons = $this->input->get('reasons', true); // Sanitize input GET
        $departement = $this->input->get('departement', true); // Sanitize input GET
        $suggestTrainingDate = base64_decode($this->input->get('suggestDateTraining', true)); // Sanitize input GET
        
        $page = $this->input->post('page');
        $rows = $this->input->post('rows');
        
        // Pagination
        $page   = isset($page) ? intval($page) : 1;
        $rows   = isset($rows) ? intval($rows) : 10;
        $offset = ($page - 1) * $rows;

        // Query Builder
        $this->db->start_cache(); // Cache query sebelum count_all_results

        // Menggunakan ANY_VALUE() untuk kolom-kolom dari JOINed tables
        $this->db->select('
            a.*,
            DATE_FORMAT(a.suggestDateTraining, "%Y-%m-%d") as suggestDate,
            a.status as statusTraining,
            rth.status as statusApproval,
            rth.approved as statusApproved,
            rth.approval_data as approvedData,
            rth.approved_by as approved_by,
            rth.approved_date as approved_date,
            COALESCE(e.name, a.trainer_name) as trainerName,
            employeeApprover.gender as gender,
            u.name as approverName,
            userReject.name as inputter
        ');

        $this->db->from('lnd_request_training a');

        // --- Perubahan Utama untuk mengatasi masalah ONLY_FULL_GROUP_BY dan ANY_VALUE() ---
        // Subquery untuk mendapatkan baris lnd_request_training_approvals_history terbaru/terpilih
        // Ini akan mengambil satu baris rth untuk setiap a.requestTrainingId yang memenuhi kriteria status 0
        $latest_approval_subquery = '(
            SELECT
                rth_inner.*
            FROM
                lnd_request_training_approvals_history rth_inner
            INNER JOIN (
                SELECT
                    trainingRequestId,
                    MAX(approved_date) AS max_approved_date,
                    MAX(approved) AS max_approved_for_tiebreaker -- BARIS INI DIPERBAIKI: Menggunakan MAX(approved) sebagai tie-breaker
                FROM
                    lnd_request_training_approvals_history
                GROUP BY
                    trainingRequestId
            ) AS latest_rth ON rth_inner.trainingRequestId = latest_rth.trainingRequestId
                            AND rth_inner.approved_date = latest_rth.max_approved_date
                            AND rth_inner.approved = latest_rth.max_approved_for_tiebreaker -- BARIS INI DIPERBAIKI: Menggunakan approved untuk kondisi tie-breaker
        ) AS rth';

        $this->db->join($latest_approval_subquery, 'a.requestTrainingId = rth.trainingRequestId', 'left');
        // --- Akhir Perubahan Utama ---

        // Join ke tabel employees untuk nama trainer
        $this->db->join('employees e', 'a.trainer_name = e.id', 'left');

        // Join ke tabel users untuk detail approver
        $this->db->join('users u', 'rth.approved_to = u.username', 'left');

        // Join ke tabel employees untuk gender approver
        $this->db->join('employees employeeApprover', 'u.number = employeeApprover.number', 'left');

        // Join ke tabel users untuk detail inputter (yang sebelumnya userReject)
        $this->db->join('users userReject', 'rth.approved_by = userReject.username', 'left');

        // Join ke tabel employees untuk detail employeeReject, jika diperlukan
        $this->db->join('employees employeeReject', 'userReject.number = employeeReject.number', 'left');

        if (!empty($suggestTrainingDate)) {
            $this->db->where('a.suggestDateTraining', $suggestTrainingDate);
        }
        if (!empty($trainingMaterial)) {
            $this->db->like('a.trainingActivities', $trainingMaterial);
        }
        if (!empty($requestTrainingId)) {
            $this->db->like('a.id', $requestTrainingId);
        }
        if (!empty($reasons)) {
            $this->db->like('a.reasons', $reasons);
        }
        if (!empty($departement)) {
            $this->db->like('a.id', $departement);
        }

        // $this->db->group_by('a.id');
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

    public function history_approval() {
        // Ambil parameter dari GET request
        $trainingRequestId = $this->input->get('trainingRequestId');
        
        // Validasi parameter
        if (empty($trainingRequestId)) {
            echo json_encode([
                'total' => 0,
                'rows' => []
            ]);
            return;
        }

        // Query untuk mengambil data history approval
        $this->db->select('
            rth.*,
            u.name as approver_name
        ');
        $this->db->from('lnd_request_training_approvals_history rth');
        $this->db->join('users u', 'rth.approved_by = u.username', 'left');
        $this->db->where('rth.trainingRequestId', $trainingRequestId);
        $this->db->where('rth.approved > 1');
        $this->db->order_by('rth.approved_date', 'ASC');
        
        $records = $this->db->get()->result_array();
        
        // Mapping Data
        $result = [
            'total' => count($records),
            'rows' => $records
        ];

        // Kirim sebagai JSON
        echo json_encode($result);
    }

    public function get_data() {
        $data = $this->RequestTrainingModel->get_all_data();

        if(empty($data)) {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(404)
            ->set_output(json_encode([
                'code' => 404,
                'status' => ResponseStatus::NOT_FOUND,
                'data' => [],
                'message' => 'Get Request Training data failed'
            ]));
        } else {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'code' => 200,
                'status' => ResponseStatus::SUCCESS,
                'data' => $data,
                'message' => 'Get Request Training data successfully'
            ]));
        } 
    }

    public function get_detail($id) {
        $data = $this->RequestTrainingModel->get_detail_data($id);

        if(empty($data)) {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(400)
            ->set_output(json_encode([
                'code' => 400,
                'status' => ResponseStatus::NOT_FOUND,
                'data' => null,
                'message' => 'Get Request Training data failed'
            ]));
        } else {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'code' => 200,
                'status' => ResponseStatus::SUCCESS,
                'data' => $data,
                'message' => 'Get Request Training data successfully'
            ]));
        } 
    }

    public function create_data() {
//        $rawInput = file_get_contents("php://input");
//        parse_str($rawInput, $data);

        $data = $this->input->post();
		$idGenerateDateTemp = $this->crud->autoidPrifix('lnd_request_training', 'requestTrainingId', 'T');
        $data['id'] = $this->uuid();
        $data['requestTrainingId'] = $idGenerateDateTemp;
		if (!empty($_FILES['attachment']['name'])) {
            $attachment = $this->LndModel->upload_v2('attachment', ['jpg', 'pdf', 'jpeg', 'png', 'gif'], 'assets/document/request-training/');
            log_message('debug', 'ATTACHMENT: ' . $attachment);
            if ($attachment) {
                $data['attachment'] = $attachment;
            }
        }
        if (!empty($data)) {
            // $this->idGenerateDate = $dataTemp->id;
            $dataTemp = $this->RequestTrainingModel->insert_data($data);
            $approval = $this->crud->approvalsLnd('lnd_request_training_approvals_history', 'trainingRequestId', $data['requestTrainingId']);

            if ($approval) {
                log_message('error', 'Approval berhasil dibuat: ' . json_encode($approval));
            } else {
                log_message('error', 'Gagal membuat approval: ' . json_encode($approval));
            }
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(201)
            ->set_output(json_encode([
                'code' => 201,
                'status' => ResponseStatus::CREATED,
                'data' => $dataTemp,
                'message' => 'Request Training created successfully'
            ]));
        } else {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(400)
            ->set_output(json_encode([
                'code' => 400,
                'status' => ResponseStatus::BAD_REQUEST,
                'data' => null,
                'message' => 'Request Training creation failed.'
            ]));
        }
    }
    

    public function update_data($id) {
        // $rawInput = file_get_contents("php://input");
        // parse_str($rawInput, $data);
        $data = $this->input->post();

        if (!empty($data)) {
            // Upload attachment jika ada file baru
            if (!empty($_FILES['attachment']['name'])) {
                $attachment = $this->LndModel->upload_v2('attachment', ['jpg', 'pdf', 'jpeg', 'png', 'gif'], 'assets/document/request-training/');
                if ($attachment) {
                    $data['attachment'] = $attachment;
                }
            }
			$dataRequestTrainingExisting = $this->RequestTrainingModel->get_detail_data($id);
			if(!empty($dataRequestTrainingExisting)) {
				$dataApprovalHistoryExisting = $this->RequestTrainingModel->get_detail_data_history_approval($dataRequestTrainingExisting['requestTrainingId']);
				if(!empty($dataApprovalHistoryExisting) && $dataApprovalHistoryExisting['status'] == -1) {
					$dataApprovalHistoryExisting['status'] = 0;
					$resUpdateHistory = $this->RequestTrainingModel->update_data_request_training_history($dataApprovalHistoryExisting['id'], $dataApprovalHistoryExisting);
				}
			}
            $dataTemp = $this->RequestTrainingModel->update_data($id, $data);
			if(!empty($dataTemp) && !empty($resUpdateHistory)) {
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'code' => 200,
                    'status' => ResponseStatus::SUCCESS,
                    'data' => $dataTemp,
                    'message' => 'Request Training with update approval successfully'
                ]));
			} else {
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'code' => 200,
                    'status' => ResponseStatus::SUCCESS,
                    'data' => $dataTemp,
                    'message' => 'Request Training updated successfully'
                ]));
			}
        } else {
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(400)
            ->set_output(json_encode([
                'code' => 400,
                'status' => ResponseStatus::BAD_REQUEST,
                'data' => null,
                'message' => 'Request Training updated failed.'
            ]));
        }
    }

    public function delete_data($id) {
        $data = $this->RequestTrainingModel->get_detail_data($id);

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
            $this->RequestTrainingModel->delete_data($id);
            $this->RequestTrainingModel->delete_data_trainee($id);
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'code' => 200,
                'status' => ResponseStatus::SUCCESS,
                'data' => $id,
                'message' => 'Request Training delete successfully'
            ]));
        }
    }

    public function list()
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $requestTrainingId = $this->input->get('requestTrainingId') ? $this->input->get('requestTrainingId') : "";
        $send = $this->crud->reads('lnd_request_training', ["requestTrainingId" => $post, "requestTrainingId" => $requestTrainingId]);
        echo json_encode($send);
    }

    public function detailTrainee() 
    {
        $trainingRequestId = $this->input->get('trainingRequestId', true); // Sanitize input GET

        $this->db->start_cache(); // Cache query sebelum count_all_results
        $this->db->select('e.fullName, e.national_id, e.date_sign, e.position, e.departement, e.departement_subs, DATE_FORMAT(e.date_sign, "%Y-%m-%d") as join_date,');
        $this->db->from('lnd_request_training_trainee e');
        $this->db->where('e.trainingRequestId', $trainingRequestId);
        $this->db->stop_cache(); // Stop caching the query
        
        // Hitung total data (tanpa limit dan offset)
        $totalRows = $this->db->count_all_results();
        
        // Ambil data dengan limit dan offset
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

        // GET DATA EMPLOYEES
    public function getEmployees() 
    {
        $post = isset($_POST['q']) ? array("e.name" => $_POST['q']) : $this->input->get();

        $this->db->select('e.id, e.name, e.number as employeeId, p.name as position, d.name as departement, ds.name as departement_subs, e.date_sign');
        $this->db->from('employees e');
        $this->db->join('positions p', 'p.id = e.position_id');
        $this->db->join('departements d', 'd.id = e.departement_id');
        $this->db->join('departement_subs ds', 'ds.id = e.departement_sub_id');
        if($post) {
            $this->db->like($post);
        }
        $query = $this->db->get();
        echo json_encode($query->result_object());
    }

    public function getTrainee($id) 
    {
        $send = $this->crud->reads('lnd_request_training_trainee', [], ["trainingRequestId" => $id]);
        echo json_encode($send);
    }

    public function create_data_trainee() {
        // Ambil request body secara manual
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);
        
        // Cek jika idGenerateDate ada, gunakan sebagai trainingRequestId
        if(!empty($this->idGenerateDate)) {
            $data['trainingRequestId'] = $this->idGenerateDate;
        } else if(empty($data['trainingRequestId'])) {
            $dataRequestTraining = $this->crud->read('lnd_request_training', [], [], "", 'createdTime', 'desc');
            $data['trainingRequestId'] = $dataRequestTraining->id;
        }

        // Validasi dan proses data
        if (!empty($data)) {
            if(!isset($data['id']) || $data['id'] == '') {
                $dataTemp = $this->RequestTrainingModel->insert_data_trainee($data);
                $this->idGenerateDate = null;
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(201)
                ->set_output(json_encode([
                    'code' => 201,
                    'status' => ResponseStatus::SUCCESS,
                    'data' => $data,
                    'message' => 'Request Training Trainee created successfully'
                ]));
            } else {
                $dataTemp = $this->RequestTrainingModel->update_data_trainee($data['id'], $data);
                $this->idGenerateDate = null;
                return $this->output
                ->set_content_type('application/json')
                ->set_status_header(201)
                ->set_output(json_encode([
                    'code' => 201,
                    'status' => ResponseStatus::CREATED,
                    'data' => $dataTemp,
                    'message' => 'Request Training Trainee updated successfully'
                ]));
            }
        } else {
            $this->idGenerateDate = null;
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(400)
            ->set_output(json_encode([
                'code' => 400,
                'status' => ResponseStatus::BAD_REQUEST,
                'data' => null,
                'message' => 'Request Training Trainee creation failed.'
            ]));
        }
    }

    public function deleteTrainee()
    {
        $data = $this->input->post();
        $send = $this->crud->delete('lnd_request_training_trainee', $data);
        echo $send;
    }

    public function reads() {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $get = $this->input->get();

        $this->db->select('*');
        $this->db->from('lnd_request_training');
        if ($get) {
            $this->db->like($get);
        }
        $this->db->order_by('createdTime', 'desc');
        $records = $this->db->get()->result_array();
        echo json_encode($records);
    }

    public function readsTrainee() {
        $post = isset($_POST['q']) ? array("a.name" => $_POST['q']) : $this->input->get();

        $this->db->select('a.name, a.id');
        $this->db->from('employees a');
        if ($post) {
            $this->db->like($post);
        }
        $this->db->group_by('a.name, a.id'); // Tambahkan a.id ke GROUP BY
        $this->db->order_by('a.created_date', 'desc');
        $records = $this->db->get()->result_array();
        echo json_encode($records);
    }

	public function readsEmployeesLeaderUp() {
		$post = isset($_POST['q']) ? array("a.name" => $_POST['q']) : $this->input->get();

		$this->db->start_cache();
		$this->db->select('a.id, a.name, b.name as positionName');
		$this->db->from('employees a');
		$this->db->join('positions b', 'b.id = a.position_id', 'left');
		$this->db->where('b.level <', '05');
		$this->db->stop_cache();
		$res = $this->db->get()->result_array();
		$this->db->flush_cache(); // Hapus cache query
		echo json_encode($res);
	}

    private function uuid()
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }
}
