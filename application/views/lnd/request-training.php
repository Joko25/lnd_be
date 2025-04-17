<table id="dg" class="easyui-datagrid" style="width:100%;">
</table>

<!-- TOOLBAR DATAGRID -->
<div id="toolbar">
    <div class="easyui-accordion" style="width:100%; margin-bottom:5px;">
        <div title="Click this to hide the filter" data-options="onCollapse: function(){ $('#dg').datagrid('reload'); }" style="padding:10px; background:#F4F4F4;">
            <fieldset style="width: 100%; border:2px solid #d0d0d0; margin-bottom: 5px; margin-top: 5px; border-radius:4px;">
                <legend><b>Form Filter Data</b></legend>
                <div style="width:50%; float: left;">
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;">Suggest Training Date</span>
                        <input style="width:60%;" id="suggestTrainingDateFilter" class="easyui-datebox" data-options="formatter:myformatter,parser:myparser, editable:false">
                    </div>
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;">Training Material</span>
                        <input style="width:60%;" id="trainingMaterialFilter" class="easyui-combogrid">
                    </div>
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;">Trainee</span>
                        <input style="width:60%;" id="traineeFilter" class="easyui-combogrid">
                    </div>
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;"></span>
                        <a href="javascript:;" class="easyui-linkbutton" onclick="filter()"><i class="fa fa-search"></i> Filter Data</a>
                    </div>
                </div>
                <div style="width:50%; float: left;">
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;">Reasons</span>
                        <input style="width:60%;" id="reasonsFilter" class="easyui-combogrid">
                    </div>
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;">Departement</span>
                        <input style="width:60%;" id="departementFilter" class="easyui-combogrid">
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <?= $button ?>
</div>

<!-- DIALOG SAVE AND UPDATE -->
<div id="dlg_insert" class="easyui-dialog" title="Add New" data-options="closed: true,modal:true" style="width: 1100px; padding:10px; top: 20px;">
    <form id="frm_insert" method="post" novalidate>
        <fieldset style="width: 100%; border:2px solid #d0d0d0; margin-bottom: 5px; margin-top: 5px; border-radius:4px;">
            <div style="width:50%; float: left;">
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Induction</span>
                    <input style="width:60%;" id="inductionForm" name ="induction" class="easyui-textbox" >
                </div>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Training Activities</span>
                    <input style="width:60%;" id="trainingActivitiesForm" name="trainingActivities" class="easyui-textbox" required="">
                </div>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Suggest Date Training</span>
                    <input style="width:60%;" id="suggestDateTrainingForm" name="suggestDateTraining" class="easyui-datebox" required="" data-options="formatter:myformatter,parser:myparser, editable: false" >
                </div>
            </div>
            <div style="width:50%; float: left;">
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Reasons</span>
                    <select style="width:60%;" name="reasons" required="" class="easyui-combobox" panelHeight="auto">
                        <option value="Promotion">Promotion</option>
                        <option value="Mutation">Mutation</option>
                        <option value="New Product">New Product</option>
                        <option value="New Technology">New Technology</option>
                        <option value="New System">New Technology</option>
                        <option value="Skill Upgrades">Skill Upgrades</option>
                    </select>                
                </div>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Trainer</span>
                    <select style="width:60%;" name="trainer" required="" class="easyui-combobox" panelHeight="auto">
                        <option value="Internal">Internal</option>
                        <option value="External">External</option>
                    </select>  
                </div>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Trainer Fees</span>
                    <input style="width:60%;" id="trainerFeesForm" name="trainerFees" class="easyui-textbox">
                </div>
            </div>
        </fieldset>
            <div class="easyui-tabs" style="width:100%; float: left;">
                <!-- Trainee Information -->
                <div title="Trainee">
                    <div id="toolbarTrainee">
                        <a href="javascript:void(0)" class="easyui-linkbutton" data-options="plain:true" onclick="addTrainee()"><i class="fa fa-plus"></i> Add</a>
                        <a href="javascript:void(0)" class="easyui-linkbutton" data-options="plain:true" onclick="removeTrainee()"><i class="fa fa-times"></i> Remove</a>
                    </div>

                    <table id="dgTrainee" class="easyui-datagrid" style="width:100%;" toolbar="#toolbarTrainee"></table>
                </div>
            </div>
        <!-- <fieldset style="width:100%; border:1px solid #d0d0d0; margin-bottom: 10px; border-radius:4px; float: left;">
            <legend><b>Form Data</b></legend>
            <a href="javascript:;" id="btnAdd" class="easyui-linkbutton" ><i class="fa fa-plus"></i> Add</a>
            <a href="javascript:;" id="btnRemove" class="easyui-linkbutton"><i class="fa fa-trash"></i> Remove</a>
            <table id="dgForm" class="easyui-datagrid" style="width:100%;">
                <thead>
                    <tr>
                        <th data-options="field:'number',width:180,align:'center',editor:{type:'combogrid',options:{panelWidth:300,url:'<?= base_url('lnd/request_training/getEmployees') ?>',idField:'name',textField:'name',columns:[[{field:'name',title:'Name',width:280}]]}}">Full Name</th>
                        <th data-options="field:'name',width:200,halign:'center'">National ID</th>
                        <th data-options="field:'type',width:120,halign:'center'">Position</th>
                        <th data-options="field:'description',width:150,halign:'center'">Departement</th>
                        <th data-options="field:'description',width:150,halign:'center'"> Sub Departement</th>
                        <th data-options="field:'description',width:150,halign:'center'"> Join Date</th>
                    </tr>
                </thead>
            </table>
        </fieldset> -->
    </form>
