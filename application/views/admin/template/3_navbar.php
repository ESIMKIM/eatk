<div class="layout-page">
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
        id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- /Search -->
            <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <i class="bx bx-user me-2"></i>
                        <!-- <div class="avatar avatar-online">
                            <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                        </div> -->
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="../../assets/img/avatars/1.png" alt
                                                class="w-px-40 h-auto rounded-circle">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-medium d-block">System</span>
                                        <small class="text-muted">Admin</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <!--<li>-->
                        <!--    <a class="dropdown-item" href="pages-profile-user.html">-->
                        <!--        <i class="bx bx-user me-2"></i>-->
                        <!--        <span class="align-middle">My Profile</span>-->
                        <!--    </a>-->
                        <!--</li>-->
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php base_url() ?>/CTR_Auth/logout">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ User -->

                <!-- settings -->
                <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <i class="bx bx-cog me-2"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="<?php echo base_url('settings-user') ?>" data-language="en">
                                <i class="bx bx-cog me-2"></i>
                                <span class="align-middle">User</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo base_url('settings-merk') ?>" data-language="fr">
                                <i class="bx bx-cog me-2"></i><span class="align-middle">Merk</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo base_url('settings-kategori') ?>"
                                data-language="de">
                                <i class="bx bx-cog me-2"></i><span class="align-middle">Kategori</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo base_url('settings-satuan') ?>"
                                data-language="pt">
                                <i class="bx bx-cog me-2"></i><span class="align-middle">Satuan</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo base_url('settings-notif') ?>" data-language="pt">
                                <i class="bx bx-cog me-2"></i><span class="align-middle">Notif</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- /settings -->



            </ul>
        </div>


        <!-- Search Small Screens -->
        <div class="navbar-search-wrapper search-input-wrapper  d-none">
            <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
                aria-label="Search...">
            <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
        </div>


    </nav>