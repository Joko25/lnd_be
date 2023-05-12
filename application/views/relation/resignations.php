<!-- TABLE DATAGRID -->
<table id="dg" class="easyui-datagrid" style="width:99.5%;" toolbar="#toolbar">
    <thead>
        <tr>
            <th rowspan="2" field="ck" checkbox="true"></th>
            <th rowspan="2" data-options="field:'employee_number',width:150,halign:'center'">Employee ID</th>
            <th rowspan="2" data-options="field:'employee_name',width:200,halign:'center'">Employee Name</th>
            <th rowspan="2" data-options="field:'division_name',width:150,halign:'center'">Division</th>
            <th rowspan="2" data-options="field:'departement_name',width:150,halign:'center'">Departement</th>
            <th rowspan="2" data-options="field:'departement_sub_name',width:150,halign:'center'">Departement Name</th>
            <th rowspan="2" data-options="field:'resign_type',width:100,align:'center'">Resign Type</th>
            <th rowspan="2" data-options="field:'date_sign',width:120,align:'center'">Join Date</th>
            <th rowspan="2" data-options="field:'request_date',width:100,align:'center'">Request Date</th>
            <th rowspan="2" data-options="field:'resign_date',width:100,align:'center'">Resign Date</th>
            <th rowspan="2" data-options="field:'status_resign',width:100,align:'center'">Status</th>
            <th rowspan="2" data-options="field:'service',width:200,halign:'center'">Fit For Service</th>
            <th rowspan="2" data-options="field:'reason_name',width:150,halign:'center'">Reason</th>
            <th rowspan="2" data-options="field:'remarks',width:200,halign:'center'">Remarks</th>
            <th colspan="3" data-options="field:'',width:100,halign:'center'"> Approval</th>
            <th colspan="2" data-options="field:'',width:100,halign:'center'"> Created</th>
            <th colspan="2" data-options="field:'',width:100,halign:'center'"> Updated</th>
        </tr>
        <tr>
            <th data-options="field:'status_notification',width:100,align:'center',styler:statusStyler, formatter:statusFormatter"> Status</th>
            <th data-options="field:'status_check',width:120,align:'center'"> By</th>
            <th data-options="field:'status_date',width:150,align:'center'"> Date</th>
            <th data-options="field:'created_by',width:100,align:'center'"> By</th>
            <th data-options="field:'created_date',width:150,align:'center'"> Date</th>
            <th data-options="field:'updated_by',width:100,align:'center'"> By</th>
            <th data-options="field:'updated_date',width:150,align:'center'"> Date</th>
        </tr>
    </thead>
</table>

<!-- TOOLBAR DATAGRID -->
<div id="toolbar" style="height: 260px;">
    <fieldset style="width: 100%; border:2px solid #d0d0d0; margin-bottom: 5px; margin-top: 5px; border-radius:4px;">
        <legend><b>Form Filter Data</b></legend>
        <div style="width: 50%; float: left;">
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Trans Date</span>
                <input style="width:30%;" name="filter_from" id="filter_from" value="<?= date("Y-m-01") ?>" data-options="formatter:myformatter,parser:myparser, editable: false" class="easyui-datebox">
                <input style="width:30%;" name="filter_to" id="filter_to" value="<?= date("Y-m-t") ?>" data-options="formatter:myformatter,parser:myparser, editable: false" class="easyui-datebox">
            </div>
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
                <span style="width:35%; display:inline-block;"></span>
                <a href="javascript:;" class="easyui-linkbutton" onclick="filter()"><i class="fa fa-search"></i> Filter Data</a>
            </div>
        </div>
        <div style="width: 50%; float: left;">
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Employee</span>
                <input style="width:60%;" id="filter_employee" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Resign Type</span>
                <select style="width:60%;" id="filter_resign_type" class="easyui-combobox" panelHeight="auto">
                    <option value="">Choose All</option>
                    <option value="RESIGN">RESIGN</option>
                    <option value="TERMINATION">TERMINATION</option>
                </select>
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Reason</span>
                <input style="width:60%;" id="filter_reason" class="easyui-combobox">
            </div>
        </div>
    </fieldset>
    <?= $button ?>
</div>
 
