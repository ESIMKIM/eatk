<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo">
                <!-- <img src="<?php echo base_url() ?>/assets/img/logoimi.png" style="height: 70px;" /> -->
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2"><img src="<?php echo base_url() ?>/assets/img/logoatk2.jpg" style="height: 70px;" /></span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>


    <ul class="menu-inner py-1">

        <!-- Dashboard -->
        <!-- <li class="menu-item active">
            <a href="<?php echo base_url() ?>dashboard" class="menu-link">
                <i class="menu-icon tf-icons">
                    <iconify-icon icon="uil:create-dashboard"></iconify-icon>
                </i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li> -->
        <?php
        $role_id = $this->session->userdata('login_id');

        // Summary Pencarian berdasarkan role id jika role id found maka akan diarahkan
        // Sesuai dengan ketentuan yaitu daftar dari menu 1 (judul) dan menu 2 (sub judul)                

        // dibawah ini query untuk mencari judul berdasarkan role id yang berlaku
        $queryMenu = "SELECT um.*
        FROM tbl_user_login AS ul
        JOIN tbl_user_access AS ua
        ON ul.`template_id` = ua.`template_id`
        JOIN tbl_user_menu AS um
        ON ua.`menu_id` = um.`menu_id`
        WHERE ul.login_id = $role_id AND um.`is_active` = '1'
        ORDER BY no_urut_sec ASC, no_urut_sub ASC";

        $menu = $this->db->query($queryMenu)->result_array();


        $queryMenu1 = "SELECT um.*
        FROM tbl_user_login AS ul
        JOIN tbl_user_access AS ua
        ON ul.`template_id` = ua.`template_id`
        JOIN tbl_user_menu AS um
        ON ua.`menu_id` = um.`menu_id`
        WHERE ul.login_id = $role_id AND um.`is_active` = '1'
        GROUP BY section_name
        ORDER BY no_urut_sec ASC";

        $group = $this->db->query($queryMenu1)->result_array();


        // var_dump($group);
        ?>
        <?php foreach ($group as $grup) : ?>
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">
                    <?php echo $grup['section_name'] ?>
                </span>
            </li>

            <?php
            $sq1 = "SELECT um.* , CONCAT((SELECT CONCAT(n.`htp`,n.`ip_address`,n.`port`)
            FROM `tbl_user_network` AS n WHERE n.is_active = 1)
            , um.url) AS urlfull
            FROM tbl_user_menu AS um
            WHERE um.section_name = '$grup[section_name]' AND um.is_active = '1'";
            $sq = $this->db->query($sq1)->result_array(); ?>

            <?php foreach ($sq as $menus) : ?>
                <?php $db_url = trim($menus['urlfull']); ?>
                <?php if ($db_url ==  get_thisUrl()) : ?>
                    <li class="menu-item active">
                        <a href="<?php echo $menus['urlfull'] ?>" class="menu-link">
                            <i class="menu-icon tf-icons">
                                <iconify-icon icon=<?php echo $menus['icons'] ?>></iconify-icon>
                            </i>
                            <div data-i18n="Analytics">
                                <?php echo $menus['submenu_name'] ?>
                            </div>
                        </a>
                    <?php else : ?>
                    <li class="menu-item">
                        <a href="<?php echo $menus['urlfull'] ?>" class="menu-link">
                            <i class="menu-icon tf-icons">
                                <iconify-icon icon=<?php echo $menus['icons'] ?>></iconify-icon>
                            </i>
                            <div data-i18n="Analytics">
                                <?php echo $menus['submenu_name'] ?>
                            </div>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </ul>
</aside>