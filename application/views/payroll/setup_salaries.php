<!-- TABLE DATAGRID -->
<table id="dg" class="easyui-datagrid" style="width:100%;" toolbar="#toolbar">
    <thead>
        <tr>
            <th rowspan="2" field="ck" checkbox="true"></th>
            <th rowspan="2" data-options="field:'employee_number',width:120,halign:'center'">Employee ID</th>
            <th rowspan="2" data-options="field:'employee_name',width:200,halign:'center'">Employee Name</th>
            <th rowspan="2" data-options="field:'division_name',width:200,halign:'center'">Division</th>
            <th rowspan="2" data-options="field:'departement_name',width:200,halign:'center'">Departement</th>
            <th rowspan="2" data-options="field:'departement_sub_name',width:200,halign:'center'">Departement Sub</th>
            <th rowspan="2" data-options="field:'component_salary_name',width:200,halign:'center', 
            editor:{
                type:'combobox',
                options:{
                    valueField:'name',
                    textField:'name',
                    url:'<?= base_url('payroll/components/reads') ?>',
                    required:true
                }
            }">Component Salary</th>
            <th rowspan="2" data-options="field:'amount',width:150,halign:'center', align:'right',editor:'numberbox', formatter:numberformat">Salary</th>
            <th rowspan="2" data-options="field:'bpjs',width:150,halign:'center', align:'right',editor:'numberbox', formatter:numberformat">Salary BPJS</th>
            <!-- <th colspan="2" data-options="field:'',width:150,halign:'center'"> Salary</th>
            <th rowspan="2" data-options="field:'other',width:150,halign:'center', align:'right', formatter:numberformat">Other (25%)</th>
            <th colspan="2" data-options="field:'',width:100,halign:'center'"> Allowance</th> -->
            <th rowspan="2" data-options="field:'description',width:300,halign:'center'">Description</th>
            <th colspan="2" data-options="field:'',width:100,halign:'center'"> Created</th>
            <th colspan="2" data-options="field:'',width:100,halign:'center'"> Updated</th>
        </tr>
        <tr>
            <!-- <th data-options="field:'basic',width:150,halign:'center', align:'right', formatter:numberformat"> Basic (75%)</th>
            <th data-options="field:'allowance_fix',width:150,halign:'center', align:'right', formatter:numberformat"> Fix Allowance (25%)</th>
            <th data-options="field:'position',width:150,halign:'center', align:'right', formatter:numberformat"> Position (40%)</th>
            <th data-options="field:'skill',width:150,halign:'center', align:'right', formatter:numberformat"> Skill (60%)</th> -->
            <th data-options="field:'created_date',width:150,align:'center'"> Date</th>
            <th data-options="field:'created_by',width:100,align:'center'"> By</th>
            <th data-options="field:'created_date',width:150,align:'center'"> Date</th>
            <th data-options="field:'updated_by',width:100,align:'center'"> By</th>
            <th data-options="field:'updated_date',width:150,align:'center'"> Date</th>
        </tr>
    </thead>
</table>

<!-- TOOLBAR DATAGRID -->
<div id="toolbar">
    <div class="easyui-accordion" style="width:100%; margin-bottom:5px;">
        <div title="Click this to hide the filter" data-options="onCollapse: function(){ $('#dg').datagrid('reload'); }" style="padding:10px; background:#F4F4F4;">
            <fieldset style="width: 100%; border:2px solid #d0d0d0; border-radius:4px;">
                <legend><b>Form Filter Data</b></legend>
                <div style="width: 50%; float: left;">
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;">Division</span>
                        <input style="width:60%;" id="filter_division" class="easyui-combobox">
                    </div>
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;">Departement</span>
                        <input style="width:60%;" id="filter_departement" class="easyui-combobox">
                    </div>
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;">Departement Sub</span>
                        <input style="width:60%;" id="filter_departement_sub" class="easyui-combobox">
                    </div>
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;">Employee</span>
                        <input style="width:60%;" id="filter_employee" class="easyui-combogrid">
                    </div>
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;"></span>
                        <a href="javascript:;" class="easyui-linkbutton" onclick="filter()"><i class="fa fa-search"></i> Filter Data</a>
                    </div>
                </div>
                <div style="width: 50%; float: left;">
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;">Salary Component</span>
                        <input style="width:60%;" id="filter_component_salary" class="easyui-combobox">
                    </div>
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;">Position</span>
                        <input style="width:60%;" id="filter_position" class="easyui-combobox">
                    </div>
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;">Group</span>
                        <input style="width:60%;" id="filter_group" class="easyui-combobox">
                    </div>
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;">Status</span>
                        <select style="width:60%;" id="filter_status" class="easyui-combobox" panelHeight="auto">
                            <option value="">Choose All</option>
                            <option value="REGIST">REGISTERED</option>
                            <option value="UNREGIST">UNREGISTERED</option>
                        </select>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <?= $button ?>
    <!-- <a href="javascript:;" class="easyui-linkbutton" data-options="plain:true" onclick="unregistered()"><i class="fa fa-users"></i> Unregistered Salary</a> -->