<!-- DIALOG SAVE AND UPDATE -->
<div id="dlg_insert" class="easyui-dialog" title="Add New" data-options="closed: true,modal:true" style="width: 400px; padding:10px; top: 20px;">
    <form id="frm_insert" method="post" novalidate>
        <fieldset style="width:100%; border:1px solid #d0d0d0; margin-bottom: 10px; border-radius:4px; float: left;">
            <legend><b>Form Data</b></legend>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Trans Date</span>
                <input style="width:60%;" name="trans_date" id="trans_date" readonly data-options="formatter:myformatter,parser:myparser, editable: false" class="easyui-datebox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Resign Type</span>
                <input style="width:60%;" name="resign_type" id="resign_type" required="" panelHeight="auto" class="easyui-combobox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Request Date</span>
                <input style="width:60%;" name="request_date" id="request_date" required="" data-options="formatter:myformatter,parser:myparser, editable: false" class="easyui-datebox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Resign Date</span>
                <input style="width:60%;" name="resign_date" id="resign_date" required="" data-options="formatter:myformatter,parser:myparser, editable: false" class="easyui-datebox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Employee Name</span>
                <input style="width:60%;" name="employee_id" id="employee_id" class="easyui-combogrid" required="">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Reason</span>
                <input style="width:60%;" name="reason_resignation_id" id="reason_resignation_id" required="" class="easyui-combobox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Remarks</span>
                <input style="width:60%; height: 50px;" name="remarks" class="easyui-textbox" multiline="true">
            </div>
            <div>
                <span style="width:35%; display:inline-block;">Status</span>
                <input style="width:60%;" name="status_resign" id="status_resign" readonly class="easyui-textbox">
            </div>
        </fieldset>
    </form>
</div>

<!-- PDF -->
<iframe id="printout" src="<?= base_url('relation/resignations/print') ?>" style="width: 100%;" hidden></iframe>