</div>

<!-- DIALOG UPLOAD -->
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
<iframe id="printout" src="<?= base_url('lnd/training_activity/print') ?>" style="width: 100%;" hidden></iframe>

<script>
    window.onload = function() {
        
    };

    function add() {
        $('#dlg_insert').dialog('open');
        url_save = '<?= base_url('lnd/request_training/create_data') ?>';
        method = 'POST';
        $('#frm_insert').form('clear');
        tableTrainee();
    }

    function update() {
        var row = $('#dg').datagrid('getSelected');
        
        if (row) {
            $('#dlg_insert').dialog('open');
            $('#frm_insert').form('load', row);
            tableTrainee(row.id);
            url_save = '<?= base_url('lnd/request_training/update_data/') ?>' + row.id;
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
                        fetch('<?= base_url('lnd/request_training/delete_data/') ?>'+row.id, {
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
            url: '<?= base_url('lnd/request_training/datatables') ?>',
            view: detailview,
            width:500,
            detailFormatter: function(index, row) {
                return '<div style="padding:2px;"><table class="ddv"></table></div>';
            },
            onExpandRow: function(index, row) {
                var ddv = $(this).datagrid('getRowDetail', index).find('table.ddv');
                ddv.datagrid({
                    url: '<?= base_url('lnd/request_training/detailTrainee') ?>?trainingRequestId=' + row.id,
                    fitColumns: false,
                    nowrap: false,
                    singleSelect: true,
                    rownumbers: true,
                    loadMsg: '',
                    height: 'auto',
                    columns: [[
                        {field: 'fullName', title: 'Full Name', width: 150, halign: 'center'},
                        {field: 'national_id', title: 'Natinal ID', width: 150, halign: 'center'},
                        {field: 'position', title: 'Position', width: 150, halign: 'left'},
                        {field: 'departement', title: 'Departement', width: 150, align: 'center'},
                        {field: 'departement_subs', title: 'Sub Departement', width: 150, align: 'center'},
                        {field: 'date_sign', title: 'Join Date', width: 250, align: 'center'},
                    ]],
                    onResize: function() {
                        $('#dg').datagrid('fixDetailRowHeight', index);
                    },
                    onLoadSuccess: function() {
                        setTimeout(function() {
                            $('#dg').datagrid('fixDetailRowHeight', index);
                        }, 0);
                    }
                });
                $('#dg').datagrid('fixDetailRowHeight', index);
            },
            columns: [[
                {field: 'ck', rowspan:'2', checkbox: true},
                {field: 'requestTrainingId', rowspan:'2', width:150, title:'Request Training ID', halign: 'center'},
                {field: 'induction', rowspan:'2', width:280, title:'Induction', halign: 'center'},
                {field: 'trainingActivities', rowspan:'2', width:180, title:'Training Activities', halign: 'center'},
                {field: 'suggestDateTraining', rowspan:'2', width:150, title:'Suggest Date Training', halign: 'center'},
                {field: 'reasons', rowspan:'2', width:150, title:'Reasons', halign: 'center'},
                {field: 'trainer', rowspan:'2', width:100, title:'Trainer', halign: 'center'},
                {field: 'trainerFees', rowspan:'2', width:100, title:'TrainerFees', halign: 'center'},
                {field: '', colspan:2, title:'Status', width:80, align: 'center'},
                {field: '', colspan:2, title:'Created', width:80, align: 'center'},
                {field: '', colspan:2, title:'Updated', width:80, align: 'center'},
                {field: '', colspan:2, title:'Approved', width:80, align: 'center'},
            ],[
                {field: 'statusApproval', title:'Approval', width:100, align: 'center', 
                    formatter: function(value, row, index) {
                        if(value === '0') return 'Waiting Approval Bu Fatma';
                        if(value === '1') return 'Waiting Approval Bapak Goesly';
                        if(value === '2') return 'Waiting Approval Bapak Kinenta';
                        return '-';
                    }
                },
                {field: 'statusTraining', title:'Training', width:150, align: 'center',
                    formatter: function(value, row, index) {
                        if(value === '0') return 'Open';
                        if(value === '1') return 'On Progress';
                        if(value === '2') return 'Complete';
                        return '-';
                    }
                },
                {field: 'createdBy', title:'By', width:100, align: 'center'},
                {field: 'createdTime', title:'Date', width:150, align: 'center'},
                {field: 'updatedBy', title:'By', width:100, align: 'center'},
                {field: 'updatedTime', title:'Date', width:150, align: 'center'},
                {field: 'approvedBy', title:'By', width:100, align: 'center'},
                {field: 'approvedTime', title:'Date', width:150, align: 'center'},
            ]],
            toolbar: '#toolbar',
            pagination: true,
            rownumbers: true,
            fit: true,
            nowrap: false,
            // remoteFilter: true,
            // sortName: 'index',
            // sortOrder: 'asc'
            singleSelect:true,
            pageList: [20, 50, 100, 500, 1000],
            pageSize: 20,
        });

        $('#dlg_insert').dialog({
            buttons: [{
                text: 'Save',
                iconCls: 'icon-ok',
                handler: function() {
                    if ($('#frm_insert').form('validate')) {
                        var formData = $('#frm_insert').serialize();
                        sendDataToServer(formData); // This handles the first request (url_save)
                    
                        // Wait for sendDataToServer to finish before proceeding
                        setTimeout(() => {
                            var rowForm = $('#dgTrainee').datagrid('getRows');
                            var totalForm = rowForm.length;
                        
                            for (let i = 0; i < totalForm; i++) {
                                if (rowForm[i].fullName) {
                                    $.ajax({
                                        type: "POST",
                                        url: '<?= base_url('lnd/request_training/create_data_trainee') ?>',
                                        data: {
                                            id: rowForm[i].id,
                                            fullName: rowForm[i].fullName,
                                            national_id: rowForm[i].national_id,
                                            position: rowForm[i].position,
                                            departement: rowForm[i].departement,
                                            departement_subs: rowForm[i].departement_subs,
                                            date_sign: rowForm[i].date_sign
                                        },
                                        dataType: "json",
                                        success: function(res) {
                                            console.log(res, ' 392');
                                            $('#dgTrainee').datagrid('reload');
                                        }
                                    });
                                }
                            }
                        }, 500); // Small delay to ensure sendDataToServer executes first
                    }
                }
            }]
        });

        $('#trainingMaterialFilter').combogrid({
            url: '<?= base_url('lnd/request_training/reads') ?>',
            panelWidth: 450,
            idField: 'trainingActivities',
            textField: 'trainingActivities',
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
                    field: 'trainingActivities',
                    title: 'Training Material',
                    width: 120
                }]
            ],
        });

        $('#traineeFilter').combogrid({
            url: '<?= base_url('lnd/request_training/readsTrainee') ?>',
            panelWidth: 450,
            idField: 'id',
            textField: 'fullName',
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
                    field: 'fullName',
                    title: 'Trainee',
                    width: 120
                }]
            ],
        });

        $('#reasonsFilter').combogrid({
            url: '<?= base_url('lnd/request_training/reads') ?>',
            panelWidth: 450,
            idField: 'reasons',
            textField: 'reasons',
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
                    field: 'reasons',
                    title: 'Reasons',
                    width: 120
                }]
            ],
        });

        $('#departementFilter').combogrid({
            url: '<?= base_url('lnd/request_training/readsTrainee') ?>',
            panelWidth: 450,
            idField: 'id',
            textField: 'departement',
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
                    field: 'departement',
                    title: 'Departement',
                    width: 120
                }]
            ],
        });
    });
    
    // var editingIndex = null; // Track which row is being edited

    $(document).ready(function() {
        $('#dgForm').datagrid({
            data: [], // Empty at first, can be filled from an API
            columns: [[
                { field: 'full_name', title: 'Full Name', width: 180, align: 'center', 
                    formatter: function(value, row, index) {
                        return value || '';
                    },
                    singleSelect: true,
                    editor: { 
                        type: 'combogrid', 
                        options: {
                            required: true,
                            panelWidth: 300,
                            url: '<?= base_url("lnd/request_training/getEmployees") ?>',
                            idField: 'id',
                            textField: 'name',
                            mode: 'remote',
                            columns: [[
                                { field: 'name', title: 'Name', width: 280 },
                            ]],
                            onSelect: function(index, row) {
                                let selectedRow = $('#dgForm').datagrid('getSelected'); // Get the selected row
                                if (selectedRow) {
                                    let rowIndex = $('#dgForm').datagrid('getRowIndex', selectedRow); // Find row index
                                    $('#dgForm').datagrid('updateRow', {
                                        index: rowIndex,
                                        row: {
                                            full_name: row.name,
                                            national_id: row.national_id,
                                            position_id: row.position,
                                            departement_id: row.departement,
                                            departement_sub_id: row.departement_subs,
                                            date_sign: row.date_sign
                                        }
                                    });
                                    $('#dgForm').datagrid('endEdit', rowIndex);
                                    $('#dgForm').datagrid('unselectRow', rowIndex); // Unselect previous row
                                    
                                    // Close the combogrid dropdown
                                    setTimeout(() => {
                                        let ed = $('#dgForm').datagrid('getEditor', { index: rowIndex, field: 'full_name' });
                                        if (ed) {
                                            let $input = $(ed.target);
                                            $input.combogrid('grid').datagrid('clearSelections'); // 🔥 Clear selection
                                            $input.combogrid('hidePanel'); // 🔥 Hide panel
                                            $input.combogrid('clear'); // 🔥 Reset selection
                                            $input.combogrid('textbox').blur(); // 🔥 Force blur
                                            $('.panel').hide(); // 🔥 Destroy ALL panels
                                            $('body').trigger('click'); // 🔥 Fake click to refresh UI
                                            $('.panel-body').hide();  // Hide all combogrid panels
                                        }
                                    }, 50);
                                }
                            }
                        }
                    } 
                },
                { field: 'national_id', title: 'National ID', width: 200, align: 'center'},
                { field: 'position_id', title: 'Position', width: 120, align: 'center' },
                { field: 'departement_id', title: 'Department', width: 150, align: 'center' },
                { field: 'departement_sub_id', title: 'Sub Department', width: 150, align: 'center' },
                { field: 'date_sign', title: 'Join Date', width: 150, align: 'center' }
            ]],
            onClickCell: function(index, row) {
                $('#dgForm').datagrid('beginEdit', index); // Start editing the selected row
                let ed = $('#dgForm').datagrid('getEditor', { index: index, field: 'full_name' });
                console.log(ed && ed.oldHtml == "");
                if (ed && ed.oldHtml == "") {
                    $(ed.target).combogrid('showPanel'); // Open the combogrid dropdown automatically
                }
            }
        });

        // Add row button
        $("#btnAdd").click(function() {
            $('#dgForm').datagrid('appendRow', {
                full_name: '',
                national_id: '',
                position: '',
                department: '',
                sub_department: '',
                join_date: ''
            });
            var lastIndex = $('#dgForm').datagrid('getRows').length - 1;
            $('#dgForm').datagrid('beginEdit', lastIndex);
        });

        // Remove selected row button
        $("#btnRemove").click(function() {
            var row = $('#dgForm').datagrid('getSelected');
            if (row) {
                var index = $('#dgForm').datagrid('getRowIndex', row);
                $('#dgForm').datagrid('deleteRow', index);
            } else {
                alert("Please select a row to remove.");
            }
        });
    });

    // function download_excel() {
    //     window.location.assign('<?= base_url('template/tmp_training_activity3.xls') ?>');
    // }

    // //UPLOAD DATA
    // function upload() {
    //     $('#dlg_upload').dialog('open');
    // }

    //RELOAD
    function reload() {
        window.location.reload();
    }

    //PRINT PDF
    // function pdf() {
    //     $("#printout").get(0).contentWindow.print();
    // }

    // //PRINT EXCEL
    // function excel() {
    //     window.location.assign('<?= base_url('lnd/training_activity/print/excel') ?>');
    // }

    //UPLOAD DATA
    // $('#dlg_upload').dialog({
    //     buttons: [{
    //         text: 'List Failed',
    //         handler: function() {
    //             window.open('<?= base_url('lnd/training_activity/uploadDownloadFailed') ?>', '_blank');
    //         }
    //     }, {
    //         text: 'Upload',
    //         iconCls: 'icon-ok',
    //         handler: function() {
    //             $('#frm_upload').form('submit', {
    //                 url: '<?= base_url('lnd/training_activity/upload') ?>',
    //                 onSubmit: function() {
    //                     if ($(this).form('validate') == false) {
    //                         return $(this).form('validate');
    //                     } else {
    //                         $.messager.progress({
    //                             title: 'Please Wait',
    //                             msg: 'Importing Excel to Database'
    //                         });
    //                     }
    //                 },
    //                 success: function(result) {
    //                     $.messager.progress('close');

    //                     //Clear File
    //                     $.ajax({
    //                         url: "<?= base_url('lnd/training_activity/uploadclearFailed') ?>"
    //                     });

    //                     var json = eval('(' + result + ')');
    //                     requestData(json.total, json);

    //                     function requestData(total, json, number = 1, value = 0, success = 1, failed = 1) {
    //                         if (value < 100) {
    //                             value = Math.floor((number / total) * 100);
    //                             $('#p_upload').progressbar('setValue', value);
    //                             $('#p_start').html(number);
    //                             $('#p_finish').html(total);

    //                             $.ajax({
    //                                 type: "POST",
    //                                 async: true,
    //                                 url: "<?= base_url('lnd/training_activity/uploadCreate') ?>",
    //                                 data: {
    //                                     "data": json[number - 1]
    //                                 },
    //                                 cache: false,
    //                                 dataType: "json",
    //                                 success: function(result) {
    //                                     console.log(result);
    //                                     if (result.theme == "success") {
    //                                         $('#p_success').html(success);
    //                                         var title = "<b style='color: green;'>" + result.title + "</b> | " + result.message;
    //                                         requestData(total, json, number + 1, value, success + 1, failed + 0);
    //                                     } else {
    //                                         $('#p_failed').html(failed);
    //                                         var title = "<b style='color: red;'>" + result.title + "</b> | " + result.message;

    //                                         //Json Failed
    //                                         $.ajax({
    //                                             type: "POST",
    //                                             async: true,
    //                                             url: "<?= base_url('lnd/training_activity/uploadcreateFailed') ?>",
    //                                             data: {
    //                                                 data: json[number - 1],
    //                                                 message: result.message
    //                                             },
    //                                             cache: false
    //                                         });

    //                                         requestData(total, json, number + 1, value, success + 0, failed + 1);
    //                                     }

    //                                     $("#p_remarks").append(title + "<br>");
    //                                 },
    //                                 fail: function(jqXHR, textStatus) {
    //                                     if (textStatus == "error") {
    //                                         Swal.fire({
    //                                             title: 'Connection Time Out, Check Your Connection',
    //                                             showConfirmButton: false,
    //                                             allowOutsideClick: false,
    //                                             allowEscapeKey: false,
    //                                             didOpen: () => {
    //                                                 Swal.showLoading();
    //                                             },
    //                                         });

    //                                         setTimeout(function() {
    //                                             requestData(total, json, number, value, success + 0, failed + 0);
    //                                         }, 5000);
    //                                     }
    //                                 }
    //                             });
    //                         }
    //                     }
    //                 }
    //             });
    //         }
    //     }]
    // });

    function filter() {
        var trainingMaterial = $("#trainingMaterialFilter").combogrid('getValue');
        var trainee = $("#traineeFilter").combogrid('getValue');
        var reasons = $("#reasonsFilter").combogrid('getValue');
        var departement = $("#departementFilter").combogrid('getValue');
        var suggestTrainingDate = $("#suggestTrainingDateFilter").datebox('getValue');
        var params = "?trainingActivities=" + trainingMaterial + "&id=" + trainee + "&reasons=" + reasons + "&departement=" + departement + "&suggestDateTraining=" + btoa(suggestTrainingDate);

        $('#dg').datagrid({
            url: '<?= base_url('lnd/request_training/datatables') ?>' + params
        });

        $("#printout").contents().find('html').html("<center><br><br><br><b style='font-size:20px;'>Please Wait...</b></center>");
    }

    function tableTrainee(number) {
        var lastIndex;
        var dgTrainee = $('#dgTrainee').datagrid({
            url: '<?= base_url('lnd/request_training/getTrainee/') ?>' + number,
            singleSelect: true,
            columns: [
                [{
                    field: 'id',
                    width: 150,
                    readonly: true,
                    halign: 'center',
                    title: "Trainee ID",
                    hidden: true,
                    editor: {
                        type: 'textbox',
                    }
                },{
                    field: 'fullName',
                    width: 150,
                    readonly: true,
                    halign: 'center',
                    title: "Full Name",
                    formatter: function(value, row, index) {
                        return value || '';
                    },
                    singleSelect: true,
                    editor: { 
                        type: 'combogrid', 
                        options: {
                            required: true,
                            panelWidth: 300,
                            url: '<?= base_url("lnd/request_training/getEmployees") ?>',
                            idField: 'id',
                            textField: 'name',
                            mode: 'remote',
                            columns: [[
                                { field: 'name', title: 'Name', width: 280 },
                            ]],
                            onSelect: function(index, row) {
                                let selectedRow = $('#dgTrainee').datagrid('getSelected'); // Get the selected row
                                if (selectedRow) {
                                    let rowIndex = $('#dgTrainee').datagrid('getRowIndex', selectedRow); // Find row index
                                    $('#dgTrainee').datagrid('updateRow', {
                                        index: rowIndex,
                                        row: {
                                            fullName: row.name,
                                            national_id: row.national_id,
                                            position: row.position,
                                            departement: row.departement,
                                            departement_subs: row.departement_subs,
                                            date_sign: row.date_sign
                                        }
                                    });
                                    $('#dgTrainee').datagrid('endEdit', rowIndex);
                                    $('#dgTrainee').datagrid('unselectRow', rowIndex); // Unselect previous row
                                    
                                    // Close the combogrid dropdown
                                    setTimeout(() => {
                                        let ed = $('#dgTrainee').datagrid('getEditor', { index: rowIndex, field: 'full_name' });
                                        if (ed) {
                                            let $input = $(ed.target);
                                            $input.combogrid('grid').datagrid('clearSelections'); // 🔥 Clear selection
                                            $input.combogrid('hidePanel'); // 🔥 Hide panel
                                            $input.combogrid('clear'); // 🔥 Reset selection
                                            $input.combogrid('textbox').blur(); // 🔥 Force blur
                                            $('.panel').hide(); // 🔥 Destroy ALL panels
                                            $('body').trigger('click'); // 🔥 Fake click to refresh UI
                                            $('.panel-body').hide();  // Hide all combogrid panels
                                        }
                                    }, 50);
                                }
                            }
                        }
                    }
                }, {
                    field: 'national_id',
                    width: 150,
                    readonly: true,
                    halign: 'center',
                    title: "National ID",
                    editor: {
                        type: 'textbox',
                        options: {
                            required: true
                        }
                    }
                }, {
                    field: 'position',
                    width: 150,
                    readonly: true,
                    halign: 'center',
                    title: "Position",
                    editor: {
                        type: 'textbox',
                        options: {
                            required: true
                        }
                    }
                }, {
                    field: 'departement',
                    width: 150,
                    halign: 'center',
                    title: "Departement",
                    editor: {
                        type: 'textbox',
                        options: {
                            required: true
                        }
                    }
                }, {
                    field: 'departement_subs',
                    width: 150,
                    halign: 'center',
                    title: "Sub Departement",
                    editor: {
                        type: 'textbox',
                        options: {
                            required: true
                        }
                    }
                }, {
                    field: 'date_sign',
                    width: 150,
                    halign: 'center',
                    title: "Join Date",
                    editor: {
                        type: 'textbox',
                        options: {
                            required: true
                        }
                    }
                }]
            ],
            onClickRow: function(rowIndex) {
                if (lastIndex != rowIndex) {
                    $(this).datagrid('endEdit', lastIndex);
                    $(this).datagrid('beginEdit', rowIndex);
                }
                lastIndex = rowIndex;
            },
            onBeginEdit: function(rowIndex, row) {
                var editors = $('#dgTrainee').datagrid('getEditors', rowIndex);
            },
            onClickCell: onClickCellTrainee,
        });
    }

    var editIndexTrainee = undefined;

    function endEditingTrainee() {
        if (editIndexTrainee == undefined) {
            return true
        }
        if ($('#dgTrainee').datagrid('validateRow', editIndexTrainee)) {
            $('#dgTrainee').datagrid('endEdit', editIndexTrainee);
            editIndexTrainee = undefined;
            return true;
        } else {
            return false;
        }
    }

    function onClickCellTrainee(index, field) {
        if (editIndexTrainee != index) {
            if (endEditingTrainee()) {
                $('#dgTrainee').datagrid('selectRow', index).datagrid('beginEdit', index);
                var ed = $('#dgTrainee').datagrid('getEditor', {
                    index: index,
                    field: field
                });
                if (ed) {
                    ($(ed.target).data('textbox') ? $(ed.target).textbox('textbox') : $(ed.target)).focus();
                }
                editIndexTrainee = index;
            } else {
                setTimeout(function() {
                    $('#dgTrainee').datagrid('selectRow', editIndexTrainee);
                }, 0);
            }
        }
    }

    function addTrainee() {
        if (endEditingTrainee()) {
            $('#dgTrainee').datagrid('appendRow', {
                qty: '0'
            });
            editIndexTrainee = $('#dgTrainee').datagrid('getRows').length - 1;
            $('#dgTrainee').datagrid('selectRow', editIndexTrainee).datagrid('beginEdit', editIndexTrainee);
        }
    }

    function removeTrainee(target) {
        var dg = $('#dgTrainee');
        var row = dg.datagrid('getSelected');
        var rowIndex = dg.datagrid('getRowIndex', row);

        var ed = dg.datagrid('getEditor', {
            index: editIndexTrainee,
            field: 'id'
        });

        $.ajax({
            method: 'post',
            url: "<?= base_url('lnd/request_training/deleteTrainee') ?>",
            data: {
                id: row.id
            },
            success: function(result) {
                var result = eval('(' + result + ')');
                toastr.success(result.message);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                //toastr.error(jqXHR.statusText);
            },
        });

        $('#dgTrainee').datagrid('cancelEdit', editIndexTrainee).datagrid('deleteRow', editIndexTrainee);
        editIndexTrainee = undefined;
    }

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