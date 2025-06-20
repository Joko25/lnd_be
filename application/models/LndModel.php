<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LndModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->default = $this->load->database('default', TRUE);
        $this->load->library('uuid');
    }

    function index()
    {
        show_404();
    }

    function upload_v2($filename, $extension, $path, $id = [], $table = "", $field = "")
    {
        //Setting Upload Image
        $file = $_FILES[$filename]["name"];
        $extension_explode = explode('.', $file);
        $extension_final = strtolower(end($extension_explode));
        $size = $_FILES[$filename]['size'];
        $temporary = $_FILES[$filename]['tmp_name'];
        $newname  = round(microtime(true)) . '.' . $extension_final;

        if (in_array($extension_final, $extension) === true || $file == "") {
            if ($size < 2097152) {
                if ($file == "") {
                    if ($id == []) {
                        //
                    } else {
                        $records = $this->read($table, $id);
                        return @$records->$field;
                    }
                } else {
                    if ($id == []) {
                        //
                    } else {
                        $records = $this->read($table, $id);
                        @unlink('"' . $records->$field . '"');
                    }

                    // @move_uploaded_file($temporary, $path . $newname);
                    if (@move_uploaded_file($temporary, $path . $newname)) {
                        log_message('debug', 'File berhasil diupload ke: ' . $path . $newname);
                        return $newname;
                    } else {
                        $error = error_get_last();
                        log_message('error', 'Gagal memindahkan file. Error: ' . print_r($error, true) . $path);
                        return false; // Atau tindakan lain untuk menangani kegagalan
                    }
                    // return $newname;
                }
            } else {
                show_error("Your file is too big a maximum of 2 mb", 200, "File Upload Error");
                exit;
            }
        } else {
            show_error("Your extension file is not recognized", 200, "File Upload Error");
            exit;
        }
    }

    public function upload_v2_direct($file, $allowed_types = [], $path = './uploads/') {
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, $allowed_types)) return false;
    
        $fileName = uniqid() . '-' . basename($file['name']);
        $destPath = $path . $fileName;
    
        if (move_uploaded_file($file['tmp_name'], FCPATH . $destPath)) {
            return $fileName;
        } else {
            return false;
        }
    }
   
}
