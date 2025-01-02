<table id="dg" class="easyui-datagrid" style="width:100%;">
</table>

<!-- TOOLBAR DATAGRID -->
<div id="toolbar" style="height: 200px;">
    <div style="width: 100%; padding: 10px;">
        <fieldset style="width: 50%; border:2px solid #d0d0d0; margin-bottom: 5px; margin-top: 5px; border-radius:4px;">
            <legend><b>Form Filter Data</b></legend>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Level ID</span>
                <input style="width:60%;" id="level_id" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Departement ID</span>
                <input style="width:60%;" id="departement_id" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;"></span>
                <a href="javascript:;" class="easyui-linkbutton" onclick="filter()"><i class="fa fa-search"></i> Filter Data</a>
            </div>
        </fieldset>
        <?= $button ?>
    </div>
</div>

<!-- DIALOG SAVE AND UPDATE -->
<div id="dlg_insert" class="easyui-dialog" title="Add New" data-options="closed: true,modal:true" style="width: 400px; padding:10px; top: 20px;">
    <form id="frm_insert" method="post" novalidate>
        <fieldset style="width:100%; border:1px solid #d0d0d0; margin-bottom: 10px; border-radius:4px; float: left;">
            <legend><b>Form Data</b></legend>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Curiculum</span>
                <input style="width:60%;" name="curriculumId" id="curriculumId" required="" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Competence</span>
                <input style="width:60%;" name="competenceId" id="competenceId" required="" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Departement</span>
                <input style="width:60%;" name="departmentId" id="departmentId" required="" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Sub Departement</span>
                <input style="width:60%;" name="subId" id="subId" required="" class="easyui-combobox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Description</span>
                <input style="width:60%;" name="description" required="" class="easyui-textbox">
            </div>
        </fieldset>
    </form>
</div>

<!-- PDF -->
<iframe id="printout" src="<?= base_url('employee/departements/print') ?>" style="width: 100%;" hidden></iframe>

<script>
    window.onload = function() {
        generatedDepList();
        generatedCurriculumList();
        generatedCompetenceList();
    };

    function add() {
        $('#dlg_insert').dialog('open');
        url_save = '<?= base_url('lnd/setup_curiculum/create_data') ?>';
        method = 'POST';
        $('#frm_insert').form('clear');
    }
    function update() {
        var row = $('#dg').datagrid('getSelected');
        if (row) {
            generatedSubDept(row.departmentId)
            console.log("#row", row);
            
            $('#dlg_insert').dialog('open');
            $('#frm_insert').form('load', row);
            url_save = '<?= base_url('lnd/setup_curiculum/update_data/') ?>' + row.id;
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
                        fetch('<?= base_url('lnd/curiculum/delete_data/') ?>'+row.id, {
                            method: 'DELETE', // Metode DELETE
                        })
                        .then(response => response.json()) // Konversi response ke JSON
                        .then(data => {
                            console.log('Response dari server:', data);
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

    function filter() {
        var curiculum_id = $("#curiculum_id").combogrid('getValue');

        var params = "?curiculumId=" + curiculum_id ;

        $('#dg').datagrid({
            url: '<?= base_url('lnd/curiculum/datatables') ?>' + params
        });

        $("#printout").contents().find('html').html("<center><br><br><br><b style='font-size:20px;'>Please Wait...</b></center>");
        $("#printout").attr('src', '<?= base_url('employee/departements/print') ?>' + params);
    }

    function generatedSubDept(dept_id) {
        $('#subId').combobox({
            url: '<?php echo base_url('employee/departement_subs/reads'); ?>?departement_id=' + dept_id,
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



    function generatedDepList(){
        $('#departmentId').combogrid({
            url: '<?= base_url('employee/departements/reads') ?>',
            panelWidth: 420,
            idField: 'id',
            textField: 'name',
            mode: 'remote',
            fitColumns: true,
            valueField: 'id',
            prompt: "Choose Departement",
            columns: [
                [{
                    field: 'number',
                    title: 'Departement No',
                    width: 80
                }, {
                    field: 'name',
                    title: 'Departement Name',
                    width: 250
                }, ]
            ],
            onSelect: function(dept) {
                var departement_id = $('#departement_id').combogrid('getValue');
                generatedSubDept(departement_id)
            }
        });
    }

    function generatedCurriculumList(){
        $('#curriculumId').combogrid({
            url: '<?= base_url('lnd/curiculum/list') ?>',
            panelWidth: 420,
            idField: 'curiculumId',
            textField: 'curiculumId',
            mode: 'remote',
            fitColumns: true,
            valueField: 'id',
            prompt: "Choose Curriculum",
            columns: [
                [{
                    field: 'curiculumId',
                    title: 'ID',
                    width: 250
                }, {
                    field: 'desc',
                    title: 'Description',
                    width: 250
                }, {
                    field: 'scoreStandard',
                    title: 'Score',
                    width: 250
                }, ]
            ]
        });
    }

    function generatedCompetenceList(){
        $('#competenceId').combogrid({
            url: '<?= base_url('lnd/competence/list') ?>',
            panelWidth: 520,
            idField: 'competenceId',
            textField: 'competenceId',
            mode: 'remote',
            fitColumns: true,
            valueField: 'id',
            prompt: "Choose Curriculum",
            columns: [
                [{
                    field: 'positionId',
                    title: 'Level ID',
                    width: 250
                },{
                    field: 'competenceId',
                    title: 'Competence ID',
                    width: 250
                }, {
                    field: 'desc',
                    title: 'Description',
                    width: 250
                }, {
                    field: 'remark',
                    title: 'Remark',
                    width: 250
                }, ]
            ]
        });
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
            console.log("resp", response);
            
            return response.json()}) // Ubah response ke JSON
        .then(data => {
            console.log('Response dari server:', data);
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
            url: '<?= base_url('lnd/setup_curiculum/datatables') ?>',
            columns: [[
                {field: 'ck', checkbox: true},
                {field: 'positionId', title:'Level ID', align: 'left'},
                {field: 'description', title:'Description', align: 'left'},
                {field: 'departement_name', title:'Department ID', align: 'left'},
                {field: 'departement_name', title:'Department', align: 'left'},
                {field: 'subId', title:'Sub ID', align: 'left'},
                {field: 'sub_department_name', title:'Sub Name', align: 'left'},
                {field: 'desc', title:'Description', align: 'left'},
                {field: 'competenceId', title:'Competence Name', align: 'left'},
                {field: 'curriculumId', title:'Curiculum ID', align: 'left'},
                {field: 'desc', title:'Description', align: 'left'},
                {field: 'createdBy', title:'User Entry', align: 'left'},
                {field: 'createdTime', title:'Last Entry', align: 'left'},
            ]],
            toolbar: '#toolbar',
            pagination: true,
            rownumbers: true,
            fit: true,
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
</script>