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
                        <span style="width:35%; display:inline-block;">Register Date</span>
                        <input style="width:60%;" id="registerDateFilter" class="easyui-datebox" data-options="formatter:myformatter,parser:myparser, editable: false">
                    </div>
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;">Training Date</span>
                        <input style="width:30%;" id="trainingDateFilter" class="easyui-combogrid">
                        <input style="width:30%;" id="trainingDateFilter" class="easyui-combogrid">
                    </div>
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;">Training Material</span>
                        <input style="width:60%;" id="trainingMaterialFilter" class="easyui-combogrid">
                    </div>
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;"></span>
                        <a href="javascript:;" class="easyui-linkbutton" onclick="filter()"><i class="fa fa-search"></i> Filter Data</a>
                    </div>
                </div>
                <div style="width:50%; float: left;">
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;">Category</span>
                        <input style="width:60%;" id="categoryFilter" class="easyui-combogrid">
                    </div>
                    <div class="fitem">
                        <span style="width:35%; display:inline-block;">Trainee</span>
                        <input style="width:60%;" id="traineeFilter" class="easyui-combogrid">
                    </div>
                </div>
            </fieldset>
        </div>
        <?= $button ?>
    </div>
</div>

<!-- DIALOG SAVE AND UPDATE -->
<div id="dlg_insert" class="easyui-dialog" title="Add New" data-options="closed: true,modal:true" style="width: 1400px; padding:10px; top: 20px;">
    <form id="frm_insert" method="post" novalidate>
        <fieldset style="width:100%; border:1px solid #d0d0d0; margin-bottom: 10px; border-radius:4px; float: left;">
            <legend><b>Form Data</b></legend>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Register Date</span>
                <input style="width:60%;" id="registerDate" name="registerDate" required="" class="easyui-datebox" data-options="formatter:myformatter,parser:myparser, editable: false">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block; vertical-align: top;">Training Dates (max 3)</span>
                <div id="trainingDatesWrapper" style="width:60%; display: inline-block;">
                    <table id="trainingDatesTable" style="width:100%;">
                        <tr>
                            <td style="padding-bottom:5px;">
                                <input class="easyui-datebox training-date" style="width:120px;">
                            </td>
                            <td style="padding-bottom:5px;">
                                <select class="easyui-combobox batch-count" style="width:100px;">
                                    <option value="">Batch</option>
                                    <?php for ($i = 1; $i <= 10; $i++): ?>
                                        <option value="<?= $i ?>"><?= $i ?> Batch<?= $i > 1 ? 'es' : '' ?></option>
                                    <?php endfor; ?>
                                </select>
                            </td>
                            <td class="week-label" style="padding-left:5px;">Week: -</td>
                            <td style="padding-left:5px;">
                                <a href="javascript:void(0);" class="easyui-linkbutton" onclick="addTrainingDate()">+</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <input type="hidden" name="training_dates" id="training_dates_json">
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Induction</span>
                <select style="width:60%;" name="induction" required="" class="easyui-combobox" panelHeight="auto">
                    <option value="Basic Requirement">Basic Requirement</option>
                    <option value="L&D Program: Upgrade Competence">L&D Program: Upgrade Competence</option>
                    <option value="L&D Program: Refresh Training">L&D Program: Refresh Training</option>
                    <option value="L&D Program: Training Activities">L&D Program: Training Activities</option>
                </select>
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Training Name</span>
                <input style="width:60%;" name="trainingName" id="trainingName" required="" class="easyui-textbox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Category</span>
                <select style="width:60%;" name="category" id="category" required="" class="easyui-combobox" panelHeight="auto">
                    <option value="New">New</option>
                    <option value="Mutasi">Mutasi</option>
                    <option value="Departement">Departement</option>
                </select>            
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Trainer Name</span>
                <input style="width:60%;" name="" id="" required="" class="easyui-textbox">
            </div>
            <div class="fitem" id="trainee-container">
                <span style="width:35%; display:inline-block;">Trainee</span>
                <input style="width:60%;" name="trainee" id="trainee" required="" class="easyui-textbox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Remarks</span>
                <input style="width:60%;" name="remarks" class="easyui-textbox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Total Trainee</span>
                <input style="width:60%;" name="totalTrainee" class="easyui-textbox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Duration</span>
                <input style="width:60%;" name="duration" class="easyui-textbox" required="">
            </div>
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
<iframe id="printout" src="<?= base_url('lnd/schedule_training/print') ?>" style="width: 100%;" hidden></iframe>

