<?php
date_default_timezone_set("Asia/Bangkok");

//Config
$this->db->select('*');
$this->db->from('config');
$config = $this->db->get()->row();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title><?= $config->name ?> | <?= $config->description ?></title>

    <link rel="icon" href="<?= $config->favicon ?>" type="image/png" sizes="16x16">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <script type="text/javascript" src="<?= base_url('assets/jquery.min.js') ?>"></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/icons/fontawesome/css/font-awesome.min.css') ?>">
    <script src="https://kit.fontawesome.com/c568386327.js" crossorigin="anonymous"></script>

    <!-- Vendors -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/toastr.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/sweetalert2.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors/guidely.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script type="text/javascript" src="<?= base_url('assets/vendors/toastr.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/vendors/sweetalert2.all.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/vendors/guidely.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url('assets/vendors/html5-qrcode.min.js?1') ?>"></script>

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/themes/default/easyui.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/themes/mobile.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/themes/icon.css') ?>">

    <script type="text/javascript" src="<?= base_url('assets/jquery.easyui.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/jquery.easyui.mobile.js') ?>"></script>

    <!-- Charts -->
    <script src="<?= base_url('assets/vendors/charts/code/highcharts.js') ?>"></script>

    <style type="text/css">
        .highcharts-credits {
            display: none;
        }

        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }

        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }

        .custom-radio {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            cursor: pointer;
            font-size: 16px;
            padding: 6px 10px;
            /* border: 1px solid #ccc;
            border-radius: 4px; */
            width: fit-content;
            transition: background 0.2s ease;
        }

        .custom-radio:hover {
            background-color: #f5f5f5;
        }

        .custom-radio input[type="radio"] {
            appearance: none;
            -webkit-appearance: none;
            background-color: #fff;
            border: 2px solid #999;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            margin-right: 10px;
            position: relative;
            cursor: pointer;
            outline: none;
        }

        .custom-radio input[type="radio"]:checked {
            border-color: #1e90ff;
            background-color: #1e90ff;
        }

        .custom-radio input[type="radio"]::after {
            content: '';
            display: block;
            position: absolute;
            top: 4px;
            left: 4px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
            visibility: hidden;
        }

        .custom-radio input[type="radio"]:checked::after {
            visibility: visible;
        }
    </style>

    <script>
        $(document).ready(function() {
            $(".preloader").fadeOut();
        })
    </script>
</head>

<body style="margin: 0;">
    <div class="preloader">
        <div class="loading">
            <img src="<?= $config->logo ?>" width="150">
        </div>
    </div>
</body>