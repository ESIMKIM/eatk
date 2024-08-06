<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/fav.jpg') ?>">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>ATK</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/linearicons.css') ?> ">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nouislider.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/fonts/boxicons.css" />
    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/jquery.dataTables.min.css" /> -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">


    <style>
    .navigation-bar {
        background: #fff;
        border-radius: 3px;
        overflow: hidden;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
    }

    .navigation-bar .list-items {
        list-style: none;
        display: flex;
        position: relative;
    }

    .navigation-bar .list-items .pointer {
        position: absolute;
        left: 0px;
        height: 100%;
        width: 4.5rem;
        z-index: 0;
        transition: all 0.2s linear;
    }

    .navigation-bar .list-items .pointer::before,
    .navigation-bar .list-items .pointer::after {
        content: "";
        position: absolute;
        left: 0;
        width: 100%;
    }

    .navigation-bar .list-items .pointer::before {
        top: 0;
        border-bottom: 8px solid var(--main-color);
        border-radius: 0 0 30px 30px;
    }

    .navigation-bar .list-items .pointer::after {
        bottom: 0;
        border-top: 8px solid var(--main-color);
        border-radius: 30px 30px 0 0;
    }

    .navigation-bar .list-items .item {
        flex: 1 1 0px;
        position: relative;
        z-index: 2;
    }

    .navigation-bar .list-items .item .link {
        display: inline-block;
        height: 4rem;
        width: 4.5rem;
        line-height: 4.5;
        text-align: center;
        color: var(--second-color);
    }

    .navigation-bar .list-items .item.active .link {
        color: var(--main-color);
    }

    .navigation-bar .list-items .item .link i {
        font-size: 1.6rem;
        transition: font-size 0.2s linear;
    }

    .navigation-bar .list-items .item.active .link i {
        font-size: 1.4rem;
    }

    /* banner area css
============================================================================================ */
    .banner-area {
        background: url(<?php echo base_url('assets/img/banner/banners.jpg') ?>) center no-repeat;
        background-size: cover;
        position: relative;
    }

    @media (max-width: 768px) {
        .banner-area .fullscreen {
            height: 650px !important;
        }
    }

    .banner-area .active-banner-slider .owl-nav {
        position: absolute;
        right: 0;
        bottom: -200px;
    }

    @media (max-width: 1920px) {
        .banner-area .active-banner-slider .owl-nav {
            right: -115px;
        }
    }

    @media (max-width: 1680px) {
        .banner-area .active-banner-slider .owl-nav {
            right: 0px;
        }
    }

    @media (max-width: 991px) {
        .banner-area .active-banner-slider .owl-nav {
            display: none;
        }
    }

    .banner-area .active-banner-slider .owl-nav .owl-prev,
    .banner-area .active-banner-slider .owl-nav .owl-next {
        display: inline-block;
        margin: 10px;
        opacity: .5;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .banner-area .active-banner-slider .owl-nav .owl-prev:hover,
    .banner-area .active-banner-slider .owl-nav .owl-next:hover {
        opacity: 1;
    }

    .banner-area .banner-content {
        padding-left: 10px;
    }

    @media (max-width: 991px) {
        .banner-area .banner-content {
            padding-left: 0;
        }
    }

    .banner-area .banner-content h1 {
        font-size: 60px;
        line-height: 66px;
        font-weight: 700;
        margin-bottom: 30px;
    }

    @media (max-width: 767px) {
        .banner-area .banner-content h1 {
            font-size: 35px;
            line-height: 46px;
        }
    }

    .banner-area .banner-content p {
        margin: 0;
    }

    @media (max-width: 991px) {
        .banner-area .banner-img {
            display: none;
        }
    }

    .add-bag {
        margin-top: 30px;
    }

    .add-bag .add-btn {
        height: 50px;
        width: 50px;
        line-height: 52px;
        text-align: center;
        border-radius: 50%;
        box-shadow: 0 10px 20px rgba(255, 108, 0, 0.2);
    }

    .add-bag .add-btn span {
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
        display: inline-block;
        color: #fff;
    }

    .add-bag .add-text {
        padding-left: 15px;
        font-size: 12px;
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        color: #222222;
    }

    .organic-breadcrumb {
        background: url(<?php echo base_url('assets/img/banner/stationary-banner.jpg') ?>) center no-repeat;
        background-size: cover;
        width: 100%;
        height: 40%;
        padding-top: 135px;
    }

    @media (max-width: 991px) {
        .organic-breadcrumb {
            padding-top: 80px;
        }
    }

    @media (max-width: 767px) {
        .organic-breadcrumb {
            background: none;
            background: -webkit-linear-gradient(90deg, #ffba00 0%, #ff6c00 100%);
            background: -moz-linear-gradient(90deg, #ffba00 0%, #ff6c00 100%);
            background: -o-linear-gradient(90deg, #ffba00 0%, #ff6c00 100%);
            background: linear-gradient(90deg, #ffba00 0%, #ff6c00 100%);
        }
    }

    #category .organic-breadcrumb {
        margin-bottom: 100px;
    }

    .breadcrumb-banner {
        padding: 90px 0 100px 0;
    }

    .breadcrumb-banner h1 {
        font-weight: 600;
        color: #fff;
    }

    @media (max-width: 767px) {
        .breadcrumb-banner h1 {
            font-size: 30px;
        }
    }

    .breadcrumb-banner p {
        margin-bottom: 0;
        color: #fff;
    }

    .breadcrumb-banner nav a {
        display: inline-block;
        color: #fff;
        font-weight: 400;
    }

    .breadcrumb-banner nav a span {
        display: inline-block;
        margin: 0 10px;
    }

    .breadcrumb-banner .col-first {
        padding-right: 15px;
    }

    @media (max-width: 1680px) {
        .breadcrumb-banner .col-first {
            padding-right: 40px;
        }
    }

    @media (max-width: 991px) {
        .breadcrumb-banner .col-first {
            width: 48%;
        }
    }

    @media (max-width: 767px) {
        .breadcrumb-banner .col-first {
            width: 100%;
        }
    }

    .p1-gradient-bg,
    .details-tab-navigation .nav-link:hover,
    .details-tab-navigation .nav-link.active,
    .quick-view-carousel-details .owl-controls .owl-dots .owl-dot.active:after,
    .organic-body .quick-view-carousel .owl-controls .owl-dots .owl-dot.active:after,
    .organic-body .organic,
    .organic-body .organic:hover,
    .checkput-login .top-title,
    .register-form,
    .mini-cart-2a.mini-cart-1 .mini-border,
    .mini-cart-2a.mini-cart-2 .mini-border,
    .mini-cart-2a.mini-cart-3 .mini-border,
    .mini-cart-2a.mini-cart-4 .mini-border,
    .mini-cart.mini-cart-1 .mini-border,
    .mini-cart.mini-cart-2 .mini-border,
    .mini-cart.mini-cart-3 .mini-border,
    .mini-cart.mini-cart-4 .mini-border,
    .item-cart,
    .submit-btn,
    .submit-btn.color-1,
    .submit-btn.color-2,
    .submit-btn.color-3,
    .submit-btn.color-4,
    .view-btn.color-1:after,
    .view-btn.color-2:after,
    .view-btn.color-3:after,
    .view-btn.color-4:after,
    .organic-section-title-left .carousel-trigger .prev-trigger:after,
    .organic-section-title-left .carousel-trigger .next-trigger:after,
    .single-search-product:before,
    .single-organic-product:after,
    .single-organic-product .bottom,
    .single-organic-product:hover .discount,
    .single-furniture-product .bottom,
    .single-furniture-product:hover .discount,
    .single-sidebar-product:before,
    .single-organic-product-list:after {
        background-image: -moz-linear-gradient(45deg, #f6463d 0%, #f6398d 45%, #f52cdc 100%);
        background-image: -webkit-linear-gradient(45deg, #f6463d 0%, #f6398d 45%, #f52cdc 100%);
        background-image: -ms-linear-gradient(45deg, #f6463d 0%, #f6398d 45%, #f52cdc 100%);
    }

    .p1-gradient-color,
    .organic-body .quick-view-content .price span,
    .organic-body .quick-view-content .category span,
    .organic-body .quick-view-content .view-full,
    .organic-product-top .single-product-top:hover .product-title,
    .tab-navigation .nav-link:hover,
    .tab-navigation .nav-link.active,
    .mini-cart-2a.mini-cart-1 .middle h5 a:hover,
    .mini-cart-2a.mini-cart-1 .cross span:hover,
    .mini-cart-2a.mini-cart-2 .middle h5 a:hover,
    .mini-cart-2a.mini-cart-2 .cross span:hover,
    .mini-cart-2a.mini-cart-3 .middle h5 a:hover,
    .mini-cart-2a.mini-cart-3 .cross span:hover,
    .mini-cart-2a.mini-cart-4 .middle h5 a:hover,
    .mini-cart-2a.mini-cart-4 .cross span:hover,
    .mini-cart.mini-cart-1 .middle h5 a:hover,
    .mini-cart.mini-cart-1 .cross span:hover,
    .mini-cart.mini-cart-2 .middle h5 a:hover,
    .mini-cart.mini-cart-2 .cross span:hover,
    .mini-cart.mini-cart-3 .middle h5 a:hover,
    .mini-cart.mini-cart-3 .cross span:hover,
    .mini-cart.mini-cart-4 .middle h5 a:hover,
    .mini-cart.mini-cart-4 .cross span:hover,
    .single-search-product .desc .title:hover,
    .single-sidebar-product .desc .title:hover {
        background: -moz-linear-gradient(45deg, #f6463d 0%, #f6398d 45%, #f52cdc 100%);
        background: -webkit-linear-gradient(45deg, #f6463d 0%, #f6398d 45%, #f52cdc 100%);
        background: -ms-linear-gradient(45deg, #f6463d 0%, #f6398d 45%, #f52cdc 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
    .custom-scrollbar-js,
    .custom-scrollbar-css {
        height: 200px;
    }


    /* Custom Scrollbar using CSS */
    .custom-scrollbar-css {
        overflow-y: scroll;
    }

    /* scrollbar width */
    .custom-scrollbar-css::-webkit-scrollbar {
        width: 5px;
    }

    /* scrollbar track */
    .custom-scrollbar-css::-webkit-scrollbar-track {
        background: #eee;
    }

    /* scrollbar handle */
    .custom-scrollbar-css::-webkit-scrollbar-thumb {
        border-radius: 1rem;
        background-color: #00d2ff;
        background-image: linear-gradient(to top, #00d2ff 0%, #3a7bd5 100%);
    }

    /* 
    end */

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

    .pagenat {
        border: 1px solid #ccc;
        display: inline-block;
        height: 50px;
        margin: 60px;
        padding: 4px;
    }

    .list-group {
        max-height: 300px;
        margin-bottom: 10px;
        overflow: scroll;
        -webkit-overflow-scrolling: touch;
    }
    </style>
</head>

<body id="category">