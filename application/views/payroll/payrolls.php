<!-- TABLE DATAGRID -->
<table id="dg" class="easyui-datagrid" style="width:100%;" toolbar="#toolbar">
    <thead frozen="true">
        <tr>
            <th data-options="field:'number',width:150,halign:'center'">Employee ID</th>
            <th data-options="field:'name',width:250,halign:'center'">Employee Name</th>
        </tr>
    </thead>
    <thead>
        <tr>
            <th rowspan="2" data-options="field:'status_resign',width:80,halign:'center', formatter:statusResign, styler:styleStatusResign">Status</th>
            <th rowspan="2" data-options="field:'division_name',width:200,halign:'center'">Division</th>
            <th rowspan="2" data-options="field:'departement_name',width:200,halign:'center'">Departement</th>
            <th rowspan="2" data-options="field:'departement_sub_name',width:200,halign:'center'">Departement Sub</th>
            <th rowspan="2" data-options="field:'job_type',width:100,halign:'center'">Job Type</th>
            <th rowspan="2" data-options="field:'contract_name',width:100,halign:'center'">Status</th>
            <th rowspan="2" data-options="field:'source_name',width:200,halign:'center'">Source</th>
            <th rowspan="2" data-options="field:'position_name',width:100,halign:'center'">Position</th>
            <th rowspan="2" data-options="field:'shift_name',width:150,halign:'center'">Shift</th>
            <th rowspan="2" data-options="field:'level',width:80,halign:'center'">Level</th>
            <th rowspan="2" data-options="field:'marital',width:80,halign:'center'">Marital</th>
            <th rowspan="2" data-options="field:'ter_number',width:80,halign:'center'">TER Code</th>
            <th rowspan="2" data-options="field:'group_name',width:100,halign:'center'">Group</th>
            <th rowspan="2" data-options="field:'national_id',width:150,halign:'center'">National ID</th>
            <th rowspan="2" data-options="field:'tax_id',width:150,halign:'center'">NPWP</th>
            <th rowspan="2" data-options="field:'account_no',width:100,halign:'center'">Account No</th>
            <th colspan="<?= (count($permit_type) + 1) ?>">Attandance</th>
            <th rowspan="2" data-options="field:'working_day',width:80,align:'center'">Working<br>Calendar</th>
            <th rowspan="2" data-options="field:'salary',width:100,align:'center', formatter:numberformat">Salary</th>
            <th colspan="<?= (count($allowance)) ?>">Allowence</th>
            <th colspan="<?= count($bpjs) ?>">BPJS Company</th>
            <th rowspan="2" data-options="field:'bpjs_company_total',width:100,align:'center', formatter:numberformat">Total BPJS<br>Company</th>
            <th rowspan="2" data-options="field:'correction_plus',width:100,align:'center', formatter:numberformat">Correction<br>Plus</th>
            <!-- <th colspan="3">OT (Working Day)</th>
            <th colspan="3">OT (Holiday)</th>
            <th colspan="3">OT (Correction)</th>
            <th colspan="3">Total Overtime</th> -->
            <th rowspan="2" data-options="field:'total_all_allowance',width:100,align:'center', formatter:numberformat">Bruto Income</th>
            <th colspan="<?= (count($permit_type_d) + count($permit_type_d) + 2) ?>">Deduction</th>
            <th rowspan="2" data-options="field:'correction_minus',width:100,align:'center', formatter:numberformat">Correction<br>Minus</th>
            <th rowspan="2" data-options="field:'total_all_deduction',width:100,align:'center', formatter:numberformat">Total<br>Deduction</th>
            <th rowspan="2" data-options="field:'bpjs_company_total_2',width:100,align:'center', formatter:numberformat">Total BPJS<br>Company</th>
            <th rowspan="2" data-options="field:'income',width:100,align:'center', formatter:numberformat">Income</th>
            <th colspan="<?= (count($deduction)) ?>">Deduction </th>
            <th colspan="3">LOAN</th>
            <th colspan="<?= count($bpjs) ?>">BPJS Employee</th>
            <th rowspan="2" data-options="field:'bpjs_employee_total',width:100,align:'center', formatter:numberformat">Total BPJS<br>Employee</th>
            <!-- <th rowspan="2" data-options="field:'netto',width:100,align:'center'">Netto</th> -->
            <!-- <th rowspan="2" data-options="field:'pph',width:100,align:'center', formatter:numberformat">PPH21</th> -->
            <th rowspan="2" data-options="field:'ter',width:100,align:'center', formatter:numberformat">TER</th>
            <th rowspan="2" data-options="field:'net_income',width:100,align:'center', formatter:numberformat">Net Income</th>
        </tr>
        <tr>
            <?php
            foreach ($permit_type as $permit_type_data) {
                $permit_field = "field:'" . strtolower($permit_type_data->number . "a") . "',width:50,align:'center'";
                echo '<th data-options="' . $permit_field . '">' . $permit_type_data->number . '</th>';
            }
            ?>
            <th data-options="field:'attandance_wd',width:50,align:'center'">WD</th>
            <?php
            foreach ($allowance as $allowance_data) {
                $allowance_field = "field:'" . strtolower($allowance_data->number) . "',width:100,align:'center'";
                echo '<th data-options="' . $allowance_field . ', formatter:numberformat">' . $allowance_data->number . '</th>';
            }

            foreach ($bpjs as $bpjs_data) {
                $bpjs_field = "field:'" . strtolower($bpjs_data->number) . "_company',width:100,align:'center'";
                echo '<th data-options="' . $bpjs_field . ', formatter:numberformat">' . $bpjs_data->number . '</th>';
            }
            ?>
            <!-- <th data-options="field:'overtime_weekday',width:80,align:'center', formatter:numberformat">Hour</th>
            <th data-options="field:'overtime_convert_weekday',width:80,align:'center', formatter:numberformat">Conversion</th>
            <th data-options="field:'overtime_amount_weekday',width:120,align:'center', formatter:numberformat">Amount</th>
            <th data-options="field:'overtime_holiday',width:80,align:'center', formatter:numberformat">Hour</th>
            <th data-options="field:'overtime_convert_holiday',width:80,align:'center', formatter:numberformat">Conversion</th>
            <th data-options="field:'overtime_amount_holiday',width:120,align:'center', formatter:numberformat">Amount</th>
            <th data-options="field:'overtime_correction',width:80,align:'center', formatter:numberformat">Hour</th>
            <th data-options="field:'overtime_convert_correction',width:80,align:'center', formatter:numberformat">Conversion</th>
            <th data-options="field:'overtime_amount_correction',width:120,align:'center', formatter:numberformat">Amount</th>
            <th data-options="field:'total_overtime',width:80,align:'center', formatter:numberformat">Hour</th>
            <th data-options="field:'total_overtime_convert',width:80,align:'center', formatter:numberformat">Conversion</th>
            <th data-options="field:'total_overtime_amount',width:120,align:'center', formatter:numberformat">Amount</th> -->
            <?php
            foreach ($permit_type_d as $permit_type_d_data) {
                $permit_type_d_field = "field:'" . strtolower($permit_type_d_data->number) . "b',width:50,align:'center'";
                $permit_type_d_field_amt = "field:'" . strtolower($permit_type_d_data->number) . "_amount',width:100,align:'center'";
                echo '  <th data-options="' . $permit_type_d_field . ', formatter:numberformat">' . $permit_type_d_data->number . '</th>
                                            <th data-options="' . $permit_type_d_field_amt . ', formatter:numberformat">Amount</th>';
            }
            ?>
            <th data-options="field:'deduction_absence',width:80,align:'center', formatter:numberformat">Absence</th>
            <th data-options="field:'deduction_absence_amount',width:100,align:'center', formatter:numberformat">Amount</th>
            <?php
            foreach ($deduction as $deduction_data) {
                $deduction_field = "field:'" . strtolower($deduction_data->number) . "',width:100,align:'center'";
                echo '<th data-options="' . $deduction_field . ', formatter:numberformat">' . $deduction_data->number . '</th>';
            }
            ?>
            <th data-options="field:'loan_cooperative',width:100,align:'center', formatter:numberformat">Koperasi</th>
            <th data-options="field:'loan_bank',width:100,align:'center', formatter:numberformat">Bank</th>
            <th data-options="field:'loan_other',width:100,align:'center', formatter:numberformat">Other</th>
            <?php
            foreach ($bpjs as $bpjs_data) {
                $bpjs_field = "field:'" . strtolower($bpjs_data->number) . "_employee',width:100,align:'center'";
                echo '<th data-options="' . $bpjs_field . ', formatter:numberformat">' . $bpjs_data->number . '</th>';
            }
            ?>
        </tr>
    </thead>
