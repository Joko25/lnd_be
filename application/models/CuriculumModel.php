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

    public function save_curriculum($curriculum_id, $data)
    {
        // Hapus dulu data lama
        $this->delete_curriculum($curriculum_id);

        $lastInsertedId = null;

        foreach ($data['competence'] as $comp) {
            $curr_id = $this->uuid();
            $lastInsertedId = $curr_id;

            $this->db->insert('lnd_curriculum', [
                'id' => $curr_id,
                'curriculum_id' => $curriculum_id, 
                'competence_standard' => $comp['competence_standard'],
                'createdBy' => $this->session->username,
                'createdTime' => date('Y-m-d H:i:s')
            ]);

            foreach ($comp['training'] as $train) {
                $train_id = $this->uuid();

                $this->db->insert('lnd_curriculum_training_activity', [
                    'id' => $train_id,
                    'competence_id' => $curr_id,
                    'training_activity' => $train['training_activity']
                ]);

                foreach ($train['indicator'] as $indicator) {
                    $this->db->insert('lnd_curriculum_indicator', [
                        'id' => $this->uuid(),
                        'training_id' => $train_id,
                        'indicator_name' => $indicator
                    ]);
                }
            }
        }

        // Query dijalankan setelah semua foreach selesai
        $query = $this->db->where('id', $lastInsertedId)->get('lnd_curriculum');
        $record = $query->row();
        
        return $record;
    }

    public function delete_curriculum($curriculum_id)
    {
        $this->db->where('curriculum_id', $curriculum_id);
        $rows = $this->db->get('lnd_curriculum')->result();

        foreach ($rows as $r) {
            $this->db->where('competence_id', $r->id);
            $trainings = $this->db->get('lnd_curriculum_training_activity')->result();

            foreach ($trainings as $t) {
                $this->db->where('training_id', $t->id);
                $this->db->delete('lnd_curriculum_indicator');
            }

            $this->db->where('competence_id', $r->id);
            $this->db->delete('lnd_curriculum_training_activity');
        }

        $this->db->where('curriculum_id', $curriculum_id);
        $this->db->delete('lnd_curriculum');
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

    public function get_curriculum_data($curriculum_id)
    {
        $this->db->where('curriculum_id', $curriculum_id);
        $curriculum = $this->db->get('lnd_curriculum')->result();

        $result = ['competence' => []];

        foreach ($curriculum as $c) {
            $competence = [
                'competence_standard' => $c->competence_standard,
                'training' => []
            ];

            $this->db->where('competence_id', $c->id);
            $trainings = $this->db->get('lnd_curriculum_training_activity')->result();

            foreach ($trainings as $t) {
                $this->db->where('training_id', $t->id);
                $indicators = $this->db->get('lnd_curriculum_indicator')->result();

                $training = [
                    'training_activity' => $t->training_activity,
                    'indicator' => array_map(function ($i) {
                        return $i->indicator_name;
                    }, $indicators)
                ];

                $competence['training'][] = $training;
            }

            $result['competence'][] = $competence;
        }

        return $result;
    }

    public function get_curriculum_list()
    {
        // Ambil distinct curriculum_id, latest updatedTime, dan jumlah competence
        $this->db->select('curriculum_id, MAX(updatedTime) as updated_at, COUNT(id) as total_competence');
        $this->db->from('lnd_curriculum');
        $this->db->group_by('curriculum_id');
        $this->db->order_by('updated_at', 'DESC');
        return $this->db->get()->result();
    }

    private function uuid()
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }
}