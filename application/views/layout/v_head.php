<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/fancybox.min.css') ?>">
    <!-- add  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/flaticon.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/slicknav.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/animate.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/slick.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/nice-select.css') ?>">
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/style.css') ?>"> -->
    <!-- end -->
    <title>Batik Dewi Sekartaji</title>
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <!-- awal navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url() ?>home/index" style="font-family: snap; color:orange; font-size: 20px; font-weight:bold;">Dewi Sekartaji Batik</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li <?= $this->uri->segment(2) == 'index' || $this->uri->segment(2) == '' ? 'class="active nav-item"' : '' ?>>
                        <a class="nav-link" href="<?php echo base_url() ?>home/index">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li <?= $this->uri->segment(2) == 'collection' ? 'class="active nav-item"' : '' ?>>
                        <a class="nav-link" href="<?php echo base_url() ?>home/collection">Collection</a>
                    </li>
                    <li <?= $this->uri->segment(2) == 'news' ? 'class="active nav-item"' : '' ?>>
                        <a class="nav-link" href="<?php echo base_url() ?>home/news">News</a>
                    </li>
                    <li <?= $this->uri->segment(2) == 'gallery' ? 'class="active nav-item"' : '' ?>>
                        <a class="nav-link" href="<?php echo base_url() ?>home/gallery">Gallery</a>
                    </li>
                    <li <?= $this->uri->segment(2) == 'about' ? 'class="active nav-item"' : '' ?>>
                        <a class="nav-link" href="<?php echo base_url() ?>home/about">About Us</a>
                    </li>
                </ul>
                <a href="<?= base_url('auth'); ?>" class="btn btn-primary btn-sm text-warning border-light" style="font-weight: bold;">Login</a>
                <!-- <button type="button" class="btn btn-primary btn-sm text-warning border-light" style="font-weight: bold;">Login</button> -->
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->