</div>

<!-- DIALOG SAVE AND UPDATE -->
<div id="dlg_insert" class="easyui-dialog" title="Add New" data-options="closed: true,modal:true" style="width: 500px; padding:10px; top: 20px;">
    <form id="frm_insert" method="post" novalidate>
        <fieldset style="width:100%; border:1px solid #d0d0d0; margin-bottom: 10px; border-radius:4px; float: left;">
            <legend><b>Form Data</b></legend>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Employee</span>
                <input style="width:60%;" name="employee_id" id="employee_id" required="" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Component Salary</span>
                <input style="width:60%;" name="salary_component_id" id="salary_component_id" class="easyui-combobox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Amount</span>
                <input style="width:60%;" name="amount" id="amount" required="" data-options="buttonText:'Rp', buttonAlign:'left'" class="easyui-numberbox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">BPJS Fee</span>
                <input style="width:60%;" name="bpjs" id="bpjs" required="" data-options="buttonText:'Rp', buttonAlign:'left'" class="easyui-numberbox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Description</span>
                <input style="width:60%; height: 60px;" name="description" class="easyui-textbox" data-options="multiline:true">
            </div>
        </fieldset>
    </form>
</div>

<div id="dlg_upload" class="easyui-dialog" title="Upload Data" data-options="closed: true,modal:true" style="width: 500px; padding:10px; top: 20px;">
    <form id="frm_upload" method="post" enctype="multipart/form-data" novalidate>
        <fieldset style="width:100%; border:1px solid #d0d0d0; margin-bottom: 10px; border-radius:4px; float: left;">
            <legend><b>Form Data</b></legend>
            <div class="fitem">
                <span style="width:30%; display:inline-block;">File Upload</span>
                <input name="file_upload" style="width: 60%;" required="" accept=".xls" id="file_excel" class="easyui-filebox">
            </div>
        </fieldset>
    </form>
    <span style="float: left; color:green;">SUCCESS : <b id="p_success">0</b></span><span style="float: right; color:red;"> FAILED : <b id="p_failed">0</b></span>
    <div id="p_upload" class="easyui-progressbar" style="width:100%; margin-top: 10px;"></div>
    <center><b id="p_start">0</b> Of <b id="p_finish">0</b></center>
    <div id="p_remarks" title="History Upload" class="easyui-panel" style="width:100%; height:200px; padding:10px; margin-top: 10px;">
        <ul id="remarks">

        </ul>
    </div>
</div>

<!-- PDF -->
<iframe id="printout" src="<?= base_url('payroll/setup_salaries/print') ?>" style="width: 100%;" hidden></iframe>

