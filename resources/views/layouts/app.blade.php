<!--=========================================================
Item Name: Kenneth - Personal Portfolio SPA Page.
Author: Kenneth Ossai
Version: 2
Copyright 2023
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
        content="Ken personal portfolio, designer, developer, freelancer, SPA application">
    <meta name="description" content="Kenneth Ossai Personal Portfolio">
    <meta name="author" content="kenossai">
    <meta name="generator" content="Ken Ossai v2.12.1, kenossai.com">
    <!-- site Favicon -->
    <link rel="icon" href="{{ asset('frontend') }}/img/favicon/favicon.ico" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('frontend') }}/img/favicon/favicon.ico">
    <meta name="msapplication-TileImage" content="{{ asset('frontend') }}/img/favicon/favicon.ico">

    <!-- css Font -->

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/slick.min.css">

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/dark.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">

    <script src="https://use.fontawesome.com/79d3039a9c.js"></script>

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
            <a href="javascript:void(0)" class="ms-sidebar-toggle"><img src="frontend/img/icons/menu.svg" class="svg_img"
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
                    <a class="nav-link ms-nav" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="about">About</a>
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
                    Copyright © <script>document.write(new Date().getFullYear());</script><a class="site-name" href="/"> Ken Ossai</a>
                </div>
                <div class="ms-social">
                    <ul>
                        <li><a href="https://github.com/keniossai" target="_blank"><i class="fa fa-github"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/keniossai" target="_blank"><i class="fa fa-instagram"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/keniossai" target="_blank"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/kenneth-ossai/" target="_blank"><i class="fa fa-linkedin"
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
                <p>Chat with me on WhatsApp</p>
            </div>
            <!-- Panel Content -->
            <div class="ms-body">
                <ul>
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ms-list" data-number="2349090066687"
                            data-message="Hello Ken, I have a project to work on.. Are you available?">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ms-img-cont">
                                    <img src="{{ asset('frontend') }}/img/chat/icon.jpg" class="ms-user-img" alt="Profile image">
                                    <span class="ms-status-icon ms-online"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ms-user-info">
                                    <span>Ken Ossai</span>
                                    <p>Available</p>
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
    <script src="{{ asset('frontend/js/vendor/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/tilt.jquery.js') }}"></script>
    <script src="{{ asset('frontend') }}/js/vendor/mixitup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/jquery.fancybox.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/slick.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/fontawesome.js"></script>

    <!-- Scroll button animation for mouse hover Js -->
    <script src="{{ asset('frontend') }}/js/vendor/tweenmax.min.js"></script>

    <!-- Site Main Js -->
    <script src="{{ asset('frontend') }}/js/script.js"></script>

</body>


<!-- Mirrored from maraviyainfotech.com/projects/masterly/demo-4/dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 20:15:17 GMT -->
</html>
