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
    <form id="frm_insert" method="post" novalidate style="padding:10px">
        <div id="formContainer">
            <!-- <div class="form-group" id="row_0">
                <div class="fitem ">
                    <span style="width:35%; display:inline-block;">Competence Standard</span>
                    <select class="type" onchange="updateOptions(this)">
                        <option value="competence">Standard Competence</option>
                        <option value="training">Training Activity</option>
                    </select>
                    <button type="button" onclick="removeRow('0')">Remove</button>
                </div>
            </div> -->
        </div>
        <a href="javascript:void(0)" class="easyui-linkbutton" data-options="plain:true" id="addrow" onclick="append()"><i class="fa fa-plus"></i> Add Competence</a>
        <!-- <a href="javascript:void(0)" class="easyui-linkbutton" data-options="plain:true" onclick="removeCurriculum()"><i class="fa fa-times"></i> Remove</a> -->
        <!-- <table id="dgForm" class="easyui-datagrid" style="width:100%;" toolbar="#toolbarForm" data-options="
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
        </table> -->
    </form>
</div>

<div id="toolbarForm">
    <a href="javascript:void(0)" class="easyui-linkbutton" data-options="plain:true" id="addrow" onclick="append()"><i class="fa fa-plus"></i> Add</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" data-options="plain:true" onclick="removeCurriculum()"><i class="fa fa-times"></i> Remove</a>
</div>

<!-- PDF -->
<iframe id="printout" src="<?= base_url('employee/departements/print') ?>" style="width: 100%;" hidden></iframe>
<script src="global.js"></script>

