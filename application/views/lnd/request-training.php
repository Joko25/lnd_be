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
                        <input style="width:60%;" id="suggestTrainingDateFilter" class="easyui-combogrid">
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
                    <input style="width:60%;" id="inductionForm" class="easyui-combogrid">
                </div>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Training Activities</span>
                    <input style="width:60%;" id="trainingActivitiesForm" class="easyui-combogrid">
                </div>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Suggest Date Training</span>
                    <input style="width:60%;" id="suggestDateTrainingForm" class="easyui-combogrid">
                </div>
            </div>
            <div style="width:50%; float: left;">
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Reasons</span>
                    <input style="width:60%;" id="reasonsForm" class="easyui-combogrid">
                </div>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Trainer</span>
                    <input style="width:60%;" id="trainerForm" class="easyui-combogrid">
                </div>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Trainer Fees</span>
                    <input style="width:60%;" id="trainerFeesForm" class="easyui-combogrid">
                </div>
            </div>
        </fieldset>
        <!-- <fieldset style="width:100%; border:1px solid #d0d0d0; margin-bottom: 10px; border-radius:4px; float: left;">
            <legend><b>Form Data</b></legend>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Competence Name</span>
                <input style="width:60%;" id="competenceName" name="competenceId" required="" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Index</span>
                <input style="width:60%;" name="index" class="easyui-textbox" required="">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Induction</span>
                <select style="width:60%;" name="induction" required="" class="easyui-combobox" panelHeight="auto">
                    <option value="L&D Program: Upgrade Competence">L&D Program: Upgrade Competence</option>
                    <option value="L&D Program: Refresh Training">L&D Program: Refresh Training</option>
                    <option value="L&D Program: Training Activities">L&D Program: Training Activities</option>
                </select>
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Training Activity</span>
                <input style="width:60%;" name="trainingActivity" required="" class="easyui-textbox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Remarks</span>
                <input style="width:60%;" name="remarks" class="easyui-textbox">
            </div>
        </fieldset> -->
        <fieldset style="width:100%; border:1px solid #d0d0d0; margin-bottom: 10px; border-radius:4px; float: left;">
            <legend><b>Form Data</b></legend>
            <table id="dg" class="easyui-datagrid" style="width:100%;">
                <thead>
                    <tr>
                        <th data-options="field:'number',width:180,align:'center'">Full Name</th>
                        <th data-options="field:'name',width:200,halign:'center'">National ID</th>
                        <th data-options="field:'type',width:120,halign:'center'">Position</th>
                        <th data-options="field:'description',width:150,halign:'center'">Departement</th>
                        <th data-options="field:'description',width:150,halign:'center'"> Sub Departement</th>
                        <th data-options="field:'description',width:150,halign:'center'"> Join Date</th>
                    </tr>
                </thead>
            </table>
        </fieldset>
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
        // $('#competence_id').combogrid({
        //     url: '<?= base_url('lnd/training_activity/readsCompetence') ?>',
        //     panelWidth: 450,
        //     idField: 'id',
        //     textField: 'name',
        //     mode: 'remote',
        //     fitColumns: true,
        //     prompt: 'Choose Competence',
        //     icons: [{
        //         iconCls: 'icon-clear',
        //         handler: function(e) {
        //             $(e.data.target).combogrid('clear').combogrid('textbox').focus();
        //         }
        //     }],
        //     columns: [
        //         [{
        //             field: 'competenceId',
        //             title: 'Competence ID',
        //             width: 120
        //         }, {
        //             field: 'name',
        //             title: 'Competence Name',
        //             width: 200
        //         }]
        //     ],
        // });

        // $('#training_activity_id').combogrid({
        //     url: '<?= base_url('lnd/training_activity/list') ?>',
        //     panelWidth: 450,
        //     idField: 'id',
        //     textField: 'trainingActivity',
        //     mode: 'remote',
        //     fitColumns: true,
        //     prompt: 'Choose Training Activity',
        //     icons: [{
        //         iconCls: 'icon-clear',
        //         handler: function(e) {
        //             $(e.data.target).combogrid('clear').combogrid('textbox').focus();
        //         }
        //     }],
        //     columns: [
        //         [{
        //             field: 'trainingActivityId',
        //             title: 'Training Activity ID',
        //             width: 120
        //         }, {
        //             field: 'trainingActivity',
        //             title: 'Training Activity Name',
        //             width: 200
        //         }]
        //     ],
        // });
    };

    function add() {
        $('#dlg_insert').dialog('open');
        url_save = '<?= base_url('lnd/request_training/create_data') ?>';
        method = 'POST';
        $('#frm_insert').form('clear');
    }

    function update() {
        var row = $('#dg').datagrid('getSelected');
        console.log("#row", row);
        
        if (row) {
            $('#dlg_insert').dialog('open');
            $('#frm_insert').form('load', row);
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

    // $('#competenceName').combogrid({
    //     url: '<?= base_url('lnd/training_activity/readsCompetence') ?>',
    //     panelWidth: 450,
    //     idField: 'id',
    //     textField: 'name',
    //     mode: 'remote',
    //     fitColumns: true,
    //     prompt: 'Choose Competence',
    //     columns: [
    //         [{
    //             field: 'competenceId',
    //             title: 'Competence ID',
    //             width: 120
    //         }, {
    //             field: 'name',
    //             title: 'Competence Name',
    //             width: 200
    //         }]
    //     ],
    // });

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

    // function filter() {
    //     var curiculum_id = $("#competence_id").combogrid('getValue');
    //     var training_activity_id = $("#training_activity_id").combogrid('getValue');
    //     // debug_to_console(curiculum_id);
    //     var params = "?competenceId=" + curiculum_id + "&id=" + training_activity_id;

    //     $('#dg').datagrid({
    //         url: '<?= base_url('lnd/training_activity/datatables') ?>' + params
    //     });

    //     $("#printout").contents().find('html').html("<center><br><br><br><b style='font-size:20px;'>Please Wait...</b></center>");
    //     $("#printout").attr('src', '<?= base_url('employee/departements/print') ?>' + params);
    // }
</script>