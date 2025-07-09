<table id="dg" class="easyui-datagrid" style="width:100%;">
</table>

<!-- TOOLBAR DATAGRID -->
<div id="toolbar">
    <div style="width: 100%; padding: 10px;">
        <?= $button ?>
    </div>
</div>

<!-- DIALOG SAVE AND UPDATE -->
<div id="dlg_insert" class="easyui-dialog" title="Add New" data-options="closed: true,modal:true" style="width: 750px; height:600px; top: 20px;">
    <form id="frm_insert" method="post" enctype="multipart/form-data" novalidate style="padding:10px">
        <div id="form_group">
            <fieldset style="width:100%; border:1px solid #d0d0d0; margin-bottom: 10px; border-radius:4px; float: left;">
                <legend><b>Form Feedback</b></legend>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Title</span>
                    <input class="easyui-textbox" id="title" name="title" style="width:60%;">
                </div>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Instruction</span>
                    <input class="easyui-textbox" id="instruction" name="instruction" style="width:60%; height:140px;" multiline="true" value="" style="width:100%;height:120px">
                </div>
            </fieldset>
            <div>
                <h2><b>Feedback Question</b></h2>
            </div>

            <div id="formFeedbackQuestion">
            </div>
            <a href="javascript:void(0)" class="easyui-linkbutton" data-options="plain:true" id="addrow" onclick="addQuestion()"><i class="fa fa-plus"></i> Add Feedback Question</a>
        </div>
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
    function templateQuestion(index, type, initValue='') {
        const prefix = `${type}[${index}]`
        const html = `
                    <div class="form-group" id="${type}_${index}" data-index='${index}'>
                        <fieldset style="width:100%; border:1px solid #d0d0d0; margin-bottom: 10px; border-radius:4px; float: left;">
                            <legend><b class="label-${type}">${toCappital(type)} ${index+1}</b> <a href="javascript:void(0)" class="easyui-linkbutton" data-options="plain:true" onclick="removeQuestion(${index}, '${type}')"><i class="fa fa-times"></i> remove</a></legend>
                            <div class="fitem">
                                <span style="width:35%; display:inline-block;">Question</span>
                                <input style="width:60%;" name="${prefix}.question" value="${initValue?.question || ''}" required="" class="easyui-textbox">
                            </div>
                            <div class="fitem" style="display:flex;">
                                <span style="width:35%; display:inline-block;">Answer</span>
                                <div id="answer_${type}_${index}" style="width:60%; display: flex; gap:8%;">
                                    <label><input class="easyui-radiobutton" name="${prefix}.question_answer" disabled value="10"> Sangat Baik</label>
                                    <label><input class="easyui-radiobutton" name="${prefix}.question_answer" disabled value="8"> Baik</label>
                                    <label><input class="easyui-radiobutton" name="${prefix}.question_answer" disabled value="6"> Cukup</label>
                                    <label><input class="easyui-radiobutton" name="${prefix}.question_answer" disabled value="4"> Kurang Baik</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>`;

        return html;
    }

    function toCappital(text) {
        var titleCase = text.replace('_', ' ')
            .toLowerCase()
            .split(' ')
            .map(word => word.charAt(0).toUpperCase() + word.slice(1))
            .join(' ');
        return titleCase
    }

   
    function getDetailData(id){
        let url = '<?= base_url('lnd/master_feedback/get_detail/') ?>' + id;
        fetch(url)
        .then(response => response.json())
        .then(response => {
            console.log("#resp", response);
            
            if (response.success) {
                renderForm(response.data);
            } else {
                alert("Gagal mengambil data.");
            }
        })
        .catch(error => {
            console.error("Error fetching data:", error);
        });
    }

    function renderForm(data) {
        $('#title').textbox('setValue', data.title);
        $('#instruction').textbox('setValue', data.instruction);

        const questionJson = JSON.parse(data.json_feedback);
        
        questionJson.forEach((value, index) => {
            $('#formFeedbackQuestion').append(templateQuestion(index, 'question', value));
            $.parser.parse(`#question_${index}`);

        });
    }


    function add() {
        const rowData  = $("#dg").datagrid('getData');
        if(rowData.total === 0) {
            $('#dlg_insert').dialog('open');
            $('#dlg_insert').dialog('setTitle', `Add Master Feedback`)
            
            url_save = '<?= base_url('lnd/master_feedback/storeData') ?>';
            method = 'POST';
            $('#frm_insert').form('clear');
            $("#addrow").show();
            $('#formFeedbackQuestion').empty();
            $('#formPostQuestion').empty();
            $('#title').textbox('setValue', 'Questioner Feedback Trainer');
            $('#instruction').textbox('setValue', `Pilih satu jawaban untuk satu pertanyaan.
    Setiap pertanyaan memiliki lima pilihan jawaban dengan skala berikut:
        Baik Sekali: 10
         Baik: 8
         Cukup: 6
         Kurang Baik: 4`);
    
            var formContainer = $('#formFeedbackQuestion');
            var totalData = formContainer.children().length;
            if(formContainer.children().length === 0) addQuestion();
        }else{
            toastr.info('Just only one feedback, please edit existing feedback', 'warning');
        }
    }

    function addQuestion() {
        var formFeedbackQuestion = $('#formFeedbackQuestion');
        var totalData = formFeedbackQuestion.children().length;

        var template = templateQuestion(totalData, 'question');
        formFeedbackQuestion.append(template);
        $.parser.parse(`#question_${totalData}`);
    }
    function removeQuestion(index, type){
        var formData = $(`#${type}_${index}`);
        if (index >= 0) {
            formData.remove();
            rerenderTemplate(type)
        } else {
            toastr.error('Index tidak valid!', 'Error');
        }
    }

    function rerenderTemplate(type){
        var formGroups = $('#formFeedbackQuestion .form-group');
        formGroups.each(function(newIndex) {
            var $formGroup = $(this);
            $formGroup.attr({
                'data-index': newIndex,
                'id': `${type}_${newIndex}`
            });
            
            $formGroup.find(`.label-${type}`).text(`Question ${newIndex + 1}`);
            
            updateInputFields($formGroup, type, newIndex, 'question');
            $formGroup.find('.easyui-linkbutton').attr('onclick', `removeQuestion(${newIndex}, '${type}')`);
        });
    }

    function updateInputFields($container, type, newIndex, fieldName) {
        $container.find(`input[name^="${type}"][name$="${fieldName}"]`).each(function() {
            var $input = $(this);
            var newName = `${type}[${newIndex}].${fieldName}`;
            
            // Update all related elements
            $input.attr('name', newName);
            $input.attr('textboxname', newName);
            
            // Update the corresponding textbox-value hidden input
            $input.siblings('.textbox').find('.textbox-value').attr('name', newName);
        });
    }

    
    function update() {
        var row = $('#dg').datagrid('getSelected');
        if (row) {
            console.log("#row", row);
            $('#formFeedbackQuestion').empty();
            
            // getDetailData(row.id)
            
            $('#dlg_insert').dialog('open');
            $('#dlg_insert').dialog('setTitle', `Edit Master Form Feedback`)
            getDetailData(row.id);
            // $('#frm_insert').form('load', row);
            url_save = '<?= base_url('lnd/master_feedback/update_data/') ?>' + row.id;
            method = 'POST';
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
                        fetch('<?= base_url('lnd/master_feedback/delete_data/') ?>'+row.id, {
                            method: 'DELETE', // Metode DELETE
                        })
                        .then(response => response.json()) // Konversi response ke JSON
                        .then(data => {
                            if (data.code === 200) {
                                $('#dg').datagrid('reload');
                                toastr.success(data.message, 'Success');
                            } else {
                                toastr.error("Something Wrong", 'error');
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

    function formArrayToNestedJson(arrayData) {
        let result = {};

        console.log("#arrayData", arrayData);
        

        arrayData.forEach(item => {
            let keys = item.name.replace(/\]/g, '').split(/[\.\[]/);
            let value = item.value;
            let ref = result;

            for (let i = 0; i < keys.length; i++) {
                let key = keys[i];

                // Jika index terakhir, assign value
                if (i === keys.length - 1) {
                    ref[key] = value;
                } else {
                    // Jika belum ada key, buat array atau object
                    if (!ref[key]) {
                        if (!isNaN(keys[i + 1])) {
                            ref[key] = [];
                        } else {
                            ref[key] = {};
                        }
                    }

                    // Kalau array
                    if (Array.isArray(ref[key])) {
                        let index = parseInt(keys[i + 1]);
                        if (!ref[key][index]) {
                            ref[key][index] = {};
                        }
                        ref = ref[key][index];
                        i++; // lewati index array
                    } else {
                        ref = ref[key];
                    }
                }
            }
        });

        return result;
    }

    function sendDataToServer(requestData, payload) {
        // Buat body dengan format x-www-form-urlencoded (query string)
        const payloadArr = formArrayToNestedJson(requestData.serializeArray());
        // const formData = new URLSearchParams(requestData).toString();
        if(validateNestedJson(payloadArr).length === 0) {
            $.ajax({
                url: url_save,
                method: method,
                data: payload,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log('Upload sukses', response);
                    if(response.code >= 200 && response.code <= 300) {
                        toastr.success(response.message, 'Success');
                        $('#dg').datagrid('reload');
                        $('#dlg_insert').dialog('close');      
                    }
                },
                error: function(xhr) {
                    console.error('Upload gagal', xhr);
                }
            });
        }else{
            toastr.error('Mohon lengkapi data', 'Error');
        }

    }

    function reload() {
        window.location.reload();
    }

    function validateNestedJson(data, path = '') {
        let errors = [];

        for (let key in data) {
            if (!data.hasOwnProperty(key)) continue;

            const value = data[key];
            const currentPath = path ? `${path}.${key}` : key;

            if (typeof value === 'object' && value !== null) {
                if (Array.isArray(value)) {
                    value.forEach((item, index) => {
                        const arrayPath = `${currentPath}[${index}]`;
                        if (typeof item === 'object' && item !== null) {
                            errors = errors.concat(validateNestedJson(item, arrayPath));
                        } else {
                            if (item === '' || item === null || item === undefined) {
                                errors.push(`Field "${arrayPath}" is empty`);
                            }
                        }
                    });
                } else {
                    errors = errors.concat(validateNestedJson(value, currentPath));
                }
            } else {
                if (value === '' || value === null || value === undefined) {
                    errors.push(`Field "${currentPath}" is empty`);
                }
            }
        }

        return errors;
    }

    
    $(function() {
        //SETTING DATAGRID EASYUI
        // initDgForm()
        $('#dg').datagrid({
            url: '<?= base_url('lnd/master_feedback/datatables') ?>',
            columns: [[
                {field: 'ck', rowspan:'2', checkbox: true},
                {field: 'title', rowspan:'2', width:250, title:'Question Type', halign:'center', align: 'left'},
                {field: 'action', halign:'center',
                    formatter: function(value,row,index) {
                    return '<a class="button-blue" target="_blank" href="<?= base_url('lnd/form_test/feedback/') ?>' + row.id + '" style="width:100%;"><i class="fa fa-eye"></i> View</a>';;
                }, rowspan:'2', width:150, title:'View', width:100, align: 'left'},
                {field: '', colspan:2, title:'Created', width:150, halign: 'center'},
                {field: '', colspan:2, title:'Updated', width:80, halign: 'center'},
            ],[
                {field: 'createdBy', title:'By', width:100, align: 'center'},
                {field: 'createdTime', title:'Date', width:150, align: 'center'},
                {field: 'updatedBy', title:'By', width:100, align: 'center'},
                {field: 'updatedTime', title:'Date', width:150, align: 'center'},
            ]],
            toolbar: '#toolbar',
            remoteFilter: true,
            singleSelect: true,
            pagination: true,
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
                    if($(this).form('validate')) {
                        var formValue = $('#frm_insert'); //.serialize();
                        // $('#frm_insert').form()
                        const form = $('#frm_insert')[0];
                        const formData = new FormData(form);
                        const data = formDataToNestedJsonWithFiles(formData);

                        const sanitizedJson = sanitizeEmptyFileFields(data.json);

                        console.log("#sanitizedJson", formArrayToNestedJson(formValue.serializeArray()));
                        
                        
                        const payload = new FormData();
                        payload.append('data', JSON.stringify(sanitizedJson)); // kirim data JSON
                        

                        console.log("#payload", payload, Array.from(payload));
                        
                        

                        sendDataToServer(formValue, payload)
                    }
                }
            }]
        });

    });

    function sanitizeEmptyFileFields(json) {
        if (Array.isArray(json)) {
            return json.map(sanitizeEmptyFileFields);
        } else if (typeof json === 'object' && json !== null) {
            const result = {};
            for (const key in json) {
                if (json.hasOwnProperty(key)) {
                    const value = json[key];

                    // Jika value adalah objek kosong (dari file kosong), ganti jadi string kosong
                    if (
                        typeof value === 'object' &&
                        value !== null &&
                        Object.keys(value).length === 0
                    ) {
                        result[key] = '';
                    } else {
                        result[key] = sanitizeEmptyFileFields(value);
                    }
                }
            }
            console.log("#resu", result);
            
            return result;
        }
        console.log("#jss", json);
        
        return json;
    }

    function formDataToNestedJsonWithFiles(formData) {
        const json = {};
        const files = {};

        for (let [name, value] of formData.entries()) {
            // Skip empty file input
            if (value instanceof File && value.name === '') {
                continue;
            }

            // Check if this field already exists in JSON
            const existing = _.get(json, name);

            if (value instanceof File) {
                // Save file name reference in JSON
                if (existing !== undefined) {
                    if (!Array.isArray(existing)) {
                        _.set(json, name, [existing, value.name]);
                    } else {
                        existing.push(value.name);
                        _.set(json, name, existing);
                    }
                } else {
                    _.set(json, name, value.name);
                }

                // Store actual file
                files[name] = value;

            } else {
                // Normal field handling (support multiple values)
                if (existing !== undefined) {
                    if (!Array.isArray(existing)) {
                        _.set(json, name, [existing, value]);
                    } else {
                        existing.push(value);
                        _.set(json, name, existing);
                    }
                } else {
                    _.set(json, name, value);
                }
            }
        }

        return { json, files };
    }

    
</script>