<!-- TABLE DATAGRID -->
<table id="dg" class="easyui-datagrid" style="width:99.5%;" toolbar="#toolbar">
    <thead>
        <tr>
            <th data-options="field:'departement_name',width:150,halign:'center'">Departement</th>
            <th data-options="field:'departement_sub_name',width:150,halign:'center'">Departement Sub</th>
            <th data-options="field:'group_name',width:150,halign:'center'">Group</th>
            <th data-options="field:'employee',width:150,halign:'center'">Employee</th>
            <th data-options="field:'income',width:100,halign:'center', align:'right', formatter:numberformat">Pay Amount</th>
            <th data-options="field:'departement_id',width:100,halign:'center',formatter:FormatterFile"> Print</th>
        </tr>
    </thead>
</table>

<div id="toolbar" style="height: 230px;">
    <!-- <div style="width: 100%; display: grid; grid-template-columns: auto auto auto; grid-gap: 5px; display: flex;"> -->
    <fieldset style="width: 99%; border:2px solid #d0d0d0; margin-bottom: 5px; margin-top: 5px; border-radius:4px;">
        <legend><b>Form Filter Data</b></legend>
        <div style="width: 50%; float:left;">
            <div class="fitem">
                <span style="width:35%; display:inline-block;">Trans Date</span>
                <input style="width:28%;" id="filter_from" class="easyui-datebox" value="<?= date("Y-m-01") ?>" data-options="formatter:myformatter,parser:myparser, editable:false"> To
                <input style="width:28%;" id="filter_to" class="easyui-datebox" value="<?= date("Y-m-t") ?>" data-options="formatter:myformatter,parser:myparser, editable:false">
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
    <a href="javascript:;" class="easyui-linkbutton" data-options="plain:true" onclick="pdf_recap()"><i class="fa fa-print"></i> Print Recap</a>
    <a href="javascript:;" class="easyui-linkbutton" data-options="plain:true" onclick="excel_recap()"><i class="fa fa-file"></i> Excel Recap</a>

    <iframe id="printout_recap" src="" style="width: 100%; height:500px; border: 0;" hidden></iframe>
</div>

<div class="easyui-panel" title="Print Preview" style="width:100%;padding:10px;">
    <iframe id="printout" src="" style="width: 100%; height:500px; border: 0;"></iframe>
</div>
<script>
    function reload() {
        window.location.reload();
    }

    function pdf() {
        $("#printout").get(0).contentWindow.print();
    }

    function pdf_recap(){
        $("#printout_recap").get(0).contentWindow.print();
    }

    function filter() {
        var filter_from = $("#filter_from").datebox('getValue');
        var filter_to = $("#filter_to").datebox('getValue');
        var filter_division = $("#filter_division").combobox('getValue');
        var filter_departement = $("#filter_departement").combobox('getValue');
        var filter_departement_sub = $("#filter_departement_sub").combobox('getValue');
        var filter_employee = $("#filter_employee").combogrid('getValue');
        var filter_group = $("#filter_group").combobox('getValue');

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

            $('#dg').datagrid({
                url: '<?= base_url('report/summary_payrolls/datatables') ?>' + url
            });

            $("#printout_recap").attr('src', '<?= base_url('report/summary_payrolls/print_recap') ?>' + url);
        }
    }

    function pdf_view(filter_departement, filter_departement_sub, filter_group){
        var filter_from = $("#filter_from").datebox('getValue');
        var filter_to = $("#filter_to").datebox('getValue');
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

                $("#printout").contents().find('html').html("<center><br><br><br><b style='font-size:20px;'>Please Wait...</b></center>");
                $("#printout").attr('src', '<?= base_url('report/summary_payrolls/print') ?>' + url);
        }
    }

    function excel() {
        var filter_from = $("#filter_from").datebox('getValue');
        var filter_to = $("#filter_to").datebox('getValue');
        var filter_division = $("#filter_division").combobox('getValue');
        var filter_departement = $("#filter_departement").combobox('getValue');
        var filter_departement_sub = $("#filter_departement_sub").combobox('getValue');
        var filter_employee = $("#filter_employee").combogrid('getValue');
        var filter_group = $("#filter_group").combobox('getValue');

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

    function excel_recap(){
        var filter_from = $("#filter_from").datebox('getValue');
        var filter_to = $("#filter_to").datebox('getValue');
        var filter_division = $("#filter_division").combobox('getValue');
        var filter_departement = $("#filter_departement").combobox('getValue');
        var filter_departement_sub = $("#filter_departement_sub").combobox('getValue');
        var filter_employee = $("#filter_employee").combogrid('getValue');
        var filter_group = $("#filter_group").combobox('getValue');

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

            window.location.assign('<?= base_url('report/summary_payrolls/print_recap/excel') ?>' + url);
        }
    }

    $(function() {
        //Get Departement
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
        var linkPrint = "pdf_view('"+row.departement_id+"','"+row.departement_sub_id+"','"+row.group_id+"')";
        return '<a href="#" onclick="' + linkPrint + '" class="btn btn-success btn-sm" style="pointer-events: auto; opacity:1; width:100%;"><i class="fa fa-eye"></i> View</a>';
    };

    function numberformat(value, row) {
        const formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        });

        return "<b>" + formatter.format(value) + "</b>";
    }
</script>