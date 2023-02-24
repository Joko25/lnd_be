<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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

    public function index()
    {
        if ($this->session->username != "") {
            $username = $this->session->username;

            $this->db->select('b.*');
            $this->db->from('logins a');
            $this->db->join('users b', 'a.username = b.username');
            $this->db->where('b.deleted', 0);
            $this->db->where('b.actived', 0);
            $this->db->where('b.status', 0);
            $this->db->where_not_in('b.username', $username);
            $this->db->like('a.created_date', date('Y-m-d'));
            $this->db->order_by('b.name', 'ASC');
            $logins = $this->db->get()->result_object();

            $data['users'] = $logins;
            $data['config'] = $this->crud->read('config');

            $this->load->view('template/header');
            $this->load->view('home', $data);
        } else {
            redirect('login');
        }
    }

    public function menus()
    {
        if ($this->session->username != "") {
            $username = $this->session->username;
            $this->db->select('a.*');
            $this->db->from('menus a');
            $this->db->join('setting_users b', 'a.id = b.menus_id');
            $this->db->join('users c', 'b.users_id = c.username');
            $this->db->where('a.deleted', 0);
            $this->db->where('c.username', $username);
            $this->db->where('b.v_view', 1);
            $this->db->order_by('a.sort', 'ASC');
            $menus = $this->db->get()->result_array();

            die(json_encode($menus));
        } else {
            show_error("Session Expired");
        }
    }

    public function updateProfile()
    {
        if ($this->input->post()) {
            $post = $this->input->post();
            $send = $this->crud->update('users', ["username" => $post['username']], $post);
            echo $send;
        } else {
            show_error("Cannot Process your request");
        }
    }

    public function approve()
    {
        $id = $this->input->post('id');
        $tablename = $this->input->post('tablename');
        $notifications = $this->crud->read('notifications', [], ["table_id" => $id, "table_name" => $tablename]);
        $approvals = $this->crud->read('approvals', [], ["table_name" => $tablename]);

        if ($notifications->status == 1) {
            $users_id = @$approvals->user_approval_2;
        } elseif ($notifications->status == 2) {
            $users_id = @$approvals->user_approval_3;
        } elseif ($notifications->status == 3) {
            $users_id = @$approvals->user_approval_4;
        } elseif ($notifications->status == 4) {
            $users_id = @$approvals->user_approval_5;
        } else {
            $users_id = "";
        }

        //Approval Mutation
        if ($tablename == "mutations" && $users_id == "") {
            $mutations = $this->crud->read('mutations', [], ["id" => $id]);
            $postEmployee = array(
                "division_id" => $mutations->division_id,
                "departement_id" => $mutations->departement_id,
                "departement_sub_id" => $mutations->departement_sub_id
            );
            $this->crud->update('employees', ["id" => $mutations->employee_id], $postEmployee);
        }

        //Approval Agreement
        if ($tablename == "agreements" && $users_id == "") {
            $agreements = $this->crud->read('agreements', [], ["id" => $id]);
            $postEmployee = array(
                "position_id" => $agreements->position_id,
                "group_id" => $agreements->group_id,
                "contract_id" => $agreements->contract_id,
                "date_sign" => $agreements->date_sign,
                "date_expired" => $agreements->date_expired,
            );
            $this->crud->update('employees', ["number" => $agreements->number], $postEmployee);
        }

        $values = array(
            "created_by" => $this->session->username,
            "created_date" => date('Y-m-d H:i:s'),
            "users_id_from" => $this->session->username,
            "users_id_to" => $users_id,
            "description" => "Sent a request on " . date("d F Y H:i:s") . "  to approve data <b>" . strtoupper(str_replace("_", " ", $tablename)) . "</b>",
            "status" => $notifications->status + 1,
        );

        $send = $this->crud->update('notifications', ["table_id" => $id, "table_name" => $tablename], $values);
        echo $send;
    }

    public function approvePayrolls()
    {
        $id = $this->input->post('id');
        $tablename = $this->input->post('tablename');

        $this->db->select('a.id');
        $this->db->from('payrolls a');
        $this->db->join('employees b', 'a.employee_id = b.id');
        $this->db->where('b.group_id', $id);
        $this->db->where('b.deleted', 0);
        $this->db->where('b.status', 0);
        $this->db->where('a.status', 0);
        $this->db->group_by('a.employee_id');
        $records = $this->db->get()->result_array();

        $users_id = "";
        foreach ($records as $record) {
            $payroll_id = $record['id'];
            $notifications = $this->crud->read('notifications', [], ["table_id" => $payroll_id, "table_name" => $tablename]);
            $approvals = $this->crud->read('approvals', [], ["table_name" => $tablename]);

            if (@$notifications->status == 1) {
                $users_id = @$approvals->user_approval_2;
            } elseif (@$notifications->status == 2) {
                $users_id = @$approvals->user_approval_3;
            } elseif (@$notifications->status == 3) {
                $users_id = @$approvals->user_approval_4;
            } elseif (@$notifications->status == 4) {
                $users_id = @$approvals->user_approval_5;
            } else {
                $users_id = "";
            }

            $values = array(
                "created_by" => $this->session->username,
                "created_date" => date('Y-m-d H:i:s'),
                "users_id_from" => $this->session->username,
                "users_id_to" => $users_id,
                "description" => "Sent a request on " . date("d F Y H:i:s") . "  to approve data <b>" . strtoupper(str_replace("_", " ", $tablename)) . "</b>",
                "status" => @$notifications->status + 1,
            );

            if ($users_id == "") {
                $send = $this->crud->update('payrolls', ["id" => $payroll_id], ["status" => 1]);
            }

            $send = $this->crud->update('notifications', ["table_id" => $payroll_id, "table_name" => $tablename], $values);
        }
        echo $send;
    }

    public function disapprove()
    {
        $id = $this->input->post('id');
        $tablename = $this->input->post('tablename');
        $notifications = $this->crud->read('notifications', [], ["table_id" => $id, "table_name" => $tablename]);

        /* Default */
        $send = $this->crud->delete('notifications', ["table_id" => $id, "table_name" => $tablename]);
        $send = $this->crud->delete($tablename, ["id" => $id]);
        echo $send;
    }

    public function disapprovePayrolls()
    {
        $id = $this->input->post('id');
        $tablename = $this->input->post('tablename');
        $this->db->select('a.id');
        $this->db->from('payrolls a');
        $this->db->join('employees b', 'a.employee_id = b.id');
        $this->db->where('b.group_id', $id);
        $this->db->where('b.deleted', 0);
        $this->db->where('b.status', 0);
        $this->db->where('a.status', 0);
        $this->db->group_by('a.employee_id');
        $records = $this->db->get()->result_array();

        foreach ($records as $record) {
            $payroll_id = $record['id'];
            $notifications = $this->crud->read('notifications', [], ["table_id" => $payroll_id, "table_name" => $tablename]);

            /* Default */
            $send = $this->crud->delete('notifications', ["table_id" => $payroll_id, "table_name" => $tablename]);
            $send = $this->crud->delete($tablename, ["id" => $payroll_id]);
        }
        echo $send;
    }

    public function notificationCount()
    {
        $this->db->select('a.*, b.name as fullname, b.avatar');
        $this->db->from('notifications a');
        $this->db->join('users b', 'a.users_id_to = b.username');
        $this->db->where('b.username', $this->session->username);
        $this->db->group_by('a.table_name');
        $this->db->order_by('a.created_date', 'DESC');
        $totalRows = $this->db->count_all_results('', false);

        if ($totalRows > 0) {
            echo '<span class="badge">' . $totalRows . '</span>';
        } else {
            echo '';
        }
    }

    public function notificationList()
    {
        $this->db->select('a.*, c.name as fullname, c.avatar');
        $this->db->from('notifications a');
        $this->db->join('users b', 'a.users_id_to = b.username');
        $this->db->join('users c', 'a.users_id_from = c.username');
        $this->db->where('b.username', $this->session->username);
        $this->db->group_by('a.table_name');
        $this->db->order_by('a.created_date', 'DESC');
        $records = $this->db->get()->result_object();

        if (count($records) > 0) {
            foreach ($records as $record) {
                if ($record->avatar == "") {
                    $avatar = base_url('assets/image/users/default.png');
                } else {
                    $avatar = $record->avatar;
                }

                $link = "notificationDetail('" . $record->table_name . "')";
                echo '<li class="list-isi">
                    <a onclick="' . $link . '">
                        <table style="width: 100%;">
                            <tr>
                                <td>
                                    <div class="icon-container">
                                        <img src="' . $avatar . '" class="user-online" />
                                        <div class="status-circle"></div>
                                    </div>
                                </td>
                                <td style="padding-left: 10px;">
                                    <b>' . $record->fullname . '</b><br>
                                    <small>' . $record->description . '</small>
                                </td>
                            </tr>
                        </table>
                    </a>
                </li>';
            }
        } else {
            echo '  <div class="alert alert-info" role="alert">
                        Notification Not Found
                    </div>';
        }
    }

    public function notificationDetail($table_name)
    {
        $table = $table_name;

        if ($table == "users") {
            $this->db->select('a.*');
            $this->db->from('users a');
            $this->db->join("notifications b", "a.id = b.table_id and b.table_name = 'users'");
            $this->db->where('b.users_id_to', $this->session->username);
            $this->db->order_by('a.created_date', 'DESC');
            $records = $this->db->get()->result_array();

            foreach ($records as $all) {
                $arr_all[] = array(
                    'id' => $all['id']
                );
            }

            $approveall = "return approveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'users')";
            $disapproveall = "return disapproveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'users')";
            $html = '<html><head><title>Print Data</title>
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/icons/fontawesome/css/font-awesome.min.css') . '">
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/bootstrap/css/bootstrap.min.css?4') . '">
                        </head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 12px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>
                        <center>
                            <div style="margin-top:20px; margin-bottom:20px;">
                                <b style="font-size:20px !important;">APPROVAL USERS</b>
                            </div>
                            
                            <a href="#" onclick="' . $approveall . '"  class="btn btn-success" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i> Approve All</a>
                            <a href="#" onclick="' . $disapproveall . '" class="btn btn-danger" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i> Disapprove All</a>
                            <br><br>
                        </center>
            <table class="table table-responsive table-bordered table-hover">
                <tr>
                    <th width="20">No</th>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Position</th>
                    <th>Actived</th>
                    <th>#</th>
                </tr>';
            $no = 1;
            foreach ($records as $data) {
                $approve = "approve('$data[id]', 'users')";
                $disapprove = "disapprove('$data[id]', 'users')";
                $html .= '  <tr>
                                <td>' . $no . '</td>
                                <td>' . $data['number'] . '</td>
                                <td>' . $data['name'] . '</td>
                                <td>' . $data['description'] . '</td>
                                <td>' . $data['username'] . '</td>
                                <td>' . $data['email'] . '</td>
                                <td>' . $data['phone'] . '</td>
                                <td>' . $data['position'] . '</td>
                                <td>' . $data['actived'] . '</td>
                                <td>
                                    <div id="' . $data['id'] . '">
                                        <a href="#" onclick="' . $approve . '" class="btn btn-success btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i></a>
                                        <a href="#" onclick="' . $disapprove . '" class="btn btn-danger btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>';
                $no++;
            }

            $html .= '</table></body></html>';
            echo $html;
        } elseif ($table == "employees") {
            $this->db->select('a.*, 
                b.users_id_from as status_check,
                b.users_id_to as status_notification, 
                c.name as division_name, 
                d.name as departement_name, 
                e.name as departement_sub_name,
                e.type, 
                g.name as position_name,
                h.name as contract_name');
            $this->db->from('employees a');
            $this->db->join('notifications b', "a.id = b.table_id and b.table_name = 'employees'");
            $this->db->join('divisions c', 'c.id = a.division_id');
            $this->db->join('departements d', 'd.id = a.departement_id');
            $this->db->join('departement_subs e', 'e.id = a.departement_sub_id');
            $this->db->join('agreements f', 'a.number = f.number and f.status = 0');
            $this->db->join('positions g', 'g.id = a.position_id', 'left');
            $this->db->join('contracts h', 'h.id = a.contract_id', 'left');
            $this->db->where('b.users_id_to', $this->session->username);
            $this->db->order_by('a.created_date', 'DESC');
            $records = $this->db->get()->result_array();

            foreach ($records as $all) {
                $arr_all[] = array(
                    'id' => $all['id']
                );
            }

            $approveall = "return approveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'employees')";
            $disapproveall = "return disapproveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'employees')";
            $html = '<html><head><title>Print Data</title>
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/icons/fontawesome/css/font-awesome.min.css') . '">
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/bootstrap/css/bootstrap.min.css?4') . '">
                        </head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 12px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>
                        <center>
                            <div style="margin-top:20px; margin-bottom:20px;">
                                <b style="font-size:20px !important;">APPROVAL EMPLOYEE</b>
                            </div>
                            
                            <a href="#" onclick="' . $approveall . '"  class="btn btn-success" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i> Approve All</a>
                            <a href="#" onclick="' . $disapproveall . '" class="btn btn-danger" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i> Disapprove All</a>
                            <br><br>
                        </center>
                <table id="customers" border="1">
                    <tr>
                        <th>No</th>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Division</th>
                        <th>Departement</th>
                        <th>Departement Sub</th>
                        <th>Position</th>
                        <th>Employee Type</th>
                        <th>Join Date</th>
                        <th>Contract Expired</th>
                        <th>#</th>
                    </tr>';
            $no = 1;
            foreach ($records as $data) {
                $approve = "approve('$data[id]', 'employees')";
                $disapprove = "disapprove('$data[id]', 'employees')";
                $html .= '  <tr>
                                <td>' . $no . '</td>
                                <td>' . $data['number'] . '</td>
                                <td>' . $data['name'] . '</td>
                                <td>' . $data['division_name'] . '</td>
                                <td>' . $data['departement_name'] . '</td>
                                <td>' . $data['departement_sub_name'] . '</td>
                                <td>' . $data['position_name'] . '</td>
                                <td>' . $data['contract_name'] . '</td>
                                <td>' . $data['date_sign'] . '</td>
                                <td>' . $data['date_expired'] . '</td>
                                <td>
                                    <div id="' . $data['id'] . '">
                                        <a href="#" onclick="' . $approve . '" class="btn btn-success btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i></a>
                                        <a href="#" onclick="' . $disapprove . '" class="btn btn-danger btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>';
                $no++;
            }

            $html .= '</table></body></html>';
            echo $html;
        } elseif ($table == "agreements") {
            $this->db->select('a.*, 
                i.users_id_from as status_check,
                i.users_id_to as status_notification, 
                b.name as employee_name, 
                c.name as division_name, 
                d.name as departement_name, 
                e.name as departement_sub_name,
                e.type, 
                f.name as position_name,
                g.name as contract_name');
            $this->db->from('agreements a');
            $this->db->join('employees b', 'a.number = b.number');
            $this->db->join('divisions c', 'b.division_id = c.id');
            $this->db->join('departements d', 'b.departement_id = d.id');
            $this->db->join('departement_subs e', 'b.departement_sub_id = e.id');
            $this->db->join('positions f', 'f.id = a.position_id');
            $this->db->join('contracts g', 'g.id = a.contract_id');
            $this->db->join('groups h', 'h.id = a.group_id');
            $this->db->join('notifications i', "a.id = i.table_id and i.table_name = 'agreements'", 'left');
            $this->db->where('i.users_id_to', $this->session->username);
            $records = $this->db->get()->result_array();

            foreach ($records as $all) {
                $arr_all[] = array(
                    'id' => $all['id']
                );
            }

            $approveall = "return approveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'agreements')";
            $disapproveall = "return disapproveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'agreements')";
            $html = '<html><head><title>Print Data</title>
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/icons/fontawesome/css/font-awesome.min.css') . '">
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/bootstrap/css/bootstrap.min.css?4') . '">
                        </head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 12px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>
                        <center>
                            <div style="margin-top:20px; margin-bottom:20px;">
                                <b style="font-size:20px !important;">APPROVAL AGREEMENT</b>
                            </div>
                            
                            <a href="#" onclick="' . $approveall . '"  class="btn btn-success" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i> Approve All</a>
                            <a href="#" onclick="' . $disapproveall . '" class="btn btn-danger" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i> Disapprove All</a>
                            <br><br>
                        </center>
                <table id="customers" border="1">
                    <tr>
                        <th width="20">No</th>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Division</th>
                        <th>Departement</th>
                        <th>Departement Sub</th>
                        <th>Position</th>
                        <th>Join Date</th>
                        <th>Exp Date</th>
                        <th>Note</th>
                        <th>#</th>
                    </tr>';
            $no = 1;
            foreach ($records as $data) {
                $approve = "approve('$data[id]', 'agreements')";
                $disapprove = "disapprove('$data[id]', 'agreements')";
                $html .= '  <tr>
                                <td>' . $no . '</td>
                                <td>' . $data['number'] . '</td>
                                <td>' . $data['employee_name'] . '</td>
                                <td>' . $data['division_name'] . '</td>
                                <td>' . $data['departement_name'] . '</td>
                                <td>' . $data['departement_sub_name'] . '</td>
                                <td>' . $data['position_name'] . '</td>
                                <td>' . $data['date_sign'] . '</td>
                                <td>' . $data['date_expired'] . '</td>
                                <td>' . $data['note'] . '</td>
                                <td>
                                    <div id="' . $data['id'] . '">
                                        <a href="#" onclick="' . $approve . '" class="btn btn-success btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i></a>
                                        <a href="#" onclick="' . $disapprove . '" class="btn btn-danger btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>';
                $no++;
            }

            $html .= '</table></body></html>';
            echo $html;
        } elseif ($table == "mutations") {
            $this->db->select('a.*, 
                i.users_id_from as status_check,
                i.users_id_to as status_notification, 
                b.number as employee_number, 
                b.name as employee_name, 
                c.name as division_name, 
                d.name as departement_name,
                e.name as departement_sub_name');
            $this->db->from('mutations a');
            $this->db->join('employees b', 'a.employee_id = b.id');
            $this->db->join('divisions c', 'a.division_id = c.id');
            $this->db->join('departements d', 'a.departement_id = d.id');
            $this->db->join('departement_subs e', 'a.departement_sub_id = e.id');
            $this->db->join('notifications i', "a.id = i.table_id and i.table_name = 'mutations'", 'left');
            $this->db->where('a.deleted', 0);
            $this->db->where('i.users_id_to', $this->session->username);
            $records = $this->db->get()->result_array();

            foreach ($records as $all) {
                $arr_all[] = array(
                    'id' => $all['id']
                );
            }

            $approveall = "return approveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'mutations')";
            $disapproveall = "return disapproveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'mutations')";
            $html = '<html><head><title>Print Data</title>
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/icons/fontawesome/css/font-awesome.min.css') . '">
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/bootstrap/css/bootstrap.min.css?4') . '">
                        </head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 12px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>
                        <center>
                            <div style="margin-top:20px; margin-bottom:20px;">
                                <b style="font-size:20px !important;">APPROVAL MUTATION</b>
                            </div>
                            
                            <a href="#" onclick="' . $approveall . '"  class="btn btn-success" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i> Approve All</a>
                            <a href="#" onclick="' . $disapproveall . '" class="btn btn-danger" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i> Disapprove All</a>
                            <br><br>
                        </center>
                <table id="customers" border="1">
                    <tr>
                        <th width="20">No</th>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Trans Date</th>
                        <th>Type</th>
                        <th>Division</th>
                        <th>Departement</th>
                        <th>Departement Sub</th>
                        <th>Note</th>
                        <th>#</th>
                    </tr>';
            $no = 1;
            foreach ($records as $data) {
                $approve = "approve('$data[id]', 'mutations')";
                $disapprove = "disapprove('$data[id]', 'mutations')";
                $html .= '  <tr>
                                <td>' . $no . '</td>
                                <td>' . $data['employee_number'] . '</td>
                                <td>' . $data['employee_name'] . '</td>
                                <td>' . $data['trans_date'] . '</td>
                                <td>' . $data['type'] . '</td>
                                <td>' . $data['division_name'] . '</td>
                                <td>' . $data['departement_name'] . '</td>
                                <td>' . $data['departement_sub_name'] . '</td>
                                <td>' . $data['description'] . '</td>
                                <td>
                                    <div id="' . $data['id'] . '">
                                        <a href="#" onclick="' . $approve . '" class="btn btn-success btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i></a>
                                        <a href="#" onclick="' . $disapprove . '" class="btn btn-danger btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>';
                $no++;
            }

            $html .= '</table></body></html>';
            echo $html;
        } elseif ($table == "employee_requests") {
            $this->db->select('a.*, 
                i.users_id_from as status_check,
                i.users_id_to as status_notification, 
                c.name as division_name, 
                d.name as departement_name,
                e.name as departement_sub_name');
            $this->db->from('employee_requests a');
            $this->db->join('divisions c', 'a.division_id = c.id');
            $this->db->join('departements d', 'a.departement_id = d.id');
            $this->db->join('departement_subs e', 'a.departement_sub_id = e.id');
            $this->db->join('notifications i', "a.id = i.table_id and i.table_name = 'employee_requests'", 'left');
            $this->db->where('a.deleted', 0);
            $this->db->where('i.users_id_to', $this->session->username);
            $this->db->order_by('a.due_date', 'ASC');
            $records = $this->db->get()->result_array();

            foreach ($records as $all) {
                $arr_all[] = array(
                    'id' => $all['id']
                );
            }

            $approveall = "return approveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'employee_requests')";
            $disapproveall = "return disapproveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'employee_requests')";
            $html = '<html><head><title>Print Data</title>
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/icons/fontawesome/css/font-awesome.min.css') . '">
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/bootstrap/css/bootstrap.min.css?4') . '">
                        </head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 12px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>
                        <center>
                            <div style="margin-top:20px; margin-bottom:20px;">
                                <b style="font-size:20px !important;">APPROVAL EMPLOYEE REQUEST</b>
                            </div>
                            
                            <a href="#" onclick="' . $approveall . '"  class="btn btn-success" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i> Approve All</a>
                            <a href="#" onclick="' . $disapproveall . '" class="btn btn-danger" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i> Disapprove All</a>
                            <br><br>
                        </center>
                <table id="customers" border="1">
                    <tr>
                        <th width="20">No</th>
                        <th>Request By</th>
                        <th>Request Date</th>
                        <th>Due Date</th>
                        <th>Division</th>
                        <th>Departement</th>
                        <th>Departement Sub</th>
                        <th>Qty</th>
                        <th>Note</th>
                        <th>#</th>
                    </tr>';
            $no = 1;
            foreach ($records as $data) {
                $approve = "approve('$data[id]', 'employee_requests')";
                $disapprove = "disapprove('$data[id]', 'employee_requests')";
                $html .= '  <tr>
                                <td>' . $no . '</td>
                                <td>' . $data['request_by'] . '</td>
                                <td>' . $data['request_date'] . '</td>
                                <td>' . $data['due_date'] . '</td>
                                <td>' . $data['division_name'] . '</td>
                                <td>' . $data['departement_name'] . '</td>
                                <td>' . $data['departement_sub_name'] . '</td>
                                <td>' . $data['qty'] . '</td>
                                <td>' . $data['description'] . '</td>
                                <td>
                                    <div id="' . $data['id'] . '">
                                        <a href="#" onclick="' . $approve . '" class="btn btn-success btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i></a>
                                        <a href="#" onclick="' . $disapprove . '" class="btn btn-danger btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>';
                $no++;
            }

            $html .= '</table></body></html>';
            echo $html;
        } elseif ($table == "permits") {
            $this->db->select('a.*, 
                b.users_id_from as status_check,
                b.users_id_to as status_notification, 
                b.updated_date as status_date,
                c.number as employee_number,
                c.name as employee_name,
                d.name as division_name,
                e.name as departement_name,
                f.name as departement_sub_name,
                g.name as permit_type_name,
                h.name as reason_name,
                i.name as request_name
            ');
            $this->db->from('permits a');
            $this->db->join('notifications b', "a.id = b.table_id and b.table_name = 'permits'", 'left');
            $this->db->join('employees c', 'a.employee_id = c.id');
            $this->db->join('divisions d', 'c.division_id = d.id');
            $this->db->join('departements e', 'c.departement_id = e.id');
            $this->db->join('departement_subs f', 'c.departement_sub_id = f.id');
            $this->db->join('permit_types g', 'a.permit_type_id = g.id');
            $this->db->join('reasons h', 'a.reason_id = h.id');
            $this->db->join('users i', 'a.created_by = i.username');
            $this->db->where('a.deleted', 0);
            $this->db->where('c.deleted', 0);
            $this->db->where('c.status', 0);
            $this->db->where('b.users_id_to', $this->session->username);
            $this->db->order_by('a.permit_date', 'DESC');
            $records = $this->db->get()->result_array();

            foreach ($records as $all) {
                $arr_all[] = array(
                    'id' => $all['id']
                );
            }

            $approveall = "return approveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'permits')";
            $disapproveall = "return disapproveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'permits')";
            $html = '<html><head><title>Print Data</title>
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/icons/fontawesome/css/font-awesome.min.css') . '">
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/bootstrap/css/bootstrap.min.css?4') . '">
                        </head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 12px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>
                        <center>
                            <div style="margin-top:20px; margin-bottom:20px;">
                                <b style="font-size:20px !important;">APPROVAL PERMIT</b>
                            </div>
                            
                            <a href="#" onclick="' . $approveall . '"  class="btn btn-success" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i> Approve All</a>
                            <a href="#" onclick="' . $disapproveall . '" class="btn btn-danger" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i> Disapprove All</a>
                            <br><br>
                        </center>
                <table id="customers" border="1">
                    <tr>
                        <th width="20">No</th>
                        <th>Request No</th>
                        <th>Request Name</th>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Division</th>
                        <th>Departement</th>
                        <th>Departement Sub</th>
                        <th>Permit Type</th>
                        <th>Permit Date</th>
                        <th>Reason</th>
                        <th>Remarks</th>
                        <th>#</th>
                    </tr>';
            $no = 1;
            foreach ($records as $data) {
                $approve = "approve('$data[id]', 'permits')";
                $disapprove = "disapprove('$data[id]', 'permits')";
                $html .= '  <tr>
                                <td>' . $no . '</td>
                                <td>' . $data['id'] . '</td>
                                <td>' . $data['request_name'] . '</td>
                                <td>' . $data['employee_number'] . '</td>
                                <td>' . $data['employee_name'] . '</td>
                                <td>' . $data['division_name'] . '</td>
                                <td>' . $data['departement_name'] . '</td>
                                <td>' . $data['departement_sub_name'] . '</td>
                                <td>' . $data['permit_type_name'] . '</td>
                                <td>' . $data['permit_date'] . '</td>
                                <td>' . $data['reason_name'] . '</td>
                                <td>' . $data['note'] . '</td>
                                <td>
                                    <div id="' . $data['id'] . '">
                                        <a href="#" onclick="' . $approve . '" class="btn btn-success btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i></a>
                                        <a href="#" onclick="' . $disapprove . '" class="btn btn-danger btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>';
                $no++;
            }

            $html .= '</table></body></html>';
            echo $html;
        } elseif ($table == "overtimes") {
            $this->db->select('a.*, 
                g.users_id_from as status_check,
                g.users_id_to as status_notification, 
                g.updated_date as status_date,
                c.name as division_name,
                d.name as departement_name,
                e.name as departement_sub_name,
                b.number as employee_number,
                b.name as employee_name,
                f.name as fullname
            ');
            $this->db->from('overtimes a');
            $this->db->join('employees b', 'a.employee_id = b.id');
            $this->db->join('divisions c', 'b.division_id = c.id');
            $this->db->join('departements d', 'b.departement_id = d.id');
            $this->db->join('departement_subs e', 'b.departement_sub_id = e.id');
            $this->db->join('users f', "a.created_by = f.username");
            $this->db->join('notifications g', "a.id = g.table_id and g.table_name = 'overtimes'", 'left');
            $this->db->where('b.deleted', 0);
            $this->db->where('b.status', 0);
            $this->db->where('a.deleted', 0);
            $this->db->where('g.users_id_to', $this->session->username);
            $this->db->group_by('a.trans_date');
            $this->db->group_by('a.employee_id');
            $this->db->group_by('a.type');
            $this->db->order_by('a.trans_date', 'DESC');
            $records = $this->db->get()->result_array();

            foreach ($records as $all) {
                $arr_all[] = array(
                    'id' => $all['id']
                );
            }

            $approveall = "return approveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'overtimes')";
            $disapproveall = "return disapproveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'overtimes')";
            $html = '<html><head><title>Print Data</title>
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/icons/fontawesome/css/font-awesome.min.css') . '">
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/bootstrap/css/bootstrap.min.css?4') . '">
                        </head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 12px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>
                        <center>
                            <div style="margin-top:20px; margin-bottom:20px;">
                                <b style="font-size:20px !important;">APPROVAL OVERTIME</b>
                            </div>
                            
                            <a href="#" onclick="' . $approveall . '"  class="btn btn-success" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i> Approve All</a>
                            <a href="#" onclick="' . $disapproveall . '" class="btn btn-danger" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i> Disapprove All</a>
                            <br><br>
                        </center>
                <table id="customers" border="1">
                    <tr>
                        <th width="20">No</th>
                        <th>Request Date</th>
                        <th>Request No</th>
                        <th>Request Name</th>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Division</th>
                        <th>Departement</th>
                        <th>Departement Sub</th>
                        <th>Trans Date</th>
                        <th>Start Overtime</th>
                        <th>End Overtime</th>
                        <th>Type Overtime</th>
                        <th>Duration</th>
                        <th>Convert</th>
                        <th>Amount</th>
                        <th>Remarks</th>
                        <th>#</th>
                    </tr>';
            $no = 1;
            foreach ($records as $data) {
                $approve = "approve('$data[id]', 'overtimes')";
                $disapprove = "disapprove('$data[id]', 'overtimes')";
                $html .= '  <tr>
                                <td>' . $no . '</td>
                                <td>' . $data['trans_date'] . '</td>
                                <td>' . $data['request_code'] . '</td>
                                <td>' . $data['fullname'] . '</td>
                                <td>' . $data['employee_id'] . '</td>
                                <td>' . $data['employee_name'] . '</td>
                                <td>' . $data['division_name'] . '</td>
                                <td>' . $data['departement_name'] . '</td>
                                <td>' . $data['departement_sub_name'] . '</td>
                                <td>' . date("d F Y", strtotime($data['trans_date'])) . '</td>
                                <td>' . $data['start'] . '</td>
                                <td>' . $data['end'] . '</td>
                                <td>' . $data['type'] . '</td>
                                <td>' . $data['duration_hour'] . '</td>
                                <td>' . $data['duration_convert'] . '</td>
                                <td>' . $data['amount'] . '</td>
                                <td>' . $data['remarks'] . '</td>
                                <td>
                                    <div id="' . $data['id'] . '">
                                        <a href="#" onclick="' . $approve . '" class="btn btn-success btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i></a>
                                        <a href="#" onclick="' . $disapprove . '" class="btn btn-danger btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>';
                $no++;
            }

            $html .= '</table></body></html>';
            echo $html;
        } elseif ($table == "cash_carries") {
            $this->db->select('a.*, 
                g.users_id_from as status_check,
                g.users_id_to as status_notification, 
                g.updated_date as status_date,
                c.name as division_name,
                d.name as departement_name,
                e.name as departement_sub_name,
                b.number as employee_number,
                b.name as employee_name,
                f.name as fullname
            ');
            $this->db->from('cash_carries a');
            $this->db->join('employees b', 'a.employee_id = b.id');
            $this->db->join('divisions c', 'b.division_id = c.id');
            $this->db->join('departements d', 'b.departement_id = d.id');
            $this->db->join('departement_subs e', 'b.departement_sub_id = e.id');
            $this->db->join('users f', "a.created_by = f.username");
            $this->db->join('notifications g', "a.id = g.table_id and g.table_name = 'cash_carries'", 'left');
            $this->db->where('b.deleted', 0);
            $this->db->where('b.status', 0);
            $this->db->where('a.deleted', 0);
            $this->db->where('g.users_id_to', $this->session->username);
            $this->db->group_by('a.trans_date');
            $this->db->group_by('a.employee_id');
            $this->db->group_by('a.type');
            $this->db->order_by('a.trans_date', 'DESC');
            $records = $this->db->get()->result_array();

            foreach ($records as $all) {
                $arr_all[] = array(
                    'id' => $all['id']
                );
            }

            $approveall = "return approveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'cash_carries')";
            $disapproveall = "return disapproveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'cash_carries')";
            $html = '<html><head><title>Print Data</title>
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/icons/fontawesome/css/font-awesome.min.css') . '">
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/bootstrap/css/bootstrap.min.css?4') . '">
                        </head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 12px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>
                        <center>
                            <div style="margin-top:20px; margin-bottom:20px;">
                                <b style="font-size:20px !important;">APPROVAL CASH CARRY</b>
                            </div>
                            
                            <a href="#" onclick="' . $approveall . '"  class="btn btn-success" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i> Approve All</a>
                            <a href="#" onclick="' . $disapproveall . '" class="btn btn-danger" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i> Disapprove All</a>
                            <br><br>
                        </center>
                <table id="customers" border="1">
                    <tr>
                        <th width="20">No</th>
                        <th>Request Date</th>
                        <th>Request No</th>
                        <th>Request Name</th>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Division</th>
                        <th>Departement</th>
                        <th>Departement Sub</th>
                        <th>Trans Date</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Type</th>
                        <th>Duration</th>
                        <th>Remarks</th>
                        <th>#</th>
                    </tr>';
            $no = 1;
            foreach ($records as $data) {
                $approve = "approve('$data[id]', 'cash_carries')";
                $disapprove = "disapprove('$data[id]', 'cash_carries')";
                $html .= '  <tr>
                                <td>' . $no . '</td>
                                <td>' . $data['trans_date'] . '</td>
                                <td>' . $data['request_code'] . '</td>
                                <td>' . $data['fullname'] . '</td>
                                <td>' . $data['employee_id'] . '</td>
                                <td>' . $data['employee_name'] . '</td>
                                <td>' . $data['division_name'] . '</td>
                                <td>' . $data['departement_name'] . '</td>
                                <td>' . $data['departement_sub_name'] . '</td>
                                <td>' . date("d F Y", strtotime($data['trans_date'])) . '</td>
                                <td>' . $data['start'] . '</td>
                                <td>' . $data['end'] . '</td>
                                <td>' . $data['type'] . '</td>
                                <td>' . $data['duration_hour'] . '</td>
                                <td>' . $data['remarks'] . '</td>
                                <td>
                                    <div id="' . $data['id'] . '">
                                        <a href="#" onclick="' . $approve . '" class="btn btn-success btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i></a>
                                        <a href="#" onclick="' . $disapprove . '" class="btn btn-danger btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>';
                $no++;
            }

            $html .= '</table></body></html>';
            echo $html;
        } elseif ($table == "change_days") {
            $this->db->select('a.*, 
                g.users_id_from as status_check,
                g.users_id_to as status_notification, 
                g.updated_date as status_date,
                c.name as division_name,
                d.name as departement_name,
                e.name as departement_sub_name,
                b.number as employee_number,
                b.name as employee_name,
                f.name as fullname
            ');
            $this->db->from('change_days a');
            $this->db->join('employees b', 'a.employee_id = b.id');
            $this->db->join('divisions c', 'b.division_id = c.id');
            $this->db->join('departements d', 'b.departement_id = d.id');
            $this->db->join('departement_subs e', 'b.departement_sub_id = e.id');
            $this->db->join('users f', "a.created_by = f.username");
            $this->db->join('notifications g', "a.id = g.table_id and g.table_name = 'change_days'", 'left');
            $this->db->where('b.deleted', 0);
            $this->db->where('b.status', 0);
            $this->db->where('a.deleted', 0);
            $this->db->where('g.users_id_to', $this->session->username);
            $this->db->group_by('a.start');
            $this->db->group_by('a.employee_id');
            $this->db->order_by('a.created_date', 'DESC');
            $records = $this->db->get()->result_array();

            foreach ($records as $all) {
                $arr_all[] = array(
                    'id' => $all['id']
                );
            }

            $approveall = "return approveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'change_days')";
            $disapproveall = "return disapproveall(" . str_replace('"', "'", json_encode($arr_all)) . ", 'change_days')";
            $html = '<html><head><title>Print Data</title>
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/icons/fontawesome/css/font-awesome.min.css') . '">
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/bootstrap/css/bootstrap.min.css?4') . '">
                        </head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 12px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>
                        <center>
                            <div style="margin-top:20px; margin-bottom:20px;">
                                <b style="font-size:20px !important;">APPROVAL CHANGE DAY</b>
                            </div>
                            
                            <a href="#" onclick="' . $approveall . '"  class="btn btn-success" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i> Approve All</a>
                            <a href="#" onclick="' . $disapproveall . '" class="btn btn-danger" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i> Disapprove All</a>
                            <br><br>
                        </center>
                <table id="customers" border="1">
                    <tr>
                        <th width="20">No</th>
                        <th>Request No</th>
                        <th>Request Name</th>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Division</th>
                        <th>Departement</th>
                        <th>Departement Sub</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Remarks</th>
                        <th>#</th>
                    </tr>';
            $no = 1;
            foreach ($records as $data) {
                $approve = "approve('$data[id]', 'change_days')";
                $disapprove = "disapprove('$data[id]', 'change_days')";
                $html .= '  <tr>
                                <td>' . $no . '</td>
                                <td>' . $data['request_code'] . '</td>
                                <td>' . $data['fullname'] . '</td>
                                <td>' . $data['employee_id'] . '</td>
                                <td>' . $data['employee_name'] . '</td>
                                <td>' . $data['division_name'] . '</td>
                                <td>' . $data['departement_name'] . '</td>
                                <td>' . $data['departement_sub_name'] . '</td>
                                <td>' . date("d F Y", strtotime($data['start'])) . '</td>
                                <td>' . date("d F Y", strtotime($data['end'])) . '</td>
                                <td>' . $data['remarks'] . '</td>
                                <td>
                                    <div id="' . $data['id'] . '">
                                        <a href="#" onclick="' . $approve . '" class="btn btn-success btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i></a>
                                        <a href="#" onclick="' . $disapprove . '" class="btn btn-danger btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>';
                $no++;
            }

            $html .= '</table></body></html>';
            echo $html;
        } elseif ($table == "payrolls") {
            $this->db->select('b.group_id, d.name as group_name, c.name, a.created_date, COUNT(a.employee_id) as employee, SUM(a.net_income) as amount');
            $this->db->from('payrolls a');
            $this->db->join('employees b', 'a.employee_id = b.id');
            $this->db->join('users c', 'a.created_by = c.username');
            $this->db->join('groups d', 'b.group_id = d.id');
            $this->db->join('notifications e', "a.id = e.table_id and e.table_name = 'payrolls'", 'left');
            $this->db->where('b.deleted', 0);
            $this->db->where('b.status', 0);
            $this->db->where('a.status', 0);
            $this->db->where('e.users_id_to', $this->session->username);
            $this->db->group_by('b.group_id');
            $records = $this->db->get()->result_array();

            foreach ($records as $all) {
                $arr_all[] = array(
                    'id' => $all['group_id']
                );
            }

            $html = '<html><head><title>Print Data</title>
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/icons/fontawesome/css/font-awesome.min.css') . '">
                        <link rel="stylesheet" type="text/css" href="' . base_url('assets/bootstrap/css/bootstrap.min.css?4') . '">
                        </head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 12px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>
                        <center>
                            <div style="margin-top:20px; margin-bottom:20px;">
                                <b style="font-size:20px !important;">APPROVAL PAYROLL</b>
                            </div>
                        </center>
                <table id="customers" border="1">
                    <tr>
                        <th width="20">No</th>
                        <th>Description</th>
                        <th>Employee</th>
                        <th>Amount</th>
                        <th>Created By</th>
                        <th>Created Date</th>
                        <th width="100">#</th>
                    </tr>';
            $no = 1;
            foreach ($records as $data) {
                $approve = "approvePayrolls('$data[group_id]', 'payrolls')";
                $disapprove = "disapprovePayrolls('$data[group_id]', 'payrolls')";
                $html .= '  <tr>
                                <td>' . $no . '</td>
                                <td>' . $data['group_name'] . '</td>
                                <td style="text-align:right;">' . number_format($data['employee']) . '</td>
                                <td style="text-align:right;">' . number_format($data['amount']) . '</td>
                                <td>' . $data['name'] . '</td>
                                <td>' . date("d F Y", strtotime($data['created_date'])) . '</td>
                                <td>
                                    <div id="' . $data['group_id'] . '">
                                        <a href="#" onclick="' . $approve . '" class="btn btn-success btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-check"></i></a>
                                        <a href="#" onclick="' . $disapprove . '" class="btn btn-danger btn-sm" style="pointer-events: auto; opacity:1;"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>';
                $no++;
            }

            $html .= '</table></body></html>';
            echo $html;
        }
    }
}
