<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CuriculumModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_data() {
        $query = $this->db->get('lnd_curriculum');
        echo $query;
        return $query->result_array();
    }

    public function get_detail_data($id) {
        $query = $this->db->get_where('lnd_curriculum', ['id' => $id]);

        if ($query->num_rows() > 0) {
            return $query->row_array(); 
        }

        return null;
    }

    public function insert_data($data) {
        if (!is_array($data)) {
            return false;
        }

        $data['createdBy'] = $this->session->username;
        $data['createdTime'] = date('Y-m-d H:i:s');

        try {
            $this->db->insert('lnd_curriculum', $data);
            $insertedId = $this->db->insert_id();

            $query = $this->db->get_where('lnd_curriculum', ['id' => $insertedId]);
            return $query->row();
        } catch (Exception $e) {
            return false;
        }
    }

    public function update_data($id, $data) {
        $this->db->where('id', $id);

        $this->db->update('lnd_curriculum', $data);
        
        $query = $this->db->order_by('updatedTime', 'desc')->limit(1)->get('lnd_curriculum');
    
        $record = $query->row();
    
        return $record; 
    }

    public function delete_data($id) {
        $this->db->where('id', $id);
        $this->db->delete('lnd_curriculum');
    }
}