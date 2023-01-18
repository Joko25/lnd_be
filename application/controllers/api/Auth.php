<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('crud');

        //VALIDASI FORM
        $this->form_validation->set_rules('table_name', 'Module', 'required|min_length[2]|max_length[50]');
    }

    //HALAMAN UTAMA
    public function index()
    {
        show_error("Cannot Process your request");
    }

    public function login(){
        $this->output->delete_cache();
        if ($this->input->post()) {
            $post = $this->input->post();
            $user = $this->crud->read("users_m", [], [
                "deleted" => 0,
                "email" => $post['email'],
                "password" => $post['password']
            ]);

            if ($user) {
                if ($user->status == 1) {
                    die(json_encode(array("title" => "Not Active", "message" => "Cannot Login because your account is not active", "theme" => "info")));
                } else {
                    $session = array(
                        "id" => $user->id,
                        "departement_id" => $user->departement_id,
                        "employee_id" => $user->employee_id,
                        "email" => $user->email,
                        "password" => $user->password,
                        "avatar" => $user->avatar
                    );

                    //$this->crud->logs("Login Mobile", json_encode($session), "Login");
                    die(json_encode(array("title" => "Login", "message" => "Login Success", "theme" => "success")));
                }
            } else {
                die(json_encode(array("title" => "Not Exist", "message" => "Email or Password is wrong", "theme" => "info")));
            }
        }else{
            show_error("Cannot Process your request");
        }
    }
}
