<!-- TABLE DATAGRID -->
<table id="dg" class="easyui-datagrid" style="width:99.5%;" toolbar="#toolbar">
    <thead>
        <tr>
            <th rowspan="2" field="ck" checkbox="true"></th>
            <th rowspan="2" data-options="field:'departement_name',width:150,halign:'center'">Departement</th>
            <th rowspan="2" data-options="field:'position_name',width:150,halign:'center'">Position</th>
            <th rowspan="2" data-options="field:'contract_name',width:150,halign:'center'">Employee type</th>
            <th rowspan="2" data-options="field:'account_name',width:150,halign:'center'">Account Name</th>
            <th rowspan="2" data-options="field:'job_type',width:100,halign:'center'">Job Type</th>
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
<div id="toolbar" style="height: 35px;">
    <?= $button ?>
</div>

<!-- DIALOG SAVE AND UPDATE -->
<div id="dlg_insert" class="easyui-dialog" title="Add New" data-options="closed: true,modal:true" style="width: 400px; padding:10px; top: 20px;">
    <form id="frm_insert" method="post" novalidate>
        <fieldset style="width:100%; border:1px solid #d0d0d0; margin-bottom: 10px; border-radius:4px; float: left;">
            <legend><b>Form Data</b></legend>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Departement</span>
                <input style="width:60%;" name="departement_id" id="departement_id" required="" class="easyui-combobox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Position</span>
                <input style="width:60%;" name="position_id" id="position_id" required="" class="easyui-combobox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Employee Type</span>
                <input style="width:60%;" name="contract_id" id="contract_id" required="" class="easyui-combobox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Account No</span>
                <input style="width:60%;" name="account_id" id="account_id" required="" class="easyui-combobox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Job Type</span>
                <select style="width:30%;" name="job_type" id="job_type" required="" class="easyui-combobox" panelHeight="auto">
                    <option value="DIRECT">DIRECT</option>
                    <option value="IN DIRECT">IN DIRECT</option>
                </select>
            </div>
        </fieldset>
    </form>
</div>

<!-- PDF -->
<iframe id="printout" src="<?= base_url('payroll/account_coa/print') ?>" style="width: 100%;" hidden></iframe>

<script>
    //ADD DATA
    function add() {
        $('#dlg_insert').dialog('open');
        url_save = '<?= base_url('payroll/account_coa/create') ?>';
        $('#frm_insert').form('clear');
        $('#departement_id').combobox('enable');
        $('#position_id').combobox('enable');
        $('#contract_id').combobox('enable');
    }

    //EDIT DATA
    function update() {
        var row = $('#dg').datagrid('getSelected');
        if (row) {
            $('#dlg_insert').dialog('open');
            $('#frm_insert').form('load', row);
            $('#departement_id').combobox('disable');
            $('#position_id').combobox('disable');
            $('#contract_id').combobox('disable');
            
            url_save = '<?= base_url('payroll/account_coa/update') ?>?id=' + btoa(row.id);
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
                            url: '<?= base_url('payroll/account_coa/delete') ?>',
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
            });
        } else {
            toastr.warning("Please select one of the data in the table first!", "Information");
        }
    }
    //PRINT PDF
    function pdf() {
        $("#printout").get(0).contentWindow.print();
    }
    //PRINT EXCEL
    function excel() {
        window.location.assign('<?= base_url('payroll/account_coa/print/excel') ?>');
    }
    //RELOAD
    function reload() {
        window.location.reload();
    }

    $(function() {
        //SETTING DATAGRID EASYUI
        $('#dg').datagrid({
            url: '<?= base_url('payroll/account_coa/datatables') ?>',
            pagination: true,
            clientPaging: false,
            remoteFilter: true,
            rownumbers: true
        }).datagrid('enableFilter');

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

                            // $('#dlg_insert').dialog('close');
                            $('#dg').datagrid('reload');
                        }
                    });
                }
            }]
        });

        //Get Data Departement
        $('#departement_id').combobox({
            url: '<?= base_url('employee/departements/reads') ?>',
            valueField: 'id',
            textField: 'name',
            prompt: "Choose Departement"
        });

        //Get Data Position
        $('#position_id').combobox({
            url: '<?= base_url('employee/positions/reads') ?>',
            valueField: 'id',
            textField: 'name',
            prompt: "Choose Position"
        });

        //Get Data Contract
        $('#contract_id').combobox({
            url: '<?= base_url('employee/contracts/reads') ?>',
            valueField: 'id',
            textField: 'name',
            prompt: "Choose Employee Type"
        });

        //Get Data Account
        $('#account_id').combobox({
            url: '<?= base_url('payroll/accounts/reads') ?>',
            valueField: 'id',
            textField: 'name',
            prompt: "Choose Account Name"
        });
    });
</script>