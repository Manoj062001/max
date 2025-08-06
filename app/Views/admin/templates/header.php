<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin Panel</title>
    <meta content="Admin Panel" name="description" />
    <link rel="shortcut icon" href="<?= esc(base_url()) ?>/admin_assets/images/favicon.ico">

    <link href="<?= esc(base_url()) ?>/admin_assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= esc(base_url()) ?>/admin_assets/css/icons.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?= esc(base_url()) ?>/admin_assets/css/style.css?cache=234" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="header-bg">
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo-->
                    <div>
                        <a href="" class="logo">
                            <span class="logo-light">
                                <h3 style="margin-top: 17px;text-transform: none;">Admin Panel</h3>
                            </span>
                        </a>
                    </div>
                    <!-- End Logo-->

                    <div class="menu-extras topbar-custom navbar p-0">
                        <ul class="navbar-right ml-auto list-inline float-right mb-0">

                            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                                <a class="nav-link waves-effect" href="">
                                    Welcome, <strong>Admin</strong>
                                </a>
                            </li>

                            <!-- full screen -->
                            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                                <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                    <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                                </a>
                            </li>

                            <li class="dropdown notification-list list-inline-item">
                                <div class="dropdown notification-list nav-pro-img">
                                    <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="<?= esc(base_url()) ?>/admin_assets/images/users/user.png?cache=1245" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <!-- <a class="dropdown-item" href="my-profile"><i class="mdi mdi-account-circle"></i> My Profile</a> -->
                                        <!-- <div class="dropdown-divider"></div> -->
                                        <a class="dropdown-item text-danger" href="<?= esc(base_url()) ?>/admin/logout"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                    </div>
                                </div>
                            </li>

                            <li class="menu-item dropdown notification-list list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>

                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div>
                <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">

                    <div id="navigation">

                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="<?= base_url() ?>admin/product"><i class="mdi mdi-account"></i> Product</a>
                            </li>
                            <li class="has-submenu">
                                <a href="<?= base_url() ?>admin/contact"><i class="mdi mdi-account"></i> Contact Form</a>
                            </li>
                            <li class="has-submenu">
                                <a href="<?= base_url() ?>admin/addproduct"><i class="mdi mdi-account"></i> Add Product</a>
                            </li>
                        </ul>
                        <!-- End navigation menu -->
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

    </div>
    <!-- header-bg -->