<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterFeedbackModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_data() {
        $query = $this->db->get('lnd_master_feedback');
        echo $query;
        return $query->result_array();
    }

    public function get_detail_data($id) {
        $query = $this->db->get_where('lnd_master_feedback', ['id' => $id]);

        if ($query->num_rows() > 0) {
            return $query->row_array(); 
        }

        return null;
    }

    public function insert_data($data) {
        $data['createdBy'] = $this->session->username;
        $data['createdTime'] = date('Y-m-d H:i:s');
        $this->db->insert('lnd_master_feedback', $data);

        $query = $this->db->order_by('createdTime', 'name')->limit(1)->get('lnd_master_feedback');
    
        $record = $query->row();
    
        return $record; 
    }

    public function updateQuestion($id, $data) {
        // Susun data untuk update
        $updateData = [
            'title'     => $data['title'],
            'instruction'        => $data['instruction'],
            'json_feedback'     => json_encode($data['question']),
            'updatedBy'         => $this->session->username ?? 'system',
            'updatedTime'       => date('Y-m-d H:i:s')
        ];
    
        // Eksekusi update
        return $this->db->where('id', $id)->update('lnd_master_feedback', $updateData);
    }    

    public function insertQuestion($data) {
        $insert = [
            'title' => $data['title'],
            'instruction' => $data['instruction'],
            'json_feedback' => json_encode($data['question']),
            'createdBy' => $this->session->username ?? 'system',
            'createdTime' => date('Y-m-d H:i:s')
        ];

        return $this->db->insert('lnd_master_feedback', $insert);
    }

    public function delete_data($id) {
        $this->db->where('id', $id);
        $this->db->delete('lnd_master_feedback');
    }
}