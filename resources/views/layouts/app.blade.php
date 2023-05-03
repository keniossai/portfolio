<!--=========================================================
Item Name: Masterly - Personal Portfolio One Page HTML Template.
Author: ashishmaraviya
Version: 2
Copyright 2023
Author URI: https://themeforest.net/user/ashishmaraviya
============================================================-->
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/masterly/demo-4/dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 20:14:22 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>{{ config('app.name', 'Ken-Ossai') }}</title>
    <meta name="keywords"
        content="personal portfolio, cv, resume, agency, bootstrap, clean, cv, designer, developer, freelancer, modern, one page portfolio, onepage, personal portfolio, responsive, resume, vcard">
    <meta name="description" content="Unique Personal Portfolio HTML Template">
    <meta name="author" content="ashishmaraviya">
    <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
    <!-- site Favicon -->
    <link rel="icon" href="assets/img/favicon/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/img/favicon/favicon.png">
    <meta name="msapplication-TileImage" content="assets/img/favicon/favicon.png">

    <!-- css Font -->

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/slick.min.css">

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/dark.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css">

</head>

<body>

    <!-- Loader -->
    <div id="ms-overlay">
        <div class="ms-roller">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Header Start -->
    <header>
        <nav>
            <a href="javascript:void(0)" class="ms-sidebar-toggle"><img src="assets/img/icons/menu.svg" class="svg_img"
                    alt="menu"></a>
        </nav>
    </header>
    <!-- Header End -->

    <!-- Sidebar Start -->
    <div class="ms-sidebar-overlay"></div>
    <div class="ms-sidebar">
        <div class="menu-list">
            <a href="javascript:void(0)" class="close-sidebar">×</a>
            <ul class="navbar-nav mb-2 ml-auto" id="top-menu">
                <li class="nav-item active">
                    <a class="nav-link ms-nav" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="#experience">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="#service">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="#news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="#contact">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Sidebar End -->

    @yield('content')

    <!-- Start Footer -->
    <footer class="margin-t-80">
        <div class="container">
            <div class="ms-footer-detail">
                <div class="ms-copy">
                    Copyright © <a class="site-name" href="index.html">Masterly</a> all rights reserved. Powered by
                    Masterly
                </div>
                <div class="ms-social">
                    <ul>
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="https://linkedin.com/" target="_blank"><i class="fa fa-linkedin"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Whatsapp -->
    <div class="ms-style ms-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="ms-panel">
            <!-- Panel Header -->
            <div class="ms-header">
                <strong>Need Help?</strong>
                <p>Chat with us on WhatsApp</p>
            </div>
            <!-- Panel Content -->
            <div class="ms-body">
                <ul>
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ms-list" data-number="918866774266"
                            data-message="Share me your latest resume, HR from masterly...">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ms-img-cont">
                                    <img src="assets/img/chat/profile_02.jpg" class="ms-user-img" alt="Profile image">
                                    <span class="ms-status-icon"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ms-user-info">
                                    <span>Maria W Ilvor</span>
                                    <p>Maria left 7 mins ago</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ms-list" data-number="918866774266"
                            data-message="Share me your latest resume, HR from masterly...">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ms-img-cont">
                                    <img src="assets/img/chat/profile_01.jpg" class="ms-user-img" alt="Profile image">
                                    <span class="ms-status-icon ms-online"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ms-user-info">
                                    <span>William Ilvor</span>
                                    <p>William is online</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->

                </ul>
            </div>
        </div>
        <!--/ End Floating Panel Container -->
        <!-- Start Right Floating Button-->
        <div class="ms-right-bottom">
            <div class="ms-box">
                <div class="ms-button rotateBackward">
                    <i class="fa fa-whatsapp"></i>
                </div>
            </div>
        </div>
        <!--/ End Right Floating Button-->
    </div>
    <!-- Whatsapp end -->


    <!-- Vendor JS -->
    <script src="{{ asset('assets') }}/js/vendor/jquery-3.1.1.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/tilt.jquery.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/mixitup.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/jquery.fancybox.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/slick.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/fontawesome.js"></script>

    <!-- Scroll button animation for mouse hover Js -->
    <script src="{{ asset('assets') }}/js/vendor/tweenmax.min.js"></script>

    <!-- Site Main Js -->
    <script src="{{ asset('assets') }}/js/script.js"></script>

</body>


<!-- Mirrored from maraviyainfotech.com/projects/masterly/demo-4/dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 20:15:17 GMT -->
</html>
