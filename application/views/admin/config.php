<!-- UPDATE DATA -->
<div id="p" class="easyui-panel" title="Configuration" style="width:100%; height:600px; padding:10px; background:#fafafa;" data-options="collapsible:true, maximizable:true">
    <form id="frm_insert" method="post" enctype="multipart/form-data" novalidate>
        <div style="width: 100%; float: left;">
            <fieldset style="width:35%; border:1px solid #d0d0d0; margin-bottom: 10px; border-radius:4px; float: left;">
                <legend><b>Form Data</b></legend>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">ID</span>
                    <input style="width:60%;" name="number" value="<?= $config->number ?>" readonly class="easyui-textbox">
                </div>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Name</span>
                    <input style="width:60%;" name="name" value="<?= $config->name ?>" class="easyui-textbox">
                </div>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Description</span>
                    <input style="width:60%;" name="description" value="<?= $config->description ?>" class="easyui-textbox">
                </div>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Address</span>
                    <input style="width:60%;" name="address" value="<?= $config->address ?>" class="easyui-textbox">
                </div>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Latitude</span>
                    <input style="width:60%;" name="latitude" value="<?= $config->latitude ?>" class="easyui-textbox">
                </div>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Longitude</span>
                    <input style="width:60%;" name="longitude" value="<?= $config->longitude ?>" class="easyui-textbox">
                </div>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Logo</span>
                    <input style="width:60%;" name="logo" class="easyui-filebox">
                </div>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Favicon</span>
                    <input style="width:60%;" name="favicon" class="easyui-filebox">
                </div>
                <div class="fitem">
                    <span style="width:35%; display:inline-block;">Login</span>
                    <input style="width:60%;" name="image" class="easyui-filebox">
                </div>
                <!-- <div class="fitem">
                    <span style="width:35%; display:inline-block;">Theme</span>
                    <select style="width:60%;" name="theme" value="<?= $config->theme ?>" class="easyui-combobox">
                        <option value="default">Default</option>
                        <option value="cupertino">Cupertino</option>
                        <option value="black">Black</option>
                        <option value="bootstrap">Bootstrap</option>
                        <option value="gray">Gray</option>
                        <option value="pepper-grinder">Pepper Grinder</option>
                        <option value="material">Material</option>
                        <option value="material-blue">Material Blue</option>
                        <option value="material-teal">Material Teal</option>
                        <option value="metro">Metro</option>
                        <option value="metro-blue">Metro Blue</option>
                        <option value="metro-gray">Metro Gray</option>
                        <option value="metro-green">Metro Green</option>
                        <option value="metro-orange">Metro Orange</option>
                        <option value="metro-red">Metro Red</option>
                        <option value="sunny">Sunny</option>
                    </select>
                </div> -->
                <br>
                <center>
                    <a class="easyui-linkbutton c6" onclick="saved()" data-options="iconCls:'icon-ok'">Save Changes</a>
                </center>
                <br>
            </fieldset>
            <fieldset style="width:30%; border:1px solid #d0d0d0; margin-bottom: 10px; border-radius:4px; float: left;">
                <legend><b>Generate QR Code Attandances</b></legend>
                <div class="fitem">
                    <input style="width:100%;" disabled name="token" value="<?= $config->token ?>" class="easyui-textbox">
                </div>
                <br>
                <center>
                    <a class="easyui-linkbutton c5" onclick="generateQrCode()">Generate QR Code</a>
                    <br>
                    <img src="<?= base_url('assets/image/qrcode/' . $config->token . ".png") ?>" style="width: 80%;">
                </center>
            </fieldset>
        </div>
    </form>
</div>

<script>
    //Add Data
    function saved() {
        $('#frm_insert').form('submit', {
            url: '<?= base_url('admin/config/update') ?>',
            method: 'POST',
            onSubmit: function() {
                return $(this).form('validate');
            },
            success: function(result) {
                var result = eval('(' + result + ')');
                if (result.theme == "success") {
                    toastr.success(result.message, result.title);
                } else {
                    toastr.error(result.message, result.title);
                }
            }
        });
    }

    //Generate QR Code
    function generateQrCode() {
        $.ajax({
            type: "post",
            url: "<?= base_url('admin/config/generateQrCode') ?>",
            dataType: "json",
            success: function(response) {
                Swal.fire({
                    title: response.message,
                    icon: response.theme,
                    confirmButtonText: 'Ok',
                    allowOutsideClick: false,
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.reload();
                    }
                });
            }
        });
    }
</script>