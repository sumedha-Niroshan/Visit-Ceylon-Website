<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: user-login.php');
    exit();
}
?>
<!-- SIDEBAR -->
<div class="sidebar">
    <div class="sidebar-logo">
        <a href="index.html">
            <img src="images/logo.png" alt="Protend logo">
        </a>
        <div class="sidebar-close" id="sidebar-close">
            <i class='bx bx-left-arrow-alt'></i>
        </div>
    </div>
    <!-- SIDEBAR MENU -->
    <div class="simlebar-sc" data-simplebar>
        <ul class="sidebar-menu tf">

            <li class="sidebar-submenu">
                <a href="dashbord.php" class="sidebar-menu-dropdown">
                    <i class='bx bxs-home'></i>
                    <span>Dashboard</span>
                    <div class="dropdown-icon"> <i class='bx bx-chevron-down'></i></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="dashbord.php">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="new-order.php">
                            New Order
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Completed Order
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Under Shipping
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Local Warehouse
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-submenu">
                <a href="user_register.php" class="sidebar-menu-dropdown">
                    <i class='bx bxs-bolt'></i>
                    <span>User</span>
                    <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="user_register.php">
                            Register
                        </a>
                    </li>

                </ul>
            </li>
            <!--
            <li class="sidebar-submenu">
                <a href="clients.html" class="sidebar-menu-dropdown">
                    <i class='bx bxs-user'></i>
                    <span>Client</span>
                    <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="clients.html">
                            Manager Client
                        </a>
                    </li>
                    <li>
                        <a href="client-details.html">
                            Client Details
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="board.html">
                    <i class='bx bxs-dashboard'></i>
                    <span>Board</span>
                </a>
            </li>
            <li>
                <a href="calendar.html">
                    <i class='bx bx-calendar'></i>
                    <span>Calendar</span>
                </a>
            </li>

            <li>
                <a href="message.html">
                    <i class='bx bxs-message-rounded-detail'></i>
                    <span>Message</span>
                </a>
            </li>
            <li class="sidebar-submenu">
                <a href="chart-apex.html" class="sidebar-menu-dropdown">
                    <i class='bx bxs-component'></i>
                    <span>Components</span>
                    <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="chart-apex.html">
                            Apex Charts
                        </a>
                    </li>

                </ul>
            </li> -->
            <li>
                <a class="darkmode-toggle" id="darkmode-toggle" onclick="switchTheme()">
                    <div>
                        <i class='bx bx-cog mr-10'></i>
                        <span>darkmode</span>
                    </div>

                    <span class="darkmode-switch"></span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
<!-- Main Header -->
<div class="main-header">
    <div class="d-flex">
        <div class="mobile-toggle" id="mobile-toggle">
            <i class='bx bx-menu'></i>
        </div>
        <div class="main-title">

        </div>
    </div>

    <div class="d-flex align-items-center">

        <!-- App Search-->
        <form class="app-search d-none d-lg-block">
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Search">
                <span class="bx bx-search-alt"></span>
            </div>
        </form>
        <div class="dropdown d-inline-block d-lg-none ms-2">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class='bx bx-search-alt'></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-search-dropdown">

                <form class="p-3">
                    <div class="form-group m-0">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search ...">
                            <div class="input-group-append">
                                <button class="btn btn-primary h-100" type="submit"><i
                                        class='bx bx-search-alt'></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!-- <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                </div> -->
        <div class="dropdown d-inline-block mt-12">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" style="width: 60px;" src="images/profile/wbs.jpg"
                    alt="Header Avatar">
                <span class="pulse-css"></span>
                <span class="info d-xl-inline-block  color-span">
                    <span class="d-block fs-20 font-w600">
                        <?php echo $_SESSION['fname'] ?>
                    </span>
                    <span class="d-block mt-7"><a href="" class="__cf_email__"
                            data-cfemail="88fae9e6ecf1a6fae1e4edf1c8efe5e9e1e4a6ebe7e5">
                            <?php echo $_SESSION['level'] ?>
                        </a></span>
                </span>

                <i class='bx bx-chevron-down'></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i>
                    <span>Profile</span></a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="logout.php"><i
                        class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                    <span>Logout</span></a>
            </div>
        </div>
    </div>
</div>
<!-- End Main Header -->