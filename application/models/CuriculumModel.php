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

    public function get_curriculum_detail($curriculum_id)
    {
        // Ambil semua competence berdasarkan curriculum_id
        $this->db->select('id, competence_standard');
        $this->db->from('lnd_curriculum');
        $this->db->where('curriculum_id', $curriculum_id);
        $competences = $this->db->get()->result_array();

        $data = [];

        foreach ($competences as $comp) {
            $competence_id = $comp['id'];

            // Ambil semua training untuk competence ini
            $this->db->select('id, training_activity');
            $this->db->from('lnd_curriculum_training_activity');
            $this->db->where('competence_id', $competence_id);
            $trainings = $this->db->get()->result_array();

            $training_arr = [];
            foreach ($trainings as $training) {
                $training_id = $training['id'];

                // Ambil semua indikator untuk training ini
                $this->db->select('indicator_name');
                $this->db->from('lnd_curriculum_indicator');
                $this->db->where('training_id', $training_id);
                $indicators = $this->db->get()->result_array();

                $training_arr[] = [
                    'training_activity' => $training['training_activity'],
                    'indicator' => array_column($indicators, 'indicator_name')
                ];
            }

            $data[] = [
                'competence_standard' => $comp['competence_standard'],
                'training' => $training_arr
            ];
        }

        return $data;
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
        // Cek dulu apakah sudah ada data curriculum_id yang sama
        $this->db->where('curriculum_id', $curriculum_id);
        $existing = $this->db->get('lnd_curriculum')->num_rows();

        if ($existing > 0) {
            // Jika sudah ada, hapus data lama agar tidak duplikat
            $this->delete_curriculum($curriculum_id);
        }

        $lastInsertedId = null;

        foreach ($data['competence'] as $comp) {
            // Validasi: cek competence_standard sudah ada atau belum untuk curriculum_id ini
            $this->db->where([
                'curriculum_id' => $curriculum_id,
                'competence_standard' => $comp['competence_standard']
            ]);
            $is_competence_exist = $this->db->get('lnd_curriculum')->num_rows();

            if ($is_competence_exist > 0) {
                // Jika competence_standard sudah ada, skip
                continue;
            }

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
                // Validasi: cek training_activity sudah ada atau belum untuk competence_id ini
                $this->db->where([
                    'competence_id' => $curr_id,
                    'training_activity' => $train['training_activity']
                ]);
                $is_training_exist = $this->db->get('lnd_curriculum_training_activity')->num_rows();

                if ($is_training_exist > 0) {
                    // Jika training_activity sudah ada, skip
                    continue;
                }

                $train_id = $this->uuid();

                $this->db->insert('lnd_curriculum_training_activity', [
                    'id' => $train_id,
                    'competence_id' => $curr_id,
                    'training_activity' => $train['training_activity']
                ]);

                foreach ($train['indicator'] as $indicator) {
                    // Validasi: cek indicator_name sudah ada atau belum untuk training_id ini
                    $this->db->where([
                        'training_id' => $train_id,
                        'indicator_name' => $indicator
                    ]);
                    $is_indicator_exist = $this->db->get('lnd_curriculum_indicator')->num_rows();

                    if ($is_indicator_exist > 0) {
                        // Jika indicator_name sudah ada, skip
                        continue;
                    }

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
        $this->db->trans_start();

        $this->db->select('id');
        $this->db->from('lnd_curriculum');
        $this->db->where('curriculum_id', $curriculum_id);
        $competence_ids = array_column($this->db->get()->result_array(), 'id');

        if (!empty($competence_ids)) {
            $this->db->select('id');
            $this->db->from('lnd_curriculum_training_activity');
            $this->db->where_in('competence_id', $competence_ids);
            $training_ids = array_column($this->db->get()->result_array(), 'id');

            if (!empty($training_ids)) {
                $this->db->where_in('training_id', $training_ids);
                $this->db->delete('lnd_curriculum_indicator');
            }

            $this->db->where_in('competence_id', $competence_ids);
            $this->db->delete('lnd_curriculum_training_activity');

            $this->db->where('curriculum_id', $curriculum_id);
            $this->db->delete('lnd_curriculum');
        }

        $this->db->trans_complete();

        return $this->db->trans_status();
    }

    public function update_data($id, $data) {
        $this->db->where('id', $id);

        $this->db->update('lnd_curriculum', $data);
        
        $query = $this->db->order_by('updatedTime', 'desc')->limit(1)->get('lnd_curriculum');
    
        $record = $query->row();
    
        return $record; 
    }

    public function update_curriculum($curriculum_id, $data) {
        $this->db->trans_start();

        // Get all existing competence for this curriculum
        $existing_competence = $this->db->get_where('lnd_curriculum', ['curriculum_id' => $curriculum_id])->result_array();
        $existing_competence_map = [];
        foreach ($existing_competence as $comp) {
            $existing_competence_map[$comp['competence_standard']] = $comp;
        }

        // Track competence standards that exist in the payload
        $payload_competence_standards = [];

        foreach ($data['competence'] as $competence) {
            $competence_standard = $competence['competence_standard'];
            $payload_competence_standards[] = $competence_standard;

            if (isset($existing_competence_map[$competence_standard])) {
                $competence_id = $existing_competence_map[$competence_standard]['id'];

                // Update existing competence
                $this->db->where('id', $competence_id);
                $this->db->update('lnd_curriculum', [
                    'updatedBy' => $this->session->username,
                    'updatedTime' => date('Y-m-d H:i:s')
                ]);
            } else {
                // Insert new competence
                $competence_id = $this->uuid();
                $this->db->insert('lnd_curriculum', [
                    'id' => $competence_id,
                    'curriculum_id' => $curriculum_id,
                    'competence_standard' => $competence_standard,
                    'createdBy' => $this->session->username,
                    'createdTime' => date('Y-m-d H:i:s')
                ]);
            }

            if (!empty($competence['training'])) {
                // Get all existing trainings for this competence
                $existing_trainings = $this->db->get_where('lnd_curriculum_training_activity', ['competence_id' => $competence_id])->result_array();
                $existing_training_map = [];
                foreach ($existing_trainings as $et) {
                    $existing_training_map[$et['training_activity']] = $et;
                }

                $payload_training_activities = [];

                foreach ($competence['training'] as $training) {
                    $training_activity = $training['training_activity'];
                    $payload_training_activities[] = $training_activity;

                    if (isset($existing_training_map[$training_activity])) {
                        $training_id = $existing_training_map[$training_activity]['id'];
                    } else {
                        $training_id = $this->uuid();
                        $this->db->insert('lnd_curriculum_training_activity', [
                            'id' => $training_id,
                            'competence_id' => $competence_id,
                            'training_activity' => $training_activity
                        ]);
                    }

                    if (!empty($training['indicator'])) {
                        // Delete indicators for this training_id
                        $this->db->where('training_id', $training_id);
                        $this->db->delete('lnd_curriculum_indicator');

                        foreach ($training['indicator'] as $indicator_name) {
                            $this->db->insert('lnd_curriculum_indicator', [
                                'id' => $this->uuid(),
                                'training_id' => $training_id,
                                'indicator_name' => $indicator_name
                            ]);
                        }
                    }
                }

                // Delete trainings not in payload
                foreach ($existing_training_map as $activity => $train_row) {
                    if (!in_array($activity, $payload_training_activities)) {
                        $this->db->where('id', $train_row['id']);
                        $this->db->delete('lnd_curriculum_training_activity');

                        $this->db->where('training_id', $train_row['id']);
                        $this->db->delete('lnd_curriculum_indicator');
                    }
                }
            }
        }

        // Delete competence not in payload
        foreach ($existing_competence_map as $standard => $comp_row) {
            if (!in_array($standard, $payload_competence_standards)) {
                $this->db->where('competence_id', $comp_row['id']);
                $this->db->delete('lnd_curriculum_training_activity');

                $this->db->select('id');
                $this->db->from('lnd_curriculum_training_activity');
                $this->db->where('competence_id', $comp_row['id']);
                $training_ids = array_column($this->db->get()->result_array(), 'id');

                if (!empty($training_ids)) {
                    $this->db->where_in('training_id', $training_ids);
                    $this->db->delete('lnd_curriculum_indicator');
                }

                $this->db->where('id', $comp_row['id']);
                $this->db->delete('lnd_curriculum');
            }
        }

        $this->db->trans_complete();
        // Query dijalankan setelah semua foreach selesai
        $query = $this->db->where('curriculum_id', $curriculum_id)->get('lnd_curriculum');
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

    public function get_indicator_list()
    {
        // Ambil distinct curriculum_id, latest updatedTime, dan jumlah competence
        $this->db->select('id, indicator_name');
        $this->db->from('lnd_curriculum_indicator');
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