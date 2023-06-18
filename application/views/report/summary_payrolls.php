<!-- TABLE DATAGRID -->
<table id="dg" class="easyui-datagrid" style="width:99.5%;" toolbar="#toolbar" data-options="rownumbers: true">
    <thead>
        <tr>
            <th rowspan="2" data-options="field:'departement_name',width:200,halign:'center'">Departement</th>
            <th rowspan="2" data-options="field:'departement_sub_name',width:200,halign:'center'">Departement Sub</th>
            <th rowspan="2" data-options="field:'group_name',width:120,halign:'center'">Group</th>
            <th rowspan="2" data-options="field:'employee',width:100,halign:'center'">Employee</th>
            <th rowspan="2" data-options="field:'income',width:150,halign:'center', align:'right', formatter:numberformat">Pay Amount</th>
            <th rowspan="2" data-options="field:'print',width:100,halign:'center',formatter:FormatterFile"> Print</th>
            <th rowspan="2" data-options="field:'excel',width:100,halign:'center',formatter:FormatterExcel"> Excel</th>
            <th colspan="3" data-options="field:'',width:100,halign:'center'"> Approval</th>
        </tr>
        <tr>
            <th data-options="field:'approved',width:100,align:'center',styler:statusStyler, formatter:statusFormatter"> Status</th>
            <th data-options="field:'approved_by',width:120,align:'center'"> By</th>
            <th data-options="field:'approved_date',width:150,align:'center'"> Date</th>
        </tr>
    </thead>
</table>

<div id="toolbar" style="height: 230px;">
    <!-- <div style="width: 100%; display: grid; grid-template-columns: auto auto auto; grid-gap: 5px; display: flex;"> -->
    <fieldset style="width: 99%; border:2px solid #d0d0d0; margin-bottom: 5px; margin-top: 5px; border-radius:4px;">
        <legend><b>Form Filter Data</b></legend>
        <div style="width: 50%; float:left;">
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Period Date</span>
                <input style="width:28%;" name="filter_from" id="filter_from" class="easyui-combogrid"> To
                <input style="width:28%;" name="filter_to" id="filter_to" data-options="prompt:'Date To'" readonly class="easyui-textbox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Division</span>
                <input style="width:60%;" id="filter_division" class="easyui-combobox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Departement</span>
                <input style="width:60%;" id="filter_departement" class="easyui-combobox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;"></span>
                <a href="javascript:;" class="easyui-linkbutton" onclick="filter()"><i class="fa fa-search"></i> Filter Data</a>
            </div>
        </div>
        <div style="width: 49%; float:left;">
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Departement Sub</span>
                <input style="width:60%;" id="filter_departement_sub" class="easyui-combobox">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Employee</span>
                <input style="width:60%;" id="filter_employee" class="easyui-combogrid">
            </div>
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Group</span>
                <input style="width:60%;" id="filter_group" name="filter_group" class="easyui-combobox">
            </div>
        </div>
    </fieldset>

    <?= $button ?>
    <iframe id="printout_recap" src="" style="width: 100%; height:500px; border: 0;" hidden></iframe>
</div>

<div id="dlg_print" class="easyui-window" title="Print Preview" data-options="closed: true,minimizable:false,collapsible:false,maximizable:true,modal:true,footer:'#footer'" style="width: 1000px; height: 500px; top: 20px;">
    <iframe id="printout" src="" style="width: 100%; height:600px; border: 0;"></iframe>
    <div id="footer" style="padding:5px; text-align:right;">
        <a class="easyui-linkbutton c6" id="pdf_detail" onclick="pdf_detail()" style="width:120px">Print</a>
    </div>
