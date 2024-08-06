<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/fav.jpg') ?>">
    <title>ATK</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/vendor/fonts/boxicons.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/css/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/demo.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css" />

    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.5/datatables.min.css" rel="stylesheet" />


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Helpers -->
    <script src="<?php echo base_url() ?>/assets/vendor/js/helpers.js"></script>

    <script src="<?php echo base_url() ?>/assets/js/config.js"></script>

    <link type="text/css" href="<?php echo base_url() ?>assets/js/signaturepad/js/css/jquery.signature.css"
        rel="stylesheet">

    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    <script src="http://code.jquery.com/ui/1.8.17/jquery-ui.min.js"></script>

    <style>
    .kbw-signature {
        width: 400px;
        height: 200px;
    }

    #sig canvas {
        width: 100% !important;
        height: auto;
    }

    .modal-confirm {
        color: #636363;
        width: 325px;
        margin: 30px auto;
    }

    .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
    }

    .modal-confirm .modal-header {
        border-bottom: none;
        position: relative;
    }

    .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -15px;
    }

    .modal-confirm .form-control,
    .modal-confirm .btn {
        min-height: 40px;
        border-radius: 3px;
    }

    .modal-confirm .close {
        position: absolute;
        top: -5px;
        right: -5px;
    }

    .modal-confirm .modal-footer {
        border: none;
        text-align: center;
        border-radius: 5px;
        font-size: 13px;
    }

    .modal-confirm .icon-box {
        color: #fff;
        position: absolute;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: -70px;
        width: 95px;
        height: 95px;
        border-radius: 50%;
        z-index: 9;
        background: #82ce34;
        padding: 15px;
        text-align: center;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    }

    .modal-confirm .icon-box i {
        font-size: 58px;
        position: relative;
        top: 3px;
    }

    .modal-confirm.modal-dialog {
        margin-top: 80px;
    }

    .modal-confirm .btn {
        color: #fff;
        border-radius: 4px;
        background: #82ce34;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        border: none;
    }

    .modal-confirm .btn:hover,
    .modal-confirm .btn:focus {
        background: #6fb32b;
        outline: none;
    }

    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }
    </style>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">