<script>
    window.onload = function() {
        $('#trainingName').combogrid({
            url: '<?= base_url('lnd/training_activity/list') ?>',
            panelWidth: 450,
            idField: 'id',
            textField: 'trainingActivity',
            mode: 'remote',
            fitColumns: true,
            prompt: 'Choose Training Name',
            icons: [{
                iconCls: 'icon-clear',
                handler: function(e) {
                    $(e.data.target).combogrid('clear').combogrid('textbox').focus();
                }
            }],
            columns: [
                [{
                    field: 'competenceName',
                    title: 'Competence Standard',
                    width: 120
                }, {
                    field: 'trainingActivity',
                    title: 'Training Activity Name',
                    width: 200
                }]
            ],
        });
    }

    function add() {
        $('#dlg_insert').dialog('open');
        url_save = '<?= base_url('lnd/schedule_training/create_data') ?>';
        method = 'POST';
        $('#frm_insert').form('clear');
    }

    function update() {
        var row = $('#dg').datagrid('getSelected');
        console.log("#row", row);
        
        if (row) {
            $('#dlg_insert').dialog('open');
            $('#frm_insert').form('load', row);
            url_save = '<?= base_url('lnd/schedule_training/update_data/') ?>' + row.id;
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
                        fetch('<?= base_url('lnd/schedule_training/delete_data/') ?>'+row.id, {
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
            console.log(response.json());
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

    const calendarColumns = generateCalendarColumns("2025-01-01", "2025-12-01");

    $(function() {
        //SETTING DATAGRID EASYUI
        $('#dg').datagrid({
            url: '<?= base_url('lnd/schedule_training/datatables') ?>',
            columns: [[
                {field: 'ck', rowspan:'2', checkbox: true},
                {field: 'induction', rowspan:'2', width:280, title:'Induction', halign: 'center'},
                {field: 'trainingName', rowspan:'2', width:150, title:'Training Name', halign: 'center'},
                {field: 'trainer', rowspan:'2', width:150, title:'Trainer', halign: 'center'},
                {field: 'trainee', rowspan:'2', width:150, title:'Trainee', halign: 'center'},
                {field: 'remarks', rowspan:'2', width:100, title:'Remarks', halign: 'center'},
                {field: 'totalTrainee', rowspan:'2', width:80, title:'Total Trainee', halign: 'center'},
                {field: 'duration', rowspan:'2', width:80, title:'Duration (Minute)', halign: 'center'},
                {field: 'date', rowspan:'2', width:100, title:'Date', halign: 'center',
                    formatter: function() {
                        return '<div style="text-align:center;">Plan<hr style="margin:4px 0;">Actual</div>';
                    },
                    styler: function() {
                        return 'white-space: normal;';
                    }
                },
                ...calendarColumns.filter(col => !Array.isArray(col)), // top headers

                {field: '', colspan:2, title:'Created', width:80, align: 'center'},
                {field: '', colspan:2, title:'Updated', width:80, align: 'center'},
            ],[
                ...calendarColumns
                    .filter(col => Array.isArray(col)) // week fields
                    .flat(),
                {field: 'createdBy', title:'By', width:100, align: 'center'},
                {field: 'createdTime', title:'Date', width:150, align: 'center'},
                {field: 'updatedBy', title:'By', width:100, align: 'center'},
                {field: 'updatedTime', title:'Date', width:150, align: 'center'},
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
                    if ($('#frm_insert').form('validate')) {
                        const trainingDates = getTrainingDateRows();
                        console.log(trainingDates);
                        
                        if (trainingDates.length === 0) {
                            toastr.error("Please select at least one training date.", "Error");
                            return;
                        }

                        // Set the value of the hidden input
                        $('#training_dates_json').val(JSON.stringify(trainingDates));

                        let formData = $('#frm_insert').serialize();
                        sendDataToServer(formData);
                    }
                }
            }]
        });

        $('#category').combobox({
            onSelect: function (record) {
                const value = record.value;

                // Clear and rebuild the #trainee input
                let html = '';
                if (value === 'New' || value === 'Mutasi') {
                    html = `
                        <span style="width:35%; display:inline-block;">Trainee</span>
                        <input style="width:60%;" name="trainee" id="trainee" value="New MP/Mutasi" required class="easyui-textbox" disabled>
                    `;
                } else if (value === 'Departement') {
                    html = `
                        <span style="width:35%; display:inline-block;">Trainee</span>
                        <input style="width:60%;" name="trainee" id="trainee" required class="easyui-combobox">
                    `;
                }

                // Replace the content inside the container
                $('#trainee-container').html(html);

                // Re-parse the newly added element
                $.parser.parse('#trainee-container');

                // If Departement selected, initialize combobox
                if (value === 'Departement') {
                    $('#trainee').combogrid({
                        url: '<?= base_url('lnd/schedule_training/readsDepartements') ?>',
                        panelWidth: 450,
                        idField: 'id',
                        textField: 'name',
                        mode: 'remote',
                        fitColumns: true,
                        prompt: 'Choose Training Name',
                        icons: [{
                            iconCls: 'icon-clear',
                            handler: function(e) {
                                $(e.data.target).combogrid('clear').combogrid('textbox').focus();
                            }
                        }],
                        columns: [
                            [{
                                field: 'name',
                                title: 'Employee Name',
                                width: 120
                            }]
                        ],
                    });
                }
            }
        });
        bindDatePickers();
    });

    function generateCalendarColumns(startDateStr, endDateStr) {
        const startDate = new Date(startDateStr);
        const endDate = new Date(endDateStr);
        const columns = [];

        while (startDate <= endDate) {
            const year = startDate.getFullYear();
            const month = startDate.getMonth(); // 0-indexed
            const monthName = startDate.toLocaleString('default', { month: 'long' });
            const weeks = ['W1', 'W2', 'W3', 'W4'];

            const children = weeks.map((w, i) => ({
                field: `${monthName}_${year}_W${i + 1}`,
                title: w,
                width: 80,
                align: 'center',
                formatter: function (value) {
					if(value) {
						// Format the value to show the date in 'dd MMM' format
						const date = new Date(value); // Assuming value is a valid date string
						const day = date.getDate();
						const month = date.toLocaleString('default', { month: 'short' }); // Get short month (e.g., 'Apr')
                        console.log(value);
                        
						return `${day} ${month}`;
					}
                    return ``;
                },
                styler: function () {
                    return 'white-space: normal;';
                }
            }));

            columns.push({
                title: `${monthName} ${year}`,
                colspan: weeks.length,
                align: 'center'
            });

            // Add a placeholder for child fields
            columns.push(children);

            // Go to next month
            startDate.setMonth(month + 1);
        }

        return columns;
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

    let maxDates = 3;

    function addTrainingDate() {
        let rowCount = document.querySelectorAll('#trainingDatesTable tr').length;

        if (rowCount >= maxDates) {
            alert("Maximum 3 training dates allowed.");
            return;
        }

        let row = `
            <tr>
                <td style="padding-bottom:5px;">
                    <input class="easyui-datebox training-date" style="width:120px;">
                </td>
                <td style="padding-bottom:5px;">
                    <select class="easyui-combobox batch-count"  style="width:100px;">
                        <option value="">Batch</option>
                        ${[...Array(10).keys()].map(i => `<option value="${i+1}">${i+1} Batch${i > 0 ? 'es' : ''}</option>`).join('')}
                    </select>
                </td>
                <td class="week-label" style="padding-left:5px;">Week: -</td>
                <td style="padding-left:5px;">
                    <a href="javascript:void(0);" class="easyui-linkbutton" onclick="removeRow(this)">-</a>
                </td>
            </tr>
        `;
        
        $('#trainingDatesTable').append(row);
        $.parser.parse('#trainingDatesTable'); // Parse new EasyUI widgets
        // Re-initialize EasyUI widgets
        $('#trainingDatesTable tr:last-child input.training-date').datebox();
        $('#trainingDatesTable tr:last-child select.batch-count').combobox();
        bindDatePickers(); // Re-bind new training-date input with event
    }

    function removeRow(link) {
        $(link).closest('tr').remove();
    }

    function updateWeek(input) {
        const value = $(input).datebox('getValue'); // Get value as a string (format: yyyy-mm-dd)
        if (!value) return;

        const parts = value.split('-');
        if (parts.length !== 3) return;

        const day = parseInt(parts[2]);

        let week = '-';
        if (day >= 1 && day <= 8) week = 'W1';
        else if (day >= 9 && day <= 16) week = 'W2';
        else if (day >= 17 && day <= 24) week = 'W3';
        else if (day >= 25 && day <= 31) week = 'W4';

        // Find the <td class="week-label"> in the same row and update it
        $(input).closest('tr').find('.week-label').text('Week: ' + week);
    }

    function getWeekByDay(day) {
        if (day >= 1 && day <= 8) return 'W1';
        if (day >= 9 && day <= 16) return 'W2';
        if (day >= 17 && day <= 24) return 'W3';
        if (day >= 25 && day <= 31) return 'W4';
        return '-';
    }

    // Initialize all existing dateboxes
    function bindDatePickers() {
        $('.training-date').each(function () {
            // prevent rebinding the same input again
            if (!$(this).data('bound')) {
                $(this).datebox({
                    formatter: myformatter,
                    parser: myparser,
                    editable: false,
                    onSelect: function (date) {
                        const day = date.getDate();
                        const week = getWeekByDay(day);
                        $(this).closest('tr').find('.week-label').text('Week: ' + week);
                    }
                });
                $(this).data('bound', true); // mark as bound
            }
        });
    }

    function getTrainingDateRows() {
        const rows = $('#trainingDatesTable tr');
        const result = [];

        rows.each(function () {
            const dateInput = $(this).find('input.training-date');
            const batchSelect = $(this).find('select.batch-count');
            const weekLabel = $(this).find('.week-label').text().replace('Week: ', '').trim();

            const trainingDate = dateInput.datebox('getValue'); // get EasyUI datebox value
            const batchCount = batchSelect.combobox('getValue'); // get EasyUI combobox value

            if (trainingDate) {
                result.push({
                    training_date: trainingDate,
                    batch_count: batchCount || null,
                    week: weekLabel || "-"

                });
            }
        });

        return result;
    }



    // Initial call
    // $(function () {
    //     bindDatePickers();
    // });
</script>
