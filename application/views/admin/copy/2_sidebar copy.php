<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo">
                <!-- <img src="<?php echo base_url() ?>/assets/img/logoimi.png" style="height: 70px;" /> -->
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2"><img
                    src="<?php echo base_url() ?>/assets/img/logoatk2.jpg" style="height: 70px;" /></span>
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
        $role_id = $this->session->userdata('role_id');

        // Summary Pencarian berdasarkan role id jika role id found maka akan diarahkan
        // Sesuai dengan ketentuan yaitu daftar dari menu 1 (judul) dan menu 2 (sub judul)                

        // dibawah ini query untuk mencari judul berdasarkan role id yang berlaku
        $queryMenu = "SELECT *
        FROM tbl_user_access
        WHERE role_id = '$role_id' AND is_active = '1'
        ORDER BY no_urut_sec ASC, no_urut_sub ASC";

        $menu = $this->db->query($queryMenu)->result_array();


        $queryMenu1 = "SELECT * 
        FROM tbl_user_access
        WHERE role_id = '$role_id' AND is_active = '1'
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
            $sq1 = "SELECT * 
            FROM tbl_user_access 
            WHERE section_name = '$grup[section_name]' AND role_id = '$role_id' AND is_active = '1'";
            $sq = $this->db->query($sq1)->result_array(); ?>

        <?php if ($grup['is_submenu'] ==  1) : ?>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons">
                    <iconify-icon icon="material-symbols:settings-outline-rounded"></iconify-icon>
                </i>
                <div data-i18n="Layouts">Settings</div>
            </a>
            <ul class="menu-sub">
                <?php foreach ($sq as $menus) : ?>
                <?php if ($menus['submenu_name'] ==  $sideActive) : ?>
                <li class="menu-item active">
                    <a href="<?php echo $menus['url'] ?>" class="menu-link">
                        <div data-i18n="Without menu"><?php echo $menus['submenu_name'] ?></div>
                    </a>
                </li>
                <?php else : ?>
                <li class="menu-item">
                    <a href="<?php echo $menus['url'] ?>" class="menu-link">
                        <div data-i18n="Without menu"><?php echo $menus['submenu_name'] ?></div>
                    </a>
                </li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            <?php else : ?>
            <?php foreach ($sq as $menus) : ?>
            <?php if ($menus['submenu_name'] ==  $sideActive) : ?>
        <li class="menu-item active">
            <a href="<?php echo $menus['url'] ?>" class="menu-link">
                <i class="menu-icon tf-icons">
                    <iconify-icon icon="<?php echo $menus['icons'] ?>"></iconify-icon>
                </i>
                <div data-i18n="Analytics">
                    <?php echo $menus['submenu_name'] ?>
                </div>
            </a>
        </li>
        <?php else : ?>
        <li class="menu-item">
            <a href="<?php echo $menus['url'] ?>" class="menu-link">
                <i class="menu-icon tf-icons">
                    <iconify-icon icon="<?php echo $menus['icons'] ?>"></iconify-icon>
                </i>
                <div data-i18n="Analytics">
                    <?php echo $menus['submenu_name'] ?>
                </div>
            </a>
        </li>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php endif; ?>
        <?php endforeach; ?>




        <!-- <?php if ($menus['section_name'] ==  $grup['section_name']) : ?>
        <?php if ($menus['is_submenu'] ==  1) : ?>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons">
                    <iconify-icon icon="material-symbols:settings-outline-rounded"></iconify-icon>
                </i>
                <div data-i18n="Layouts">Settings</div>
            </a>
            <ul class="menu-sub">
                <?php if ($menus['submenu_name'] ==  $sideActive) : ?>
                <li class="menu-item active">
                    <a href="<?php echo $menus['url'] ?>" class="menu-link">
                        <div data-i18n="Without menu"><?php echo $menus['submenu_name'] ?></div>
                    </a>
                </li>
                <?php else : ?>
                <li class="menu-item">
                    <a href="<?php echo $menus['url'] ?>" class="menu-link">
                        <div data-i18n="Without menu"><?php echo $menus['submenu_name'] ?></div>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
            <?php else : ?>

            <?php if ($menus['submenu_name'] !=  $sideActive) : ?>
        <li class="menu-item active">
            <a href="<?php echo $menus['url'] ?>" class="menu-link">
                <i class="menu-icon tf-icons">
                    <iconify-icon icon="<?php echo $menus['icons'] ?>"></iconify-icon>
                </i>
                <div data-i18n="Analytics">
                    <?php echo $menus['submenu_name'] ?>
                </div>
            </a>
        </li>
        <?php else : ?>
        <li class="menu-item">
            <a href="<?php echo $menus['url'] ?>" class="menu-link">
                <i class="menu-icon tf-icons">
                    <iconify-icon icon="<?php echo $menus['icons'] ?>"></iconify-icon>
                </i>
                <div data-i18n="Analytics">
                    <?php echo $menus['submenu_name'] ?>
                </div>
            </a>
        </li>
        <?php endif; ?>
        <?php endif; ?>
        <?php endif; ?> -->
    </ul>
</aside>