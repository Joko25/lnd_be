<div class="p-4 easyui-navpanel" style="margin-bottom: 50px;">
    <header>
        <div class="m-toolbar">
            <div class="m-title">Form <?php echo $title?></div>
        </div>
    </header>

    <div class="alert alert-primary mt-4" role="alert" id="alertContainer">
        <center>
            <p class="m-0" id="alertMessage"><b></b></p>
            <hr>
        </center>
    </div>

    <div id="attendanceContainer">
        <header>
            <div class="m-toolbar">
                <div class="m-title">Absence</div>
            </div>
        </header>
        <form id="formAbsen">
            <div style="margin-bottom:5px">
                <input class="easyui-combogrid" label="Employee ID" name="employeeId" id="employeeId" prompt="Employee ID" labelPosition="top" required="" style="width:100%">
            </div>
            <div style="margin-bottom:5px">
                <input class="easyui-textbox" label="Full Name" prompt="Full name" name="employeeName" id="employeeName" disabled style="width:100%" labelPosition="top">
            </div>
            <div style="margin-bottom:5px">
                <input class="easyui-textbox" label="Departement" prompt="Departement" name="employeeDepartement" id="employeeDepartement" disabled style="width:100%" labelPosition="top">
            </div>
            <div style="margin-bottom:5px">
                <input class="easyui-textbox" label="Sub Departement" prompt="Sub Departement" name="employeeSubDept" id="employeeSubDept" disabled style="width:100%" labelPosition="top">
            </div>
            <div style="margin-bottom:5px">
                <input class="easyui-textbox" label="Training Name" prompt="Training Name" name="trainingName" id="trainingName" disabled style="width:100%" labelPosition="top">
            </div>
            <div style="margin-bottom:5px">
                <input class="easyui-textbox" label="Trainer Name" prompt="Trainer Name" name="trainerName" id="trainerName" disabled style="width:100%" labelPosition="top">
            </div>
            <div style="margin-bottom:5px">
                <input class="easyui-datebox" label="Training Date" prompt="Training Date" name="trainingDate" id="trainingDate" labelPosition="top" data-options="editable:false,panelWidth:220,panelHeight:240,iconWidth:30" style="width:100%">
            </div>
            <div style="margin-bottom:5px">
                <input class="easyui-textbox" label="Location" prompt="Location" style="width:100%" name="trainingLocation" value="PT. PIRANTI TEKNIK INDONESIA" labelPosition="top">
            </div>
        <footer>
            <div class="m-toolbar">
                <div style="text-align:center;margin-top:30px">
                    <button type="submit" class="easyui-linkbutton" style="width:100%;height:40px"><span style="font-size:16px">Next</span></button>
                </div>
            </div>
        </footer>
        </form>
    
    </div>

    <div id="titleContainer" class="alert alert-primary mt-4" style="text-align:center">
        <div>
            <h5>PT. PIRANTI TEKNIK INDONESIA</h5>
        </div>
        <div>
            <span id="fullNameTitle"></span><br />
            <span id="trainingNameTitle"></span><br />
            <span id="departementTitle"></span><br />
            <span id="typeTitle"><?php echo $title; ?></span>
            <span id="finalScoreTitle">You Final Score for this test is <b><span id="scoreFinalTitle"></span>/100</b></span><br />
        </div>
        <div>
            <div style="text-align:center;margin-top:30px" id="btnStartTest">
                <button class="easyui-linkbutton" style="width:50%;height:40px" onClick="startTest()"><span style="font-size:16px">Start Test</span></button>
            </div>

            <div style="text-align:center;margin-top:30px" id="btnResultTest">
                <button class="easyui-linkbutton" style="width:50%;height:40px" onClick="resultTest()"><span style="font-size:16px">View Result</span></button>
            </div>

        </div>

    </div>

    <div id="preTestContainer" style="width:100%">
    PRE TEST
    </div>

    <div id="postTestContainer" style="width:100%">
    POST TEST

    </div>

    <div id="resultContainer" style="width:100%">
    REVIEW TEST
    </div>

    
</div>

