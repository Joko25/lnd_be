<table id="dg" class="easyui-datagrid" style="width:100%;">
</table>

<!-- TOOLBAR DATAGRID -->
<div id="toolbar">
    <div style="width: 100%; padding: 10px;">
        <fieldset style="width: 50%; border:2px solid #d0d0d0; margin-bottom: 5px; margin-top: 5px; border-radius:4px;">
            <legend><b>Form Filter Data</b></legend>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Competence Standard</span>
                <input style="width:60%;" id="name" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Training Activity</span>
                <input style="width:60%;" id="training_activity_id" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Indicator</span>
                <input style="width:60%;" id="indicator" class="easyui-combogrid">
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
<div id="dlg_insert" class="easyui-dialog" title="Add New" data-options="closed: true,modal:true" style="width: 750px; height:600px; top: 20px;">
    <form id="frm_insert" method="post" novalidate>
        <div id="formContainer"></div>
        <table id="dgForm" class="easyui-datagrid" style="width:100%;" toolbar="#toolbarForm" data-options="
                iconCls: 'icon-edit',
                singleSelect: true,
                method: 'get',
                onClickCell: onClickCell,
                onEndEdit: onEndEdit
            ">
            <thead>
                <tr>
                    <th data-options="field:'competenceId',width:200,
                            editor:'textbox'">Competence Standard</th>
                    <th data-options="field:'trainingActivityId',width:200, editor:'textbox'">Training Activities</th>
                    <th data-options="field:'indicator',width:200, editor:'textbox'">Indicators</th>
                </tr>
            </thead>
        </table>
    </form>
</div>

<div id="toolbarForm">
    <a href="javascript:void(0)" class="easyui-linkbutton" data-options="plain:true" id="addrow" onclick="append()"><i class="fa fa-plus"></i> Add</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" data-options="plain:true" onclick="removeCurriculum()"><i class="fa fa-times"></i> Remove</a>
</div>

<!-- PDF -->
<iframe id="printout" src="<?= base_url('employee/departements/print') ?>" style="width: 100%;" hidden></iframe>

