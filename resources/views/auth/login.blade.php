<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Login | Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        {{-- Toastr CSS --}}
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <style>
            .auth-body{
                background-image: url('../assets/images/ken.png');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
            }

            .svg{
                font-size: 23px;
                font-weight: bolder;
                border: 3px solid rgb(14, 13, 13);
                padding:  1px 10px;
                border-radius: 50%;
                -moz-box-align: center;
                align-items: center;
                color: rgb(11, 11, 11);
                }

        </style>
    </head>

    <body class="auth-body">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">

                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="index.html" class="auth-logo">
                                    <span class="svg">K</span>
                                </a>
                            </div>
                        </div>

                        <h4 class="text-muted text-center font-size-18"><b>Sign In</b></h4>

                        <div class="p-3">

                            <form class="form-horizontal mt-3" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="text" id="username" name="username"  required="" placeholder="Username">
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="password" id="password" name="password" required="" placeholder="Password">
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="form-label ms-1" for="customCheck1">Remember me</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>

                                <div class="form-group mb-0 row mt-2">
                                    <div class="col-sm-7 mt-3">
                                        <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                    </div>
                                    <div class="col-sm-5 mt-3">
                                        <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets') }}/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets') }}/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('assets') }}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('assets') }}/libs/node-waves/waves.min.js"></script>

        <script src="{{ asset('assets') }}/js/app.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <script>
            $(document).ready(function() {
                @if(Session::has('message'))
                toastr.options =
                {
                "closeButton" : true,
                "progressBar" : false
                }
                toastr.success("{{ session('message') }}");
                @endif

                @if(Session::has('error'))
                toastr.options =
                {
                "closeButton" : true,
                "progressBar" : false
                }
                toastr.error("{{ session('error') }}");
                @endif

                @if(Session::has('info'))
                toastr.options =
                {
                "closeButton" : true,
                "progressBar" : true
                }
                toastr.info("{{ session('info') }}");
                @endif

                @if(Session::has('warning'))
                toastr.options =
                {
                "closeButton" : true,
                "progressBar" : false
                }
                toastr.warning("{{ session('warning') }}");
                @endif
            });
        </script>

    </body>
</html>
