<?php
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');

class Cash_carries extends CI_Controller
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
        $this->form_validation->set_rules('number', 'Employee', 'required|min_length[1]|max_length[30]');
    }

    //HALAMAN UTAMA
    public function index()
    {
        if (empty($this->session->username)) {
            redirect('error_session');
        } elseif ($this->checkuserAccess($this->id_menu()) > 0) {
            $data['button'] = $this->getbutton($this->id_menu());

            $this->load->view('template/header', $data);
            $this->load->view('attandance/cash_carries');
        } else {
            redirect('error_access');
        }
    }

    //GET DATA
    public function reads()
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $send = $this->crud->reads('cash_carries', ["name" => $post]);
        echo json_encode($send);
    }

    public function readRequest()
    {
        $this->db->select('a.created_by, b.name');
        $this->db->from('cash_carries a');
        $this->db->join('users b', 'a.created_by = b.username');
        $this->db->group_by('a.created_by');
        $records = $this->db->get()->result_array();
        echo json_encode($records);
    }

    public function readRequestCode()
    {
        $filter_from = $this->input->get('filter_from');
        $filter_to = $this->input->get('filter_to');
        $filter_division = $this->input->get('filter_division');
        $filter_departement = $this->input->get('filter_departement');
        $filter_departement_sub = $this->input->get('filter_departement_sub');

        $this->db->select('a.request_code');
        $this->db->from('cash_carries a');
        $this->db->join('employees b', 'a.employee_id = b.id');
        if ($filter_from != "" && $filter_to != "") {
            $this->db->where('a.trans_date >=', $filter_from);
            $this->db->where('a.trans_date <=', $filter_to);
        }
        $this->db->like('b.division_id', $filter_division);
        $this->db->like('b.departement_id', $filter_departement);
        $this->db->like('b.departement_sub_id', $filter_departement_sub);
        $this->db->group_by('a.request_code');
        $records = $this->db->get()->result_array();
        echo json_encode($records);
    }

    public function requestCode()
    {
        $date = date("ym");
        $post = $this->input->post();
        $departement = $this->crud->read('departements', [], ["id" => $post['departement_id']]);

        $template = "CC" . $departement->number . $date;
        $this->db->select('max(SUBSTRING(request_code, -4)) as code');
        $this->db->from('cash_carries');
        $this->db->where('deleted', 0);
        $this->db->like('request_code', $template);
        $records = $this->db->get()->result_array();

        $requestcode = (int) $records[0]['code'];
        $requestcode++;

        $templatefinal = $template . sprintf("%04s", $requestcode);
        echo $templatefinal;
    }

    public function readOvertimePriceTemp()
    {
        if ($this->input->post()) {
            $trans_date = $this->input->post('trans_date');
            $employee_id = $this->input->post('employee_id');
            $start = $this->input->post('start');
            $end = $this->input->post('end');
            $meal = $this->input->post('meal');

            $duration = $this->convertHour($trans_date, $start, $end);
            $ot_amount = $this->readOvertimePrice($employee_id, $trans_date, $duration['duration_hour'], $meal);
            echo $ot_amount;
        }
    }

    public function readOvertimePrice($employee_id, $trans_date, $duration, $meal)
    {
        $employee = $this->crud->read("employees", [], ["id" => $employee_id]);
        $this->db->select('c.days');
        $this->db->from('shift_employees a');
        $this->db->join('shifts b', 'a.shift_id = b.id', 'left');
        $this->db->join('shift_details c', 'b.id = c.shift_id', 'left');
        $this->db->where('a.employee_id', $employee_id);
        $shift_employee = $this->db->get()->row();

        $allowance_cash_carry = $this->crud->read("allowance_cash_carries", [], ["contract_id" => $employee->contract_id]);

        //ambil durasi berapa jam jika ada lemburan
        $hourTrans = strtotime($trans_date);

        //cek apakah ada hari libur nasional per tanggal dari looping
        $this->db->select('trans_date');
        $this->db->from('calendars');
        $this->db->where('trans_date', $trans_date);
        $calendars = $this->db->get()->result_array();

        //Validasi Uang makan
        if ($meal == 0) {
            $meal = 0;
        } else {
            $meal = @$allowance_cash_carry->meal;
        }

        if (@$shift_employee->days == "5") {
            if (date('w', $hourTrans) !== '0' && date('w', $hourTrans) !== '6') {

                //Kalo ada tanggal Merah
                if (count($calendars) > 0) {
                    $total = ((@$allowance_cash_carry->holiday * $duration) + $meal);
                } else {
                    $total = ((@$allowance_cash_carry->weekday * $duration) + $meal);
                }
            } else {
                $total = ((@$allowance_cash_carry->weekend * $duration) + $meal);
            }
        } else {
            if (date('w', $hourTrans) !== '0') {

                //Kalo ada tanggal Merah
                if (count($calendars) > 0) {
                    $total = ((@$allowance_cash_carry->holiday * $duration) + $meal);
                } else {
                    $total = ((@$allowance_cash_carry->weekday * $duration) + $meal);
                }
            } else {
                $total = ((@$allowance_cash_carry->weekend * $duration) + $meal);
            }
        }

        return $total;
    }

    public function convertHour($trans_date, $start, $end)
    {
        //Set Duration
        $time_begin = strtotime($trans_date . " " . $start);
        $time_end = strtotime($trans_date . " " . $end);
        $diff = $time_end - $time_begin;
        $hour = floor($diff / (60 * 60));
        $minutes = ($diff - $hour * (60 * 60));
        $duration = $hour . " Hour " . floor($minutes / 60) . " Minutes";
        $duration_hour = $hour = round($diff / (60 * 60), 2);;
        $arr = array("duration" => $duration, "duration_hour" => $duration_hour);
        return $arr;
    }

    //GET DATATABLES
    public function datatables()
    {
        if ($this->input->post()) {
            $filter_from = $this->input->get('filter_from');
            $filter_to = $this->input->get('filter_to');
            $filter_division = $this->input->get('filter_division');
            $filter_departement = $this->input->get('filter_departement');
            $filter_departement_sub = $this->input->get('filter_departement_sub');
            $filter_employee = $this->input->get('filter_employee');
            $filter_request_code = $this->input->get('filter_request_code');
            $filter_request = $this->input->get('filter_request');
            $filter_approval = $this->input->get('filter_approval');
            $aprvDepartement = $this->checkApprovalAccess('cash_carries');

            $page   = $this->input->post('page');
            $rows   = $this->input->post('rows');

            //Pagination 1-10
            $page   = isset($page) ? intval($page) : 1;
            $rows   = isset($rows) ? intval($rows) : 10;
            $offset = ($page - 1) * $rows;
            $result = array();
            //Select Query
            $this->db->select('a.*, 
                b.contract_id,
                h.date_in,
                h.date_out,
                h.time_in,
                h.time_out,
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
            $this->db->join('attandances h', "b.number = h.number and a.trans_date = h.date_in", 'left');
            $this->db->where('b.deleted', 0);
            $this->db->where('b.status', 0);
            $this->db->where('a.deleted', 0);
            $this->db->like('b.departement_id', $aprvDepartement);
            if ($filter_from != "" && $filter_to != "") {
                $this->db->where('a.trans_date >=', $filter_from);
                $this->db->where('a.trans_date <=', $filter_to);
            }
            $this->db->like('b.division_id', $filter_division);
            $this->db->like('b.departement_id', $filter_departement);
            $this->db->like('b.departement_sub_id', $filter_departement_sub);
            $this->db->like('b.id', $filter_employee);
            $this->db->like('a.request_code', $filter_request_code);
            $this->db->like('a.created_by', $filter_request);
            if ($filter_approval == "0") {
                $this->db->where("(g.users_id_to = '' or g.users_id_to is null)");
            } elseif ($filter_approval == "1") {
                $this->db->where("(g.users_id_to != '')");
            }
            $this->db->group_by('a.trans_date');
            $this->db->group_by('a.employee_id');
            $this->db->group_by('a.type');
            $this->db->order_by('a.trans_date', 'DESC');

            //Total Data
            $totalRows = $this->db->count_all_results('', false);
            //Limit 1 - 10
            $this->db->limit($rows, $offset);
            //Get Data Array
            $records = $this->db->get()->result_array();

            $datas = [];
            $total = 0;
            foreach ($records as $record) {
                $this->db->select('c.days');
                $this->db->from('shift_employees a');
                $this->db->join('shifts b', 'a.shift_id = b.id', 'left');
                $this->db->join('shift_details c', 'b.id = c.shift_id', 'left');
                $this->db->where('a.employee_id', $record['employee_id']);
                $shift_employee = $this->db->get()->row();

                $this->db->select('trans_date');
                $this->db->from('calendars');
                $this->db->where('trans_date', $record['trans_date']);
                $calendars = $this->db->get()->result_array();

                $allowance_cash_carry = $this->crud->read("allowance_cash_carries", [], ["contract_id" => $record['contract_id']]);

                $start = strtotime($record['trans_date']);
                $att_time_begin = strtotime(@$record['date_in'] . " " . @$record['time_in']);
                $att_time_end = strtotime(@$record['date_out'] . " " . @$record['time_out']);
                $att_diff = $att_time_end - $att_time_begin;
                $att_hour = floor($att_diff / (60 * 60));

                $cc_hour = $record['duration_hour'];

                //Validasi Jam
                if ($att_hour > $cc_hour) {
                    $hour = $cc_hour;
                } else {
                    $hour = $att_hour;
                }

                //Validasi Uang makan
                if ($record['meal'] == 0 or $record['time_in'] == "") {
                    $meal = 0;
                } else {
                    $meal = @$allowance_cash_carry->meal;
                }

                if (@$shift_employee->days == "5") {
                    if (date('w', $start) !== '0' && date('w', $start) !== '6') {

                        //Kalo ada tanggal Merah
                        if (count($calendars) > 0) {
                            $total = ((@$allowance_cash_carry->holiday * $hour) + $meal);
                        } else {
                            $total = ((@$allowance_cash_carry->weekday * $hour) + $meal);
                        }
                    } else {
                        $total = ((@$allowance_cash_carry->weekend * $hour) + $meal);
                    }
                } else {
                    if (date('w', $start) !== '0') {

                        //Kalo ada tanggal Merah
                        if (count($calendars) > 0) {
                            $total = ((@$allowance_cash_carry->holiday * $hour) + $meal);
                        } else {
                            $total = ((@$allowance_cash_carry->weekday * $hour) + $meal);
                        }
                    } else {
                        $total = ((@$allowance_cash_carry->weekend * $hour) + $meal);
                    }
                }

                $amount = ["amount_actual" => $total, "duration_att" => number_format($att_hour, 2)];
                $datas[] = array_merge($record, $amount);
            }

            //Mapping Data
            $result['total'] = $totalRows;
            $result = array_merge($result, ['rows' => @$datas]);
            echo json_encode($result);
        }
    }

    //CREATE DATA
    public function create()
    {
        if ($this->input->post()) {
            $post = $this->input->post();
            $trans_date = $post['trans_date'];
            $employee_id = $post['employee_id'];
            $request_code = $post['request_code'];
            $request_name = $post['request_name'];
            $start = $post['start'];
            $end = $post['end'];
            $type = $post['type'];
            $meal = $post['meal'];
            $amount = $post['amount'];
            $remarks = $post['remarks'];
            $duration = $this->convertHour($trans_date, $start, $end);

            $attachment = $this->crud->upload('attachment', ['png', 'jpg', 'jpeg', 'pdf'], 'assets/image/cash_carries/');

            die(json_encode($attachment));

            $post_final = array(
                "trans_date" =>  $trans_date,
                "employee_id" =>  $employee_id,
                "request_code" =>  $request_code,
                "request_name" =>  $request_name,
                "start" =>  $start,
                "end" =>  $end,
                "type" =>  $type,
                "duration" =>  $duration['duration'],
                "duration_hour" =>  $duration['duration_hour'],
                "amount" =>  $amount,
                "meal" =>  $meal,
                "remarks" =>  $remarks,
            );

            $cash_carries = $this->crud->reads('cash_carries', [], ["employee_id" => $employee_id, "trans_date" => $trans_date, "type" => $type]);
            if (count($cash_carries) > 0) {
                echo json_encode(array("title" => "Duplicate", "message" => "Overtime has been created", "theme" => "error"));
            } else {
                $send = $this->crud->create('cash_carries', $post_final);
                echo $send;
            }
        } else {
            show_error("Cannot Process your request");
        }
    }

    //UPDATE DATA
    public function update()
    {
        if ($this->input->post()) {
            $id   = base64_decode($this->input->get('id'));
            $post = $this->input->post();
            $plan = $post['plan'];
            $actual = $post['actual'];
            $remarks = $post['remarks'];

            $post_final = array(
                "plan" =>  $plan,
                "actual" =>  $actual,
                "remarks" =>  $remarks,
            );

            if ($this->crud->update('cash_carries', ["id" => $id], $post_final)) {
                echo json_encode(array("title" => "Good Job", "message" => "Data Updated Successfully", "theme" => "success"));
            } else {
                echo log_message('error', 'There is an error in your system or data');
            }
        } else {
            show_error("Cannot Process your request");
        }
    }

    //DELETE DATA
    public function delete()
    {
        $data = $this->input->post();
        $delete = $this->crud->delete("cash_carries", ['id' => $data['id']]);
        echo $delete;
    }

    function formatTanggal($date)
    {
        // menggunakan class Datetime
        $datetime = DateTime::createFromFormat('d/m/Y', $date);
        return @$datetime->format('Y-m-d');
    }

    public function create_temp($number, $date, $time)
    {
        $this->db->select('*');
        $this->db->from('cash_carries_temp');
        $this->db->where("number", $number);
        $this->db->where("attandance_date", $date . " " . $time);
        $records = $this->db->get()->result_array();

        $datas = array(
            'number' => $number,
            'attandance_date' => $date . " " . $time
        );

        if (count($records) > 0) {
            return json_encode(array("title" => "Duplicated", "message" => "Data absence duplicate", "theme" => "error"));
        } else {
            $send = $this->crud->create('cash_carries_temp', $datas);
            return $send;
        }
    }

    //UPLOAD DATA
    public function upload()
    {
        error_reporting(0);
        require_once 'assets/vendors/excel_reader2.php';
        $target = basename($_FILES['file_upload']['name']);
        move_uploaded_file($_FILES['file_upload']['tmp_name'], $target);
        chmod($_FILES['file_upload']['name'], 0777);
        $file = $_FILES['file_upload']['name'];
        $data = new Spreadsheet_Excel_Reader($file, false);
        $total_row = $data->rowcount($sheet_index = 0);

        $date = date("ymd");
        $this->db->select('max(SUBSTRING(request_code, -4)) as code');
        $this->db->from('cash_carries');
        $this->db->where('deleted', 0);
        $this->db->where('SUBSTRING(request_code, 4, 6)=', $date);
        $records = $this->db->get()->row();

        $requestcode = (int) $records->code;
        $requestcode++;

        $template = "CC/" . $date . "/";
        $templatefinal = $template . sprintf("%04s", $requestcode);

        for ($i = 3; $i <= $total_row; $i++) {
            $datas[] = array(
                'number' => $data->val($i, 2),
                'trans_date' => $data->val($i, 3),
                'start' => $data->val($i, 4),
                'end' => $data->val($i, 5),
                'duration_hour' => $data->val($i, 6),
                'type' => $data->val($i, 7),
                'meal' => $data->val($i, 8),
                'plan' => $data->val($i, 9),
                'remarks' => $data->val($i, 10),
                'request_code' => $templatefinal
            );
        }

        $datas['total'] = count($datas);
        echo json_encode($datas);
        unlink($_FILES['file_upload']['name']);
    }

    public function uploadclearFailed()
    {
        @unlink('failed/cash_carries.txt');
    }

    public function uploadcreateFailed()
    {
        if ($this->input->post()) {
            $message = $this->input->post('message');
            $textFailed = fopen('failed/cash_carries.txt', 'a');
            fwrite($textFailed, $message . "\n");
            fclose($textFailed);
        }
    }

    public function uploadDownloadFailed()
    {
        $file = "failed/cash_carries.txt";

        header('Content-Description: File Failed');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . @filesize($file));
        header("Content-Type: text/plain");
        @readfile($file);
    }

    public function uploadcreate()
    {
        if ($this->input->post()) {
            $data = $this->input->post('data');
            if ($data['trans_date'] == "") {
                echo json_encode(array("title" => "Format Date", "message" => $data['number'] . " Format Date is Null", "theme" => "error"));
            } else {
                $employee = $this->crud->read('employees', [], ["number" => $data['number']]);

                if (!empty($employee)) {
                    $cash_carries = $this->crud->read('cash_carries', [], ["employee_id" => $employee->id, "trans_date" => $data['trans_date'], "type" => $data['type']]);

                    if (!empty($cash_carries)) {
                        echo json_encode(array("title" => "Available", "message" => $employee->name . " has been created", "theme" => "error"));
                    } else {
                        //Set Duration
                        $time_begin = strtotime($data['trans_date'] . " " . $data['start']);
                        $time_end = strtotime($data['trans_date'] . " " . $data['end']);
                        $diff = $time_end - $time_begin;
                        $hour = floor($diff / (60 * 60));

                        if ($data['meal'] == "YES") {
                            $meal = "1";
                        } else {
                            $meal = "0";
                        }

                        $minutes = $diff - $hour * (60 * 60);
                        $duration = $hour . " Hour " . floor($minutes / 60) . " Minutes";
                        $duration_hour = $hour;

                        $ot_amount = $this->readOvertimePrice($employee->id, $data['trans_date'], $duration_hour, $meal);

                        $post_cash_carries = array(
                            'employee_id' => $employee->id,
                            'trans_date' => $data['trans_date'],
                            'request_code' => $data['request_code'],
                            'start' => $data['start'],
                            'end' => $data['end'],
                            'type' => $data['type'],
                            'meal' => $meal,
                            'plan' => $data['plan'],
                            'duration' => $duration,
                            'duration_hour' => $data['duration_hour'],
                            'remarks' => $data['remarks'],
                            'amount' =>  $ot_amount
                        );

                        $send = $this->crud->create('cash_carries', $post_cash_carries);
                        echo $send;
                    }
                } else {
                    echo json_encode(array("title" => "Not Found", "message" => $data['number'] . " Employee ID Not Found", "theme" => "error"));
                }
            }
        }
    }

    //PRINT & EXCEL DATA
    public function print($option = "")
    {
        if ($option == "excel") {
            $format  = date("Ymd");
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=cash_carries_$format.xls");
        }

        $filter_from = $this->input->get('filter_from');
        $filter_to = $this->input->get('filter_to');
        $filter_division = $this->input->get('filter_division');
        $filter_departement = $this->input->get('filter_departement');
        $filter_departement_sub = $this->input->get('filter_departement_sub');
        $filter_employee = $this->input->get('filter_employee');
        $filter_request_code = $this->input->get('filter_request_code');
        $filter_request = $this->input->get('filter_request');
        $filter_approval = $this->input->get('filter_approval');
        $aprvDepartement = $this->checkApprovalAccess('cash_carries');

        //Config
        $this->db->select('*');
        $this->db->from('config');
        $config = $this->db->get()->row();

        //Select Query
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
        $this->db->like('b.departement_id', $aprvDepartement);
        if ($filter_from != "" && $filter_to != "") {
            $this->db->where('a.trans_date >=', $filter_from);
            $this->db->where('a.trans_date <=', $filter_to);
        }
        $this->db->like('b.division_id', $filter_division);
        $this->db->like('b.departement_id', $filter_departement);
        $this->db->like('b.departement_sub_id', $filter_departement_sub);
        $this->db->like('b.id', $filter_employee);
        $this->db->like('a.request_code', $filter_request_code);
        $this->db->like('a.created_by', $filter_request);
        if ($filter_approval == "0") {
            $this->db->where("(g.users_id_to = '' or g.users_id_to is null)");
        } elseif ($filter_approval == "1") {
            $this->db->where("(g.users_id_to != '')");
        }
        $this->db->group_by('a.trans_date');
        $this->db->group_by('a.employee_id');
        $this->db->group_by('a.type');
        $this->db->order_by('a.trans_date', 'DESC');
        $records = $this->db->get()->result_array();

        $html = '<html><head><title>Print Data</title></head><style>body {font-family: Arial, Helvetica, sans-serif;}#customers {border-collapse: collapse;width: 100%;font-size: 12px;}#customers td, #customers th {border: 1px solid #ddd;padding: 2px;}#customers tr:nth-child(even){background-color: #f2f2f2;}#customers tr:hover {background-color: #ddd;}#customers th {padding-top: 2px;padding-bottom: 2px;text-align: left;color: black;}</style><body>
        <center>
            <div style="float: left; font-size: 12px; text-align: left;">
                <table style="width: 100%;">
                    <tr>
                        <td width="50" style="font-size: 12px; vertical-align: top; text-align: center; vertical-align:jus margin-right:10px;">
                            <img src="' . $config->favicon . '" width="30">
                        </td>
                        <td style="font-size: 14px; text-align: left; margin:2px;">
                            <b>' . $config->name . '</b><br>
                            <small>DATA CASH CARRY</small>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="float: right; font-size: 12px; text-align: right;">
                Print Date ' . date("d M Y H:m:s") . ' <br>
                Print By ' . $this->session->username . '  
            </div>
        </center>
        <br><br><br>
        
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
                <th>Amount</th>
                <th>Plan</th>
                <th>Actual</th>
                <th>Remarks</th>
            </tr>';
        $no = 1;
        foreach ($records as $data) {
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
                            <td>' . $data['amount'] . '</td>
                            <td>' . $data['plan'] . '</td>
                            <td>' . $data['actual'] . '</td>
                            <td>' . $data['remarks'] . '</td>
                        </tr>';
            $no++;
        }

        $html .= '</table></body></html>';
        echo $html;
    }
}