<script>
    window.onload = function() {
        // generatedDepList()

        $('#curiculum_id').combogrid({
            url: '<?php echo base_url('lnd/curiculum/list'); ?>',
            panelWidth: 420,
            idField: 'curiculumId',
            textField: 'curiculumId',
            mode: 'remote',
            fitColumns: true,
            prompt: "Choose Division",
            icons: [{
                iconCls: 'icon-clear',
                handler: function(e) {
                    $(e.data.target).combogrid('clear').combogrid('textbox').focus();
                }
            }],
            columns: [
                [{
                    field: 'curiculumId',
                    title: 'Curiculum ID'
                }, {
                    field: 'desc',
                    title: 'Description',
                    width: 250
                }]
            ],
        });
        
    };

    function add() {
        $('#dlg_insert').dialog('open');
        $('#dgForm').datagrid('loadData', []);
        url_save = '<?= base_url('lnd/curiculum/create_data') ?>';
        method = 'POST';
        $('#frm_insert').form('clear');
        $("#addrow").show();
    }

    var editIndex = undefined;

    function endEditing() {
        if (editIndex == undefined) {
            return true
        }
        if ($('#dgForm').datagrid('validateRow', editIndex)) {
            $('#dgForm').datagrid('endEdit', editIndex);
            editIndex = undefined;
            return true;
        } else {
            return false;
        }
    }


    // function append() {
        
    //     if (endEditing()) {
    //         $('#dgForm').datagrid('appendRow', {
    //             curiculumId: '',
    //             trainingActivityId: '',
    //             induction: '',
    //         });
    //         // editIndex = $('#dgForm').datagrid('getRows').length - 1;
    //         // $('#dgForm').datagrid('selectRow', editIndex).datagrid('beginEdit', editIndex);
    //     }
    // }

    function append(){
        if (endEditing()){
            console.log("###append", endEditing(), $('#dgForm').datagrid('getRows'));
            $('#dgForm').datagrid('appendRow', {competenceId:'', trainingActivityId:'', indicator:''});
            editIndex = $('#dgForm').datagrid('getRows').length-1;
            $('#dgForm').datagrid('selectRow', editIndex)
                    .datagrid('beginEdit', editIndex);
        }

        var rowId = 'row_' + $('.form-group').length;

        $('#formContainer').append(`
            <div class="form-group" id="${rowId}">
                <select class="type" onchange="updateOptions(this)">
                    <option value="competence">Standard Competence</option>
                    <option value="training">Training Activity</option>
                </select>
                <select class="value"></select>
                <button type="button" onclick="removeRow('${rowId}')">Remove</button>
            </div>
        `);

        updateOptions($(`#${rowId} .type`)[0]);
    }

    function removeRow(rowId) {
        $('#' + rowId).remove();
    }

    function updateOptions(select) {
        var row = $(select).closest('.form-group');
        var valueSelect = row.find('.value');

        $.get(select.value === 'competence' ? 'getCompetences' : 'getTrainingActivities', function(data) {
            valueSelect.html('');
            data.forEach(item => {
                valueSelect.append(`<option value="${item.id}">${item.name}</option>`);
            });
        }, 'json');
    }

    function removeCurriculum(){
        if (editIndex == undefined){return}
        $('#dgForm').datagrid('cancelEdit', editIndex)
                .datagrid('deleteRow', editIndex);
        editIndex = undefined;
    }
    
    function update() {
        var row = $('#dg').datagrid('getSelected');
        if (row) {
            generatedSubDept(row.departementId)
            console.log("#row", row);
            
            $('#dlg_insert').dialog('open');
            $('#frm_insert').form('load', row);
            url_save = '<?= base_url('lnd/curiculum/update_data/') ?>' + row.id;
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
        $('#sub_departement_id').combobox({
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
        $('#departement_id').combogrid({
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

    function initDgForm() {
        var dg = $('#dgForm').datagrid({
            columns: [
                [{
                    field: 'competenceId',
                    width: 250,
                    halign: 'center',
                    title: "Competence Standard",
                }, {
                    field: 'trainingActivityId',
                    width: 100,
                    halign: 'center',
                    title: "Training Activities",
                    editor: {
                        type: 'textbox'
                    }
                }, {
                    field: 'indicators',
                    width: 100,
                    halign: 'center',
                    title: "Indicators",
                    editor: {
                        type: 'textbox',
                    }
                }]
            ],
            fit: true,
            singleSelect: true,
            method: 'get',
            onClickCell: function(index, field){
                if (editIndex != index){
                    if (endEditing()){
                        $(this).datagrid('selectRow', index)
                                .datagrid('beginEdit', index);
                        var ed = $(this).datagrid('getEditor', {index:index,field:field});
                        if (ed){
                            ($(ed.target).data('textbox') ? $(ed.target).textbox('textbox') : $(ed.target)).focus();
                        }
                        editIndex = index;
                    } else {
                        setTimeout(function(){
                            $(this).datagrid('selectRow', editIndex);
                        },0);
                    }
                }
            },
            onEndEdit: function(index, row){
                var ed = $(this).datagrid('getEditor', {
                    index: index,
                    field: 'competenceId'
                });
                row.productname = $(ed.target).combobox('getText');
            },
            onBeforeEdit: function(index, row) {
                row.editing = true;
                $(this).datagrid('refreshRow', index);
            },
            onAfterEdit: function(index, row) {
                row.editing = false;
                $(this).datagrid('refreshRow', index);
            },
            onCancelEdit: function(index, row) {
                row.editing = false;
                $(this).datagrid('refreshRow', index);
            },
        });
    }

    function onClickCell(index, field){
        if (editIndex != index){
            if (endEditing()){
                $('#dgForm').datagrid('selectRow', index)
                        .datagrid('beginEdit', index);
                var ed = $('#dgForm').datagrid('getEditor', {index:index,field:field});
                if (ed){
                    ($(ed.target).data('textbox') ? $(ed.target).textbox('textbox') : $(ed.target)).focus();
                }
                editIndex = index;
            } else {
                setTimeout(function(){
                    $('#dgForm').datagrid('selectRow', editIndex);
                },0);
            }
        }
    }

    function onEndEdit(index, row){
        var ed = $(this).datagrid('getEditor', {
            index: index,
            field: 'competenceId'
        });
        row.productname = $(ed.target).combobox('getText');
    }
    
    $(function() {
        //SETTING DATAGRID EASYUI
        // initDgForm()
        $('#dg').datagrid({
            url: '<?= base_url('lnd/curiculum/datatables') ?>',
            columns: [[
                {field: 'ck', checkbox: true},
                {field: 'curiculumId', title:'Curiculum ID', align: 'left'},
                {field: 'desc', title:'Description', align: 'left'},
                {field: 'scoreStandard', title:'Score Standard', width:100, align: 'left'},
                {field: 'departement_name', title:'Department', align: 'left'},
                {field: 'sub_department_name', title:'Sub Department', align: 'left'},
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