<script type="text/javascript">

    // STAG: 1. Absence, 2. Info Test, 3. Form test, 4. Finish Test, 5. Review Test;
    let testType = `<?php echo $test_type?>`

    let absenceData = $('#formAbsen').serialize();
    window.originalQuestionJson = <?php echo json_encode($data); ?>;

    $(function() {
        $("#alertContainer").hide();
        $("#attendanceContainer").show();
        $("#titleContainer").hide();
        $("#preTestContainer").hide();
        $("#postTestContainer").hide();
        $("#resultContainer").hide();
        let data = <?php echo json_encode($data); ?>;
        $("#employeeId").combogrid({
            url: '<?= base_url('employee/employees/readFulls') ?>',
            panelWidth: 450,
            idField: 'number',
            textField: 'name',
            mode: 'remote',
            fitColumns: true,
            prompt: 'Choose All',
            onSelect: onSelectEmployee,
            icons: [{
                iconCls: 'icon-clear',
                handler: function(e) {
                    $(e.data.target).combogrid('clear').combogrid('textbox').focus();
                }
            }],
            columns: [
                [{
                    field: 'number',
                    title: 'Employee ID',
                    width: 120
                }, {
                    field: 'name',
                    title: 'Employee Name',
                    width: 200
                }]
            ],
        });

        submitAbsence();
        
    })

    function renderFormFromJson(containerSelector, jsonData) {
        const data = typeof jsonData === 'string' ? JSON.parse(jsonData) : jsonData;
        const $container = $(containerSelector);
        $container.empty();

        let html = `<form id="formQuestion" method="post" style="width:100%">`;

        data.forEach((item, index) => {
            const questionId = `question_${index}`;
            html += `<div class="question-block" style="margin-bottom:20px;">`;

            // Panel khusus untuk pertanyaan
            html += `<div class="easyui-panel" title="Question ${index + 1}" data-options="fit:true" style="padding:10px;">`;

            // Image on TOP
            if (item.imagePosition === 'UP' && item.imageQuestion) {
                html += `<div><img src="/uploads/questions/${item.imageQuestion}" style="max-width:100%; margin-bottom:10px;"></div>`;
            }

            // Question Text
            html += `
                <div style="margin-bottom:10px;">
                    <input class="easyui-textbox" name="q_${index}" value="${item.question}" data-options="multiline:true,readonly:true" style="width:100%;">
                </div>`;

            // Image on BOTTOM
            if (item.imagePosition === 'BELOW' && item.imageQuestion) {
                html += `<div><img src="/uploads/questions/${item.imageQuestion}" style="max-width:100%; margin-top:10px;"></div>`;
            }

            // Options Panel
            html += `<div class="easyui-panel" style="border:none;">`;
            item.opsion.forEach((opt, optIndex) => {
                const radioId = `${questionId}_opt_${optIndex}`;
                html += `
                    <div style="margin:5px 0;">
                        <label class="custom-radio">
                            <input type="radio" name="${questionId}" id="${radioId}" value="${optIndex}">
                            ${opt.title}
                        </label>`;

                if (opt.image && Array.isArray(opt.image) && opt.image.length > 0) {
                    opt.image.forEach(img => {
                        html += `<div><img src="/uploads/questions/${img}" style="max-width:150px; margin-top:5px;"></div>`;
                    });
                }

                html += `</div>`;
            });
            html += `</div>`; // end options panel

            html += `</div>`; // end question panel
            html += `</div>`; // end question block
        });

        html += `
            <div style="text-align:center;margin-top:30px">
                <button type="button" id="submitBtn" class="easyui-linkbutton" onClick="submitTest()" style="width:100%;height:40px">Submit</button>
            </div>
        `;

        html += `</form>`;

        // Inject ke container
        $container.html(html);

        // Re-parse EasyUI setelah konten dimasukkan
        setTimeout(() => {
            $.parser.parse(containerSelector);
        }, 100); // Delay agar elemen benar-benar terlihat
    }



    function submitTest() {
        const jsonData = JSON.parse(window.originalQuestionJson.json_question); // simpan json awal di variable global sebelumnya
        const result = evaluateTest(jsonData, '#preTestContainer');

        console.log('Total Point:', result.totalPoint);
        console.log('User Answers:', result.userAnswers);
        $("#resultContainer").show();
        $("#preTestContainer").hide();
        
        $("#btnResultTest").show();
        $("#btnStartTest").hide();
        $("#finalScoreTitle").show();
        $("#scoreFinalTitle").text(result.totalPoint);

        renderTestResult(jsonData, result.userAnswers, '#resultContainer');

    }

    function evaluateTest(jsonData, containerSelector) {
        const data = typeof jsonData === 'string' ? JSON.parse(jsonData) : jsonData;
        const $container = $(containerSelector);

        console.log("##", data, jsonData, $container);
        

        let totalPoint = 0;
        let userAnswers = [];

        data.forEach((item, index) => {
            const questionId = `question_${index}`;
            const selected = $(`input[name="${questionId}"]:checked`, $container).val();

            const selectedIndex = selected !== undefined ? parseInt(selected) : null;
            const correctIndex = parseInt(item.correct_answer);

            let point = 0;
            if (selectedIndex !== null && item.opsion[selectedIndex]) {
            point = parseInt(item.opsion[selectedIndex].point || 0);
            totalPoint += point;
            }

            userAnswers.push({
            question: item.question,
            selectedIndex,
            correctIndex,
            selectedText: selectedIndex !== null ? item.opsion[selectedIndex].title : null,
            isCorrect: selectedIndex === correctIndex,
            point
            });
        });

        return {
            totalPoint,
            userAnswers
        };
    }

    function renderTestResult(jsonData, userAnswers, containerSelector) {
        const data = typeof jsonData === 'string' ? JSON.parse(jsonData) : jsonData;
        const $container = $(containerSelector);
        $container.empty();

        data.forEach((item, index) => {
            const answer = userAnswers[index];
            const questionId = `question_${index}`;
            let html = `<div class="easyui-panel" title="Result for Question ${index + 1}" style="margin-bottom:15px;padding:10px;">`;

            if (item.imagePosition === 'UP' && item.imageQuestion) {
            html += `<div><img src="/uploads/questions/${item.imageQuestion}" style="max-width:100%; margin-bottom:10px;"></div>`;
            }

            html += `<div style="font-weight:bold; margin-bottom:5px;">${item.question}</div>`;

            if (item.imagePosition === 'BELLOW' && item.imageQuestion) {
            html += `<div><img src="/uploads/questions/${item.imageQuestion}" style="max-width:100%; margin-top:10px;"></div>`;
            }

            html += `<div>`;
            item.opsion.forEach((opt, optIndex) => {
            const isSelected = answer.selectedIndex === optIndex;
            const isCorrect = parseInt(item.correct_answer) === optIndex;

            html += `
                <div style="margin:5px 0; ${isCorrect ? 'color:blue;' : ''}">
                <label>
                    <input type="radio" disabled ${isSelected ? 'checked' : ''}>
                    ${opt.title}
                    ${isCorrect ? '<span style="color:blue;">✅ Correct</span>' : ''}
                    ${isSelected && !isCorrect ? '<span style="color:red;">❌ Your Choice</span>' : ''}
                </label>
                </div>
            `;
            });
            html += `</div></div>`;
            $container.append(html);
        });

        $.parser.parse(containerSelector);
        }



    function onSelectEmployee(index, data) {
        if(data) {
            console.log("#record", data);
            $("#employeeName").textbox('setValue', data.name);
            $("#fullNameTitle").text(data.name)
            $("#employeeDepartement").textbox('setValue', data.departement_name);
            $('#departementTitle').text(data.departement_name)
            $("#employeeSubDept").textbox('setValue', data.departement_sub_name);
        }
    }

    function submitAbsence(){
        $("#formAbsen").on('submit', function (e){
            e.preventDefault();
            let formData = 
            console.log($(this).serializeArray());
            let deptName = $("#employeeDe")
            $('#attendanceContainer').hide();
            $("#titleContainer").show();
            $("#btnResultTest").hide();
            $("#finalScoreTitle").hide();
        })
    }

    function startTest() {
        $("#titleContainer").hide();
        if(testType === 'PRE_TEST') {
            $("#preTestContainer").show();
            let data = <?php echo json_encode($data); ?>;
            if(data.json_question) {
                renderFormFromJson('#preTestContainer', data.json_question)
            }

        }else if(testType === 'POST_TEST'){
            $("#postTestContainer").show();

        }else{
            $("#resultContainer").show();

        }

    }
</script>