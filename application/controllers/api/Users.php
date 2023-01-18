<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
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

    public function read($email = ""){
        if(!empty($email)){
            $users = $this->crud->reads('users_m', ["deleted" => 0], ["email" => $email]);
        }else{
            show_error("Cannot Process your request");
        }
    }

    //CREATE DATA
    public function create()
    {
        if ($this->input->post()) {
            if ($this->form_validation->run() == TRUE) {
                $post = $this->input->post();
                $approvals = $this->crud->read('approvals', [], ["table_name" => $post['table_name'], "departement_id" => $post['departement_id']]);
                if (!$approvals) {
                    $send = $this->crud->create('approvals', $post);
                    echo $send;
                } else {
                    show_error("Duplicate");
                }
            } else {
                show_error(validation_errors());
            }
        } else {
            show_error("Cannot Process your request");
        }
    }
}