<script type="text/javascript">
    var items = [];
    var itemsTrainingActivity = [];
    var itemsIndicator = [];

    function templateCompetence(index) {
        var prefix = `competence[${index}]`;
        var template = $(`<div class='form-group' data-index='${index}' id="competence_${index}">
                <fieldset style="width: 100%; border:2px solid #d0d0d0; margin-bottom: 5px; margin-top: 5px; border-radius:4px;">
                    <legend><b class='label-compentece-standard'>No. ${index+1}</b> <a href="#" class="easyui-linkbutton" data-options="plain:true" onclick="removeItem(${index})"><i class="fa fa-times"></i> Hapus</a></legend>
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;"><strong>Competence Standard</strong></span>
                        <select name='${prefix}.competence_standard' class="type easyui-combogrid" style="width:50%" data-options="
                            url: '<?= base_url('lnd/competence/list') ?>',
                            idField: 'competenceId',
                            textField: 'name',
                            mode: 'remote',
                            fitColumns: true,
                            columns: [[
                                {field:'competenceId',title:'ID',width:50},
                                {field:'name',title:'Nama Kompetensi',width:200}
                            ]]" onchange="updateOptions(this)">
                        </select>
                    </div>
                    <fieldset style="width: 100%; border:2px solid #d0d0d0; margin-bottom: 5px; margin-top: 5px; border-radius:4px;">
                        <legend><b>Training Activity</b></legend>
                        <div class="fitem" id="training-activity_${index}" style="margin-left:10px">
                            
                        </div>
                    </fieldset>
                    <a href="#" class="easyui-linkbutton" data-options="plain:true" onclick="addTrainingActivity(${index})"><i class="fa fa-plus"></i> Add training Activity</a>
                </fieldset>
            </div>`);
        return template;
    }

    function trainingActivity(parentIndex, index) {
        var prefix = `competence[${parentIndex}].training[${index}]`;
        var template = $(`<div data-index='${index}' data-parent-index='${parentIndex}' id="template-training_${parentIndex}_${index}">
                <div class="fitem">
                    <span style="width:35%; display:inline-block;"><strong>Training Activity ${index+1}</strong></span>
                    <select name='${prefix}.training_activity' class="type easyui-combogrid" style="width:50%" data-options="
                        url: '<?= base_url('lnd/training_activity/list') ?>',
                        idField: 'id',
                        textField: 'trainingActivity', 
                        mode: 'remote',
                        fitColumns: true,
                        columns: [[
                            {field:'id',title:'ID',width:50},
                            {field:'trainingActivity',title:'Activity Name',width:200},
                            {field:'competenceName',title:'Competence',width:200}
                        ]]">
                    </select>
                    ${index > 0 ? `<a href="#" class="easyui-linkbutton" data-options="plain:true" onclick="removeTrainingActivity(${parentIndex}, ${index})"><i class="fa fa-times"></i></a>` : ''}
                </div>
                ${$('#indicator_' + parentIndex + '_' + index).children().length > 0 ? '<hr/>' : ''}
                <div class="fitem" id="indicator_${parentIndex}_${index}">
                </div>
                ${$('#indicator_' + parentIndex + '_' + index).children().length > 0 ? '<hr/>' : ''}
                <a href="#" class="easyui-linkbutton" data-options="plain:true" onclick="addIndicator(${parentIndex}, ${index})"><i class="fa fa-plus"></i> Add Indicator</a>
            </div>`);

        return template;
    }

    function indicatorTemplate(competenceIndex, trainingIndex, index){
        var prefix = `competence[${competenceIndex}].training[${trainingIndex}].indicator[${index}]`;
        var template = $(`<div data-index='${index}' data-training-index='${trainingIndex}'data-compentence-index='${competenceIndex}' id="template-indicator_${competenceIndex}_${trainingIndex}_${index}">
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Indicator ${index+1}</span>
                    <input style="width:50%;" name="${prefix}" id="${prefix}" class="easyui-textbox">
                    <a href="#" class="easyui-linkbutton" data-options="plain:true" onclick="removeIndicator(${competenceIndex}, ${trainingIndex}, ${index})"><i class="fa fa-times"></i></a>
                </div>
            </div>`);

        return template;

    }
    window.onload = function() {
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
        url_save = '<?= base_url('lnd/curiculum/save') ?>';
        method = 'POST';
        $('#frm_insert').form('clear');
        $("#addrow").show();

        var formContainer = $('#formContainer');
        var totalData = formContainer.children().length;
        if(formContainer.children().length === 0) append();
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
    function append(){
        var formContainer = $('#formContainer');
        var totalData = formContainer.children().length;
        
        var template = templateCompetence(totalData);
        formContainer.append(template);
        $.parser.parse(`#competence_${totalData}`);

        var trainingContainer = $(`#training-activity_${totalData}`)
        if(trainingContainer.children().length === 0) addTrainingActivity(totalData)
    }

    function addTrainingActivity(index) {
        var trainingContainer = $(`#training-activity_${index}`)
        var totalData = trainingContainer.children().length;
        var templateTraining = trainingActivity(index, totalData);

        trainingContainer.append(templateTraining)

        $.parser.parse(`#template-training_${index}_${totalData}`);

    }

    function addIndicator(competenceIndex, trainingIndex) {
        var indicatorContainer = $(`#indicator_${competenceIndex}_${trainingIndex}`)
        var totalData = indicatorContainer.children().length;
        var template = indicatorTemplate(competenceIndex, trainingIndex, totalData);
        indicatorContainer.append(template)
        $.parser.parse(`#template-indicator_${competenceIndex}_${trainingIndex}_${totalData}`);
        
    }

    function removeItem(index) {
        var formData = $("#formContainer");
        if (index >= 0) {
            $('.form-group[data-index="' + index + '"]').remove();
            // items.splice(index, 1);
            // renderItems();
            // $.parser.parse('#formContainer'); // Re-parse EasyUI components
            rerenderTemplate()
        } else {
            toastr.error('Index tidak valid!', 'Error');
        }
    }

    function removeTrainingActivity(parentIndex, index) {
        var formData = $(`#template-training_${parentIndex}_${index}`);
        if (index >= 0) {
            formData.remove();
            rerenderTemplate()
        } else {
            toastr.error('Index tidak valid!', 'Error');
        }
    }

    function removeIndicator(competenceIndex, trainingIndex, index) {
        var formData = $(`#template-indicator_${competenceIndex}_${trainingIndex}_${index}`);
        if (index >= 0) {
            formData.remove();
            rerenderTemplate()
        } else {
            toastr.error('Index tidak valid!', 'Error');
        }

    }

    function rerenderTemplate(){
        var formData = $('#formContainer .form-group');
        formData.each(function(index) {
            $(this).attr('data-index', index); // Mengatur data-index sesuai urutan
            $(this).find('.label-compentece-standard').text(`No. ${index+1}`)
        });
    }


    function renderItems() {
        var template = $('#item-template').html();
        var rendered = _.template(template)({ items: items });
        $('#formContainer').html(rendered);
        $.parser.parse('#formContainer'); // Parse EasyUI components
        $('#frm_insert').form('validate');
    }

    function renderTrainingActivity(index) {
        var tempalteTraining =  $('#template-training-activity').html();
        var renderedTraining = _.template(tempalteTraining)({ itemsTrainingActivity: itemsTrainingActivity });
        $(`#training-activity_${index}`).html(`${renderedTraining}`);
        $.parser.parse(`#training-activity_${index}`); // Parse EasyUI components
        // $('#frm_insert').form('validate');
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

    function serializeToNestedObject(serializedArray) {
        const result = {};
    
        serializedArray.forEach(({ name, value }) => {
        const path = name
            .replace(/\]/g, '')
            .replace(/\[/g, '.')
            .split('.');
    
        let current = result;
    
        for (let i = 0; i < path.length; i++) {
            const key = path[i];
            const nextKey = path[i + 1];
            const isArray = /^\d+$/.test(nextKey);
    
            if (i === path.length - 1) {
            current[key] = value;
            } else {
            if (!current[key]) {
                current[key] = isArray ? [] : {};
            }
            current = current[key];
            }
        }
        });
    
        return result;
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
        const nestedData = serializeToNestedObject(requestData.serializeArray());
        // const formData = new URLSearchParams(requestData).toString();

        fetch(url_save, {
            method: method, // Metode POST
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded' // Header penting
            },
            body: "data=" + encodeURIComponent(JSON.stringify(nestedData)) //JSON.stringify(nestedData) // Data body
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
                {field: 'ck', rowspan:'2', checkbox: true},
                {field: 'curriculum_id', rowspan:'2', width:150, title:'Curiculum ID', align: 'left'},
                {field: 'activityName', rowspan:'2', width:150, title:'Training Activity', align: 'left'},
                {field: 'indicator_name', rowspan:'2', width:150, title:'Indicator', width:100, align: 'left'},
                {field: '', colspan:2, title:'Created', width:150, halign: 'center'},
                {field: '', colspan:2, title:'Updated', width:80, halign: 'center'},
            ],[
                {field: 'createdBy', title:'By', width:100, align: 'center'},
                {field: 'createdTime', title:'Date', width:150, align: 'center'},
                {field: 'updatedBy', title:'By', width:100, align: 'center'},
                {field: 'updatedTime', title:'Date', width:150, align: 'center'},
            ]],
            toolbar: '#toolbar',
            singleSelect: true,
            view: groupview,
            groupField:'curriculum_id',
            groupFormatter:function(value,rows){
                return value + ' - ' + rows.length + ' Item(s)';
            },
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
                        var formData = $('#frm_insert'); //.serialize();
                        
                        sendDataToServer(formData)
                    }
                }
            }]
        });

    });
</script>