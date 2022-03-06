<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Assicura</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets2/images/favicon.ico'); ?>">
    <link rel="apple-touch-icon" href="<?php echo base_url('assets2/apple-touch-icon.png'); ?>">
    <script src="<?php echo base_url('assets/plugins/swal/swal.all.min.js'); ?>"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets2/font-awesome/font-awesome/css/font-awesome.min.css'); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" />

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link href="<?php echo base_url('assets2/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets2/js/bootstrap.min.js'); ?>"></script>
    <!-- Owl Carousel min css -->
    <link href="<?php echo base_url('assets2/css/owl.carousel.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets2/css/owl.theme.default.min.css'); ?>" rel="stylesheet">
    <!-- This core.css file contents all plugings css file. -->
    <link href="<?php echo base_url('assets2/css/core.css'); ?>" rel="stylesheet">
    <!-- Theme shortcodes/elements style -->
    <link href="<?php echo base_url('assets2/css/shortcode/shortcodes.css'); ?>" rel="stylesheet">
    <!-- Theme main style -->
    <link href="<?php echo base_url('assets2/css/style.css'); ?>" rel="stylesheet">
    <!-- Responsive css -->
    <link href="<?php echo base_url('assets2/css/responsive.css'); ?>" rel="stylesheet">
    <!-- User style -->
    <link href="<?php echo base_url('assets2/css/custom.css'); ?>" rel="stylesheet">

    <script src="https://kit.fontawesome.com/96ad30d9a9.js" crossorigin="anonymous"></script>

    <!-- New template file -->
        <!-- Additional CSS Files -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/templatemo-softy-pinko.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <!-- Modernizr JS -->
    <script src="<?php echo base_url('assets2/js/vendor/modernizr-3.5.0.min.js') ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <style type="text/css">
        .list-group {
            float: right;
            width: 625px;
            margin: 15px auto;
            margin-right: 0px;
            height: 50px;
            display: inline-block;
            color: white;
        }

        .list-item {
            text-decoration: none;
            color: white;
            width: 125px;
            float: left;
            text-align: center;
            font-size: 10px;
            height: 60px;
            padding: 1.5px;
        }

        .list-icon {
            font-size: 30px;
            height: 1px;
            margin: auto;
        }

        .list-line {
            height: 1px;
            width: 80px;
            float: left;
            margin: 20px;
            /* text-align: center; */
            padding-left: 5px;
        }
    </style>
</head>

<body>
    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <header id="htc__header" class="htc__header__area header--one">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header" style="background-color:#885ead">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                                <div class="logo" style="width: 550px;">
                                    <h1 style="color:white">Assicura24</h1>
                                </div>

                            </div>
                            <div class="list-group">
                                <a href="<?= base_url(); ?>User_Login">
                                    <div class="list-item" id="icon_offer">
                                        <i class="far fa-file-alt list-item list-icon"></i>
                                        <div class="list-item list-line">
                                            <hr style="border:1px solid">
                                        </div>
                                        OFFERS
                                    </div>
                                </a>
                                <a href="<?= base_url(); ?>User_Login/contracts">
                                    <div class="list-item" id="icon_contract">
                                        <i class="fas fa-car list-item list-icon"></i>
                                        <div class="list-item list-line">
                                            <hr style="border:1px solid">
                                        </div>
                                        CONTRACT ISSUED
                                    </div>
                                </a>
                                <a href="<?= base_url(); ?>User_Login/download_List">
                                    <div class="list-item" id="icon_download">
                                        <i class="fas fa-download list-item list-icon"></i>
                                        <div class="list-item list-line">
                                            <hr style="border:1px solid">
                                        </div>
                                        DOWNLOAD
                                    </div>
                                </a>
                                <a href="<?= base_url(); ?>User_Login/profile">
                                    <div class="list-item" id="icon_profile">
                                        <i class="far fa-address-card list-item list-icon"></i>
                                        <div class="list-item list-line">
                                            <hr style="border:1px solid">
                                        </div>
                                        PROFILE
                                    </div>
                                </a>
                                <a href="<?= base_url(); ?>User_Login/logout">
                                    <div class="list-item" style="margin-top:20px" id="icon_logout">
                                        <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i>
                                        LOGOUT
                                    </div>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- End Mainmenu Area -->
        </header>

        <script>
            let IconOffer = document.getElementById('icon_offer');
            let IconContract = document.getElementById('icon_contract');
            let IconDownload = document.getElementById('icon_download');
            let IconProfile = document.getElementById('icon_profile');
            
            IconOffer.addEventListener("mouseover", function() {
                IconOffer.style.backgroundColor = `rgb(120, 79, 143)`;
            });
            IconOffer.addEventListener("mouseleave", function() {
                IconOffer.style.backgroundColor = `rgb(136, 94, 173)`;
            });
            IconContract.addEventListener("mouseover", function() {
                IconContract.style.backgroundColor = `rgb(120, 79, 143)`;
            });
            IconContract.addEventListener("mouseleave", function() {
                IconContract.style.backgroundColor = `rgb(136, 94, 173)`;
            });
            IconDownload.addEventListener("mouseover", function() {
                IconDownload.style.backgroundColor = `rgb(120, 79, 143)`;
            });
            IconDownload.addEventListener("mouseleave", function() {
                IconDownload.style.backgroundColor = `rgb(136, 94, 173)`;
            });
            IconProfile.addEventListener("mouseover", function() {
                IconProfile.style.backgroundColor = `rgb(120, 79, 143)`;
            });
            IconProfile.addEventListener("mouseleave", function() {
                IconProfile.style.backgroundColor = `rgb(136, 94, 173)`;
            });
            
        </script>