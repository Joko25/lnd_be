<!-- TABLE DATAGRID -->
<table id="dg" class="easyui-datagrid" style="width:99.5%;" toolbar="#toolbar">
    <thead>
        <tr>
            <th rowspan="2" field="ck" checkbox="true"></th>
            <th rowspan="2" data-options="field:'number',width:120,halign:'center'">Employee ID</th>
            <th rowspan="2" data-options="field:'employee_name',width:200">Employee Name</th>
            <th rowspan="2" data-options="field:'division_name',width:200,halign:'center'">Division</th>
            <th rowspan="2" data-options="field:'departement_name',width:150,halign:'center'">Departement</th>
            <th rowspan="2" data-options="field:'departement_sub_name',width:150,halign:'center'">Departement Sub</th>
            <th rowspan="2" data-options="field:'position_name',width:150,halign:'center'">Position</th>
            <th rowspan="2" data-options="field:'contract_name',width:150,halign:'center'">Employee Type</th>
            <th rowspan="2" data-options="field:'date_sign',width:100,halign:'center',formatter:FormatterDate">Join Date</th>
            <th rowspan="2" data-options="field:'date_expired',width:120,halign:'center',formatter:FormatterDate">Contract Expired</th>
            <th rowspan="2" data-options="field:'note',width:300,halign:'center'">Note</th>
            <th rowspan="2" data-options="field:'attachment',width:100,align:'center', formatter:fileFormatter">Attachment</th>
            <th rowspan="2" data-options="field:'approved',width:100,align:'center',styler:statusStyler, formatter:statusFormatter">Approval</th>
            <th rowspan="2" data-options="field:'approved_by',width:120,align:'center'">Approval By</th>
            <th colspan="2" data-options="field:'',width:100,halign:'center'"> Created</th>
            <th colspan="2" data-options="field:'',width:100,halign:'center'"> Updated</th>
        </tr>
        <tr>
            <th data-options="field:'created_by',width:100,align:'center'"> By</th>
            <th data-options="field:'created_date',width:150,align:'center'"> Date</th>
            <th data-options="field:'updated_by',width:100,align:'center'"> By</th>
            <th data-options="field:'updated_date',width:150,align:'center'"> Date</th>
        </tr>
    </thead>
</table>

<!-- TOOLBAR DATAGRID -->
<div id="toolbar" style="height: 235px; padding: 10px;">
    <fieldset style="width: 100%; border:2px solid #d0d0d0; margin-bottom: 5px; margin-top: 5px; border-radius:4px;">
        <legend><b>Form Filter Data</b></legend>
        <div style="width: 50%; float: left;">
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Division</span>
                <input style="width:60%;" id="filter_divisions" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Departement</span>
                <input style="width:60%;" id="filter_departements" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Departement Sub</span>
                <input style="width:60%;" id="filter_departement_subs" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;"></span>
                <a href="javascript:;" class="easyui-linkbutton" onclick="filter()"><i class="fa fa-search"></i> Filter Data</a>
            </div>
        </div>
        <div style="width: 50%; float: left;">
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Employee Name</span>
                <input style="width:60%;" id="filter_employees" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Contract Expired</span>
                <select style="width:60%;" id="filter_expired" class="easyui-combobox" data-options="panelHeight:'auto'">
                    <option value="">Choose All</option>
                    <option value="0">Yesterday</option>
                    <option value="1">Today</option>
                    <option value="2">Tomorrow</option>
                    <option value="3">1 Weeks</option>
                    <option value="4">1 Months</option>
                </select>
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Status</span>
                <select style="width:60%;" id="filter_status" class="easyui-combobox" data-options="panelHeight:'auto'">
                    <option value="">Choose All</option>
                    <option value="0">Active</option>
                    <option value="1">Not Active</option>
                </select>
            </div>
    </fieldset>
    <?= $button ?>
</div>