</table>

<!-- TOOLBAR DATAGRID -->
<div id="toolbar">
    <div class="easyui-accordion" style="width:100%; margin-bottom:5px;">
        <div title="Click this to hide the filter" data-options="onCollapse: function(){ $('#dg').datagrid('reload'); }" style="padding:10px; background:#F4F4F4;">
            <fieldset style="width: 99%; border:2px solid #d0d0d0; margin-bottom: 5px; border-radius:4px;">
                <legend><b>Form Filter Data</b></legend>
                <div style="width: 50%; float: left;">
                    <div class="fitem">
                        <span style="width:30%; display:inline-block;">Period Date</span>
                        <input style="width:28%;" name="filter_from" id="filter_from" class="easyui-combogrid"> To
                        <input style="width:28%;" name="filter_to" id="filter_to" data-options="prompt:'Date To'" readonly class="easyui-textbox">
                    </div>
                    <div class="fitem">
                        <span style="width:30%; display:inline-block;">Division</span>
                        <input style="width:60%;" id="filter_division" class="easyui-combobox">
                    </div>
                    <div class="fitem">
                        <span style="width:30%; display:inline-block;">Departement</span>
                        <input style="width:60%;" id="filter_departement" class="easyui-combobox">
                    </div>
                    <div class="fitem">
                        <span style="width:30%; display:inline-block;">Departement Sub</span>
                        <input style="width:60%;" id="filter_departement_sub" class="easyui-combobox">
                    </div>
                    <div class="fitem">
                        <span style="width:30%; display:inline-block;"></span>
                        <a href="javascript:;" class="easyui-linkbutton" onclick="filter()"><i class="fa fa-search"></i> Filter Data</a>
                        <a href="javascript:;" class="easyui-linkbutton" onclick="formula()"><i class="fa fa-percent"></i> Formula</a>
                    </div>
                </div>
                <div style="width: 50%; float: left;">
                    <div class="fitem">
                        <span style="width:30%; display:inline-block;">Employee</span>
                        <input style="width:60%;" id="filter_employee" class="easyui-combogrid">
                    </div>
                    <div class="fitem">
                        <span style="width:30%; display:inline-block;">Employee Type</span>
                        <input style="width:60%;" id="filter_employee_type" name="filter_employee_type" class="easyui-combobox">
                    </div>
                    <div class="fitem">
                        <span style="width:30%; display:inline-block;">Group</span>
                        <input style="width:60%;" id="filter_group" name="filter_group" class="easyui-combobox">
                    </div>
                    <div class="fitem">
                        <span style="width:30%; display:inline-block;">Status</span>
                        <select style="width:30%;" id="filter_status" class="easyui-combobox" data-options="panelHeight:'auto'">
                            <option value="">Choose All</option>
                            <option value="0">Active</option>
                            <option value="1">Resign</option>
                        </select>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>

    <?= $button ?>
