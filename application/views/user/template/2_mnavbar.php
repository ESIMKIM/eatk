<!-- Start Header Area -->
<header class="header" id="">
    <nav class="nav container">
        <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/img/logoatk2.jpg') ?>" style="width: 40px;"></a>
        <!-- <a href="#" class="nav__link search" id="search" style="margin-top: 2%;">
            <i class='bx bx-search-alt nav__icon'></i>
            <span class="nav__name">Cari</span>
        </a> -->
        <div class="nav__menu" id="">
            <ul class="nav__list">
                <li class="nav__item">
                    <?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    $needle1  = 'dashboard';
                    $needle2  = 'kategori';

                    if (strpos($actual_link, $needle1) !== false || strpos($actual_link, $needle2) !== false) : ?>
                        <a href="#" class="nav__link search" id="search">
                            <i class='bx bx-search-alt nav__icon'></i>
                            <span class="nav__name">Search</span>
                        </a>
                    <?php else : ?>
                        <a href="#" class="nav__link search">
                            <i class='bx bx-search-alt nav__icon'></i>
                            <span class="nav__name">Search</span>
                        </a>
                    <?php endif; ?>


                </li>

                <li class="nav__item">
                    <a data-id="<?php echo base_url('cart') ?>" href="#" class="nav__link urlget" onclick="return clickNavbar();">
                        <i class='bx bx-cart-alt nav__icon'></i>
                        <span class="nav__name">Cart</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a data-id="<?php echo base_url('dashboard') ?>" href="#" class="nav__link active-link urlget" onclick="return clickNavbar();">
                        <i class='bx bx-home-alt nav__icon'></i>
                        <span class="nav__name">Home</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a data-id="<?php echo base_url('profiles-users') ?>" href="#" class="nav__link urlget" onclick="return clickNavbar();">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">About</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a data-id="<?php echo base_url('transactions-user') ?>" href="#" class="nav__link urlget" onclick="return clickNavbar();">
                        <i class='bx bx-transfer-alt nav__icon'></i>
                        <span class="nav__name">Riwayat</span>
                    </a>
                </li>

                <!-- <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                    </li>
                </ul> -->
            </ul>
        </div>
    </nav>

    <div class="search_input" id="search_input_box" style="border-radius: 15px; color: black;">

        <div class="container">
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(document).on("click", ".urlmove", function() {
        var dataUrl = $(this).data('id');

        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>unset_cari',
            dataType: "JSON",
            data: {
                search: dataUrl,
            },
            success: function(data) {
                window.open(dataUrl, "_self");
                // console.log(data);
            },
            error: function(data, jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                console.log(textStatus);
            },
        });

        return false;

    })
</script>

<script>
    function clickNavbar() {
        $(document).on("click", ".urlget", function() {
            var dataUrl = $(this).data('id');

            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>unset_cari',
                dataType: "JSON",
                data: {
                    search: dataUrl,
                },
                success: function(data) {
                    window.open(dataUrl, "_self");
                    // console.log(data);
                },
                error: function(data, jqXHR, textStatus, errorThrown) {
                    alert('Error adding / update data');
                    console.log(textStatus);
                },
            });

            return false;

        })

        // var search = 1;
        // $.ajax({
        //     type: "POST",
        //     url: '<?php echo base_url() ?>unset_cari',
        //     dataType: "JSON",
        //     data: {
        //         search: search,
        //     },
        //     success: function(data) {

        //     },
        //     error: function(data, jqXHR, textStatus, errorThrown) {
        //         alert('Error adding / update data');
        //         console.log(textStatus);
        //     },
        // });

        // return false;
    }

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