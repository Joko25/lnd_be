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

    public function insertQuestion($data, $files = []) {
        $this->db->trans_begin();

        // Simpan ke tabel master question
        $questionHeader = [
            'training_name' => $data['training_name'],
            'department' => $data['department'],
            'question_type' => $data['questionType'],
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('question_header', $questionHeader);
        $headerId = $this->db->insert_id();

        // Simpan pertanyaan
        if (!empty($data['post_question'])) {
            foreach ($data['post_question'] as $qIdx => $q) {
                $questionData = [
                    'header_id' => $headerId,
                    'question' => $q['question'],
                    'image_position' => $q['imagePosition'],
                    'correct_answer' => $q['correct_answer'],
                ];

                // Tambahkan nama file jika ada di path yang cocok
                $fileKey = "post_question[$qIdx].image";
                if (isset($files[$fileKey])) {
                    $questionData['image'] = $files[$fileKey];
                }

                $this->db->insert('question_detail', $questionData);
                $questionId = $this->db->insert_id();

                // Simpan opsi jawaban
                if (!empty($q['opsion'])) {
                    foreach ($q['opsion'] as $oIdx => $o) {
                        $optionData = [
                            'question_id' => $questionId,
                            'title' => $o['title'],
                            'point' => $o['point']
                        ];

                        $fileOptKey = "post_question[$qIdx].opsion[$oIdx].image";
                        if (isset($files[$fileOptKey])) {
                            $optionData['image'] = $files[$fileOptKey];
                        }

                        $this->db->insert('question_option', $optionData);
                    }
                }
            }
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function delete_data($id) {
        $this->db->where('id', $id);
        $this->db->delete('lnd_master_form_test');
    }
}