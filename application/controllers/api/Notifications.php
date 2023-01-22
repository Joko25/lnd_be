<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');

class Notifications extends CI_Controller
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
    public function index()
    {
        show_error("Cannot Process your request");
    }

    public function read($token = "")
    {
        if ($token != "") {
            $users_m = $this->crud->read("users_m", [], ["token" => $token]);
            if (!empty($users_m->number)) {
                $notifications = $this->crud->reads("notifications_m", [], ["number" => $users_m->number, "status" => "0"]);
                die(json_encode(array(
                    "code" => "200",
                    "results" => ["total" => count($notifications)],
                    "status" => "success",
                )));
            } else {
                show_error("Cannot Process your request");
            }
        } else {
            show_error("Cannot Process your request");
        }
    }
}