<!-- DIALOG SAVE AND UPDATE -->
<div id="dlg_insert" class="easyui-dialog" title="Add New" data-options="closed: true,modal:true" style="width: 500px; padding:10px; top: 20px;">
    <form id="frm_insert" method="post" enctype="multipart/form-data" novalidate>
        <fieldset style="width:100%; border:1px solid #d0d0d0; margin-bottom: 10px; border-radius:4px; float: left;">
            <legend><b>Form Data</b></legend>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Employee</span>
                <input style="width:60%;" name="number" id="number" required="" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Position</span>
                <input style="width:60%;" name="position_id" id="position_id" required="" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Group</span>
                <input style="width:60%;" name="group_id" id="group_id" required="" class="easyui-combobox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Employee Type</span>
                <input style="width:60%;" name="contract_id" id="contract_id" required="" class="easyui-combobox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Date Sign</span>
                <input style="width:60%;" name="date_sign" id="date_sign" data-options="formatter:myformatter,parser:myparser" class="easyui-datebox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Date Expired</span>
                <input style="width:60%;" name="date_expired" data-options="formatter:myformatter,parser:myparser" class="easyui-datebox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Attachment</span>
                <input style="width:60%;" name="attachment" id="attachment" class="easyui-filebox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Note</span>
                <input style="width:60%; height: 80px;" name="note" multiline="true" class="easyui-textbox">
            </div>
        </fieldset>
    </form>
</div>

<!-- PDF -->
<iframe id="printout" src="<?= base_url('employee/agreements/print') ?>" style="width: 100%;" hidden></iframe>

