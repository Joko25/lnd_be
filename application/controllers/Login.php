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
        $this->load->model('emails');
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
        $this->output->delete_cache();
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
                        $data['message'] = '<div padding: 10px; background-color: #B49651; color: white; margin: 10px; border-radius: 1rem;>Your account is not active</div>';
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
                    $data['message'] = '<div style="padding: 10px; background-color: #B45151; color: white; border-radius: 1rem; margin: 10px;">Username or Password Not Exist</div>';
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

    public function forgot()
    {
        //Config
        $data['config'] = $this->crud->read('config');

        if ($this->session->username == "") {
            if ($this->input->post()) {
                $post = $this->input->post();
                $user = $this->crud->read("users", [], [
                    "deleted" => 0,
                    "email" => $post['email']
                ]);

                if ($user) {
                    $this->emails->emailForgot($post['email']);
                    $data['message'] = '<div style="padding: 10px; background-color: #65B451; color: white; border-radius: 1rem; margin: 10px;">Success, Please check your email </div>';
                    $this->load->view('forgot', $data);
                } else {
                    $data['message'] = '<div style="padding: 10px; background-color: #B45151; color: white; border-radius: 1rem; margin: 10px;">Your Email is not Exist</div>';
                    $this->load->view('forgot', $data);
                }
            } else {
                $data['message'] = "";
                $this->load->view('forgot', $data);
            }
        } else {
            redirect('home');
        }
    }

    public function reset($email = "")
    {
        //Config
        $data['config'] = $this->crud->read('config');

        if ($email != "") {
            if ($this->input->post()) {
                $post = $this->input->post();
                $emailFinal = base64_decode($email);
                $user = $this->crud->read("users", [], [
                    "deleted" => 0,
                    "email" => $emailFinal
                ]);

                if ($user) {
                    $this->db->where(["email" => $emailFinal]);
                    if ($this->db->update("users", ["password" => $post['password']])) {
                        $data['message'] = '<div style="padding: 10px; background-color: #65B451; color: white; border-radius: 1rem; margin: 10px;">Success, your password is Changed! </div>';
                        $this->load->view('reset', $data);
                    }
                } else {
                    $data['message'] = '<div style="padding: 10px; background-color: #B45151; color: white; border-radius: 1rem; margin: 10px;">Your Email is not Exist</div>';
                    $this->load->view('reset', $data);
                }
            } else {
                $data['message'] = "";
                $this->load->view('reset', $data);
            }
        } else {
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('departement_id');
        $this->session->unset_userdata('number');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('position');

        if ($this->session->userdata('id')) {
            die("1");
        } else {
            die("0");
        }
    }
}