<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');

class Permissions extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('crud');
    }

    //HALAMAN UTAMA
    public function index($token = "")
    {
        if ($token == "") {
            $this->load->view('template/header_mobile');
            $this->load->view('mobile/404');
        } else {
            $users_m = $this->crud->read("users_m", [], ["token" => $token]);
            if ($users_m) {
                $users = $this->crud->read("users", [], ["number" => $users_m->number]);
                if (empty($this->session->username)) {
                    $this->session->set_userdata(["username" => $users->username]);
                }

                $permit_types = $this->crud->reads("permit_types");
                $employee = $this->crud->read("employees", [], ["number" => $users_m->number]);

                $data['number'] = $users_m->number;
                $data['permit_types'] = $permit_types;
                $data['employee'] = $employee;

                $this->load->view('template/header_mobile');
                $this->load->view('mobile/permissions', $data);
            } else {
                $this->load->view('template/header_mobile');
                $this->load->view('mobile/404');
            }
        }
    }

    public function reason($permit_type_id)
    {
        $reasons = $this->crud->reads("reasons", [], ["permit_type_id" => $permit_type_id]);
        $html = "";
        foreach ($reasons as $reason) {
            $html .= "<option value='" . $reason->id . "'>" . $reason->name . "</option>";
        }

        die($html);
    }

    //CREATE DATA
    public function create()
    {
        if ($this->input->post()) {
            $post = $this->input->post();

            $date_from = strtotime($post['date_from']);
            $date_to = strtotime($post['date_to']);

            $send = "";
            $leave = $post['leave'];
            for ($i = $date_from; $i <= $date_to; $i += (60 * 60 * 24)) {
                $permit_date = date('Y-m-d', $i);
                $this->db->select('*');
                $this->db->from('permits');
                $this->db->where("employee_id", $post['employee_id']);
                $this->db->where("permit_date", $permit_date);
                $permit = $this->db->get()->row();

                if (!empty($permit)) {
                    echo json_encode(array("title" => "Available", "message" => "The permit requestion for this employee and permit date has been created", "theme" => "error"));
                    exit;
                } else {
                    $post_final = array(
                        "employee_id" => $post['employee_id'],
                        "permit_type_id" => $post['permit_type_id'],
                        "reason_id" => $post['reason_id'],
                        "trans_date" => $post['trans_date'],
                        "permit_date" => $permit_date,
                        "duration" => "1",
                        "leave" => ($leave - $post['duration']),
                        "note" => $post['note']
                    );

                    $send = $this->crud->create('permits', $post_final);
                    $this->session->unset_userdata('username');
                }

                $leave = ($leave - $post['duration']);
            }

            echo $send;
        } else {
            show_error("Cannot Process your request");
        }
    }
}
