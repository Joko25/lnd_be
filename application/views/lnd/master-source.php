<table id="dg" class="easyui-datagrid" style="width:100%;">
</table>

<!-- DIALOG SAVE AND UPDATE -->
<div id="dlg_insert" class="easyui-dialog" title="Add New" data-options="closed: true,modal:true" style="width: 400px; padding:10px; top: 20px;">
    <form id="frm_insert" method="post" novalidate>
        <fieldset style="width:100%; border:1px solid #d0d0d0; margin-bottom: 10px; border-radius:4px; float: left;">
            <legend><b>Form Data</b></legend>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Competence Name</span>
                <input style="width:60%;" id="competenceName" name="competenceId" required="" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Training Activity Name</span>
                <input style="width:60%;" id="trainingActivityName" name="trainingActivityId" required="" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Source Name</span>
                <input style="width:60%;" name="sourceName" required="" class="easyui-textbox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">File Data Source</span>
                <input style="width:60%;" name="uploadDataSource" class="easyui-filebox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Remarks</span>
                <input style="width:60%;" name="remarks" class="easyui-textbox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Register Date</span>
                <input style="width:60%;" name="registerDate" id="registerDate" required="" data-options="formatter:myformatter,parser:myparser, editable: false" class="easyui-datebox">
            </div>
        </fieldset>
    </form>
</div>

<!-- TOOLBAR DATAGRID -->
<div id="toolbar" style="height: 35px;">
    <?= $button ?>
</div>

<script>
    window.onload = function() {

    };

    function add() {
        $('#dlg_insert').dialog('open');
        url_save = '<?= base_url('lnd/master_source/create_data') ?>';
        method = 'POST';
        $('#frm_insert').form('clear');
        $('#registerDate').datebox('setValue', "<?= date("Y-m-d") ?>");

    }

    function update() {
        var row = $('#dg').datagrid('getSelected');
        if (row) {
            $('#dlg_insert').dialog('open');
            $('#frm_insert').form('load', row);
            url_save = '<?= base_url('lnd/master_source/update_data/') ?>' + row.id;
            method = 'PUT';
        } else {
            toastr.warning("Please select one of the data in the table first!", "Information");
        }
    }

    function deleted() {
        var rows = $('#dg').datagrid('getSelections');
        if (rows.length > 0) {
            $.messager.confirm('Warning', 'Are you sure you want to delete this data?', function(r) {
                if (r) {
                    for (var i = 0; i < rows.length; i++) {
                        var row = rows[i];
                        fetch('<?= base_url('lnd/master_source/delete_data/') ?>'+row.id, {
                            method: 'DELETE', // Metode DELETE
                        })
                        .then(response => response.json()) // Konversi response ke JSON
                        .then(data => {
                            if (data.code === 200) {
                                $('#dg').datagrid('reload');
                                toastr.success(data.message, 'Success');
                            } else {
                                toastr.success("Something Wrong", 'error');
                            }
                        })
                        .catch(error => {
                            console.error('Terjadi kesalahan:', error);
                            toastr.success("Something Wrong", 'error');
                        });
                    }
                }
            });
        } else {
            toastr.warning("Please select one of the data in the table first!", "Information");
        }
    }

    function sendDataToServer(requestData) {
        // Buat body dengan format x-www-form-urlencoded (query string)
        const formData = new URLSearchParams(requestData).toString();

        fetch(url_save, {
            method: method, // Metode POST
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded' // Header penting
            },
            body: formData // Data body
        })
        .then(response => {
            return response.json()}) // Ubah response ke JSON
        .then(data => {
            if(data.code >= 200 && data.code <= 300) {
                toastr.success(data.message, 'Success');
                $('#dg').datagrid('reload');
                $('#dlg_insert').dialog('close');
                
            }
        })
        .catch(error => {
            toastr.error('Something Error', 'Error');
            console.error('Terjadi kesalahan:', error);
        });
    }

    $(function() {
        //SETTING DATAGRID EASYUI
        $('#dg').datagrid({
            url: '<?= base_url('lnd/master_source/datatables') ?>',
            columns: [[
                {field: 'ck', rowspan:'2', checkbox: true},
                {field: 'masterSourceId', rowspan:'2', width:150, title:'Master Source ID', halign: 'center'},
                {field: 'competenceName', rowspan:'2', width:150, title:'Competency Name', halign: 'center'},
                {field: 'trainingActivityName', rowspan:'2', width:150, title:'Training Activity Name', halign: 'center'},
                {field: 'sourceName', rowspan:'2', width:150, title:'Source Name', halign: 'center'},
                {field: 'uploadDataSource', rowspan:'2', width:150, title:'File Data Source', halign: 'center'},
                {field: 'remarks', rowspan:'2', width:100, title:'Remarks', halign: 'center'},
                {field: 'registerDate', rowspan:'2', width:100, title:'Register Date', halign: 'center'},
                {field: '', colspan:2, title:'Created', width:150, halign: 'center'},
                {field: '', colspan:2, title:'Updated', width:80, halign: 'center'},
            ],[
                {field: 'createdBy', title:'By', width:100, align: 'center'},
                {field: 'createdTime', title:'Date', width:150, align: 'center'},
                {field: 'updatedBy', title:'By', width:100, align: 'center'},
                {field: 'updatedTime', title:'Date', width:150, align: 'center'},
            ]],
            toolbar: '#toolbar',
            pagination: true,
            rownumbers: true,
            fit: true,
            remoteFilter: true,
            singleSelect:true,
            pageList: [20, 50, 100, 500, 1000],
            pageSize: 20,
        });

        //SAVE DATA
        $('#dlg_insert').dialog({
            buttons: [{
                text: 'Save',
                iconCls: 'icon-ok',
                handler: function() {
                    if($(this).form('validate')) {
                        var formData = $('#frm_insert').serialize();
                        sendDataToServer(formData)
                    }
                }
            }]
        });
    });

    $('#trainingActivityName').combogrid({
        url: '<?= base_url('lnd/master_source/readsTrainingActivity') ?>',
        panelWidth: 350,
        idField: 'id',
        textField: 'trainingActivity',
        mode: 'remote',
        fitColumns: true,
        prompt: 'Choose Training Activity',
        columns: [
            [{
                field: 'trainingActivityId',
                title: 'Training Activity ID',
                width: 120
            }, {
                field: 'trainingActivity',
                title: 'Training Activity',
                width: 200
            }]
        ],
    });

    $('#competenceName').combogrid({
            url: '<?= base_url('lnd/master_source/readsCompetence') ?>',
            panelWidth: 450,
            idField: 'id',
            textField: 'desc',
            mode: 'remote',
            fitColumns: true,
            prompt: 'Choose Competence',
            columns: [
                [{
                    field: 'competenceId',
                    title: 'Competence ID',
                    width: 120
                }, {
                    field: 'desc',
                    title: 'Competence Name',
                    width: 200
                }]
            ],
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
</script>