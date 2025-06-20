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

    public function updateQuestion_v2($id, $data, $uploadedFiles = []) {
        // Update imageQuestion dan opsion hanya jika ada file baru
        foreach ($data['question'] as &$question) {
            // Image question
            if (isset($question['imageQuestion']) && isset($uploadedFiles[$question['imageQuestion']])) {
                $question['imageQuestion'] = basename($uploadedFiles[$question['imageQuestion']]);
            } elseif (!isset($question['imageQuestion'])) {
                unset($question['imageQuestion']); // Jangan ganggu kalau tidak ada
            }
    
            // Image opsion
            foreach ($question['opsion'] as &$opsion) {
                if (isset($opsion['image']) && isset($uploadedFiles[$opsion['image']])) {
                    $opsion['image'] = [basename($uploadedFiles[$opsion['image']])];
                } elseif (!isset($opsion['image'])) {
                    unset($opsion['image']); // biarkan seperti sebelumnya
                }
            }
        }
    
        // Post Question
        if (!empty($data['post_question'])) {
            foreach ($data['post_question'] as &$question) {
                if (isset($question['imageQuestion']) && isset($uploadedFiles[$question['imageQuestion']])) {
                    $question['imageQuestion'] = basename($uploadedFiles[$question['imageQuestion']]);
                } elseif (!isset($question['imageQuestion'])) {
                    unset($question['imageQuestion']);
                }
    
                foreach ($question['opsion'] as &$opsion) {
                    if (isset($opsion['image']) && isset($uploadedFiles[$opsion['image']])) {
                        $opsion['image'] = [basename($uploadedFiles[$opsion['image']])];
                    } elseif (!isset($opsion['image'])) {
                        unset($opsion['image']);
                    }
                }
            }
        }
    
        // Persiapan untuk update
        $updateData = [
            'training_name'     => $data['training_name'],
            'department'        => is_array($data['department']) ? implode(', ', $data['department']) : $data['department'],
            'question_type'     => $data['questionType'],
            'json_question'     => json_encode($data['question']),
            'json_postquestion' => isset($data['post_question']) ? json_encode($data['post_question']) : null,
            'updatedBy'         => $this->session->username ?? 'system',
            'updatedTime'       => date('Y-m-d H:i:s')
        ];
    
        return $this->db->where('id', $id)->update('lnd_master_form_test', $updateData);
    }
    

    public function updateQuestion($id, $data, $uploadedFiles = []) {
        // Inject imageQuestion jika ada file baru
        foreach ($data['question'] as &$question) {
            if (isset($question['imageQuestion'])) {
                if (isset($uploadedFiles[$question['imageQuestion']])) {
                    $question['imageQuestion'] = basename($uploadedFiles[$question['imageQuestion']]);
                } elseif (!isset($question['imageQuestion'])) {
                    $question['imageQuestion'] = null;
                }
            } else {
                // Key 'imageQuestion' tidak ada
                $question['imageQuestion'] = null; // Atau tindakan lain yang sesuai
                log_message('debug', 'Question tidak memiliki key imageQuestion: ' . print_r($question, true));
            }
    
            // Inject image opsion
            foreach ($question['opsion'] as $optIndex => &$opsion) {
                if (isset($opsion['image'])) {
                    if (isset($uploadedFiles[$opsion['image']])) {
                        $opsion['image'] = [basename($uploadedFiles[$opsion['image']])];
                    } elseif (!isset($opsion['image'])) {
                        $opsion['image'] = [];
                    }
                } else {
                    $opsion['image'] = [];
                    log_message('debug', 'Opsion tidak memiliki key image: ' . print_r($opsion, true));
                }
            }
        }
    
        // Proses post_question (jika ada)
        if (!empty($data['post_question'])) {
            foreach ($data['post_question'] as &$question) {
                if(isset($question['imageQuestion'])) {
                    if (isset($uploadedFiles[$question['imageQuestion']])) {
                        $question['imageQuestion'] = basename($uploadedFiles[$question['imageQuestion']]);
                    } elseif (!isset($question['imageQuestion'])) {
                        $question['imageQuestion'] = null; // Set null jika tidak ada file baru dan tidak ada nilai lama
                    }
                }else{
                    $question['imageQuestion'] = null;
                }
    
                foreach ($question['opsion'] as $optIndex => &$opsion) {
                    if (isset($opsion['image']) && isset($uploadedFiles[$opsion['image']])) {
                        $opsion['image'] = [basename($uploadedFiles[$opsion['image']])];
                    } elseif (!isset($opsion['image'])) {
                        $opsion['image'] = []; // Set array kosong jika tidak ada file baru dan tidak ada nilai lama
                    }
                }
            }
        }
    
        // Susun data untuk update
        $updateData = [
            'training_name'     => $data['training_name'],
            'department'        => is_array($data['department']) ? implode(', ', $data['department']) : $data['department'],
            'question_type'     => $data['questionType'],
            'json_question'     => json_encode($data['question']),
            'json_postquestion' => isset($data['post_question']) ? json_encode($data['post_question']) : null,
            'updatedBy'         => $this->session->username ?? 'system',
            'updatedTime'       => date('Y-m-d H:i:s')
        ];
    
        // Eksekusi update
        return $this->db->where('id', $id)->update('lnd_master_form_test', $updateData);
    }    

    public function insertQuestion($data, $uploadedFiles = []) {
        // Inject image file paths ke dalam $data['question'] dan $data['post_question']
        if (!empty($uploadedFiles)) {
            foreach ($uploadedFiles as $field => $path) {
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
            'department' => is_array($data['department']) ? implode(', ', $data['department']) : $data['department'],
            'question_type' => $data['questionType'],
            'json_question' => json_encode($data['question']),
            'json_postquestion' => isset($data['post_question']) ? json_encode($data['post_question']) : null,
            'createdBy' => $this->session->username ?? 'system',
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