<?php
header('Content-Type: application/json; charset=utf-8');

date_default_timezone_set("Asia/Bangkok");
defined('BASEPATH') or exit('No direct script access allowed');

class Payrolls extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('mobile');
    }

    //HALAMAN UTAMA
    public function index()
    {
        show_error("Cannot Process your request");
    }

    public function reads($api_key = "")
    {
        if ($api_key != "") {
            $user = $this->mobile->read("users", [], ["api_key" => $api_key]);

            if ($user) {
                $this->db->select('a.*, b.bank_branch, b.bank_no, b.national_id, b.tax_id, d.name as source_name, c.name as marital_name, 
                    b.name as employee_name, b.number as employee_number');
                $this->db->from('payrolls a');
                $this->db->join('employees b', 'a.employee_id = b.id');
                $this->db->join('maritals c', 'a.marital = c.number', 'left');
                $this->db->join('sources d', 'b.source_id = d.id', 'left');
                $this->db->where('b.number', $user->number);
                $this->db->where("(a.approved_to is null or a.approved_to = '')");
                $this->db->order_by('a.period_start', 'DESC');
                $this->db->group_by('a.employee_id');
                $this->db->group_by('a.period_start');
                $records = $this->db->get()->result_array();

                $corection_total = 0;
                $allowance_fix_total = 0;
                $total_deduction_amount = 0;
                $total_deduction_number = 0;
                $allowance_temp_total = 0;
                $arr_bpjs_emp_amount_total = 0;
                $datas = array();
                foreach ($records as $record) {
                    $cutoff = $this->mobile->read('cutoff', ["start" => $record['period_start'], "finish" => $record['period_end']]);
                    $filter_from = @$cutoff->start;
                    $filter_to = @$cutoff->finish;

                    //Corection PLUS =============================================================
                    $correction_plus = $this->mobile->query("SELECT employee_id, `trans_date`, correction_name, remarks, SUM(amount) as amount 
                        FROM corrections 
                        WHERE employee_id='$record[employee_id]' and trans_date between '$filter_from' and '$filter_to' and correction_type = 'PLUS' 
                        GROUP BY correction_name");

                    $corection_total = 0;
                    foreach ($correction_plus as $row_correction_plus) {
                        $corection_total += $row_correction_plus->amount;
                    }
                    //Corection PLUS =============================================================

                    //Deduction ==================================================================
                    $total_deduction_amount = 0;
                    foreach (json_decode($record['deduction_amount'], true) as $deduction_amount => $val_deduction_amount) {
                        $total_deduction_amount += $val_deduction_amount;
                    }

                    $total_deduction_number = 0;
                    foreach (json_decode($record['deduction_number'], true) as $deduction_number => $val_deduction_number) {
                        if ($val_deduction_number == "") {
                            $val_deduction_number = 0;
                        }

                        $total_deduction_number += $val_deduction_number;
                    }
                    //Deduction ==================================================================

                    //Allowences FIX =============================================================
                    $allowance_fixs = $this->mobile->query("SELECT b.type, b.name, SUM(a.amount) as amount
                        FROM allowances b
                        JOIN setup_allowances a ON a.allowance_id = b.id
                        WHERE a.employee_id = '$record[employee_id]' and b.type = 'FIX'
                        GROUP BY b.id ORDER BY b.type asc");

                    $allowance_fix_total = 0;
                    foreach ($allowance_fixs as $allowance_fix) {
                        $allowance_fix_total += $allowance_fix->amount;
                    }
                    //Allowences FIX =============================================================

                    //Allowences TEMP ============================================================
                    $allowance_temps = $this->mobile->query("SELECT b.type, b.name, SUM(a.amount) as amount
                        FROM allowances b
                        JOIN setup_allowances a ON a.allowance_id = b.id
                        WHERE a.employee_id = '$record[employee_id]' and b.type = 'TEMPORARY'
                        GROUP BY b.id ORDER BY b.type asc");

                    $allowance_temp_total = 0;
                    foreach ($allowance_temps as $allowance_temp) {
                        $allowance_temp_total += $allowance_temp->amount;
                    }
                    //Allowences TEMP ============================================================

                    //Deduction ==================================================================
                    $deductions = $this->mobile->query("SELECT b.number, b.name, SUM(a.amount) as amount
                        FROM deductions b
                        LEFT JOIN setup_deductions a ON a.deduction_id = b.id
                        WHERE a.employee_id = '$record[employee_id]'
                        GROUP BY b.number, b.name ORDER BY b.name asc");

                    $deduction_total = 0;
                    foreach ($deductions as $deduction) {
                        $deduction_total += $deduction->amount;
                    }
                    //Deduction ==================================================================

                    $bpjsKeys = json_decode($record['bpjs_employee'], true);
                    $html_bpjs_emp = array();
                    $arr_bpjs_emp_amount_total = 0;
                    foreach ($bpjsKeys as $bpjs_employee => $bpjs_value) {
                        $arr_bpjs = explode("_", $bpjs_employee);
                        $r_bpjs_emp = $this->mobile->read('bpjs', ['status' => 0], ["number" => $arr_bpjs[0]]);

                        $arr_bpjs_emp_amount_total += !empty($bpjs_value) ? $bpjs_value : 0;
                        if (!empty($r_bpjs_emp->employee)) {
                            $html_bpjs_emp[] = array(
                                "name" => $r_bpjs_emp->name,
                                "amount" => (int) $bpjs_value
                            );
                        }
                    }

                    $bpjsKeyCom = json_decode($record['bpjs_company'], true);
                    $html_bpjs_com = array();
                    $arr_bpjs_com_amount_total = 0;
                    foreach ($bpjsKeyCom as $bpjs_company => $bpjs_value_com) {
                        $arr_bpjs = explode("_", $bpjs_company);
                        $r_bpjs_com = $this->mobile->read('bpjs', ['status' => 0], ["number" => $arr_bpjs[0]]);

                        $arr_bpjs_com_amount_total += !empty($bpjs_value_com) ? $bpjs_value_com : 0;
                        if (!empty($r_bpjs_com->employee)) {
                            $html_bpjs_com[] = array(
                                "name" => $r_bpjs_com->name,
                                "amount" => (int) $bpjs_value_com
                            );
                        }
                    }

                    $total_income = ($record['salary'] + $allowance_fix_total + $record['total_overtime_amount'] + $record['correction_plus']);
                    $total_deduction = ($record['deduction_absence_amount'] + $total_deduction_amount + $deduction_total + $record['loan_bank'] + $record['loan_cooperative'] + $record['loan_other'] + $record['correction_minus']);
                
                    $datas[] = array(
                        "period" => $record['period_start'],
                        "employee_number" => $record['employee_number'],
                        "employee_name" => $record['employee_name'],
                        "departement" => $record['departement_name'],
                        "departement_sub" => $record['departement_sub_name'],
                        "national_id" => $record['national_id'],
                        "tax_id" => $record['tax_id'],
                        "marital" => $record['marital'],
                        "marital_name" => $record['marital_name'],
                        "ter_code" => $record['ter_number'],
                        "working_days" => $record['attandance_wd'],
                        "cutoff" => date("d F Y", strtotime($filter_from)) . " to " . date("d F Y", strtotime($filter_to)),
                        "basic_salary" => (int) $record['salary'],
                        "allowance_fix" => $allowance_fix_total,
                        "allowance_temp" => $allowance_temp_total,
                        "allowance_bpjs" => $arr_bpjs_com_amount_total,
                        "overtime_hour" => ($record['overtime_weekday'] + $record['overtime_holiday']),
                        "overtime_amount" => ($record['overtime_amount_weekday'] + $record['overtime_amount_holiday']),
                        "overtime_correction_hour" => (int) $record['overtime_correction'],
                        "overtime_correction_amount" => (int) $record['overtime_amount_correction'],
                        "correction_plus" => $corection_total,
                        "bruto_income" => ($total_income + $arr_bpjs_com_amount_total),
                        "absence_hour" => ($record['deduction_absence'] + $total_deduction_number),
                        "absence_amount" => ($record['deduction_absence_amount'] + $total_deduction_amount),
                        "loans" => ($record['loan_other'] + $record['loan_cooperative'] + $record['loan_bank']),
                        "correction_minus" => (int) $record['correction_minus'],
                        "total_deduction" => ($total_deduction + $arr_bpjs_com_amount_total),
                        "income" => ($total_income - $total_deduction),
                        "bpjs_employee" => $html_bpjs_emp,
                        "total_bpjs_employee" => $arr_bpjs_emp_amount_total,
                        "bpjs_company" => $html_bpjs_com,
                        "total_bpjs_company" => $arr_bpjs_com_amount_total,
                        "ter" => (int) $record['ter'],
                        "net_income" => (int) $record['net_income'],
                    );
                }

                die(json_encode(array(
                    "title" => "Success",
                    "message" => "Data Found",
                    "theme" => "success",
                    "results" => $datas
                )));

            } else {
                show_error("Api Key Invalid");
            }
        } else {
            show_error("Cannot Process your request");
        }

        $post = isset($_POST['q']) ? $_POST['q'] : "";
        
        echo json_encode($send);
    }
}
