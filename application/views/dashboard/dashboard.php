<body>
    <div class="greeting">
        <p style="font-size: 25px !important; margin:0;"><?= $day ?>, <b style="font-size: 25px !important;"><?= $user->name ?></b>!</p>
        <span>It's <?= date("D, d F Y") ?></span>
    </div>
    <div class="row m-0">
        <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-3">
                    <div class="alert-success" style="height: 70px;">
                        <div style="float: left; width: 60px;">
                            <i class="fa fa-calendar-check-o" style="font-size: 50px !important;"></i>
                        </div>
                        <div style="float: left;">
                            <small>Working</small>
                            <h1 style="margin: 0; font-size:25px !important;"><?= $attandance['total_working'] ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert-danger" style="height: 70px;">
                        <div style="float: left; width: 60px;">
                            <i class="fa fa-calendar-times-o" style="font-size: 50px !important;"></i>
                        </div>
                        <div style="float: left;">
                            <small>Absence</small>
                            <h1 style="margin: 0; font-size:25px !important;"><?= $attandance['total_absence'] ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">

                    <div class="alert-info" style="height: 70px;">
                        <div style="float: left; width: 60px;">
                            <i class="fa fa-calendar-minus-o" style="font-size: 50px !important;"></i>
                        </div>
                        <div style="float: left;">
                            <small>Permit</small>
                            <h1 style="margin: 0; font-size:25px !important;"><?= $attandance['total_permit'] ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">

                    <div class="alert-warning" style="height: 70px;">
                        <div style="float: left; width: 60px;">
                            <i class="fa fa-calendar-o" style="font-size: 50px !important;"></i>
                        </div>
                        <div style="float: left;">
                            <small>Late</small>
                            <h1 style="margin: 0; font-size:25px !important;"><?= $attandance['total_late'] ?></h1>
                        </div>
                    </div>
                </div>
            </div>

            <div id="calendar" style="width: 100%;">

            </div>
        </div>
        <div class="col-lg-3">
            <div class="row">
                <div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            Permission Today
                        </div>
                        <div class="card-body">
                            <?= $permittoday ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            Contract & Probation
                        </div>
                        <div class="card-body">
                            <div class="alert alert-danger" role="alert">
                                No Contract & Probation
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            Announcement
                        </div>
                        <div class="card-body">
                            <div class="alert alert-danger" role="alert">
                                No Announcement
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            Task List
                        </div>
                        <div class="card-body">
                            <div class="alert alert-danger" role="alert">
                                No Information Task
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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