</div>
<script>
    function reload() {
        window.location.reload();
    }

    function pdf() {
        $("#printout_recap").get(0).contentWindow.print();
    }

    function pdf_detail() {
        $("#printout").get(0).contentWindow.print();
    }

    function filter() {
        var filter_from = $("#filter_from").combogrid('getValue');
        var filter_to = $("#filter_to").textbox('getValue');
        var filter_division = $("#filter_division").combobox('getValue');
        var filter_departement = $("#filter_departement").combobox('getValue');
        var filter_departement_sub = $("#filter_departement_sub").combobox('getValue');
        var filter_employee = $("#filter_employee").combogrid('getValue');
        var filter_group = $("#filter_group").combobox('getValue');

        if (filter_from == "" || filter_to == "" || filter_division == "") {
            toastr.warning("Please Choose Filter Date & Division");
        } else {
            var url = "?filter_division=" + filter_division +
                "&filter_departement=" + filter_departement +
                "&filter_departement_sub=" + filter_departement_sub +
                '&filter_from=' + filter_from +
                '&filter_to=' + filter_to +
                '&filter_employee=' + filter_employee +
                '&filter_group=' + filter_group;

            $('#dg').datagrid({
                url: '<?= base_url('report/summary_payrolls/datatables') ?>' + url
            });

            $("#printout_recap").attr('src', '<?= base_url('report/summary_payrolls/print_recap') ?>' + url);
        }
    }

    function pdf_view(filter_departement, filter_departement_sub, filter_group) {
        var filter_from = $("#filter_from").combogrid('getValue');
        var filter_to = $("#filter_to").textbox('getValue');
        var filter_division = $("#filter_division").combobox('getValue');
        var filter_employee = $("#filter_employee").combogrid('getValue');

        if (filter_from == "" || filter_to == "") {
            toastr.warning("Please Choose Filter Date");
        } else {
            $("#dlg_print").window('open');
            var url = "?filter_division=" + filter_division +
                "&filter_departement=" + filter_departement +
                "&filter_departement_sub=" + filter_departement_sub +
                '&filter_from=' + filter_from +
                '&filter_to=' + filter_to +
                '&filter_employee=' + filter_employee +
                '&filter_group=' + filter_group;

            $("#printout").contents().find('html').html("<center><br><br><br><b style='font-size:20px;'>Please Wait...</b></center>");
            $("#printout").attr('src', '<?= base_url('report/summary_payrolls/print') ?>' + url);
        }
    }

    function excel_detail(filter_departement, filter_departement_sub, filter_group) {
        var filter_from = $("#filter_from").combogrid('getValue');
        var filter_to = $("#filter_to").textbox('getValue');
        var filter_division = $("#filter_division").combobox('getValue');
        var filter_employee = $("#filter_employee").combogrid('getValue');

        if (filter_from == "" || filter_to == "") {
            toastr.warning("Please Choose Filter Date");
        } else {
            var url = "?filter_division=" + filter_division +
                "&filter_departement=" + filter_departement +
                "&filter_departement_sub=" + filter_departement_sub +
                '&filter_from=' + filter_from +
                '&filter_to=' + filter_to +
                '&filter_employee=' + filter_employee +
                '&filter_group=' + filter_group;

            window.location.assign('<?= base_url('report/summary_payrolls/print/excel') ?>' + url);
        }
    }

    function excel() {
        var filter_from = $("#filter_from").combogrid('getValue');
        var filter_to = $("#filter_to").textbox('getValue');
        var filter_division = $("#filter_division").combobox('getValue');
        var filter_departement = $("#filter_departement").combobox('getValue');
        var filter_departement_sub = $("#filter_departement_sub").combobox('getValue');
        var filter_employee = $("#filter_employee").combogrid('getValue');
        var filter_group = $("#filter_group").combobox('getValue');

        if (filter_from == "" || filter_to == "" || filter_division == "") {
            toastr.warning("Please Choose Filter Date & Division");
        } else {
            var url = "?filter_division=" + filter_division +
                "&filter_departement=" + filter_departement +
                "&filter_departement_sub=" + filter_departement_sub +
                '&filter_from=' + filter_from +
                '&filter_to=' + filter_to +
                '&filter_employee=' + filter_employee +
                '&filter_group=' + filter_group;

            window.location.assign('<?= base_url('report/summary_payrolls/print_recap/excel') ?>' + url);
        }
    }

    $(function() {
        //Filter Cutoff
        $('#filter_from').combogrid({
            url: '<?= base_url('payroll/cutoff/reads') ?>',
            panelWidth: 300,
            idField: 'start',
            textField: 'start',
            mode: 'remote',
            fitColumns: true,
            prompt: 'Date From',
            columns: [
                [{
                    field: 'start',
                    title: 'Date From',
                    width: 120
                }, {
                    field: 'finish',
                    title: 'Date To',
                    width: 120
                }]
            ],
            onSelect: function(val, row) {
                $("#filter_to").textbox('setValue', row.finish);
            }
        });

        //Get Division
        $('#filter_division').combobox({
            url: '<?php echo base_url('employee/divisions/reads'); ?>',
            valueField: 'id',
            textField: 'name',
            prompt: 'Choose All',
            icons: [{
                iconCls: 'icon-clear',
                handler: function(e) {
                    $(e.data.target).combobox('clear').combobox('textbox').focus();
                }
            }],
            onSelect: function(division) {
                $('#filter_departement').combobox({
                    url: '<?php echo base_url('employee/departements/reads'); ?>?division_id=' + division.id,
                    valueField: 'id',
                    textField: 'name',
                    prompt: 'Choose All',
                    icons: [{
                        iconCls: 'icon-clear',
                        handler: function(e) {
                            $(e.data.target).combobox('clear').combobox('textbox').focus();
                        }
                    }],
                    onSelect: function(departement) {
                        $('#filter_departement_sub').combobox({
                            url: '<?php echo base_url('employee/departement_subs/reads'); ?>?division_id=' + division.id + '&departement_id=' + departement.id,
                            valueField: 'id',
                            textField: 'name',
                            prompt: 'Choose All',
                            icons: [{
                                iconCls: 'icon-clear',
                                handler: function(e) {
                                    $(e.data.target).combobox('clear').combobox('textbox').focus();
                                }
                            }],
                            onSelect: function(departement_sub) {
                                $('#filter_employee').combogrid({
                                    url: '<?= base_url('employee/employees/reads?departement_sub_id=') ?>' + departement_sub.id,
                                    panelWidth: 450,
                                    idField: 'id',
                                    textField: 'name',
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
                            }
                        });
                    }
                });
            }
        });

        $('#filter_employee').combogrid({
            url: '<?= base_url('employee/employees/reads') ?>',
            panelWidth: 450,
            idField: 'id',
            textField: 'name',
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

        $("#filter_group").combobox({
            url: '<?= base_url('admin/privilege_groups/reads') ?>',
            valueField: 'id',
            textField: 'name',
            prompt: "Choose All",
            icons: [{
                iconCls: 'icon-clear',
                handler: function(e) {
                    $(e.data.target).combobox('clear').combobox('textbox').focus();
                }
            }],
        });
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

    function FormatterFile(value, row) {
        var linkPrint = "pdf_view('" + row.departement_id + "','" + row.departement_sub_id + "','" + row.group_id + "')";
        if (row.approved_to == "" || row.approved_to == null) {
            $("#pdf_detail").linkbutton('enable');
        } else {
            $("#pdf_detail").linkbutton('disable');
        }
        
        return '<a href="#" onclick="' + linkPrint + '" class="btn btn-primary btn-sm" style="pointer-events: auto; opacity:1; width:100%;"><i class="fa fa-eye"></i> View</a>';
    };

    function FormatterExcel(value, row) {
        if (row.approved_to == "" || row.approved_to == null) {
            var linkPrint = "excel_detail('" + row.departement_id + "','" + row.departement_sub_id + "','" + row.group_id + "')";
        } else {
            var linkPrint = "toastr.info('Still Checked Approval')";
        }

        return '<a href="#" onclick="' + linkPrint + '" class="btn btn-success btn-sm" style="pointer-events: auto; opacity:1; width:100%;"><i class="fa fa-file"></i> Download</a>';
    };

    function numberformat(value, row) {
        const formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        });

        return "<b>" + formatter.format(value) + "</b>";
    }

    //CELLSTYLE STATUS
    function statusStyler(value, row, index) {
        if (row.approved_to == "" || row.approved_to == null) {
            return 'background: #53D636; color:white;';
        } else {
            return 'background: #FF5F5F; color:white;';
        }
    }
    //FORMATTER STATUS
    function statusFormatter(value, row) {
        if (row.approved_to == "" || row.approved_to == null) {
            return 'Approved';
        } else {
            return 'Checked';
        }
    };
</script>