<script>
    //ADD DATA
    function add() {
        $('#dlg_insert').dialog('open');
        url_save = '<?= base_url('employee/agreements/create') ?>';
        $('#frm_insert').form('clear');
        $('#date_sign').datebox('setValue', "<?= date("Y-m-d") ?>");
    }

    //EDIT DATA
    function update() {
        var row = $('#dg').datagrid('getSelected');
        if (row) {
            if (row.status == 0) {
                if (row.status_check == "" || row.status_check == null) {
                    $('#dlg_insert').dialog('open');
                    $('#frm_insert').form('load', row);
                    url_save = '<?= base_url('employee/agreements/update') ?>?id=' + btoa(row.id);
                } else {
                    toastr.error("Approval still Checked");
                }
            } else {
                toastr.error("You can't edit this data, klik add to change employee position, group or another!");
            }
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
                        if (row.status != 0) {
                            $.ajax({
                                method: 'post',
                                url: '<?= base_url('employee/agreements/delete') ?>',
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
                        } else {
                            toastr.error("You can't delete this data because the status is active!");
                        }
                    }
                }
            });
        } else {
            toastr.warning("Please select one of the data in the table first!", "Information");
        }
    }
    //FILTER DATA
    function filter() {
        var filter_divisions = $("#filter_divisions").combobox('getValue');
        var filter_departements = $("#filter_departements").combobox('getValue');
        var filter_departement_subs = $("#filter_departement_subs").combobox('getValue');
        var filter_employees = $("#filter_employees").combogrid('getValue');
        var filter_expired = $("#filter_expired").combobox('getValue');
        var filter_status = $("#filter_status").combobox('getValue');

        var url = "?filter_divisions=" + filter_divisions +
            "&filter_departements=" + filter_departements +
            "&filter_departement_subs=" + filter_departement_subs +
            "&filter_employees=" + filter_employees +
            "&filter_expired=" + filter_expired +
            "&filter_status=" + filter_status;

        $('#dg').datagrid({
            url: '<?= base_url('employee/agreements/datatables') ?>' + url
        });

        $("#printout").contents().find('html').html("<center><br><br><br><b style='font-size:20px;'>Please Wait...</b></center>");
        $("#printout").attr('src', '<?= base_url('employee/agreements/print') ?>' + url);
    }

    //PRINT PDF
    function pdf() {
        $("#printout").get(0).contentWindow.print();
    }
    //PRINT EXCEL
    function excel() {
        var filter_divisions = $("#filter_divisions").combobox('getValue');
        var filter_departements = $("#filter_departements").combobox('getValue');
        var filter_departement_subs = $("#filter_departement_subs").combobox('getValue');
        var filter_employees = $("#filter_employees").combogrid('getValue');
        var filter_expired = $("#filter_expired").combobox('getValue');
        var filter_status = $("#filter_status").combobox('getValue');

        var url = "?filter_divisions=" + filter_divisions +
            "&filter_departements=" + filter_departements +
            "&filter_departement_subs=" + filter_departement_subs +
            "&filter_employees=" + filter_employees +
            "&filter_expired=" + filter_expired +
            "&filter_status=" + filter_status;

        window.location.assign('<?= base_url('employee/agreements/print/excel') ?>' + url);
    }
    //RELOAD
    function reload() {
        window.location.reload();
    }

    $(function() {
        //SETTING DATAGRID EASYUI
        $('#dg').datagrid({
            url: '<?= base_url('employee/agreements/datatables') ?>',
            pagination: true,
            rownumbers: true,
            rowStyler: function(index, row) {
                if (row.status == 1) {
                    return 'background-color:#FFDCDC;';
                }
            }
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

        //Get Division
        $('#division_id').combogrid({
            url: '<?= base_url('employee/divisions/reads') ?>',
            panelWidth: 420,
            idField: 'id',
            textField: 'name',
            mode: 'remote',
            fitColumns: true,
            prompt: "Choose Division",
            columns: [
                [{
                    field: 'number',
                    title: 'Division No',
                    width: 80
                }, {
                    field: 'name',
                    title: 'Division Name',
                    width: 250
                }, ]
            ]
        });

        //Get Division
        $('#filter_divisions').combobox({
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
                $('#filter_departements').combobox({
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
                        $('#filter_departement_subs').combobox({
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

        $('#filter_employees').combogrid({
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
                    width: 150
                }, {
                    field: 'name',
                    title: 'Employee Name',
                    width: 200
                }]
            ],
        });

        $('#contract_id').combobox({
            url: '<?php echo base_url('employee/contracts/reads'); ?>',
            valueField: 'id',
            textField: 'name',
            prompt: 'Choose Employee Type',
        });

        $('#group_id').combobox({
            url: '<?php echo base_url('employee/groups/reads'); ?>',
            valueField: 'id',
            textField: 'name',
            prompt: 'Choose Group'
        });

        $('#position_id').combogrid({
            url: '<?= base_url('employee/positions/reads') ?>',
            panelWidth: 300,
            idField: 'id',
            textField: 'name',
            mode: 'remote',
            fitColumns: true,
            prompt: 'Choose Position',
            columns: [
                [{
                    field: 'name',
                    title: 'Name',
                    width: 200
                }, {
                    field: 'level',
                    title: 'Level',
                    width: 80
                }]
            ]
        });

        $('#number').combogrid({
            url: '<?= base_url('employee/employees/reads') ?>',
            panelWidth: 450,
            idField: 'number',
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
    });

    function FormatterDate(val) {
        if (val == "0000-00-00") {
            return '-';
        } else {
            return val;
        }
    };

    //CELLSTYLE STATUS
    function statusStyler(value, row, index) {
        if (row.approved_to == "" || row.approved_to == null) {
            return 'background: #53D636; color:white;';
        } else {
            return 'background: #FF5F5F; color:white;';
        }
    }
    //FORMATTER STATUS
    function statusFormatter(value, row) {
        if (row.approved_to == "" || row.approved_to == null) {
            return 'Approved';
        } else {
            return 'Checked';
        }
    };

    function fileFormatter(value) {
        if (value == "" || value == null) {
            return '-';
        } else {
            return '<a href="' + value + '" style="text-decoration: none;"><i class="fa fa-download"></i> Download</a>';
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