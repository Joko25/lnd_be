<div class="p-4" style="margin-bottom: 50px;">
    <h1>Attandance</h1>

    <div class="alert alert-primary mt-4" role="alert">
        <center>
            <p class="m-0"><b>Lists your work schedule</b></p>
            <hr>
            <?php
            foreach ($shifts as $shift) {
                echo '  <p class="m-0">' . $shift->shift_name . '</p>
                        <b class="display-6">' . $shift->start . ' </b>To<b class="display-6"> ' . $shift->end . '</b>
                        <hr>';
            }
            ?>
        </center>
    </div>

    <a class="btn btn-lg btn-success w-100 mb-5" id="check_in" onclick="check_in()"><i class="fa fa-clock-o"></i> Check In/Out</a>

    <div class="modal fade" id="modalCheckin" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Check In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <p id="readerScanIn">

                    </p>
                </div>
            </div>
        </div>
    </div>

    <h4>Attandance Lists</h4>
    <div class="alert alert-info mt-4" role="alert">
        Max 31 Days
    </div>
    <form method="post">
        <div class="input-group mb-3" hidden>
            <span class="input-group-text" id="f-maps-1"><i class="fa fa-user"></i></span>
            <input type="text" id="number" readonly class="form-control" value="<?= $number ?>" placeholder="Employee No" aria-describedby="f-maps-1">
        </div>
        <div class="input-group mb-3" hidden>
            <span class="input-group-text" id="f-maps-1"><i class="fa fa-maps"></i></span>
            <input type="text" id="latitude" readonly class="form-control" placeholder="Latitude" aria-describedby="f-maps-1">
        </div>
        <div class="input-group mb-3" hidden>
            <span class="input-group-text" id="f-maps-1"><i class="fa fa-maps"></i></span>
            <input type="text" id="longitude" readonly class="form-control" placeholder="Longitude" aria-describedby="f-maps-1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="f-calendar-1"><i class="fa fa-calendar"></i></span>
            <input type="date" id="date_from" class="form-control" value="<?= date("Y-m-d") ?>" placeholder="Date From" aria-describedby="f-calendar-1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="f-calendar-2"><i class="fa fa-calendar"></i></span>
            <input type="date" id="date_to" class="form-control" value="<?= date("Y-m-d") ?>" aria-describedby="f-calendar-2">
        </div>
        <a class="btn btn-sm btn-primary w-100 mb-3" onclick="filter_data()"><i class="fa fa-eye"></i> View Attandance</a>
    </form>

    <div id="results">

    </div>
</div>

<script>
    function filter_data() {
        var number = $("#number").val();
        var date_from = $("#date_from").val();
        var date_to = $("#date_to").val();

        Swal.fire({
            title: 'Please Wait',
            showConfirmButton: false,
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => {
                Swal.showLoading();
            },
        });

        $.ajax({
            type: "post",
            url: "<?= base_url('mobile/attandances/datatables') ?>",
            data: "number=" + number + "&date_from=" + date_from + "&date_to=" + date_to,
            dataType: "html",
            success: function(response) {
                Swal.close();
                $("#results").html(response);
            }
        });
    }

    const html5QrCode = new Html5Qrcode("readerScanIn");

    let config = {
        fps: 10,
        qrbox: 250,
        rememberLastUsedCamera: true,
        supportedScanTypes: [Html5QrcodeScanType.SCAN_TYPE_CAMERA]
    };
    Html5Qrcode.getCameras().then(devices => {
        if (devices && devices.length) {
            html5QrCode.start({
                facingMode: "environment"
            }, config, onScanSuccess);
        }
    }).catch(err => {
        // handle err
    });

    function check_in() {
        $("#modalCheckin").modal('show');
    }

    //Check In
    function onScanSuccess(decodedText, decodedResult) {
        html5QrCode.stop().then((ignore) => {
            var number = $("#number").val();
            var latitude = $("#latitude").val();
            var longitude = $("#longitude").val();

            $("#modalCheckin").modal('hide');

            if (latitude == "") {
                Swal.fire({
                    text: "Your location not found",
                    icon: "error",
                    allowOutsideClick: false,
                });
            } else {
                $.ajax({
                    type: "post",
                    url: "<?= base_url('mobile/attandances/checkin') ?>",
                    data: "token_in=" + decodedText + "&latitude=" + latitude + "&longitude=" + longitude + "&number=" + number,
                    dataType: "json",
                    success: function(response) {
                        Swal.fire({
                            text: response.message,
                            icon: response.theme,
                            allowOutsideClick: false,
                        });
                    }
                });
            }
        }).catch((err) => {
            // Stop failed, handle it.
        });
    }

    $(document).ready(function() {
        $("#check_in").addClass('disabled');
        navigator.geolocation.getCurrentPosition(function(position) {
            $("#latitude").val(position.coords.latitude);
            $("#longitude").val(position.coords.longitude);
            $("#check_in").removeClass('disabled');
        }, function(e) {
            Swal.fire({
                text: "Please activate your gps",
                icon: "warning",
                allowOutsideClick: false,
            });
        }, {
            enableHighAccuracy: true
        });
    });
</script>