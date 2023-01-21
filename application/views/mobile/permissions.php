<div class="p-4">
    <h1>Permission</h1>

    <form method="post" class="mt-4">
        <div class="mb-3 form-floating">
            <select id="type" class="form-control">
                <option value="CUTI">CUTI</option>
                <option value="IZIN">IZIN</option>
                <option value="SAKIT">SAKIT</option>
                <option value="DINAS LUAR">DINAS LUAR</option>
            </select>
            <label for="type">Permit Type</label>
        </div>
        <div class="mb-3 form-floating">
            <select id="reason" class="form-control">
                <option value="CUTI">CUTI</option>
                <option value="IZIN">IZIN</option>
                <option value="SAKIT">SAKIT</option>
                <option value="DINAS LUAR">DINAS LUAR</option>
            </select>
            <label for="reason">Reason</label>
        </div>
        <div class="mb-3 form-floating">
            <input type="date" id="permit_date" class="form-control" value="<?= date("Y-m-d") ?>">
            <label for="permit_date">Permit Date</label>
        </div>
        <div class="mb-3 form-floating">
            <textarea type="text" id="remarks" class="form-control" rows="3"></textarea>
            <label for="remarks">Notes</label>
        </div>
        <div class="alert alert-info mt-4" role="alert">
            You have 12 days left Permit
        </div>
        <button class="btn btn btn-primary w-100 mb-3"><i class="fa fa-check"></i> Submit Submission </button>
        <button class="btn btn btn-warning w-100 mb-3"><i class="fa fa-eye"></i> View Permit </button>
    </form>
</div>