<script>
    //ADD DATA
    function add() {
        $('#dlg_insert').dialog('open');
        url_save = '<?= base_url('relation/resignations/create') ?>';
        $('#frm_insert').form('clear');
        $('#trans_date').datebox('setValue', "<?= date("Y-m-d") ?>");
        $('#employee_id').combogrid('enable');
        $('#resign_type').combogrid('enable');
    }

    //EDIT DATA
    function update() {
        var row = $('#dg').datagrid('getSelected');
        if (row) {
            $('#dlg_insert').dialog('open');
            $('#frm_insert').form('load', row);
            $('#frm_insert').form('load', row);
            url_save = '<?= base_url('relation/resignations/update') ?>?id=' + btoa(row.id);

            $('#employee_id').combogrid('disable');
            $('#resign_type').combogrid('disable');
        } else {
            toastr.warning("Please select one of the data in the table first!", "Information");
        }
    }

    //DELETE DATA
    function deleted() {
        var rows = $('#dg').datagrid('getSelections');
        if (rows.length > 0) {
            $.messager.confirm('Warning', 'Are you sure you want to delete this data?', function(r) {
                if (r) {
                    for (var i = 0; i < rows.length; i++) {
                        var row = rows[i];
                        $.ajax({
                            method: 'post',
                            url: '<?= base_url('relation/resignations/delete') ?>',
                            data: {
                                id: row.id,
                                employee_id: row.employee_id
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
            });
        } else {
            toastr.warning("Please select one of the data in the table first!", "Information");
        }
    }

    function filter() {
        var filter_from = $("#filter_from").datebox('getValue');
        var filter_to = $("#filter_to").datebox('getValue');
        var filter_division = $("#filter_division").combobox('getValue');
        var filter_departement = $("#filter_departement").combobox('getValue');
        var filter_departement_sub = $("#filter_departement_sub").combobox('getValue');
        var filter_employee = $("#filter_employee").combogrid('getValue');
        var filter_resign_type = $("#filter_resign_type").combobox('getValue');
        var filter_reason = $("#filter_reason").combobox('getValue');

        var url = "?filter_from=" + filter_from + "&filter_to=" + filter_to + "&filter_division=" + filter_division + "&filter_departement=" + filter_departement + 
        "&filter_departement_sub=" + filter_departement_sub + "&filter_employee=" + filter_employee + 
        "&filter_resign_type=" + filter_resign_type + "&filter_reason=" + filter_reason;

        $('#dg').datagrid({
            url: '<?= base_url('relation/resignations/datatables') ?>' + url
        });

        $("#printout").contents().find('html').html("<center><br><br><br><b style='font-size:20px;'>Please Wait...</b></center>");
        $("#printout").attr('src', '<?= base_url('relation/resignations/print') ?>' + url);
    }

    //PRINT PDF
    function pdf() {
        $("#printout").get(0).contentWindow.print();
    }
    //PRINT EXCEL
    function excel() {
        var filter_from = $("#filter_from").datebox('getValue');
        var filter_to = $("#filter_to").datebox('getValue');
        var filter_division = $("#filter_division").combobox('getValue');
        var filter_departement = $("#filter_departement").combobox('getValue');
        var filter_departement_sub = $("#filter_departement_sub").combobox('getValue');
        var filter_employee = $("#filter_employee").combogrid('getValue');
        var filter_resign_type = $("#filter_resign_type").combobox('getValue');
        var filter_reason = $("#filter_reason").combobox('getValue');

        var url = "?filter_from=" + filter_from + "&filter_to=" + filter_to + "&filter_division=" + filter_division + "&filter_departement=" + filter_departement + 
        "&filter_departement_sub=" + filter_departement_sub + "&filter_employee=" + filter_employee + 
        "&filter_resign_type=" + filter_resign_type + "&filter_reason=" + filter_reason;

        window.location.assign('<?= base_url('relation/resignations/print/excel') ?>' + url);
    }
    //RELOAD
    function reload() {
        window.location.reload();
    }

    $(function() {
        //SETTING DATAGRID EASYUI
        $('#dg').datagrid({
            url: '<?= base_url('relation/resignations/datatables') ?>',
            pagination: true,
            rownumbers: true
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

        $('#resign_type').combobox({
            prompt: 'Choose Resign Type',
            valueField: 'text',
            textField: 'text',
            data: [{
                text: 'RESIGN'
            },{
                text: 'TERMINATION'
            }],
            onSelect: function(row, val){
                if(row.text == "RESIGN"){
                    var url_employee = '<?= base_url('employee/employees/reads') ?>';
                }else{
                    var url_employee = '<?= base_url('relation/warning_letters/readTermination') ?>';
                }

                $('#employee_id').combogrid({
                    url: url_employee,
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
                });
            }
        });

        $('#reason_resignation_id').combobox({
            url: '<?php echo base_url('relation/reasons/reads'); ?>',
            valueField: 'id',
            textField: 'name',
            prompt: 'Choose Reason',
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
                        });
                    }
                });
            }
        });

        $('#filter_reason').combobox({
            url: '<?php echo base_url('relation/reasons/reads'); ?>',
            valueField: 'id',
            textField: 'name',
            prompt: 'Choose All',
            icons: [{
                iconCls: 'icon-clear',
                handler: function(e) {
                    $(e.data.target).combobox('clear').combobox('textbox').focus();
                }
            }],
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

        $("#request_date").datebox({
            onSelect: function(date){
                var request_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate();
                var resign_date = $("#resign_date").datebox('getValue');

                if(resign_date == ""){
                    toastr.info("Please Select Resign Date");
                }else{
                    var endDate = daysBetween(request_date, resign_date);
                    if(endDate > 0){
                        if(endDate >= 30){
                            $("#status_resign").textbox('setValue', 'ON PROCEDURE');
                        }else{
                            $("#status_resign").textbox('setValue', 'UN PROCEDURE');
                        }
                    }else{
                        toastr.warning("Request Date < Resign Date");
                    }
                }
            }
        });

        $("#resign_date").datebox({
            onSelect: function(date2){
                var request_date = $("#request_date").datebox('getValue');
                var resign_date = date2.getFullYear()+"-"+(date2.getMonth()+1)+"-"+date2.getDate();

                if(request_date == ""){
                    toastr.info("Please Select Request Date");
                }else{
                    var endDate = daysBetween(request_date, resign_date);
                    if(endDate > 0){
                        if(endDate >= 30){
                            $("#status_resign").textbox('setValue', 'ON PROCEDURE');
                        }else{
                            $("#status_resign").textbox('setValue', 'UN PROCEDURE');
                        }
                    }else{
                        toastr.warning("Request Date < Resign Date");
                    }
                }
            }
        });
    });

    function daysBetween(first, second) {
        var one = new Date(second);
        var two = new Date(first);

        var Difference_In_Time = one.getTime() - two.getTime();
	    var Difference_In_Days = (Difference_In_Time / (1000 * 60 * 60 * 24) + 2);

        // Round down.
        return Math.floor(Difference_In_Days);
    }

    //CELLSTYLE STATUS
    function statusStyler(value, row, index) {
        if (value == "" || value == null) {
            return 'background: #53D636; color:white;';
        } else {
            return 'background: #FF5F5F; color:white;';
        }
    }
    //FORMATTER STATUS
    function statusFormatter(value) {
        if (value == "" || value == null) {
            return 'Approved';
        } else {
            return 'Checked';
        }
    };

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
</script>