</div>

<div id="dlg_generate" class="easyui-dialog" title="Generating Data" data-options="closed: true,modal:true,closable: false" style="width: 500px; padding:10px; top: 20px;">
    <div class="alert alert-warning" role="alert">
        Please wait until the generate process is complete
    </div>
    <div id="p_upload" class="easyui-progressbar" style="width:460px; margin-top: 10px;"></div>
    <center><b id="p_start">0</b> Of <b id="p_finish">0</b></center>
    <div id="p_remarks" class="easyui-panel" style="width:460px; height:200px; padding:10px; margin-top: 10px;">
        <p>History Generate</p>
        <ul id="remarks">

        </ul>
    </div>
</div>

<!-- PDF -->
<iframe id="printout" src="<?= base_url('payroll/payrolls/print') ?>" style="width: 100%;" hidden></iframe>

<script>
    function formula(){
        Swal.fire({
            width: 600,
            html: `<div style="text-align:left;"><center><b style="font-size:16px !important;">Perhitungan Payroll</b><hr></center>
                <b>Ketentuan Allowence</b>
                <ul>
                    <li>Jika Calculate Daily (YES) dan Type (TEMPORARY) Maka (Amount * Working Day)</li>
                    <li>Jika Calculate Daily (NO) Maka (Amount)</li>
                </ul>
                <b>Ketentuan BPJS Employee</b>
                <ul>
                    <li>Jika BPJS TK dan JKN tidak di isi maka tidak ada perhitungan</li>
                    <li>Jika JKN di isi dan Setup Salary (bpjs) = 0 maka (Salary + Allowence x BPJS (% Employee) x Employee List (JKN Family))</li>
                    <li>Jika JKN di isi dan Setup Salary (bpjs) > 0 maka (Salary (bpjs) x BPJS (% Employee) x Employee List (JKN Family))</li>
                    <li>Jika BPJS TK di isi maka (Salary + Allowence x BPJS (% Employee))</li>
                </ul>
                <b>Ketentuan BPJS Company</b>
                <ul>
                    <li>Jika BPJS TK dan JKN tidak di isi maka tidak ada perhitungan</li>
                    <li>Jika JKN di isi dan Setup Salary (bpjs) = 0 maka (Salary + Allowence x BPJS (% Company) x Employee List (JKN Family))</li>
                    <li>Jika JKN di isi dan Setup Salary (bpjs) > 0 maka (Salary (bpjs) x BPJS (% Company))</li>
                    <li>Jika BPJS TK di isi maka (Salary + Allowence x BPJS (% Company))</li>
                </ul>
                <b>Ketentuan Potongan Permit (Deduction)</b>
                <ul>
                    <li>Jika Group (Magang) maka (Salary / HKW) x Total Permit</li>
                    <li>Jika Group (Karyawan) maka (Salary + Allowence / HKW) * Total Permit</li>
                </ul>
                <b>Ketentuan Potongan Absensi</b>
                <ul>
                    <li>Jika Group (Magang) maka (Salary / HKW) x Total tidak masuk kerja</li>
                    <li>Jika Group (Karyawan) maka (Salary + Allowence / HKW) x Total tidak masuk kerja</li>
                </ul>
                <b>Rumus Bruto Income</b>
                <ul>
                    <li>Salary + Allowence + BPJS (Company) + Correction Plus</li>
                </ul>
                <b>Rumus Income</b>
                <ul>
                    <li>Bruto Income - Deduction - BPJS (Company)</li>
                </ul>
                <b>Rumus TER</b>
                <ul>
                    <li>Bruto Income x (% Range TER Category pada Bruto Income)</li>
                </ul>
                <b>Rumus Net Income</b>
                <ul>
                    <li>Income - TER - Deduction - Loan - BPJS (Employee)</li>
                </ul>`,
            showClass: {
                popup: `animate__animated animate__fadeInUp animate__faster`
            },
            hideClass: {
                popup: `animate__animated animate__fadeOutDown animate__faster`
            }
        });
    }
    
    function add() {
        var filter_from = $("#filter_from").combogrid('getValue');
        var filter_to = $("#filter_to").textbox('getValue');
        var filter_division = $("#filter_division").combobox('getValue');
        var filter_departement = $("#filter_departement").combobox('getValue');
        var filter_departement_sub = $("#filter_departement_sub").combobox('getValue');
        var filter_employee = $("#filter_employee").combogrid('getValue');
        var filter_employee_type = $("#filter_employee_type").combobox('getValue');
        var filter_group = $("#filter_group").combobox('getValue');

        if (filter_from == "" || filter_to == "") {
            toastr.warning("Please Enter Cut Off Period", "Filter Date");
        } else {
            $.ajax({
                url: "<?= base_url('payroll/payrolls/read') ?>",
                type: 'get',
                data: 'filter_from=' + filter_from,
                success: function(message) {
                    var message_read = eval('(' + message + ')');

                    if (message_read['status'] != "1") {
                        if (message_read['generate'] == "EXIST") {
                            $.messager.confirm('Warning', 'Are you sure you want to repeat generate data?', function(r) {
                                if (r) {
                                    $.ajax({
                                        method: 'post',
                                        url: '<?= base_url('payroll/payrolls/delete') ?>',
                                        data: {
                                            filter_from: filter_from,
                                            filter_to: filter_to,
                                            filter_division: filter_division,
                                            filter_departement: filter_departement,
                                            filter_departement_sub: filter_departement_sub,
                                            filter_employee: filter_employee,
                                            filter_employee_type: filter_employee_type,
                                            filter_group: filter_group
                                        },
                                        success: function(deleted) {
                                            Swal.fire({
                                                title: 'Please Wait for Generating Data',
                                                showConfirmButton: false,
                                                allowOutsideClick: false,
                                                allowEscapeKey: false,
                                                didOpen: () => {
                                                    Swal.showLoading();
                                                },
                                            });

                                            var url = "filter_division=" + filter_division +
                                                "&filter_departement=" + filter_departement +
                                                "&filter_departement_sub=" + filter_departement_sub +
                                                '&filter_from=' + filter_from +
                                                '&filter_to=' + filter_to +
                                                '&filter_employee_type=' + filter_employee_type +
                                                '&filter_group=' + filter_group +
                                                '&filter_employee=' + filter_employee;
                                            $.ajax({
                                                url: "<?= base_url('payroll/payrolls/generatePayroll') ?>",
                                                type: 'get',
                                                data: url,
                                                success: function(result) {
                                                    $('#dlg_generate').dialog('open');
                                                    Swal.close();
                                                    var json = eval('(' + result + ')');
                                                    requestData(json.total, json);

                                                    function requestData(total, json, number = 1, value = 0) {
                                                        if (value < 100) {
                                                            value = Math.floor((number / total) * 100);
                                                            $('#p_upload').progressbar('setValue', value);
                                                            $('#p_start').html(number);
                                                            $('#p_finish').html(total);

                                                            $.ajax({
                                                                url: "<?= base_url('payroll/payrolls/create') ?>?" + url,
                                                                type: 'post',
                                                                data: json['rows'][number - 1],
                                                                success: function(note) {
                                                                    var result = eval('(' + note + ')');
                                                                    if (result.theme == "success") {
                                                                        var title = "<b style='color: green;'>" + result.title + "</b> | " + result.message;
                                                                    } else {
                                                                        var title = "<b style='color: red;'>" + result.title + "</b> | " + result.message;
                                                                    }
                                                                    $("#p_remarks").append(title + "<br>");
                                                                    requestData(total, json, number + 1, value);

                                                                    if (number == total) {
                                                                        $('#dlg_generate').dialog('close');
                                                                        Swal.fire(
                                                                            'Generate Completed',
                                                                            'Generate payroll has been completed, please check the generated payroll data, if an error occurs, please generate it again before the data is approved',
                                                                            'success'
                                                                        );
                                                                    }
                                                                },
                                                                fail: function(jqXHR, textStatus) {
                                                                    if (textStatus == "error") {
                                                                        Swal.fire({
                                                                            title: 'Connection Time Out, Check Your Connection',
                                                                            showConfirmButton: false,
                                                                            allowOutsideClick: false,
                                                                            allowEscapeKey: false,
                                                                            didOpen: () => {
                                                                                Swal.showLoading();
                                                                            },
                                                                        });

                                                                        setTimeout(function() {
                                                                            requestData(total, json, number, value);
                                                                        }, 5000);
                                                                    }
                                                                }
                                                            });
                                                        }
                                                    }
                                                }
                                            });
                                        },
                                    });
                                }
                            });
                        } else {
                            Swal.fire({
                                title: 'Please Wait for Generating Data',
                                showConfirmButton: false,
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                didOpen: () => {
                                    Swal.showLoading();
                                },
                            });

                            var url = "filter_division=" + filter_division +
                                "&filter_departement=" + filter_departement +
                                "&filter_departement_sub=" + filter_departement_sub +
                                '&filter_from=' + filter_from +
                                '&filter_to=' + filter_to +
                                '&filter_employee_type=' + filter_employee_type +
                                '&filter_group=' + filter_group +
                                '&filter_employee=' + filter_employee;
                            $.ajax({
                                url: "<?= base_url('payroll/payrolls/generatePayroll') ?>",
                                type: 'get',
                                data: url,
                                success: function(result) {
                                    $('#dlg_generate').dialog('open');
                                    Swal.close();
                                    var json = eval('(' + result + ')');
                                    requestData(json.total, json);

                                    function requestData(total, json, number = 1, value = 0) {
                                        if (value < 100) {
                                            value = Math.floor((number / total) * 100);
                                            $('#p_upload').progressbar('setValue', value);
                                            $('#p_start').html(number);
                                            $('#p_finish').html(total);

                                            $.ajax({
                                                url: "<?= base_url('payroll/payrolls/create') ?>?" + url,
                                                type: 'post',
                                                data: json['rows'][number - 1],
                                                success: function(note) {
                                                    var result = eval('(' + note + ')');
                                                    if (result.theme == "success") {
                                                        var title = "<b style='color: green;'>" + result.title + "</b> | " + result.message;
                                                    } else {
                                                        var title = "<b style='color: red;'>" + result.title + "</b> | " + result.message;
                                                    }
                                                    $("#p_remarks").append(title + "<br>");
                                                    requestData(total, json, number + 1, value);

                                                    if (number == total) {
                                                        $('#dlg_generate').dialog('close');
                                                        Swal.fire(
                                                            'Generate Completed',
                                                            'Generate payroll has been completed, please check the generated payroll data, if an error occurs, please generate it again before the data is approved',
                                                            'success'
                                                        );
                                                    }
                                                },
                                                fail: function(jqXHR, textStatus) {
                                                    if (textStatus == "error") {
                                                        Swal.fire({
                                                            title: 'Connection Time Out, Check Your Connection',
                                                            showConfirmButton: false,
                                                            allowOutsideClick: false,
                                                            allowEscapeKey: false,
                                                            didOpen: () => {
                                                                Swal.showLoading();
                                                            },
                                                        });

                                                        setTimeout(function() {
                                                            requestData(total, json, number, value);
                                                        }, 5000);
                                                    }
                                                }
                                            });
                                        }
                                    }
                                }
                            });
                        }
                    } else {
                        Swal.fire(
                            'Cannot Generate!',
                            'the payroll data that you entered has been approved, please contact the relevant admin if you want to repeat generate payroll again',
                            'warning'
                        );
                    }
                }
            });
        }
    }

    function filter() {
        var filter_from = $("#filter_from").combogrid('getValue');
        var filter_to = $("#filter_to").textbox('getValue');
        var filter_division = $("#filter_division").combobox('getValue');
        var filter_departement = $("#filter_departement").combobox('getValue');
        var filter_departement_sub = $("#filter_departement_sub").combobox('getValue');
        var filter_employee = $("#filter_employee").combogrid('getValue');
        var filter_employee_type = $("#filter_employee_type").combobox('getValue');
        var filter_group = $("#filter_group").combobox('getValue');
        var filter_status = $("#filter_status").combobox('getValue');

        var url = "?filter_from=" + filter_from +
            "&filter_to=" + filter_to +
            "&filter_division=" + filter_division +
            "&filter_departement=" + filter_departement +
            "&filter_departement_sub=" + filter_departement_sub +
            "&filter_employee=" + filter_employee +
            "&filter_employee_type=" + filter_employee_type +
            "&filter_status=" + filter_status +
            "&filter_group=" + filter_group;

        if (filter_from == "" || filter_to == "") {
            toastr.warning("Please Enter Cut Off Period");
        } else {

            $('#dg').datagrid({
                url: '<?= base_url('payroll/payrolls/datatables') ?>' + url
            });

            $("#printout").contents().find('html').html("<center><br><br><br><b style='font-size:20px;'>Please Wait...</b></center>");
            $("#printout").attr('src', '<?= base_url('payroll/payrolls/print') ?>' + url);
        }
    }

    //PRINT PDF
    function pdf() {
        $("#printout").get(0).contentWindow.print();
    }
    //PRINT EXCEL
    function excel() {
        var filter_from = $("#filter_from").combogrid('getValue');
        var filter_to = $("#filter_to").textbox('getValue');
        var filter_division = $("#filter_division").combobox('getValue');
        var filter_departement = $("#filter_departement").combobox('getValue');
        var filter_departement_sub = $("#filter_departement_sub").combobox('getValue');
        var filter_employee = $("#filter_employee").combogrid('getValue');
        var filter_employee_type = $("#filter_employee_type").combobox('getValue');
        var filter_group = $("#filter_group").combobox('getValue');
        var filter_status = $("#filter_status").combobox('getValue');

        var url = "?filter_from=" + filter_from +
            "&filter_to=" + filter_to +
            "&filter_division=" + filter_division +
            "&filter_departement=" + filter_departement +
            "&filter_departement_sub=" + filter_departement_sub +
            "&filter_employee=" + filter_employee +
            "&filter_employee_type=" + filter_employee_type +
            "&filter_status=" + filter_status +
            "&filter_group=" + filter_group;

        if (filter_from == "" || filter_to == "") {
            toastr.warning("Please Enter Cut Off Period");
        } else {
            window.location.assign('<?= base_url('payroll/payrolls/print/excel') ?>' + url);
        }
    }
    //RELOAD
    function reload() {
        window.location.reload();
    }

    $(function() {
        $("#add").html("Generate Payroll");
        $('#dg').datagrid({
            // url: '<?= base_url('payroll/payrolls/datatables') ?>',
            pagination: true,
            rownumbers: true,
            fit: true,
            pageList: [20, 50, 100, 500, 1000],
            pageSize: 20,
        });

        //Filter Cutoff
        $('#filter_from').combogrid({
            url: '<?= base_url('payroll/cutoff/reads') ?>',
            panelWidth: 300,
            idField: 'start',
            textField: 'start',
            mode: 'remote',
            fitColumns: true,
            prompt: 'Date From',
            columns: [
                [{
                    field: 'start',
                    title: 'Date From',
                    width: 120
                }, {
                    field: 'finish',
                    title: 'Date To',
                    width: 120
                }]
            ],
            onSelect: function(val, row) {
                $("#filter_to").textbox('setValue', row.finish);
            }
        });

        //Get Departement
        $('#filter_division').combobox({
            url: '<?php echo base_url('employee/divisions/reads'); ?>',
            valueField: 'id',
            textField: 'name',
            prompt: 'Choose All',
            icons: [{
                iconCls: 'icon-clear',
                handler: function(e) {
                    $(e.data.target).combobox('clear').combobox('textbox').focus();
                }
            }],
            onSelect: function(division) {
                $('#filter_departement').combobox({
                    url: '<?php echo base_url('employee/departements/reads'); ?>?division_id=' + division.id,
                    valueField: 'id',
                    textField: 'name',
                    prompt: 'Choose All',
                    icons: [{
                        iconCls: 'icon-clear',
                        handler: function(e) {
                            $(e.data.target).combobox('clear').combobox('textbox').focus();
                        }
                    }],
                    onSelect: function(departement) {
                        $('#filter_departement_sub').combobox({
                            url: '<?php echo base_url('employee/departement_subs/reads'); ?>?division_id=' + division.id + '&departement_id=' + departement.id,
                            valueField: 'id',
                            textField: 'name',
                            prompt: 'Choose All',
                            icons: [{
                                iconCls: 'icon-clear',
                                handler: function(e) {
                                    $(e.data.target).combobox('clear').combobox('textbox').focus();
                                }
                            }],
                            onSelect: function(departement_sub) {
                                $('#filter_employee').combogrid({
                                    url: '<?= base_url('employee/employees/reads?departement_sub_id=') ?>' + departement_sub.id,
                                    panelWidth: 450,
                                    idField: 'id',
                                    textField: 'name',
                                    mode: 'remote',
                                    fitColumns: true,
                                    prompt: 'Choose All',
                                    icons: [{
                                        iconCls: 'icon-clear',
                                        handler: function(e) {
                                            $(e.data.target).combogrid('clear').combogrid('textbox').focus();
                                        }
                                    }],
                                    columns: [
                                        [{
                                            field: 'number',
                                            title: 'Employee ID',
                                            width: 120
                                        }, {
                                            field: 'name',
                                            title: 'Employee Name',
                                            width: 200
                                        }]
                                    ],
                                });
                            }
                        });
                    }
                });
            }
        });

        $('#filter_employee').combogrid({
            url: '<?= base_url('employee/employees/reads') ?>',
            panelWidth: 450,
            idField: 'id',
            textField: 'name',
            mode: 'remote',
            fitColumns: true,
            prompt: 'Choose All',
            icons: [{
                iconCls: 'icon-clear',
                handler: function(e) {
                    $(e.data.target).combogrid('clear').combogrid('textbox').focus();
                }
            }],
            columns: [
                [{
                    field: 'number',
                    title: 'Employee ID',
                    width: 120
                }, {
                    field: 'name',
                    title: 'Employee Name',
                    width: 200
                }]
            ],
        });

        $("#filter_employee_type").combobox({
            url: '<?= base_url('employee/contracts/reads') ?>',
            valueField: 'id',
            textField: 'name',
            prompt: "Choose All",
            icons: [{
                iconCls: 'icon-clear',
                handler: function(e) {
                    $(e.data.target).combobox('clear').combobox('textbox').focus();
                }
            }],
        });

        $("#filter_group").combobox({
            url: '<?= base_url('admin/privilege_groups/reads') ?>',
            valueField: 'id',
            textField: 'name',
            prompt: "Choose All",
            icons: [{
                iconCls: 'icon-clear',
                handler: function(e) {
                    $(e.data.target).combobox('clear').combobox('textbox').focus();
                }
            }],
        });
    });

    //Format Datepicker
    function myformatter(date) {
        var y = date.getFullYear();
        var m = date.getMonth() + 1;
        var d = date.getDate();
        return y + '-' + (m < 10 ? ('0' + m) : m) + '-' + (d < 10 ? ('0' + d) : d);
    }

    //Format Datepicker
    function myparser(s) {
        if (!s) return new Date();
        var ss = (s.split('-'));
        var y = parseInt(ss[0], 10);
        var m = parseInt(ss[1], 10);
        var d = parseInt(ss[2], 10);
        if (!isNaN(y) && !isNaN(m) && !isNaN(d)) {
            return new Date(y, m - 1, d);
        } else {
            return new Date();
        }
    }

    function numberformat(value, row) {
        const formatter = new Intl.NumberFormat('id-ID');

        return "<b>" + formatter.format(value) + "</b>";
    }

    // function numberformatDecimal(value, row) {
    //     var digits = 2;
    //     var currency = 'IDR';
    //     var format = "id-ID";

    //     if (value != null) {
    //         const formatter = new Intl.NumberFormat(format, {
    //             style: 'currency',
    //             currency: currency,
    //             minimumFractionDigits: digits
    //         });
    //         return "<b>" + formatter.format(value) + "</b>";
    //     }
    // }

    function statusResign(value, row){
        if(value == null){
            return "ACTIVE";
        }else{
            return "RESIGN";
        }
    }

    function styleStatusResign(value, row, index) {
        if(value == null){
            return 'background: #53D636; color:white;';
        }else{
            return 'background: #FFC41B; color:white;';
        }
    }
</script>