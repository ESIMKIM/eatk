<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box" style="border-radius: 25px;">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h"><img src="<?php echo base_url('assets/img/logoatk2.jpg') ?>" alt="" style="width: 125px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php
                $role_id = $this->session->userdata('login_id');

                $queryMenu = "		SELECT um.*, CONCAT((SELECT CONCAT(n.`htp`,n.`ip_address`,n.`port`)
                FROM `tbl_user_network` AS n WHERE n.is_active = 1)
                , um.url) AS urlfull
                       FROM tbl_user_login AS ul
                       JOIN tbl_user_access AS ua
                       ON ul.`template_id` = ua.`template_id`
                       JOIN tbl_user_menu AS um
                       ON ua.`menu_id` = um.`menu_id`
                       WHERE ul.login_id = '$role_id' AND um.`is_active` = '1'
                       ORDER BY no_urut_sec ASC, no_urut_sub ASC";

                $menu = $this->db->query($queryMenu)->result_array();
                ?>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <?php foreach ($menu as $menus) : ?>
                            <li class="nav-item"><a class="nav-link" onclick="clickNavbar()" href="<?php echo $menus['urlfull'] ?>"><span class="<?php echo $menus['icons'] ?>"></span>
                                    <?php echo $menus['submenu_name'] ?></a></li>
                        <?php endforeach; ?>
                        <hr>
                    </ul>
                    <!-- <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-alarm"></span></button>
                        </li>
                    </ul> -->

                    <ul class="nav navbar-nav navbar-right ">
                        <li class="nav-item">
                            <a data-toggle="modal" data-target="#modalNotif" data-backdrop="static" data-keyboard="false" href="#" class="notifdetail cart iconNotif"><span style="font-size: 22px;" class="lnr lnr-alarm"></span>
                                <div class="txtNotif">1</div>
                            </a>

                        </li>
                        <li class="nav-item">
                            <button class="search"><span style="font-size: 22px;" class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <!-- Proses Pencarian Barang -->
    <div class="search_input" id="search_input_box" style="border-radius: 15px; color: black;">

        <div class="container">
            <!-- <form class="d-flex justify-content-between">
                <input type="text" class="form-control" name="cari" id="cari" onchange="myFunction()"
                    placeholder="Cari Disini">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form> -->
            <?php
            $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
            ?>

            <form class="d-flex justify-content-between" method='post' action="<?= base_url($uriSegments[1]) ?>">
                <input type="text" class="form-control" name="cari" id="cari" placeholder="Cari Disini">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>

        </div>
    </div>
</header>

<div class="modal fade" id="modalNotif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pembaharuan System</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <div class="modal-body">

                <h3>
                    UPDATE Version 1.0.1
                </h3>
                <hr>

                <video width="460" height="260" controls>
                    <source src="<?php echo base_url('assets/video/') ?>update_1.mp4" type="video/mp4">
                    <!-- <source src="movie.ogg" type="video/ogg"> -->
                    Your browser does not support the video tag.
                </video>
                <hr>
                <table style="color: black;">
                    <tr>
                        <td style="vertical-align: top;">1. </td>
                        <td>Update <span style="color: red;">icon notifikasi</span> pada menu Utama untuk melihat
                            pembaharuan yang sudah
                            dilakukan.</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">2. </td>
                        <td>Update <span style="color: red;">Limit Transaksi Aktif</span>, User hanya diizinkan memiliki
                            2 transaksi aktif atau transaksi
                            berjalan (tidak bisa mengebon lebih dari 2 permohonan, harap klik terima barang setelah
                            barang
                            diterima).</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">3. </td>
                        <td>Update menu <span style="color: red;"> Menampilkan lampiran user </span>, user dapat melihat
                            atau mendownload file lampiran
                            yang
                            telah diunggah pada permohonan awal dengan cara :
                            <table>
                                <tr>
                                    <td style="vertical-align: top;">a. </td>
                                    <td>Masuk ke menu transaksi;</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top;">b. </td>
                                    <td>lalu dapat mengklik tombol lihat pada baris transaksi baik itu di daftar
                                        transaksi aktif
                                        atau
                                        Riwayat transaksi;</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top;">c. </td>
                                    <td>kemudian klik icon lihat lampiran.</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Header Area -->

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1 style="padding-right: 150px; margin-top: -15px; color: lightslategray;">OFFICE STATIONERY </h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>