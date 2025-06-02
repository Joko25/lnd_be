<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') OR exit('No direct script access allowed');

class MethodTrainingModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function get_all_data() {
        $query = $this->db->get('lnd_method_training');
        return $query->result_array();
    }

    public function get_detail_data($id) {
        $query = $this->db->get_where('lnd_method_training', ['id' => $id]);

        if($query->num_rows() > 0) {
            return $query->row_array();
        }

        return null;
    }

    public function insert_data($data) {
        $data['createdBy'] = $this->session->username;
        $data['createdTime'] = date('Y-m-d H:i:s');
        $this->db->insert('lnd_method_training', $data);

        $query = $this->db->order_by('createdTime', 'name')->limit(1)->get('lnd_method_training');
    
        $record = $query->row();
    
        return $record; 
    }

    public function update_data($id, $data) {
        $this->db->where('id', $id);
        $data['updatedBy'] = $this->session->username;
        $data['updatedTime'] = date('Y-m-d H:i:s');

        $this->db->update('lnd_method_training', $data);
        
        $query = $this->db->order_by('updatedTime', 'name')->limit(1)->get('lnd_method_training');
    
        $record = $query->row();
    
        return $record; 
    }

    public function delete_data($id) {
        $this->db->where('id', $id);
        $this->db->delete('lnd_method_training');
    }
}