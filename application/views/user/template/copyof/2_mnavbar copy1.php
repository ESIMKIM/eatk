<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box" style="border-radius: 25px;">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="#"><img src="<?php echo base_url('assets/img/logoatk2.jpg') ?>"
                        alt="" style="width: 125px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                        <li class="nav-item"><a class="nav-link" href="<?php echo $menus['urlfull'] ?>"><span
                                    class="<?php echo $menus['icons'] ?>"></span>
                                <?php echo $menus['submenu_name'] ?></a></li>
                        <?php endforeach; ?>

                        <hr>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">

                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
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

            <form class="d-flex justify-content-between" method='post' action="<?= base_url($uriSegments[2]) ?>">
                <input type="text" class="form-control" name="cari" id="cari" placeholder="Cari Disini">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>

        </div>
    </div>
</header>
<!-- End Header Area -->

<!-- Start Banner Area -->
<!-- <section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1 style="padding-right: 150px; margin-top: -15px; color: lightslategray;">OFFICE STATIONERY </h1>
            </div>
        </div>
    </div>
</section> -->
<!-- End Banner Area -->

<script>
function myFunction() {
    // let text = document.getElementById("search").value;
    search = $('#cari').val()

    $.ajax({
        type: "POST",
        url: '<?php echo base_url() ?>get_searchItem',
        dataType: "JSON",
        data: {
            search: search,
        },
        success: function(data) {
            // console.log(data);
            location.reload();
            // if (data.error) {

            // }
            // if (data.success) {

            //     // $('#mSuksesSimpan').modal('show');
            // }
        },
        error: function(data, jqXHR, textStatus, errorThrown) {
            alert('Error adding / update data');
            console.log(textStatus);
        },
    });

    return false;
}
</script>