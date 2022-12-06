<body>
    <div class="greeting">
        <p style="font-size: 25px !important; margin:0;"><?= $day ?>, <b style="font-size: 25px !important;"><?= $this->session->name ?></b>!</p>
        <span>It's <?= date("D, d F Y") ?></span>
    </div>
    <table style="width: 100%;">
        <tr>
            <td>
                <div class="alert-success" style="height: 70px;">
                    <div style="float: left; width: 60px;">
                        <i class="fa fa-calendar-check-o" style="font-size: 50px !important;"></i>
                    </div>
                    <div style="float: left;">
                        <small>Working</small>
                        <h1 style="margin: 0; font-size:25px !important;"><?= $attandance['total_working'] ?></h1>
                    </div>
                </div>
            </td>
            <td>
                <div class="alert-danger" style="height: 70px;">
                    <div style="float: left; width: 60px;">
                        <i class="fa fa-calendar-times-o" style="font-size: 50px !important;"></i>
                    </div>
                    <div style="float: left;">
                        <small>Absence</small>
                        <h1 style="margin: 0; font-size:25px !important;"><?= $attandance['total_absence'] ?></h1>
                    </div>
                </div>
            </td>
            <td>
                <div class="alert-info" style="height: 70px;">
                    <div style="float: left; width: 60px;">
                        <i class="fa fa-calendar-minus-o" style="font-size: 50px !important;"></i>
                    </div>
                    <div style="float: left;">
                        <small>Permit</small>
                        <h1 style="margin: 0; font-size:25px !important;"><?= $attandance['total_permit'] ?></h1>
                    </div>
                </div>
            </td>
            <td>
                <div class="alert-warning" style="height: 70px;">
                    <div style="float: left; width: 60px;">
                        <i class="fa fa-calendar-o" style="font-size: 50px !important;"></i>
                    </div>
                    <div style="float: left;">
                        <small>Late</small>
                        <h1 style="margin: 0; font-size:25px !important;"><?= $attandance['total_late'] ?></h1>
                    </div>
                </div>
            </td>
            <td style="text-align: center; width: 25%; vertical-align: top;" rowspan="2">
                <div class="easyui-panel" title="Leave Information" style="width:100%; padding:10px;" data-options="collapsible:true">
                    <p style="font-size: 16px !important; margin:0;">Annual Leave Balance</p>
                    <b style="font-size: 40px !important;"><?= $permit['balance'] ?></b><small> Days</small>
                    <p style="font-size: 16px !important; margin:0;">Used Leave</p>
                    <b style="font-size: 40px !important;"><?= $permit['used'] ?></b><small> Days</small>
                </div>
                <div class="easyui-panel" title="who's permit today" style="width:100%; padding:10px;" data-options="collapsible:true">
                    <?= $permittoday ?>
                </div>
                <div class="easyui-panel" title="Task Lists" style="width:100%; padding:10px;" data-options="collapsible:true">
                    <center>
                        <b>No Task Available</b>
                    </center>
                </div>
                <div class="easyui-panel" title="Information Employee" style="width:100%; padding:10px;" data-options="collapsible:true">
                    <center>
                        <b>No Information Available</b>
                    </center>
                </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center; width: 80%;" colspan="4">
                <div id="calendar" style="width: 100%;">

                </div>
            </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <!-- <tr>
            <td style="width: 25%;">
                <div id="chartServices"></div>
            </td>
            <td style="width: 25%;">
            </td>
            <td style="width: 25%;">
            </td>
            <td style="width: 25%;">
            </td>
        </tr> -->
    </table>
</body>
<script>
    $(function() {
        // Highcharts.chart('chartServices', {
        //     chart: {
        //         plotBackgroundColor: null,
        //         plotBorderWidth: null,
        //         plotShadow: true,
        //         type: 'pie'
        //     },
        //     title: {
        //         text: ''
        //     },
        //     tooltip: {
        //         pointFormat: '{series.name}: <b>{point.y:.1f}</b>'
        //     },
        //     accessibility: {
        //         point: {
        //             valueSuffix: ''
        //         }
        //     },
        //     plotOptions: {
        //         pie: {
        //             allowPointSelect: true,
        //             cursor: 'pointer',
        //             dataLabels: {
        //                 enabled: true,
        //                 format: '<b>{point.name}</b>'
        //             }
        //         }
        //     },
        //     series: [{
        //         name: 'Total',
        //         colorByPoint: true,
        //         data: [{
        //             name: '< 1 Year',
        //             y: 250,
        //         }, {
        //             name: '1 - 2 Year',
        //             y: 105
        //         }, {
        //             name: '2 - 5 Year',
        //             y: 52
        //         }, {
        //             name: '5 - 8 Year',
        //             y: 10
        //         }, {
        //             name: '8 - 10 Year',
        //             y: 12
        //         }, {
        //             name: '> 10 Year',
        //             y: 44
        //         }]
        //     }]
        // });

        calendars();
        setTimeout(function() {
            window.location.href = window.location;
        }, 30000);
    });

    function calendars() {
        $.ajax({
            type: "post",
            url: "<?= base_url('dashboard/dashboard/mycalendar') ?>",
            dataType: "html",
            success: function(response) {
                $("#calendar").html(response);
            }
        });
    }
</script>