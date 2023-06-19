<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Emails extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->default = $this->load->database('default', TRUE);
        $this->load->library('email');
    }

    function index()
    {
        show_404();
    }

    public function emailRegistration($email, $name = "USER", $username, $password)
    {
        $config = array(
            'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
            'smtp_host' => 'aeconsys.com',
            'smtp_port' => 465,
            'smtp_user' => 'kinenta@aeconsys.com',
            'smtp_pass' => 'Angeska@123#',
            'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
            'mailtype' => 'html', //plaintext 'text' mails or 'html'
            'smtp_timeout' => '4', //in seconds
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->email->initialize($config);
        $this->email->from('kinenta@aeconsys.com', 'AECONSYS [Registration]');
        $this->email->to($email);
        $this->email->subject('Registration New User');
        $this->email->message('<!DOCTYPE html>
        <html>
          <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Email</title>
        
            <style>
              p {
                color: #555;
                line-height: 1.5;
              }
            </style>
          </head>
          <body style="font-family: Arial, sans-serif;background-color: #f2f2f2; margin: 0; padding: 0;">
            <br>
            <br>
            <br>
            <center>
              <img src="http://43.254.126.202/hris-kinenta/assets/image/hris.png" style="width: 200px;">
            </center>
            <div style="max-width: 600px; margin: 0 auto; background-color: #fff; padding: 40px;">
                <br><br>
                <p>Hi. ' . $email . '</p>
                <p>You have been registered as a new user in the aplication, please use the following account to enter the application</p>
                <table>
                    <tr>
                        <td width="50">Username</td>
                        <td width="10">:</td>
                        <td width="100"><b>' . $username . '</b></td>
                    </tr>
                    <tr>
                        <td width="50">Password</td>
                        <td width="10">:</td>
                        <td width="100"><b>' . $password . '</b></td>
                    </tr>
                </table>
                <p>If you are having username and password problems, please contact your IT Dept</p>
                <br><br><br><br><br><br>

                <p>Regards,</p>
                <p><b>AECONSYS</b></p>
            </div>
            <center>
              <p style="margin-bottom: 100px;">&copy; PT Kinenta Indonesia - Human Resource Information System</p>
            </center>
          </body>
        </html>
        
        <!doctype html>
        <html>');
        $this->email->send();
    }

    public function emailForgot($email)
    {
        $config = array(
            'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
            'smtp_host' => 'aeconsys.com',
            'smtp_port' => 465,
            'smtp_user' => 'kinenta@aeconsys.com',
            'smtp_pass' => 'Angeska@123#',
            'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
            'mailtype' => 'html', //plaintext 'text' mails or 'html'
            'smtp_timeout' => '4', //in seconds
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->email->initialize($config);
        $this->email->from('kinenta@aeconsys.com', 'AECONSYS [Reset Password]');
        $this->email->to($email);
        $this->email->subject('Reset Password');
        $this->email->message('<!DOCTYPE html>
        <html>
          <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Email</title>
        
            <style>
              p {
                color: #555;
                line-height: 1.5;
              }
            </style>
          </head>
          <body style="font-family: Arial, sans-serif;background-color: #f2f2f2; margin: 0; padding: 0;">
            <br>
            <br>
            <br>
            <center>
              <img src="http://43.254.126.202/hris-kinenta/assets/image/hris.png" style="width: 200px;">
            </center>
            <div style="max-width: 600px; margin: 0 auto; background-color: #fff; padding: 40px;">
                <br><br>
        
              <p>Hi. ' . $email . '</p>
              <p>We have received a password change request for your account.</p>
              <p>Please note that the verification link is only valid for a limited time. If you do not change your password within the specified time, you will need to resubmit your request.</p>
        
              <p>Please click the button below to change your password</p>
              <br>
              <br>
              <br>
              <br>
              <a href="' . base_url('login/reset/' . base64_encode($email)) . '" target="_blank" style="display: inline-block; background-color: #4CAF50; color: #fff;text-decoration: none; padding: 10px 20px; border-radius: 4px;">Change Password</a>
              <br>
              <br>
            </div>
            <center>
              <p style="margin-bottom: 100px;">&copy; PT Kinenta Indonesia - Human Resource Information System</p>
            </center>
          </body>
        </html>');
        $this->email->send();
    }

    public function emailForgotMobile($email, $password)
    {
        $config = array(
            'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
            'smtp_host' => 'aeconsys.com',
            'smtp_port' => 465,
            'smtp_user' => 'kinenta@aeconsys.com',
            'smtp_pass' => 'Angeska@123#',
            'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
            'mailtype' => 'html', //plaintext 'text' mails or 'html'
            'smtp_timeout' => '4', //in seconds
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->email->initialize($config);
        $this->email->from('kinenta@aeconsys.com', 'AECONSYS [Reset Password]');
        $this->email->to($email);
        $this->email->subject('Reset Password');
        $this->email->message('<!doctype html>
        <html>
        
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>RESET PASSWORD</title>
            <style>
                body {
                    background: #EFEFEF;
                    font-family: Montserrat, Helvetica, Arial, serif;
                    font-size: 12px;
                }
            </style>
        </head>
        
        <body>
            <div style="background: #EFEFEF; width: 100%;">
                <div style="width: 100%; padding-top:100px; padding-bottom:100px;">
                    <center>
                        <h1>RESET PASSWORD!!</h1>
            
                        <div style="width: 60%; background: white; border-radius: 20px; padding:50px; text-align: left;">
                            <h3>Hi.<br><span style="color:#FF6060"> ' . $email . ' </span></h3>
                            <h3>Your email is registered in our system !</h3>
                            <p>Your Password now <b>' . $password . '</b></p>
                            <br><br>
                        </div>
                    </center>
                </div>
            </div>
        </body>
        
        </html>');
        $this->email->send();
    }

    public function emailSalarySlip($email, $employee, $company, $html)
    {
        $config = array(
            'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
            'smtp_host' => 'aeconsys.com',
            'smtp_port' => 465,
            'smtp_user' => 'kinenta@aeconsys.com',
            'smtp_pass' => 'Angeska@123#',
            'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
            'mailtype' => 'html', //plaintext 'text' mails or 'html'
            'smtp_timeout' => '4', //in seconds
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->email->initialize($config);
        $this->email->from('kinenta@aeconsys.com', $company . ' [Salary Slip]');
        $this->email->to($email);
        $this->email->subject('Salary Slip ' . $employee);
        $this->email->message(base64_decode($html));
        $email = $this->email->send();

        return $email;
    }

    public function emailCashCarry($employee_id, $trans_date, $type)
    {
        $this->db->select('a.*, b.name as employee_name, b.email');
        $this->db->from('cash_carries a');
        $this->db->join('employees b', 'a.employee_id = b.id');
        $this->db->where("employee_id", $employee_id);
        $this->db->where("trans_date", $trans_date);
        $this->db->where("type", $type);
        $this->db->order_by('b.name', 'ASC');
        $data = $this->db->get()->row();

        $pattern = '/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/';
        if (preg_match($pattern, $data->email)) {
            
            $config = array(
                'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
                'smtp_host' => 'aeconsys.com',
                'smtp_port' => 465,
                'smtp_user' => 'kinenta@aeconsys.com',
                'smtp_pass' => 'Angeska@123#',
                'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
                'mailtype' => 'html', //plaintext 'text' mails or 'html'
                'smtp_timeout' => '4', //in seconds
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );

            $this->email->initialize($config);
            $this->email->from('kinenta@aeconsys.com', 'Cash Carry [PT Kinenta Indonesia]');
            $this->email->to($data->email);
            $this->email->subject('Cash Carry - '.$data->idm_no);
            $this->email->message('<html>
            <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Email</title>
        
            <style>
                p {
                color: #555;
                line-height: 1.5;
                }
            </style>
            </head>
            <body style="font-family: Arial, sans-serif;background-color: #f2f2f2; margin: 0; padding: 0;">
            <br>
            <br>
            <br>
            <center>
                <img src="http://43.254.126.202/hris-kinenta/assets/image/hris.png" style="width: 200px;">
            </center>
            <div style="max-width: 600px; margin: 0 auto; background-color: #fff; padding: 40px;">
                <br><br>
                <p>Hai. ' . $data->employee_name . '</p>
                <p>Kamu di berikan kerja tambahan / Cash Carry pada :</p>
                <table style="width:100%;">
                    <tr>
                        <td width="100">IDM No</td>
                        <td width="10">:</td>
                        <td width="400"><b>' . $data->idm_no . '</b></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td><b>' . $data->trans_date . '</b></td>
                    </tr>
                    <tr>
                        <td>Pukul</td>
                        <td>:</td>
                        <td><b>' . $data->start . ' s.d ' . $data->end . '</b></td>
                    </tr>
                    <tr>
                        <td>Istirahat</td>
                        <td>:</td>
                        <td><b>' . $data->break . ' Menit</b></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>:</td>
                        <td><b>Rp. ' . number_format($data->amount) . '</b></td>
                    </tr>
                    <tr>
                        <td>Target Plan</td>
                        <td>:</td>
                        <td><b>' . $data->plan . '</b></td>
                    </tr>
                </table>
                <p>Jika mengalami kendala atau ada kesalahan data silahkan hubungi admin departement anda</p>
                <br><br><br>

                <p>Terimakasih</p>
            </div>
            <center>
                <p style="margin-bottom: 100px;">&copy; PT Kinenta Indonesia - Human Resource Information System</p>
                <br><br><br>
            </center>
            </body>
        </html>
        
        <!doctype html>
        <html>');
            $this->email->send();
        }
    }
}
