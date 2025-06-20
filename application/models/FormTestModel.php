<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormTestModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_data() {
        $query = $this->db->get('lnd_master_form_test');
        echo $query;
        return $query->result_array();
    }

    public function get_detail_data($id) {
        // $query = $this->db->get_where('lnd_master_form_test', ['id' => $id]);
        $this->db->select("a.*,
                        CASE
                            WHEN a.question_type = 'SAME' THEN 'Pre-Test & Post Test is The Same'
                            WHEN a.question_type = 'DIFFERENT' THEN 'Pre-Test & Post Test is Different'
                            ELSE 'Unknown'
                        END as type, c.trainingActivity as name,
                        c.*,
                        d.*
                     ");
        $this->db->from('lnd_master_form_test a');
        $this->db->join('lnd_schedule_training b', 'b.id = a.training_name', 'left');
        $this->db->join('lnd_training_activity c', 'c.id = b.trainingName', 'left');
        $this->db->join('lnd_schedule_trainers d', 'd.training_id = b.id', 'left');
        $this->db->where('a.id', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array(); 
        }

        return null;
    }

    public function get_detail_feedback($id) {
        // $query = $this->db->get_where('lnd_master_form_test', ['id' => $id]);
        $this->db->select("a.*");
        $this->db->from('lnd_master_feedback a');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array(); 
        }

        return null;
    }

    public function insert_lnd_data($data_combined) {
        // Memulai transaksi database
        $this->db->trans_start();
        $id = $this->uuid();

        // --- Menyiapkan data untuk lnd_training_history ---
        $training_history_data = [
            'id'                => $id,
            'test_id'           => $data_combined['test_id'], // Menggunakan test_id yang sama
            'employee_id'       => $data_combined['employee_id'], // Menggunakan employee_id yang sama
            'trainer'           => $data_combined['trainer'] ?? null,
            'history_feedback_id' => $data_combined['history_feedback_id'] ?? null,
            'createdBy'         => $data_combined['createdBy'] ?? null,
        ];
        $insert_history_success = $this->insert_training_history($training_history_data);
        
        $test_form_detail_data = [
            'test_id'       => $id, // Menggunakan id dari training_history_data
            'employee_id'   => $data_combined['employee_id'],
            'type_training' => $data_combined['type_training'],
            'json_response' => $data_combined['json_response_detail'] ?? null, // Ambil dari combined data
            'grade'         => $data_combined['grade'] ?? null,
            'date_test'         => $data_combined['test_date'] ?? null,
            'type_training'     => $data_combined['type_training'], // Menggunakan type_training yang sama
            'json_result'       => $data_combined['json_result_history'] ?? null, // Ambil dari combined data
            'score_pre_test'    => $data_combined['score_pre_test'] ?? null,
            'score_post_test'   => $data_combined['score_post_test'] ?? null,
            'test_completed_date' => $data_combined['test_completed_date'] ?? null,
            'createdBy'     => $data_combined['createdBy'] ?? null
        ];

        $insert_detail_success = $this->insert_test_form_detail($test_form_detail_data);
        $this->db->trans_complete();

        // Mengembalikan status keberhasilan transaksi
        return $this->db->trans_status();
    }

    public function insert_feedback($data_feedback) {
        $this->db->trans_start();
        $id = $this->uuid();

        $feedback_history_data = [
            'id'                => $id,
            'feedback_id'       => $data_feedback['feedback_id'],
            'user_id'           => $data_feedback['user_id'],
            'json_response'     => $data_feedback['json_response'] ?? null,
            'createdBy'         => $data_feedback['createdBy'] ?? null,
        ];
        $insert_feedback_history = $this->insert_feedback_history($feedback_history_data);

        $data_training_history = [
            'history_feedback_id'       => $id,
            'updatedBy'         => $data_feedback['createdBy'] ?? null,

        ];
        $update_feedback_id = $this->update_training_history_feedback($data_feedback['test_id'], $data_feedback['user_id'], $data_training_history);
        $this->db->trans_complete();

        // Mengembalikan status keberhasilan transaksi
        return $this->db->trans_status();
    }

    public function insert_test_form_detail($data) {
        // Menyiapkan data untuk insert
        $insert_data = [
            'test_id' => $data['test_id'],
            'employee_id' => $data['employee_id'],
            'type_training' => $data['type_training'],
            'json_response' => $data['json_response'],
            'grade' => $data['grade'],
            'score_pre_test' => $data['score_pre_test'],
            'score_post_test' => $data['score_post_test'],
            'test_date' => $data['date_test'],
            'test_completed_date' => $data['test_completed_date'],
            'createdBy' => $data['createdBy'],
            'createdTime' => date('Y-m-d H:i:s')
        ];

        // Melakukan insert ke tabel lnd_test_form_detail
        $this->db->insert('lnd_test_form_detail', $insert_data);

        // Mengambil data yang baru saja diinsert
        $query = $this->db->order_by('createdTime', 'DESC')->limit(1)->get('lnd_test_form_detail');
        
        return $query->row();
    }

    public function insert_training_history($data) {
        // Menyiapkan data untuk insert
        $insert_data = [
            'id' => $data['id'],
            'test_id' => $data['test_id'],
            'employee_id' => $data['employee_id'], 
            'trainer' => $data['trainer'],
            'history_feedback_id' => $data['history_feedback_id'],
            'createdBy' => $data['createdBy'],
            'createdTime' => date('Y-m-d H:i:s')
        ];

        // Melakukan insert ke tabel lnd_training_history
        $this->db->insert('lnd_training_history', $insert_data);

        // Mengambil data yang baru saja diinsert
        $query = $this->db->order_by('createdTime', 'DESC')->limit(1)->get('lnd_training_history');
        
        return $query->row();
    }

    public function insert_feedback_history($data) {
        // Menyiapkan data untuk insert
        $insert_data = [
            'id'    => $data['id'],
            'feedback_id' => $data['feedback_id'],
            'user_id' => $data['user_id'],
            'json_response' => $data['json_response'],
            'createdBy' => $data['createdBy'],
            'createdTime' => date('Y-m-d H:i:s')
        ];

        // Melakukan insert ke tabel lnd_training_history
        $this->db->insert('lnd_feedback_history', $insert_data);

        // Mengambil data yang baru saja diinsert
        $query = $this->db->order_by('createdTime', 'DESC')->limit(1)->get('lnd_feedback_history');
        
        return $query->row();
    }

    public function update_training_history_feedback($test_id, $employee_id, $data) {
        $this->db->where('test_id', $test_id);
        $this->db->where('employee_id', $employee_id);
        return $this->db->update('lnd_training_history', $data);
    }

    public function update_lnd_data($data){
        $test_id = $data['test_id'] ?? null;
        $employee_id = $data['employee_id'] ?? null;

        if (!$test_id || !$employee_id) {
            return null;
        }

        $history_id = $this->get_training_history_id($test_id, $employee_id);

        if ($history_id) {
            $this->db->trans_start();
            $test_form_detail_data = [
                'test_id'       => $history_id, // Menggunakan id dari training_history_data
                'employee_id'   => $data['employee_id'],
                'type_training' => $data['type_training'],
                'json_response' => $data['json_response_detail'] ?? null, // Ambil dari combined data
                'grade'         => $data['grade'] ?? null,
                'date_test'         => $data['test_date'] ?? null,
                'type_training'     => $data['type_training'], // Menggunakan type_training yang sama
                'json_result'       => $data['json_result_history'] ?? null, // Ambil dari combined data
                'score_pre_test'    => $data['score_pre_test'] ?? null,
                'score_post_test'   => $data['score_post_test'] ?? null,
                'test_completed_date' => $data['test_completed_date'] ?? null,
                'createdBy'     => $data['createdBy'] ?? null
            ];
    
            $insert_detail_success = $this->insert_test_form_detail($test_form_detail_data);
            $this->db->trans_complete();
            return $this->db->trans_status();
        } else {
            return null;
        }
    }

    public function get_training_history_id($test_id, $employee_id) {
        $this->db->select('id');
        $this->db->where('test_id', $test_id);
        $this->db->where('employee_id', $employee_id);
        $query = $this->db->get('lnd_training_history');

        if ($query->num_rows() > 0) {
            return $query->row()->id;
        }
        return null;
    }


    public function check_employee_test_status($test_id, $employee_id, $test_type) {
        $this->db->select("*");
        $this->db->from('lnd_training_history a');
        $this->db->join('lnd_test_form_detail b', 'b.test_id = a.id', 'left');
        $this->db->where('a.test_id', $test_id);
        $this->db->where('a.employee_id', $employee_id);
        $this->db->where('b.type_training', $test_type);
        $query = $this->db->get();
        return $query->num_rows() > 0;
    }


    public function employe_has_pre_test($test_id, $employee_id) {
        $this->db->select("*");
        $this->db->from('lnd_training_history a');
        $this->db->join('lnd_test_form_detail b', 'b.test_id = a.id', 'left');
        $this->db->where('a.test_id', $test_id);
        $this->db->where('a.employee_id', $employee_id);
        $this->db->where('b.type_training', 'PRE_TEST');
        $query = $this->db->get();
        return $query->num_rows() > 0;
    }

    public function insert_data($data) {
        $data['createdBy'] = $this->session->username;
        $data['createdTime'] = date('Y-m-d H:i:s');

        $id = $this->uuid();

        $insert = [
            'id' => $id,
            'feedback_id' => $data['feedback_id'],
            'user_id' => $data['user_id'],
            'json_response' => $data['json_response'],
            'createdBy' => $this->session->username ?? 'system',
            'createdTime' => date('Y-m-d H:i:s')
        ];


        $this->db->insert('lnd_master_form_test', $data);

        $query = $this->db->order_by('createdTime', 'name')->limit(1)->get('lnd_master_form_test');
    
        $record = $query->row();
    
        return $record; 
    }

    public function update_data($id, $data) {
        $this->db->where('id', $id);
        $data['updatedBy'] = $this->session->username;
        $data['updatedTime'] = date('Y-m-d H:i:s');

        $this->db->update('lnd_master_form_test', $data);
        
        $query = $this->db->order_by('updatedTime', 'name')->limit(1)->get('lnd_master_form_test');
    
        $record = $query->row();
    
        return $record; 
    }

    public function insertQuestion($data, $uploadedFiles = []) {
        // Inject image file paths ke dalam $data['question'] dan $data['post_question']
        if (!empty($uploadedFiles)) {
            foreach ($uploadedFiles as $field => $path) {
                // Contoh field: question_0_image atau post_question_1_image
                if (preg_match('/^(question|post_question)_(\d+)_image$/', $field, $matches)) {
                    $type = $matches[1];
                    $index = (int)$matches[2];
                    $data[$type][$index]['image'] = $path;
                }
            }
        }

        $insert = [
            'id' => $this->uuid(),  // UUID custom generator
            'training_name' => $data['training_name'],
            'department' => $data['department'],
            'question_type' => $data['questionType'],
            'json_question' => json_encode($data['question']),
            'json_postquestion' => isset($data['post_question']) ? json_encode($data['post_question']) : null,
            'createdBy' => $this->session->userdata('user_id') ?? 'system',
            'createdTime' => date('Y-m-d H:i:s')
        ];

        return $this->db->insert('lnd_master_form_test', $insert);
    }

    private function uuid() {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }

    public function delete_data($id) {
        $this->db->where('id', $id);
        $this->db->delete('lnd_master_form_test');
    }
}