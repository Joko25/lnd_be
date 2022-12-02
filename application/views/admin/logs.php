<!-- TABLE DATAGRID -->
<table id="dg" class="easyui-datagrid" style="width:100%;" toolbar="#toolbar">
    <thead>
        <tr>
            <th field="ck" checkbox="true"></th>
            <th data-options="field:'created_by',width:180">Created By</th>
            <th data-options="field:'created_date',width:180">Created Date</th>
            <th data-options="field:'ip_address',width:100">Ip Address</th>
            <th data-options="field:'action',width:100">Action</th>
            <th data-options="field:'menu',width:180">Module</th>
            <th data-options="field:'description',width:300">Description</th>
        </tr>
    </thead>
</table>

<!-- TOOLBAR DATAGRID -->
<div id="toolbar" style="height: 35px;">
    <?= $button ?>
</div>

<!-- PDF -->
<iframe id="printout" src="<?= base_url('admin/logs/print') ?>" style="width: 100%;" hidden></iframe>

<script>
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
                            url: '<?= base_url('admin/logs/delete') ?>',
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

    $(function() {
        $('#dg').datagrid({
            url: '<?= base_url('admin/logs/datatables') ?>',
            pagination: true,
            clientPaging: false,
            remoteFilter: true,
            rownumbers: true
        }).datagrid('enableFilter');
    });

    //PRINT PDF
    function pdf() {
        $("#printout").get(0).contentWindow.print();
    }
    //EXPORT EXCEL
    function excel() {
        window.location.assign('<?= base_url('admin/logs/print/excel') ?>');
    }
    //RELOAD
    function reload() {
        window.location.reload();
    }
</script>