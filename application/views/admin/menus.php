<!-- TABLE DATAGRID -->
<table id="dg" class="easyui-datagrid" style="width:99.5%;" toolbar="#toolbar">
    <thead>
        <tr>
            <th field="ck" checkbox="true"></th>
            <th data-options="field:'parent_name',width:200">Parent Menu</th>
            <th data-options="field:'name',width:200">Menu Name</th>
            <th data-options="field:'link',width:200">Link</th>
            <th data-options="field:'sort',width:50">Sort</th>
            <th data-options="field:'icon',width:100">Icon</th>
            <th data-options="field:'state',width:100">State</th>
        </tr>
    </thead>
</table>

<!-- TOOLBAR DATAGRID -->
<div id="toolbar" style="height: 35px;">
    <?= $button ?>
</div>

<!-- DIALOG SAVE AND UPDATE -->
<div id="dlg_insert" class="easyui-dialog" title="Add New" data-options="closed: true" style="width: 400px; padding:10px; top: 20px;">
    <form id="frm_insert" method="post" novalidate>
        <fieldset style="width:100%; border:1px solid #d0d0d0; margin-bottom: 10px; border-radius:4px; float: left;">
            <legend><b>Form Data</b></legend>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Parent Menu</span>
                <input style="width:60%;" name="menus_id" id="menus_id" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Name</span>
                <input style="width:60%;" name="name" required="" class="easyui-textbox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Link</span>
                <input style="width:60%;" name="link" class="easyui-textbox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Sort</span>
                <input style="width:60%;" name="sort" class="easyui-numberbox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Icon</span>
                <select style="width:60%;" name="icon" class="easyui-combobox">
                    <option value="">Default</option>
                    <option value="icon-back">Icon Back</option>
                    <option value="icon-bank">Icon Bank</option>
                    <option value="icon-clear">Icon Clear</option>
                    <option value="icon-clock">Icon Clock</option>
                    <option value="icon-company">Icon Company</option>
                    <option value="icon-employee">Icon Employee</option>
                    <option value="icon-filter">Icon Filter</option>
                    <option value="icon-help">Icon Help</option>
                    <option value="icon-key">Icon Key</option>
                    <option value="icon-money">Icon Money</option>
                    <option value="icon-more">Icon More</option>
                    <option value="icon-no">Icon No</option>
                    <option value="icon-ok">Icon Ok</option>
                    <option value="icon-payment">Icon Payment</option>
                    <option value="icon-pencil">Icon Pencil</option>
                    <option value="icon-people">Icon People</option>
                    <option value="icon-pie-chart">Icon Pie Chart</option>
                    <option value="icon-redo">Icon Redo</option>
                    <option value="icon-reload">Icon Reload</option>
                    <option value="icon-schedule">Icon Schedule</option>
                    <option value="icon-search">Icon Search</option>
                    <option value="icon-setting">Icon Setting</option>
                    <option value="icon-sum">Icon Sum</option>
                    <option value="icon-tip">Icon Tip</option>
                    <option value="icon-undo">Icon Undo</option>
                    <option value="icon-user">Icon User</option>
                    <option value="icon-worker">Icon Worker</option>
                </select>
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">State</span>
                <input style="width:60%;" name="state" class="easyui-textbox">
            </div>
            <br>
            <i style="color:red;">If this menu is parent please input in state = "closed"</i>
        </fieldset>
    </form>
</div>

<!-- PDF -->
<iframe id="printout" src="<?= base_url('admin/menus/print') ?>" style="width: 100%;" hidden></iframe>

<script>
    //ADD DATA
    function add() {
        $('#dlg_insert').dialog('open');
        url_save = '<?= base_url('admin/menus/create') ?>';
        $('#frm_insert').form('clear');
    }

    //EDIT DATA
    function update() {
        var row = $('#dg').datagrid('getSelected');
        if (row) {
            $('#dlg_insert').dialog('open');
            $('#frm_insert').form('load', row);
            url_save = '<?= base_url('admin/menus/update') ?>?id=' + btoa(row.id);
        } else {
            toastr.info("Please select one of the data in the table first");
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
                            url: '<?= base_url('admin/menus/delete') ?>',
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
            toastr.info("Please select one of the data in the table first");
        }
    }

    //PRINT PDF
    function pdf() {
        $("#printout").get(0).contentWindow.print();
    }
    //EXPORT EXCEL
    function excel() {
        window.location.assign('<?= base_url('admin/menus/print/excel') ?>');
    }
    //RELOAD
    function reload() {
        window.location.reload();
    }

    $(function() {
        //SETTING DATAGRID EASYUI
        $('#dg').datagrid({
            url: '<?= base_url('admin/menus/datatables') ?>',
            pagination: true,
            clientPaging: false,
            remoteFilter: true,
            rownumbers: true,
            fit: true,
            pageList: [20, 50, 100, 500, 1000],
            pageSize: 20,
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

                            $('#dlg_insert').dialog('close');
                            $('#dg').datagrid('reload');
                        }
                    });
                }
            }]
        });

        //DATA MENUS
        $('#menus_id').combogrid({
            url: '<?= base_url('admin/menus/getmenu') ?>',
            panelWidth: 420,
            idField: 'id',
            textField: 'name',
            mode: 'remote',
            fitColumns: true,
            prompt: "Choose Menu",
            columns: [
                [{
                    field: 'name',
                    title: 'Name',
                    width: 200
                }, {
                    field: 'parent_name',
                    title: 'Parent Menu',
                    width: 200
                }, ]
            ]
        });
    });
</script>