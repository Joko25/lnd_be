<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CuriculumModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_data() {
        $query = $this->db->get('lnd_curiculum');
        return $query->result_array();
    }

    public function get_detail_data($id) {
        $query = $this->db->get_where('lnd_curiculum', ['id' => $id]);

        if ($query->num_rows() > 0) {
            return $query->row_array(); 
        }

        return null;
    }

    public function insert_data($data) {
        $this->db->insert('lnd_curiculum', $data);

        $query = $this->db->order_by('createdTime', 'desc')->limit(1)->get('lnd_curiculum');
    
        $record = $query->row();
    
        return $record; 
    }

    public function update_data($id, $data) {
        $this->db->where('id', $id);

        $this->db->update('lnd_curiculum', $data);
        
        $query = $this->db->order_by('updatedTime', 'desc')->limit(1)->get('lnd_curiculum');
    
        $record = $query->row();
    
        return $record; 
    }

    public function delete_data($id) {
        $this->db->where('id', $id);
        $this->db->delete('lnd_curiculum');
    }
}