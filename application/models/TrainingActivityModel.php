<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') OR exit('No direct script access allowed');

class TrainingActivityModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function get_all_data() {
        $query = $this->db->get('lnd_training_activity');
        return $query->result_array();
    }

    public function get_detail_data($id) {
        $query = $this->db->get_where('lnd_training_activity', ['id' => $id]);

        if($query->num_rows() > 0) {
            return $query->row_array();
        }

        return null;
    }

    public function insert_data($data) {
        $data['createdBy'] = $this->session->username;
        $data['createdTime'] = date('Y-m-d H:i:s');
        $this->db->insert('lnd_training_activity', $data);

        $query = $this->db->order_by('createdTime', 'activityName')->limit(1)->get('lnd_training_activity');
    
        $record = $query->row();
    
        return $record; 
    }

    public function update_data($id, $data) {
        $this->db->where('id', $id);
        $data['updatedBy'] = $this->session->username;
        $data['updatedTime'] = date('Y-m-d H:i:s');

        $this->db->update('lnd_training_activity', $data);
        
        $query = $this->db->order_by('updatedTime', 'activityName')->limit(1)->get('lnd_training_activity');
    
        $record = $query->row();
    
        return $record; 
    }

    public function delete_data($id) {
        $this->db->where('id', $id);
        $this->db->delete('lnd_training_activity');
    }
}