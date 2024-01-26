<?php
error_reporting(0);
date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');

class Attandances extends CI_Controller
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
            $this->load->view('attandance/attandances');
        } else {
            redirect('error_access');
        }
    }

    //GET DATA
    public function reads()
    {
        $post = isset($_POST['q']) ? $_POST['q'] : "";
        $send = $this->crud->reads('attandances', ["name" => $post]);
        echo json_encode($send);
    }

    public function getData(){
        if ($this->input->post()) {
            $filter_from = $this->input->post('filter_from');
            $filter_to = $this->input->post('filter_to');

            $this->db->select("*");
            $this->db->from('attandance_old');
            $this->db->where('date_in >=', $filter_from);
            $this->db->where('date_in <=', $filter_to);
            // $this->db->where('number', "22070003220179");
            $this->db->group_by("number");
            $this->db->group_by("date_in");
            $this->db->order_by("number", "asc");
            $this->db->order_by("date_in", "asc");
            $attandances = $this->db->get()->result_array();

            $datas = array();
            foreach ($attandances as $attandance) {
                $time_in = $attandance['time_in'];
                $employee = $this->crud->read('employees', [], ["number" => $attandance['number']]);

                $tolerance_hour_min = date("H:i:s", strtotime('-2 Hour', strtotime(@$time_in)));
                $tolerance_hour_plus = date("H:i:s", strtotime('+2 Hour', strtotime(@$time_in)));
                $this->db->select("d.start, d.end, d.days, d.working, d.tolerance, c.name, d.name as shift_name");
                $this->db->from('shift_employees b');
                $this->db->join('shifts c', 'c.id = b.shift_id');
                $this->db->join('shift_details d', 'd.shift_id = c.id');
                $this->db->where('b.employee_id', $employee->id);
                $this->db->where("TIME(d.start) >=  TIME('$tolerance_hour_min') && TIME(d.start) <= TIME('$tolerance_hour_plus')");
                $shift = $this->db->get()->row();

                $datas[] = array(
                    "number" => $attandance['number'],
                    "date_in" => $attandance['date_in'],
                    "time_in" => $attandance['time_in'],
                    "location" => 1,
                    "shift_start" => @$shift->start,
                    "shift_end" => @$shift->end,
                    "shift_name" => @$shift->shift_name,
                    "shift_detail" => @$shift->name,
                    "shift_days" => @$shift->days
                );

                if(!empty($attandance['date_out']) || !empty($attandance['time_out'])){
                    $datas[] = array(
                        "number" => $attandance['number'],
                        "date_in" => $attandance['date_out'],
                        "time_in" => $attandance['time_out'],
                        "location" => 2,
                        "shift_start" => @$shift->start,
                        "shift_end" => @$shift->end,
                        "shift_name" => @$shift->shift_name,
                        "shift_detail" => @$shift->name,
                        "shift_days" => @$shift->days
                    );
                }
            }

            $datas['total'] = count($datas);
            echo json_encode($datas);
        }
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
            $filter_status = $this->input->get('filter_status');
            $result = array();

            //Employee
            $this->db->select("a.id, a.number, a.name, a.division_id, a.departement_id, a.departement_sub_id,
                DAYNAME(b.date_in) as dayname,
                b.date_in,
                b.time_in,
                b.location,
                c.name as division_name, 
                d.name as departement_name, 
                e.name as departement_sub_name, 
                g.name as contract_name");
            $this->db->from('employees a');
            $this->db->join('attandances b', "a.number = b.number");
            $this->db->join('divisions c', 'a.division_id = c.id');
            $this->db->join('departements d', 'a.departement_id = d.id');
            $this->db->join('departement_subs e', 'a.departement_sub_id = e.id');
            $this->db->join('contracts g', 'g.id = a.contract_id', 'left');
            if ($filter_from != "" && $filter_to != "") {
                $this->db->where("(b.date_in >= '$filter_from' and b.date_in <= '$filter_to')");
            }
            $this->db->like('a.division_id', $filter_division);
            $this->db->like('a.departement_id', $filter_departement);
            $this->db->like('a.departement_sub_id', $filter_departement_sub);
            $this->db->like('a.id', $filter_employee);
            $this->db->order_by("d.name", "asc");
            $this->db->order_by("a.name", "asc");
            $this->db->order_by("b.date_in", "asc");
            $this->db->order_by("b.location", "asc");
            $employees = $this->db->get()->result_array();

            $datas['total'] = count($employees);
            $datas['rows'] = $employees;
            echo json_encode($datas);
        }
    }

    //CREATE DATA
    public function create()
    {
        if ($this->input->post()) {
            if ($this->form_validation->run() == TRUE) {
                $post   = $this->input->post();
                $attandance = $this->crud->read("attandances", [], ["number" => $post['number'], "date_in" => $post['date_in']]);
                if ($attandance) {
                    echo json_encode(array("title" => "Available", "message" => "The attandance for this employee and date in has been created", "theme" => "error"));
                } else {
                    $send   = $this->crud->create('attandances', $post);
                    echo $send;
                }
            } else {
                show_error(validation_errors());
            }
        } else {
            show_error("Cannot Process your request");
        }
    }

    public function createConvert()
    {
        if ($this->input->post()) {
            $post = $this->input->post('data');
            $attandance = $this->crud->read("attandances", [], [
                "number" => $post['number'], 
                "date_in" => $post['date_in'], 
                "location" => $post['location']
            ]);
            
            if ($attandance) {
                echo json_encode(array("title" => "Available", "message" => "The attandance for this employee and date in has been created", "theme" => "error"));
            } else {
                $send = $this->db->insert('attandances', $post);
                echo json_encode(array("title" => "Success", "message" => "Attendance has been created", "theme" => "success"));
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
            $send = $this->crud->update('attandances', ["id" => $id], $post);
            echo $send;
        } else {
            show_error("Cannot Process your request");
        }
    }

    //DELETE DATA
    public function delete()
    {
        $data = $this->input->post();
        $delete = $this->crud->delete("attandances", ['number' => $data['number'], 'date_in' => $data['date_in']]);
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
        $this->db->from('attandances_temp');
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
            $send = $this->crud->create('attandances_temp', $datas);
            return $send;
        }
    }

    //UPLOAD DATA
    public function upload()
    {
        error_reporting(0);

        if ($this->input->post('file_type') == "text") {
            $target = basename($_FILES['file_upload']['name']);
            move_uploaded_file($_FILES['file_upload']['tmp_name'], $target);
            $open = fopen($target, 'r');

            while (!feof($open)) {
                $getTextLine = fgets($open);
                $explodeLine = explode(":", $getTextLine);

                list($code, $date, $time, $id, $number) = $explodeLine;

                $this->create_temp(trim($number), trim(date('Y-m-d', strtotime($date))), trim(date('H:i:s', strtotime($time))));
            }

            $this->db->select('*');
            $this->db->from('attandance_temp');
            $this->db->order_by('number', 'asc');
            $this->db->order_by('attandance_date', 'asc');
            $attandance = $this->db->get()->result_object();

            foreach ($attandance as $data) {
                $datas[] = array(
                    'number' => $data->number,
                    'date_in' => date('d/m/Y H:i:s', strtotime($data->attandance_date)),
                    'date_out' => date('d/m/Y H:i:s', strtotime($data->attandance_date))
                );
            }

            $datas['total'] = count($datas);
            echo json_encode($datas);
            unlink($_FILES['file_upload']['name']);
            $this->db->truncate('attandance_temp');
        } elseif ($this->input->post('file_type') == "excel") {
            require_once 'assets/vendors/excel_reader2.php';
            $target = basename($_FILES['file_upload']['name']);
            move_uploaded_file($_FILES['file_upload']['tmp_name'], $target);
            chmod($_FILES['file_upload']['name'], 0777);
            $file = $_FILES['file_upload']['name'];
            $data = new Spreadsheet_Excel_Reader($file, false);
            $total_row = $data->rowcount($sheet_index = 0);

            for ($i = 2; $i <= $total_row; $i++) {
                $datein = explode(";", $data->val($i, 4));
                $datas[] = array(
                    'lokasi' => $data->val($i, 5),
                    'number' => trim($data->val($i, 6)),
                    'date_in' => $datein[0] . " " . $datein[1],
                    'date_out' => $datein[0] . " " . $datein[1]
                );
                //$this->create_temp(trim($data->val($i, 6)), trim(date('Y-m-d', strtotime($data->val($i, 4)))), trim(date('H:i:s', strtotime($data->val($i, 4)))));
            }

            // $this->db->select('*');
            // $this->db->from('attandance_temp');
            // $this->db->order_by('number', 'asc');
            // $this->db->order_by('attandance_date', 'asc');
            // $attandance = $this->db->get()->result_object();

            // foreach ($attandance as $data) {
            //     $datas[] = array(
            //         'number' => $data->number,
            //         'date_in' => date('d/m/Y H:i:s', strtotime($data->attandance_date)),
            //         'date_out' => date('d/m/Y H:i:s', strtotime($data->attandance_date))
            //     );
            // }

            $datas['total'] = count($datas);
            echo json_encode($datas);

            unlink($_FILES['file_upload']['name']);
            //$this->db->truncate('attandance_temp');
        } else {
            echo json_encode("Format File Error");
        }
    }

    public function uploadclearFailed()
    {
        @unlink('failed/attandances.txt');
    }

    public function uploadcreateFailed()
    {
        if ($this->input->post()) {
            $message = $this->input->post('message');
            $textFailed = fopen('failed/attandances.txt', 'a');
            fwrite($textFailed, $message . "\n");
            fclose($textFailed);
        }
    }

    public function uploadDownloadFailed()
    {
        $file = "failed/attandances.txt";

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
            $explode = explode(" ", $data['date_in']);
            $date_in = $this->formatTanggal($explode[0]);
            $time_in = $explode[1];

            //Employee
            $this->db->select('*');
            $this->db->from('employees');
            $this->db->where('number', $data['number']);
            $employee = $this->db->get()->row();

            //Jika Terdaftar di master employee
            if (!empty($employee->number)) {
                if ($data['lokasi'] == 1) {
                    $data_attandance = array(
                        'number' => $data['number'],
                        'date_in' => $date_in,
                        'time_in' => $time_in,
                        'location' => $data['lokasi'],
                    );

                    $this->db->delete('attandances', ["number" => $data['number'], "date_in" => $date_in, "location" => $data['lokasi']]);
                    if($this->db->insert('attandances', $data_attandance)){
                        echo json_encode(array("title" => "Created", "message" => $employee->name . " | " . $date_in . " " . $time_in . " Create data Check In", "theme" => "success"));
                    }else{
                        echo json_encode(array("title" => "Failed", "message" => $employee->name . " | " . $date_in . " " . $time_in . " Create data Check In", "theme" => "error"));
                    }
                } else {
                    $data_attandance = array(
                        'number' => $data['number'],
                        'date_in' => $date_in,
                        'time_in' => $time_in,
                        'location' => $data['lokasi'],
                    );

                    $this->db->delete('attandances', ["number" => $data['number'], "date_in" => $date_in, "location" => $data['lokasi']]);
                    if($this->db->insert('attandances', $data_attandance)){
                        echo json_encode(array("title" => "Created", "message" => $employee->name . " | " . $date_in . " " . $time_in . " Create data Check Out", "theme" => "success"));
                    }else{
                        echo json_encode(array("title" => "Failed", "message" => $employee->name . " | " . $date_in . " " . $time_in . " Create data Check Out", "theme" => "error"));
                    }
                }
            } else {
                echo json_encode(array("title" => "Warning", "message" => $data['number'] . " Empoyee ID Un Registered", "theme" => "error"));
            }
        }
    }

    //PRINT & EXCEL DATA
    public function print($option = "")
    {
        if ($option == "excel") {
            $format  = date("Ymd");
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=attandances_$format.xls");
        }
        echo "<center><h4>Not Available Report Attandance in this module</h4></center>";
    }
}
