<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_training extends CI_Controller {
    
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
		$trainingName = $this->input->get('trainingName', true); // Sanitize input GET
        $trainingActivityId = $this->input->get('id', true); // Sanitize input GET
        $page = $this->input->post('page');
        $rows = $this->input->post('rows');
        
        // Pagination
        $page   = isset($page) ? intval($page) : 1;
        $rows   = isset($rows) ? intval($rows) : 10;
        $offset = ($page - 1) * $rows;
		// Query Builder
        $this->db->start_cache(); // Cache query sebelum count_all_results
        $this->db->select('a.*, a.id as id_training, b.*, e.name, e.id as departementId, ta.id as trainingActivityId, ta.trainingActivity, st.trainer_name, st.trainer_id, st.trainer_id as trainingTrainerId');
        $this->db->from('lnd_schedule_training a');
        $this->db->join('lnd_schedule_training_dates b', 'a.id = b.training_id', 'left');
		$this->db->join('departements e', 'e.id = a.trainee', 'left');
		$this->db->join('lnd_training_activity ta', 'ta.id = a.trainingName', 'left');
		$this->db->join('lnd_schedule_trainers st', 'a.id = st.training_id', 'left');

         if (!empty($trainingName)) {
             $this->db->like('a.trainingName', $trainingName);
         }
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

		$grouped = [];

		foreach ($records as $row) {
			// === Grouping key per row ===
			$key = $row['trainingName'] . '|' . $row['trainee'] . '|' . $row['registerDate']; // You can customize this

			if (!isset($grouped[$key])) {
				$grouped[$key] = [
                    'id_training' => $row['id_training'],
					'induction' => $row['induction'],
					'trainingName' => $row['trainingActivity'],
		//          'trainer' => $row['trainer'],
					'trainee' => empty($row['name']) ? $row['category'] : $row['name'],
					'remarks' => $row['remarks'],
					'totalTrainee' => $row['totalTrainee'],
					'duration' => $row['duration'],
					'registerDate' => $row['registerDate'],
					'category' => $row['category'],
					'trainingActivityId' => $row['trainingActivityId'],
					'departementId' => $row['departementId'],
					'createdBy' => $row['createdBy'],
					'createdTime' => $row['createdTime'],
					'updatedBy' => $row['updatedBy'],
					'updatedTime' => $row['updatedTime'],
				];
			}

			$trainingDate = $row['training_date'];   // Example: 2025-04-22
			$batchCount = $row['batch_count'];       // Example: 1
			$weekLabel = $row['week_label'];         // Example: W1

			if ($trainingDate && $weekLabel) {
				$date = new DateTime($trainingDate);
				$monthName = $date->format('F');         // April
				$year = $date->format('Y');              // 2025
				$shortDate = $date->format('j M');       // 22 Apr

				$fieldName = "{$monthName}_{$year}_{$weekLabel}"; // April_2025_W1

				// If already exists, append new date
				if (!empty($grouped[$key][$fieldName])) {
					$existingTrainingDates = explode(', ', $grouped[$key][$fieldName]);

					if(!in_array($shortDate, $existingTrainingDates)) {
						$grouped[$key][$fieldName] .= ', ' . $shortDate;
						$grouped[$key]['originalTrainingDate'] .= ', ' . $trainingDate;
					}
				} else {
					$grouped[$key][$fieldName] = $shortDate;
					$grouped[$key]['originalTrainingDate'] = $trainingDate;
				}
			}

			$trainerName = $row['trainer_name'];
			$trainerId = $row['trainer_id'];
			$trainingTrainerid = $row['trainingTrainerId'];
			if($trainerName && $trainerId) {
				if (!empty($grouped[$key]['trainer'])) {
					$existingTrainers = explode(', ', $grouped[$key]['trainer']);

					// Only add if not already in the list
					if (!in_array($trainerName, $existingTrainers)) {
						$grouped[$key]['trainer'] .= ', ' . $trainerName;
						$grouped[$key]['trainingTrainerId'] .= ', ' . $trainingTrainerid;
					}
				} else {
					$grouped[$key]['trainer'] = $trainerName;
					$grouped[$key]['trainingTrainerId'] = $trainingTrainerid;
				}
			}
		}

		// Push all grouped data to final $data array
		$data = array_values($grouped);

		// Mapping Data
        $result = [
            'total' => $totalRows,
            'rows' => $data
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

    public function get_form_test($id) {
        $data = $this->ScheduleTrainingModel->get_detail_form_test($id);

        if(empty($data)) {
            $this->response->send(ResponseStatus::NOT_FOUND, null, 'Get master form test failed');
        } else {
            $this->response->send(ResponseStatus::SUCCESS, $data, 'Get Master Form Test successfully');
        } 
    }

    public function create_data() {
         // Ambil raw input
        $rawInput = file_get_contents("php://input");
        parse_str($rawInput, $data);

        // Check and decode training_dates (assumed as JSON string in POST)
        $trainingDates = [];
		$combineTrainer = [];
	        if (!empty($data['training_dates'])) {
            $trainingDates = json_decode($data['training_dates'], true);
            unset($data['training_dates']); // Remove from main data to avoid DB issue
        }
		if(!empty($data['trainerName'])) {
			$trainerId = $data['trainerName'];
			foreach($trainerId as $value) {
				$trainer = $this->crud->read('employees', ['id' => $value]);
				$combineTrainer[] = [
					'id' => $trainer->id,
					'name' => $trainer->name,
				];
			}
			unset($data['trainerName']);
		}

        // Validasi dan proses data
        if (!empty($data)) {
            $dataTemp = $this->ScheduleTrainingModel->insert_data($data, $trainingDates, $combineTrainer);
            $this->response->send(ResponseStatus::CREATED, $dataTemp, 'Schedule Training created successfully');
        } else {
            $this->response->send(ResponseStatus::BAD_REQUEST, null, 'Schedule Training creation failed.');
        }
    }

    public function update_data($id) {
		$rawInput = file_get_contents("php://input");
		parse_str($rawInput, $data);

		$trainingDates = [];
		$combineTrainer = [];

		// Extract training dates
		if (!empty($data['training_dates'])) {
			$trainingDates = json_decode($data['training_dates'], true);
			unset($data['training_dates']); // Prevent DB insert issue
		}

		// Extract and enrich trainer data
		if (!empty($data['trainerName'])) {
			$trainerIdArray = $data['trainerName'];
			foreach ($trainerIdArray as $value) {
				$trainer = $this->crud->read('employees', ['id' => $value]);
				if ($trainer) {
					$combineTrainer[] = [
						'id' => $trainer->id,
						'trainer_name' => $trainer->name,
					];
				}
			}
			unset($data['trainerName']);
			unset($data['trainingTrainerId']);
		}

		// Proceed with update
		if (!empty($data)) {
			$dataTemp = $this->ScheduleTrainingModel->update_data($id, $data, $trainingDates, $combineTrainer);
			$this->response->send(200, $dataTemp, 'Schedule Training updated successfully');
		} else {
			$this->response->send(400, null, 'Schedule Training update failed.');
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
//        $session_dept = $this->session->departement_id;
        $send = $this->crud->reads('departements', [], [], "");
        echo json_encode($send);
    }

	public function readsTrainingActivity()
	{
		$induction = $this->input->get('induction') ? $this->input->get('induction') : "";
		$send = $this->crud->query("SELECT a.*, a.trainingActivities as trainingActivity, a.reasons as competenceName FROM lnd_request_training a JOIN lnd_request_training_approvals_history b on b.trainingRequestId = a.requestTrainingId AND b.approved = 4 WHERE a.induction = '$induction' ORDER BY a.requestTrainingId ASC");
		echo json_encode($send);
	}

	public function readsEmployeesLeaderUp()
	{
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
                'registerDate' => $data->val($i, 2),
				'trainingDates' => array_filter([
					$data->val($i, 3),
					$data->val($i, 5),
					$data->val($i, 7),
				]),
				'batchTrainingDates' => array_filter([
					$data->val($i, 4),
					$data->val($i, 6),
					$data->val($i, 8),
				]),
				'induction' => $data->val($i, 9),
				'trainingName' => $data->val($i, 10),
				'category' => $data->val($i, 11),
				'trainerNames' => array_filter([
					$data->val($i, 12),
					$data->val($i, 13),
					$data->val($i, 14)
				]),
				'trainee' => $data->val($i, 15),
				'remarks' => $data->val($i, 16),
				'totalTrainee' => $data->val($i, 17),
				'duration' => $data->val($i, 18),
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
            $trainingNameId = $data["trainingName"];

            $queryTrainingActivity = $this->db->query("SELECT a.id FROM lnd_training_activity AS a WHERE a.trainingActivityId = '$trainingNameId' ");
            $resTrainingActivity = $queryTrainingActivity->row_array();
            $data['trainingName'] = $resTrainingActivity ? $resTrainingActivity['id'] : null;
			$dataTrainingDates = [];
			$dataTrainers = [];

			if(!empty($data['trainingDates'])){
				for ($i = 0; $i < count($data['trainingDates']); $i++) {
					$value = $data['trainingDates'][$i];

					$day = (int)date('j', strtotime($value)); // Extract day from date (1–31)
					if ($day >= 1 && $day <= 8) {
						$displayWeekType = 'W1';
					} elseif ($day >= 9 && $day <= 16) {
						$displayWeekType = 'W2';
					} elseif ($day >= 17 && $day <= 24) {
						$displayWeekType = 'W3';
					} elseif ($day >= 25 && $day <= 31) {
						$displayWeekType = 'W4';
					} else {
						$displayWeekType = 'Unknown'; // fallback in case of invalid day
					}
					$dataTrainingDates[$i]['training_date'] = $value;
					$dataTrainingDates[$i]['week'] = $displayWeekType;
					$dataTrainingDates[$i]['batch_count'] = $data['batchTrainingDates'][$i];
				}

				unset($data['batchTrainingDates']);
				unset($data['trainingDates']);
			}

			if(!empty($data['trainerNames'])){
				for ($i = 0; $i < count($data['trainerNames']); $i++) {
					$value = $data['trainerNames'][$i];
					$tempTrainerName = $this->crud->read('employees', ['number' => $value]);
					if ($tempTrainerName) {
						$dataTrainers[] = [
							'id' => $tempTrainerName->id,
							'name' => $tempTrainerName->name,
						];
					}
				}
				unset($data['trainerNames']);
			}

			if(empty($dataTrainingDates)){
				echo json_encode(array("title" => "Not Found", "message" => "Training Date Not Found", "theme" => "error"));
			} else if(empty($dataTrainers)){
				echo json_encode(array("title" => "Not Found", "message" => "Trainer Name Not Found", "theme" => "error"));
			} else if(empty($data['registerDate'])){
				echo json_encode(array("title" => "Not Found", "message" => "Register Date Not Found", "theme" => "error"));
			} else if(empty($data['induction'])){
				echo json_encode(array("title" => "Not Found", "message" => "Induction Not Found", "theme" => "error"));
			} else if(empty($data['trainingName'])){
				echo json_encode(array("title" => "Not Found", "message" => "Training Name Not Found", "theme" => "error"));
			} else if(empty($data['category'])){
				echo json_encode(array("title" => "Not Found", "message" => "Category Not Found", "theme" => "error"));
			} else if(empty($data['duration'])){
				echo json_encode(array("title" => "Not Found", "message" => "Duration Not Found", "theme" => "error"));
			} else {
				$dataTemp = $this->ScheduleTrainingModel->insert_data($data, $dataTrainingDates, $dataTrainers);
				if($dataTemp) {
					echo json_encode(array("title" => "Good Job", "message" => "Data Saved Successfully", "theme" => "success"));;
				}
			}
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

		$this->db->select("
		    a.*, 
		    a.id as id_training, 
		    GROUP_CONCAT(DISTINCT st.trainer_name SEPARATOR ', ') as trainers, 
		    GROUP_CONCAT(DISTINCT b.training_date SEPARATOR ', ') as training_dates, 
		    e.name as trainee_name, 
		    e.id as departementId, 
		    ta.id as trainingActivityId, 
		    ta.trainingActivities as trainingActivity
		");
		$this->db->from('lnd_schedule_training a');
		$this->db->join('lnd_schedule_training_dates b', 'a.id = b.training_id', 'left');
		$this->db->join('departements e', 'e.id = a.trainee', 'left');
		$this->db->join('lnd_request_training ta', 'ta.id = a.trainingName', 'left');
		$this->db->join('lnd_schedule_trainers st', 'a.id = st.training_id', 'left');
		$this->db->group_by('a.id');
        $records = $this->db->get()->result_array();

//        $html = '<html><head><title>Print Data</title></head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 12px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>
//        <center>
//            <div style="float: left; font-size: 12px; text-align: left;">
//                <table style="width: 100%;">
//                    <tr>
//                        <td width="50" style="font-size: 12px; vertical-align: top; text-align: center; vertical-align:jus margin-right:10px;">
//                            <img src="' . $config->favicon . '" width="30">
//                        </td>
//                    </tr>
//                </table>
//            </div>
//            <div style="float: right; font-size: 12px; text-align: right;">
//                Print Date ' . date("d M Y H:m:s") . ' <br>
//                Print By ' . $this->session->username . '
//            </div>
//        </center>
//        <br><br><br>
//
//        <table id="customers" border="1">
//            <tr>
//                <th>No</th>
//				<th>Induction</th>
//				<th>Training Name</th>
//				<th>Trainer</th>
//				<th>Trainee</th>
//				<th>Remarks</th>
//				<th>Total Trainees</th>
//				<th>Duration</th>
//				<th>Training Date</th>
//            </tr>';
//        $no = 1;
//		foreach ($records as $data) {
//			$html .= '<tr>
//                <td>' . $no . '</td>
//                <td>' . $data['induction'] . '</td>
//                <td>' . $data['trainingActivity'] . '</td>
//                <td>' . $data['trainers'] . '</td>
//                <td>' . (!empty($data['trainee_name']) ? $data['trainee_name'] : $data['category']) . '</td>
//                <td>' . $data['remarks'] . '</td>
//                <td>' . $data['totalTrainee'] . '</td>
//                <td>' . $data['duration'] . '</td>
//                <td>' . $data['training_dates'] . '</td>';
//			$no++;
//		}
//
//        $html .= '</table></body></html>';
//        echo $html;

// Helper functions
		function dateToIndex($date) {
			$dt = DateTime::createFromFormat('Y-m-d', $date);
			if (!$dt) return -1;
			$month = (int)$dt->format('n');
			$day = (int)$dt->format('j');
			$week = ceil($day / 8);
			if ($week > 4) $week = 4;
			return ($month - 1) * 4 + ($week - 1);
		}

		function roman($n) {
			$map = ['M'=>1000,'CM'=>900,'D'=>500,'CD'=>400,'C'=>100,'XC'=>90,'L'=>50,'XL'=>40,'X'=>10,'IX'=>9,'V'=>5,'IV'=>4,'I'=>1];
			$result = '';
			foreach ($map as $r => $v) {
				while ($n >= $v) {
					$result .= $r;
					$n -= $v;
				}
			}
			return $result;
		}

// Group by induction
		$groupedRecords = [];
		foreach ($records as $row) {
			$group = $row['induction'] ?? 'Others';
			if (!isset($groupedRecords[$group])) $groupedRecords[$group] = [];
			$groupedRecords[$group][] = [
				'trainingActivity' => $row['trainingActivity'],
				'trainers' => $row['trainers'],
				'trainee_name' => $row['trainee_name'],
				'totalTrainee' => $row['totalTrainee'],
				'duration' => $row['duration'],
				'training_dates' => $row['training_dates'],
//				'training_actuals' => $row['training_dates'],
				'remarks' => $row['remarks'],
			];
		}

// Start HTML
		$months = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
		$html = '';
		$html .= '<html><head><meta charset="UTF-8"></head><body>';
		$html .= '<table border="1" style="border-collapse: collapse; font-family: Arial; font-size: 12px; width: 100%;">';

		$html .= '<tr><td colspan="55" style="text-align: center; font-size: 16px; font-weight: bold;">
            PT BANSHU ELECTRIC INDONESIA<br>SCHEDULE TRAINING
          </td></tr>';

		$html .= '<tr style="background: #a9d08e; text-align: center; font-weight: bold;">
            <td rowspan="2">No.</td>
            <td rowspan="2">Materi Training</td>
            <td rowspan="2">Trainer</td>
            <td rowspan="2">Peserta</td>
            <td rowspan="2">∑ MP</td>
            <td rowspan="2">Durasi (Menit)</td>
            <td rowspan="2">Remarks</td>
            <td rowspan="2">Plan/Act</td>';
		foreach ($months as $m) {
			$html .= "<td colspan='4'>{$m}</td>";
		}
		$html .= '</tr><tr style="background: #a9d08e; text-align: center;">';
		for ($i = 0; $i < 12; $i++) {
			for ($j = 1; $j <= 4; $j++) {
				$html .= "<td>M{$j}</td>";
			}
		}
		$html .= '</tr>';

// Content Rows
		$sectionNo = 1;

		foreach ($groupedRecords as $sectionTitle => $records) {
			$html .= '<tr><td colspan="55" style="font-weight: bold; background-color: #9BC2E6; text-align: left;">'
				. roman($sectionNo++) . '. ' . strtoupper($sectionTitle) . '</td></tr>';
			$no = 1;

			foreach ($records as $data) {
				$plan_map = array_fill(0, 48, '');
				foreach (explode(',', $data['training_dates']) as $dt) {
					$idx = dateToIndex(trim($dt));
					if ($idx >= 0) $plan_map[$idx] = date('j-M', strtotime($dt));
				}

				$act_map = array_fill(0, 48, '');
//				foreach (explode(',', $data['training_actuals']) as $dt) {
//					$idx = dateToIndex(trim($dt));
//					if ($idx >= 0) $act_map[$idx] = date('j-M', strtotime($dt));
//				}

				$html .= '<tr>';
				$html .= '<td rowspan="2" style="text-align: center; vertical-align: middle;">' . $no . '</td>';
				$html .= '<td rowspan="2" style="text-align: center; vertical-align: middle;">' . $data['trainingActivity'] . '</td>';
				$html .= '<td rowspan="2" style="text-align: center; vertical-align: middle;">' . $data['trainers'] . '</td>';
				$html .= '<td rowspan="2" style="text-align: center; vertical-align: middle;">' . $data['trainee_name'] . '</td>';
				$html .= '<td rowspan="2" style="text-align: center; vertical-align: middle;">' . $data['totalTrainee'] . '</td>';
				$html .= '<td rowspan="2" style="text-align: center; vertical-align: middle;">' . $data['duration'] . '</td>';
				$html .= '<td rowspan="2" style="text-align: center; vertical-align: middle;">' . $data['remarks'] . '</td>';

				$html .= '<td style="text-align: center;">Plan</td>';
				foreach ($plan_map as $val) {
					$bg = $val !== '' ? 'background-color: #9BC2E6;' : '';
					$html .= '<td style="text-align: center; ' . $bg . '">' . $val . '</td>';
				}

				$html .= '</tr>';

				$html .= '<tr>';
				$html .= '<td style="text-align: center;">Act</td>';
				foreach ($act_map as $val) {
					$html .= '<td style="text-align: center;">' . $val . '</td>';
				}
				$html .= '</tr>';

				$no++;
			}
		}

		$html .= '</table></body></html>';
		echo $html;
    }
}