<script>
    //ADD DATA
    function add() {
        $('#dlg_insert').dialog('open');
        url_save = '<?= base_url('payroll/setup_salaries/create') ?>';
        $('#frm_insert').form('clear');
        $('#employee_id').combogrid('enable');
    }

    //EDIT DATA
    function update() {
        var rows = $('#dg').datagrid('getChecked');
        if (rows.length == 1) {
            for (var i = 0; i < rows.length; i++) {
                var row = rows[i];
                $('#dlg_insert').dialog('open');
                $('#employee_id').combogrid('disable');
                $('#frm_insert').form('load', row);
                url_save = '<?= base_url('payroll/setup_salaries/update') ?>?id=' + btoa(row.id);
            }
        } else {
            toastr.warning("Please select one of the data in the table first!", "Information");
        }
    }

    //DELETE DATA
    function deleted() {
        var checked = $('#dg').datagrid('getChecked');
        var rows = $('#dg').datagrid('getRows');
        if (rows.length > 0) {
            $.messager.confirm('Warning', 'Are you sure you want to delete this data?', function(r) {
                if (r) {
                    for (var i = 0; i < rows.length; i++) {
                        var row = rows[i];
                        if ($.inArray(row, checked) >= 0) {
                            $.ajax({
                                method: 'post',
                                url: '<?= base_url('payroll/setup_salaries/delete') ?>',
                                data: {
                                    id: row.id
                                },
                                success: function(result) {
                                    var result = eval('(' + result + ')');
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    toastr.error(jqXHR.statusText);
                                    $.messager.alert("Error", jqXHR.statusText, 'error');
                                },
                                complete: function(data) {
                                    $('#dg').datagrid('reload');
                                }
                            });
                        }
                    }
                }
            });
        } else {
            toastr.warning("Please select one of the data in the table first!", "Information");
        }
    }

    //UPLOAD DATA
    function upload() {
        $('#dlg_upload').dialog('open');
    }

    function download_excel() {
        window.location.assign('<?= base_url('template/tmp_setup_salary.xls') ?>');
    }

    function filter() {
        var filter_division = $("#filter_division").combobox('getValue');
        var filter_departement = $("#filter_departement").combobox('getValue');
        var filter_departement_sub = $("#filter_departement_sub").combobox('getValue');
        var filter_employee = $("#filter_employee").combobox('getValue');
        var filter_component_salary = $("#filter_component_salary").combobox('getValue');
        var filter_position = $("#filter_position").combobox('getValue');
        var filter_group = $("#filter_group").combobox('getValue');
        var filter_status = $("#filter_status").combobox('getValue');

        var url = "?filter_division=" + filter_division +
            "&filter_departement=" + filter_departement +
            "&filter_departement_sub=" + filter_departement_sub +
            "&filter_employee=" + filter_employee +
            "&filter_component_salary=" + filter_component_salary +
            "&filter_position=" + filter_position +
            "&filter_group=" + filter_group +
            "&filter_status=" + filter_status;

        $('#dg').datagrid({
            url: '<?= base_url('payroll/setup_salaries/datatables') ?>' + url
        });

        $("#printout").contents().find('html').html("<center><br><br><br><b style='font-size:20px;'>Please Wait...</b></center>");
        $("#printout").attr('src', '<?= base_url('payroll/setup_salaries/print') ?>' + url);
    }

    //PRINT PDF
    function pdf() {
        $("#printout").get(0).contentWindow.print();
    }
    //PRINT EXCEL
    function excel() {
        var filter_division = $("#filter_division").combobox('getValue');
        var filter_departement = $("#filter_departement").combobox('getValue');
        var filter_departement_sub = $("#filter_departement_sub").combobox('getValue');
        var filter_employee = $("#filter_employee").combobox('getValue');
        var filter_component_salary = $("#filter_component_salary").combobox('getValue');
        var filter_position = $("#filter_position").combobox('getValue');
        var filter_group = $("#filter_group").combobox('getValue');
        var filter_status = $("#filter_status").combobox('getValue');

        var url = "?filter_division=" + filter_division +
            "&filter_departement=" + filter_departement +
            "&filter_departement_sub=" + filter_departement_sub +
            "&filter_employee=" + filter_employee +
            "&filter_component_salary=" + filter_component_salary +
            "&filter_position=" + filter_position +
            "&filter_group=" + filter_group +
            "&filter_status=" + filter_status;

        window.location.assign('<?= base_url('payroll/setup_salaries/print/excel') ?>' + url);
    }
    //RELOAD
    function reload() {
        window.location.reload();
    }

    $(function() {
        $('#dg').datagrid({
            url: '<?= base_url('payroll/setup_salaries/datatables') ?>',
            pagination: true,
            rownumbers: true,
            fit: true,
            pageList: [20, 50, 100, 500, 1000],
            pageSize: 20,
            onEndEdit: function(index, row) {
                var employee_id = row.employee_id;
                var salary_component_name = row.component_salary_name;
                var amount = row.amount;
                var bpjs = row.bpjs;

                $.ajax({
                    type: "post",
                    url: "<?= base_url('payroll/setup_salaries/createOrUpdate') ?>",
                    data: "employee_id=" + employee_id + "&salary_component_name=" + salary_component_name + "&amount=" + amount + "&bpjs=" + bpjs,
                    dataType: "json",
                    success: function(json) {
                        if (json.theme == "success") {
                            toastr.success(json.message, json.title);
                            $('#dg').datagrid('reload');
                        } else {
                            toastr.error(json.message, json.title);
                        }
                    }
                });

                $('#dg').datagrid('reload');
            },
            rowStyler: function(index, row) {
                if (row.amount == null) {
                    return 'background-color:#FFDCDC;';
                }
            }
        }).datagrid('enableCellEditing').datagrid('gotoCell', {
            index: 0,
            field: 'employee_number'
        });

        //SAVE DATA
        $('#dlg_insert').dialog({
            buttons: [{
                text: 'Save',
                iconCls: 'icon-ok',
                handler: function() {
                    $('#frm_insert').form('submit', {
                        url: url_save,
                        onSubmit: function() {
                            return $(this).form('validate');
                        },
                        success: function(result) {
                            var result = eval('(' + result + ')');

                            if (result.theme == "success") {
                                toastr.success(result.message, result.title);
                            } else {
                                toastr.error(result.message, result.title);
                            }

                            $('#dlg_insert').dialog('close');
                            $('#dg').datagrid('reload');
                        }
                    });
                }
            }]
        });

        //UPLOAD DATA
        $('#dlg_upload').dialog({
            buttons: [{
                text: 'List Failed',
                handler: function() {
                    window.open('<?= base_url('payroll/setup_salaries/uploadDownloadFailed') ?>', '_blank');
                }
            }, {
                text: 'Upload',
                iconCls: 'icon-ok',
                handler: function() {
                    $('#frm_upload').form('submit', {
                        url: '<?= base_url('payroll/setup_salaries/upload') ?>',
                        onSubmit: function() {
                            if ($(this).form('validate') == false) {
                                return $(this).form('validate');
                            } else {
                                $.messager.progress({
                                    title: 'Please Wait',
                                    msg: 'Importing Excel to Database'
                                });
                            }
                        },
                        success: function(result) {
                            $.messager.progress('close');

                            //Clear File
                            $.ajax({
                                url: "<?= base_url('payroll/setup_salaries/uploadclearFailed') ?>"
                            });

                            var json = eval('(' + result + ')');
                            requestData(json.total, json);

                            function requestData(total, json, number = 1, value = 0, success = 1, failed = 1) {
                                if (value < 100) {
                                    value = Math.floor((number / total) * 100);
                                    $('#p_upload').progressbar('setValue', value);
                                    $('#p_start').html(number);
                                    $('#p_finish').html(total);

                                    $.ajax({
                                        type: "POST",
                                        async: true,
                                        url: "<?= base_url('payroll/setup_salaries/uploadCreate') ?>",
                                        data: {
                                            "data": json[number - 1]
                                        },
                                        cache: false,
                                        dataType: "json",
                                        success: function(result) {
                                            if (result.theme == "success") {
                                                $('#p_success').html(success);
                                                var title = "<b style='color: green;'>" + result.title + "</b> | " + result.message;
                                                requestData(total, json, number + 1, value, success + 1, failed + 0);
                                            } else {
                                                $('#p_failed').html(failed);
                                                var title = "<b style='color: red;'>" + result.title + "</b> | " + result.message;

                                                //Json Failed
                                                $.ajax({
                                                    type: "POST",
                                                    async: true,
                                                    url: "<?= base_url('payroll/setup_salaries/uploadcreateFailed') ?>",
                                                    data: {
                                                        data: json[number - 1],
                                                        message: result.message
                                                    },
                                                    cache: false
                                                });

                                                requestData(total, json, number + 1, value, success + 0, failed + 1);
                                            }

                                            $("#p_remarks").append(title + "<br>");
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
                                                    requestData(total, json, number, value, success + 0, failed + 0);
                                                }, 5000);
                                            }
                                        }
                                    });
                                }
                            }
                        }
                    });
                }
            }]
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

        $('#filter_component_salary').combobox({
            url: '<?= base_url('payroll/components/reads') ?>',
            valueField: 'id',
            textField: 'name',
            prompt: "Choose All",
            icons: [{
                iconCls: 'icon-clear',
                handler: function(e) {
                    $(e.data.target).combobox('clear').combobox('textbox').focus();
                }
            }]
        });

        $('#filter_position').combobox({
            url: '<?= base_url('employee/positions/reads') ?>',
            valueField: 'id',
            textField: 'name',
            prompt: "Choose All",
            icons: [{
                iconCls: 'icon-clear',
                handler: function(e) {
                    $(e.data.target).combobox('clear').combobox('textbox').focus();
                }
            }]
        });

        $('#filter_group').combobox({
            url: '<?= base_url('admin/privilege_groups/reads') ?>',
            valueField: 'id',
            textField: 'name',
            prompt: "Choose All",
            icons: [{
                iconCls: 'icon-clear',
                handler: function(e) {
                    $(e.data.target).combobox('clear').combobox('textbox').focus();
                }
            }]
        });

        $('#employee_id').combogrid({
            url: '<?= base_url('employee/employees/reads') ?>',
            panelWidth: 450,
            idField: 'id',
            textField: 'name',
            mode: 'remote',
            fitColumns: true,
            prompt: 'Choose Employee',
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
            onSelect: function(emp) {
                $.ajax({
                    url: '<?= base_url('attandance/cash_carries/requestCode') ?>',
                    type: 'post',
                    data: 'departement_id=' + emp.departement_id,
                    success: function(requestCode) {
                        $("#request_code").textbox('setValue', requestCode);
                    }
                });
            }
        });

        $('#salary_component_id').combobox({
            url: '<?= base_url('payroll/components/reads') ?>',
            valueField: 'id',
            textField: 'name',
            prompt: "Optional",
            icons: [{
                iconCls: 'icon-clear',
                handler: function(e) {
                    $(e.data.target).combobox('clear').combobox('textbox').focus();
                }
            }],
            onSelect: function(salary) {
                $("#amount").numberbox('setValue', salary.salary);
            }
        });

    });

    function numberformat(value, row) {
        const formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        });

        return "<b>" + formatter.format(value) + "</b>";
    }
</script>