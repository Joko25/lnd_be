<div class="easyui-accordion" style="width:100%;">

    <div title="Click this to hide the filter" data-options="selected:true" style="padding:10px; background:#F4F4F4;">

        <fieldset style="width: 99%; border:2px solid #d0d0d0; margin-bottom: 5px; border-radius:4px;">

            <legend><b>Form Filter Data</b></legend>

            <div style="width: 50%; float:left;">

            <div class="fitem">

                <span style="width:35%; display:inline-block;">Period Date</span>

                    <input style="width:28%;" name="filter_from" id="filter_from" class="easyui-combogrid">

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

                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Job Type</span>
                    <select style="width:60%;" id="filter_job_type" class="easyui-combobox">
                        <option value="">Choose All</option>
                        <option value="DIRECT">DIRECT</option>
                        <option value="ADM & GENERAL">ADM & GENERAL</option>
                        <option value="INDIRECT">INDIRECT</option>
                        <option value="OTHER">OTHER</option>
                        <option value="ADMINISTRATION">ADMINISTRATION</option>
                    </select>
                </div>
            </div>

        </fieldset>



        <?= $button ?>

    </div>

</div>



<div class="easyui-panel" title="Print Preview" style="width:100%;padding:10px;" data-options="fit:true">

    <iframe id="printout" src="" style="width: 100%; height:95%; border: 0;"></iframe>

</div>

<script>

    function reload() {

        window.location.reload();

    }



    function pdf() {

        $("#printout").get(0).contentWindow.print();

    }



    function filter() {

        var filter_from = $("#filter_from").combogrid('getValue');

        var filter_to = $("#filter_to").textbox('getValue');

        var filter_division = $("#filter_division").combobox('getValue');

        var filter_departement = $("#filter_departement").combobox('getValue');

        var filter_departement_sub = $("#filter_departement_sub").combobox('getValue');

        var filter_employee = $("#filter_employee").combogrid('getValue');

        var filter_group = $("#filter_group").combobox('getText');

        var filter_job_type = $("#filter_job_type").combobox('getValue');

        if (filter_from == "" || filter_to == "") {

            toastr.warning("Please Choose Filter Date");

        } else {

            var url = "?filter_division=" + filter_division +

                "&filter_departement=" + filter_departement +

                "&filter_departement_sub=" + filter_departement_sub +

                '&filter_from=' + filter_from +

                '&filter_to=' + filter_to +

                '&filter_employee=' + filter_employee +

                '&filter_group=' + window.btoa(filter_group) +
                
                '&filter_job_type=' + filter_job_type;



                $("#printout").attr('src', '<?= base_url('report/summary_labour/print') ?>' + url);
        }
    }



    function excel() {

        var filter_from = $("#filter_from").combogrid('getValue');

        var filter_to = $("#filter_to").textbox('getValue');

        var filter_division = $("#filter_division").combobox('getValue');

        var filter_departement = $("#filter_departement").combobox('getValue');

        var filter_departement_sub = $("#filter_departement_sub").combobox('getValue');

        var filter_employee = $("#filter_employee").combogrid('getValue');

        var filter_group = $("#filter_group").combobox('getText');

        var filter_job_type = $("#filter_job_type").combobox('getValue');

        if (filter_from == "" || filter_to == "") {

            toastr.warning("Please Choose Filter Date");

        } else {

            var url = "?filter_division=" + filter_division +

                "&filter_departement=" + filter_departement +

                "&filter_departement_sub=" + filter_departement_sub +

                '&filter_from=' + filter_from +

                '&filter_to=' + filter_to +

                '&filter_employee=' + filter_employee +

                '&filter_group=' + window.btoa(filter_group) +
                
                '&filter_job_type=' + filter_job_type;

            window.location.assign('<?= base_url('report/summary_labour/print/excel') ?>' + url);
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

            multiple: true,

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

</script>