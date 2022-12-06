<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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

    public function macAddress()
    {
        //Cara mudah dan sederhana mendapatkan mac address  
        // Turn on output buffering  
        ob_start();
        //mendapatkan detail ipconfing menggunakan CMD  
        system('ipconfig /all');
        // mendapatkan output kedalam variable  
        $mycom = ob_get_contents();
        // membersihkan output buffer  
        ob_clean();
        $findme = "Physical";
        // mencari perangkat fisik | menemukan posisi text perangkat fisik  
        //Search the "Physical" | Find the position of Physical text  
        $pmac = strpos($mycom, $findme);
        // mendapatkan alamat peragkat fisik  
        $mac = substr($mycom, ($pmac + 36), 17);
        //menampilkan Mac Address  
        return $mac;
    }

    public function index()
    {
        //Config
        $data['config'] = $this->crud->read('config');

        if ($this->session->username == "") {
            if ($this->input->post()) {
                $post = $this->input->post();
                $user = $this->crud->read("users", [], [
                    "deleted" => 0,
                    "username" => $post['username'],
                    "password" => $post['password']
                ]);

                if ($user) {
                    if ($user->actived == 1) {
                        $data['message'] = '<div style="background:red; color:white; padding:10px; font-size:10px;"><strong>Not Active</strong><br>Your account is not active, please check your email or contact the admin</div>';
                        $this->load->view('login', $data);
                    } else {
                        $session = array(
                            "id" => $user->id,
                            "departement_id" => $user->departement_id,
                            "number" => $user->number,
                            "name" => $user->name,
                            "username" => $user->username,
                            "position" => $user->position
                        );

                        $this->crud->logs("Login", json_encode($session), "Login");
                        $this->session->set_userdata($session);
                        redirect('home');
                    }
                } else {
                    $data['message'] = '<div style="background:red; color:white; padding:10px; font-size:10px;"><strong>Failed Login!</strong><br>Your Username and Password is wrong, please try again!!</div>';
                    $this->load->view('login', $data);
                }
            } else {
                $data['message'] = "";
                $this->load->view('login', $data);
            }
        } else {
            redirect('home');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('departement_id');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('position');
        redirect('login');
    }
}
