<div class="p-4">
    <h1>Attandance</h1>

    <div class="alert alert-primary mt-4" role="alert">
        <center>
            <p class="m-0">Today's work schedule</p>
            <b class="display-6">08:00 </b>To<b class="display-6"> 16:00</b>
            <p class="m-0">Shift Regular Pagi</p>
        </center>
    </div>
    <a class="btn btn-lg btn-success w-100 mb-2" data-bs-toggle="modal" data-bs-target="#modalCheckin"><i class="fa fa-clock-o"></i> Check In</a>
    <a class="btn btn-lg btn-danger w-100 mb-5" data-bs-toggle="modal" data-bs-target="#modalCheckout"><i class="fa fa-clock-o"></i> Check Out</a>

    <div class="modal fade" id="modalCheckin" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Check In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="readerScanIn">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalCheckin" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Check In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="readerScanIn">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalCheckout" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Check Out</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="readerScanOut">
                </div>
            </div>
        </div>
    </div>

    <h4>Attandance Lists</h4>

    <form method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="f-calendar-1"><i class="fa fa-calendar"></i></span>
            <input type="date" id="date_from" class="form-control" value="<?= date("Y-m-d") ?>" placeholder="Date From" aria-describedby="f-calendar-1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="f-calendar-2"><i class="fa fa-calendar"></i></span>
            <input type="date" id="date_to" class="form-control" value="<?= date("Y-m-d") ?>" aria-describedby="f-calendar-2">
        </div>
        <button class="btn btn-sm btn-primary w-100 mb-3"><i class="fa fa-eye"></i> Filter Data</button>
    </form>

    <div class="alert alert-warning mt-4" role="alert">
        Attandance Not Found
    </div>

    <ul class="list-group mb-4">
        <li class="list-group-item">
            <div class="float-start">
                <b>22 Januari 2022 </b>
            </div>
            <div class="float-end">
                <span class="badge bg-success">07:20:12</span> <span class="badge bg-danger">19:29:00</span>
            </div>
        </li>
    </ul>
</div>

<script>
    //Check In
    function onScanSuccess(decodedText, decodedResult) {
        alert(`Scan result: ${decodedText}`, decodedResult);
    }

    var html5QrcodeScanner = new Html5QrcodeScanner(
        "readerScanIn", {
            fps: 10,
            qrbox: 250
        });
    html5QrcodeScanner.render(onScanSuccess);

    //Check Out
    function onScanSuccessOut(decodedText, decodedResult) {
        alert(`Scan result: ${decodedText}`, decodedResult);
    }

    var html5QrcodeScannerOut = new Html5QrcodeScanner(
        "readerScanOut", {
            fps: 10,
            qrbox: 250
        });
    html5QrcodeScannerOut.render(onScanSuccessOut);
</script>