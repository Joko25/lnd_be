<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');

class Approvals extends CI_Controller
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

    public function approveall()
    {
        $users_id_from = $this->input->post('users_id_from');
        $table_name = $this->input->post('table_name');

        $notifications = $this->crud->reads('notifications', [], ["users_id_from" => $users_id_from, "table_name" => $table_name]);
        $approvals = $this->crud->read('approvals', [], ["table_name" => $table_name, "id" => $notifications[0]->approvals_id]);

        if ($notifications[0]->status == 1) {
            $users_id = @$approvals->user_approval_2;
        } elseif ($notifications[0]->status == 2) {
            $users_id = @$approvals->user_approval_3;
        } elseif ($notifications[0]->status == 3) {
            $users_id = @$approvals->user_approval_4;
        } elseif ($notifications[0]->status == 4) {
            $users_id = @$approvals->user_approval_5;
        } else {
            $users_id = "";
        }

        //Approval Mutation
        if ($table_name == "mutations" && $users_id == "") {
            foreach ($notifications as $notification) {
                $mutations = $this->crud->read('mutations', [], ["id" => $notification->table_id]);
                $postEmployee = array(
                    "division_id" => $mutations->division_id,
                    "departement_id" => $mutations->departement_id,
                    "departement_sub_id" => $mutations->departement_sub_id
                );
                $this->crud->update('employees', ["id" => $mutations->employee_id], $postEmployee);
            }
        }

        //Approval Agreement
        if ($table_name == "agreements" && $users_id == "") {
            foreach ($notifications as $notification) {
                $agreements = $this->crud->read('agreements', [], ["id" => $notification->table_id]);
                $postEmployee = array(
                    "position_id" => $agreements->position_id,
                    "group_id" => $agreements->group_id,
                    "contract_id" => $agreements->contract_id,
                    "date_sign" => $agreements->date_sign,
                    "date_expired" => $agreements->date_expired,
                );
                $this->crud->update('employees', ["number" => $agreements->number], $postEmployee);
            }
        }

        $values = array(
            "created_by" => $this->session->username,
            "created_date" => date('Y-m-d H:i:s'),
            "users_id_from" => $this->session->username,
            "users_id_to" => $users_id,
            "description" => "Sent a request on " . date("d F Y H:i:s") . "  to approve data <b>" . strtoupper(str_replace("_", " ", $table_name)) . "</b>",
            "status" => ($notifications[0]->status + 1),
        );

        $send = $this->crud->update('notifications', ["users_id_from" => $users_id_from, "table_name" => $table_name], $values);
        echo $send;
    }

    public function approve()
    {
        $id = $this->input->post('id');
        $tablename = $this->input->post('tablename');
        $notifications = $this->crud->read('notifications', [], ["table_id" => $id, "table_name" => $tablename]);
        $approvals = $this->crud->read('approvals', [], ["table_name" => $tablename, "id" => $notifications->approvals_id]);

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

            if($mutations->type == "PERMANENT"){
                $this->crud->update('employees', ["id" => $mutations->employee_id], $postEmployee);
            }
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
            "status" => ($notifications->status + 1),
        );

        $send = $this->crud->update('notifications', ["table_id" => $id, "table_name" => $tablename], $values);
        echo $send;
    }

    public function approvePayrolls()
    {
        $id = $this->input->post('id');
        $tablename = $this->input->post('tablename');
        $period_start = base64_decode($this->input->post('period_start'));
        $period_end = base64_decode($this->input->post('period_end'));

        $this->db->select('a.id');
        $this->db->from('payrolls a');
        $this->db->join('employees b', 'a.employee_id = b.id');
        $this->db->where('b.group_id', $id);
        $this->db->where('a.period_start', $period_start);
        $this->db->where('a.period_end', $period_end);
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
                "status" => (@$notifications->status + 1),
            );

            if ($users_id == "") {
                $send = $this->crud->update('payrolls', ["id" => $payroll_id], ["status" => 1]);
            }

            $send = $this->crud->update('notifications', ["table_id" => $payroll_id, "table_name" => $tablename], $values);
        }
        echo $send;
    }

    public function disapproveall()
    {
        $users_id_from = $this->input->post('users_id_from');
        $table_name = $this->input->post('table_name');
        $notifications = $this->crud->reads('notifications', [], ["users_id_from" => $users_id_from, "table_name" => $table_name]);

        /* Default */
        foreach ($notifications as $notification) {
            $send = $this->crud->delete('notifications', ["table_id" => $notification->table_id, "table_name" => $table_name]);
            $send = $this->crud->delete($table_name, ["id" => $notification->table_id]);
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
        $period_start = base64_decode($this->input->post('period_start'));
        $period_end = base64_decode($this->input->post('period_end'));

        $this->db->select('a.id');
        $this->db->from('payrolls a');
        $this->db->join('employees b', 'a.employee_id = b.id');
        $this->db->where('b.group_id', $id);
        $this->db->where('a.period_start', $period_start);
        $this->db->where('a.period_end', $period_end);
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

    public function approvalCount()
    {
        $this->db->select('a.*, b.name as fullname, b.avatar');
        $this->db->from('notifications a');
        $this->db->join('users b', 'a.users_id_to = b.username');
        $this->db->where('b.username', $this->session->username);
        $this->db->group_by('a.table_name');
        $this->db->group_by('a.users_id_from');
        $this->db->order_by('a.created_date', 'DESC');
        $totalRows = $this->db->count_all_results('', false);

        if ($totalRows > 0) {
            echo '<span class="badge">' . $totalRows . '</span>';
        } else {
            echo '';
        }
    }

    public function approvalList()
    {
        $this->db->select('a.*, c.name as fullname, c.avatar');
        $this->db->from('notifications a');
        $this->db->join('users b', 'a.users_id_to = b.username');
        $this->db->join('users c', 'a.users_id_from = c.username');
        $this->db->where('b.username', $this->session->username);
        $this->db->group_by('a.table_name');
        $this->db->group_by('a.users_id_from');
        $this->db->order_by('a.created_date', 'DESC');
        $records = $this->db->get()->result_object();

        if (count($records) > 0) {
            foreach ($records as $record) {
                if ($record->avatar == "") {
                    $avatar = base_url('assets/image/users/default.png');
                } else {
                    $avatar = $record->avatar;
                }

                $link = "approvalDetail('" . $record->table_name . "','" . $record->users_id_from . "')";
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

    public function approvalUsers($users_id_from)
    {
        $this->db->select('a.*');
        $this->db->from('users a');
        $this->db->join("notifications b", "a.id = b.table_id and b.table_name = 'users'");
        $this->db->where('b.users_id_to', $this->session->username);
        $this->db->where('b.users_id_from', $users_id_from);
        $this->db->order_by('a.created_date', 'DESC');
        $records = $this->db->get()->result_array();

        die(json_encode($records));
    }

    public function approvalEmployees($users_id_from)
    {
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
        $this->db->where('b.users_id_from', $users_id_from);
        $this->db->order_by('a.created_date', 'DESC');
        $records = $this->db->get()->result_array();

        die(json_encode($records));
    }

    public function approvalAgreements($users_id_from)
    {
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
        $this->db->where('i.users_id_from', $users_id_from);
        $records = $this->db->get()->result_array();

        die(json_encode($records));
    }

    public function approvalMutations($users_id_from)
    {
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
        $this->db->where('i.users_id_from', $users_id_from);
        $records = $this->db->get()->result_array();

        die(json_encode($records));
    }

    public function approvalEmployeeRequests($users_id_from)
    {
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
        $this->db->where('i.users_id_from', $users_id_from);
        $this->db->order_by('a.due_date', 'ASC');
        $records = $this->db->get()->result_array();

        die(json_encode($records));
    }

    public function approvalPermits($users_id_from)
    {
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
        $this->db->where('c.status', 0);
        $this->db->where('b.users_id_from', $users_id_from);
        $this->db->where('b.users_id_to', $this->session->username);
        $this->db->order_by('a.permit_date', 'DESC');
        $records = $this->db->get()->result_array();

        die(json_encode($records));
    }

    public function approvalOvertimes($users_id_from)
    {
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
        $this->db->where('g.users_id_from', $users_id_from);
        $this->db->where('g.users_id_to', $this->session->username);
        $this->db->group_by('a.trans_date');
        $this->db->group_by('a.employee_id');
        $this->db->group_by('a.type');
        $this->db->order_by('a.trans_date', 'DESC');
        $records = $this->db->get()->result_array();

        die(json_encode($records));
    }

    public function approvalCashCarries($users_id_from)
    {
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
        $this->db->where('g.users_id_from', $users_id_from);
        $this->db->where('g.users_id_to', $this->session->username);
        $this->db->group_by('a.trans_date');
        $this->db->group_by('a.employee_id');
        $this->db->group_by('a.type');
        $this->db->order_by('a.trans_date', 'DESC');
        $records = $this->db->get()->result_array();

        die(json_encode($records));
    }

    public function approvalChangeDays($users_id_from)
    {
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
        $this->db->where('g.users_id_from', $users_id_from);
        $this->db->where('g.users_id_to', $this->session->username);
        $this->db->group_by('a.start');
        $this->db->group_by('a.employee_id');
        $this->db->order_by('a.created_date', 'DESC');
        $records = $this->db->get()->result_array();

        die(json_encode($records));
    }

    public function approvalPayrolls()
    {
        $this->db->select('a.period_start, a.period_end, b.group_id, d.name as group_name, c.name, a.created_date, COUNT(a.employee_id) as employee, SUM(a.net_income) as amount');
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

        $total_employee = 0;
        $total_amount = 0;
        foreach ($records as $record) {
            $total_employee += $record['employee'];
            $total_amount += $record['amount'];
        }

        $data['total'] = count($records);
        $data['rows'] = $records;
        $data['footer'] = array(['group_name' => 'GRAND TOTAL', 'employee' => $total_employee, 'amount' => $total_amount, 'action' => "-"]);

        die(json_encode($data));
    }

    public function approvalSetupSalary($users_id_from)
    {
        $this->db->select('a.*, 
                g.users_id_from as status_check,
                g.users_id_to as status_notification, 
                g.updated_date as status_date,
                c.name as division_name,
                d.name as departement_name,
                e.name as departement_sub_name,
                b.number as employee_number,
                b.name as employee_name,
                f.name as fullname,
                h.name as salary_component_name
            ');
        $this->db->from('setup_salaries a');
        $this->db->join('employees b', 'a.employee_id = b.id');
        $this->db->join('divisions c', 'b.division_id = c.id');
        $this->db->join('departements d', 'b.departement_id = d.id');
        $this->db->join('departement_subs e', 'b.departement_sub_id = e.id');
        $this->db->join('users f', "a.created_by = f.username");
        $this->db->join('notifications g', "a.id = g.table_id and g.table_name = 'setup_salaries'", 'left');
        $this->db->join('salary_components h', 'a.salary_component_id = h.id', 'left');
        $this->db->where('b.deleted', 0);
        $this->db->where('b.status', 0);
        $this->db->where('g.users_id_from', $users_id_from);
        $this->db->where('g.users_id_to', $this->session->username);
        $this->db->group_by('a.employee_id');
        $this->db->order_by('b.name', 'ASC');
        $records = $this->db->get()->result_array();

        die(json_encode($records));
    }

    public function approvalWarningLetters($users_id_from)
    {
        $this->db->select('a.*, 
                g.users_id_from as status_check,
                g.users_id_to as status_notification, 
                g.updated_date as status_date,
                c.name as division_name,
                d.name as departement_name,
                e.name as departement_sub_name,
                b.number as employee_number,
                b.name as employee_name,
                f.name as fullname,
                h.name as violation_name
            ');
        $this->db->from('warning_letters a');
        $this->db->join('employees b', 'a.employee_id = b.id');
        $this->db->join('divisions c', 'b.division_id = c.id');
        $this->db->join('departements d', 'b.departement_id = d.id');
        $this->db->join('departement_subs e', 'b.departement_sub_id = e.id');
        $this->db->join('users f', "a.created_by = f.username");
        $this->db->join('notifications g', "a.id = g.table_id and g.table_name = 'warning_letters'", 'left');
        $this->db->join('violations h', 'a.violation_id = h.id', 'left');
        $this->db->where('b.deleted', 0);
        $this->db->where('b.status', 0);
        $this->db->where('g.users_id_from', $users_id_from);
        $this->db->where('g.users_id_to', $this->session->username);
        $this->db->group_by('a.employee_id');
        $this->db->order_by('b.name', 'ASC');
        $records = $this->db->get()->result_array();

        die(json_encode($records));
    }

    public function approvalResignations($users_id_from)
    {
        $this->db->select('a.*, 
                g.users_id_from as status_check,
                g.users_id_to as status_notification, 
                g.updated_date as status_date,
                c.name as division_name,
                d.name as departement_name,
                e.name as departement_sub_name,
                b.number as employee_number,
                b.name as employee_name,
                f.name as fullname,
                h.name as reason_name
            ');
        $this->db->from('resignations a');
        $this->db->join('employees b', 'a.employee_id = b.id');
        $this->db->join('divisions c', 'b.division_id = c.id');
        $this->db->join('departements d', 'b.departement_id = d.id');
        $this->db->join('departement_subs e', 'b.departement_sub_id = e.id');
        $this->db->join('users f', "a.created_by = f.username");
        $this->db->join('notifications g', "a.id = g.table_id and g.table_name = 'resignations'", 'left');
        $this->db->join('reason_resignations h', 'a.reason_resignation_id = h.id', 'left');
        $this->db->where('b.deleted', 0);
        $this->db->where('b.status', 0);
        $this->db->where('g.users_id_from', $users_id_from);
        $this->db->where('g.users_id_to', $this->session->username);
        $this->db->group_by('a.employee_id');
        $this->db->order_by('b.name', 'ASC');
        $records = $this->db->get()->result_array();

        die(json_encode($records));
    }
}
