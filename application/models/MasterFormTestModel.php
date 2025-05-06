<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterFormTestModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_data() {
        $query = $this->db->get('lnd_master_form_test');
        echo $query;
        return $query->result_array();
    }

    public function get_detail_data($id) {
        $query = $this->db->get_where('lnd_master_form_test', ['id' => $id]);

        if ($query->num_rows() > 0) {
            return $query->row_array(); 
        }

        return null;
    }

    public function insert_data($data) {
        $data['createdBy'] = $this->session->username;
        $data['createdTime'] = date('Y-m-d H:i:s');
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