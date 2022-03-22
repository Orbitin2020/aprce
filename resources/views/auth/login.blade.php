<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>APRCE | Admin Login</title>

    <meta name="description" content="ADMIN APRCE">
    <meta name="author" content="Orbitin.id">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="ADMIN APRCE">
    <meta property="og:site_name" content="ADMIN APRCE">
    <meta property="og:description" content="ADMIN APRCE">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('assets/media/aprce/aprce-favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/media/aprce/aprce-favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/media/aprce/aprce-apple.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">
    <style>
            .strike {
        display: block;
        text-align: center;
        overflow: hidden;
        white-space: nowrap; 
        }

        .strike > span {
            position: relative;
            display: inline-block;
        }
        
        .strike > span:before,
        .strike > span:after {
            content: "";
            position: absolute;
            top: 50%;
            width: 150px;
            height: 1px;
            background: #989898;
        }

        .strike > span:before {
            right: 100%;
            margin-right: 15px;
        }

        .strike > span:after {
            left: 100%;
            margin-left: 15px;
        }
    </style>
</head>

<body>
    <div id="page-container" class="main-content-boxed">

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="bg-image overflow-hidden" style="">
                <div class="hero-static content-full bg-white-op-90" >
                    <!-- Header -->
                    <div class="py-50 px-5 text-center">
                        <h1 class="display-3 font-w700 text-black mb-10 invisible" data-toggle="appear" data-class="animated fadeInDown" >
                            <a href="">
                                <img src="{{asset('assets/media/aprce/LOGO APRCE-01.png')}}" alt="" style="max-height: 120px">
                            </a>
                        </h1>
                        <h2 class="h4 font-w400 text-muted mb-0 invisible" data-toggle="appear" data-class="animated fadeInUp">Admin sign in</h2>
                    </div>
                    <!-- END Header -->

                    <!-- Sign In Form -->
                    <div class="row justify-content-center px-5 invisible" data-toggle="appear" data-class="animated fadeInUp">
                        <div class="col-sm-8 col-md-6 col-xl-4">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group row mx-5">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            <label for="Email">Email</label>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mx-5 mb-30">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input d="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">
                                            <label for="login-password">Password</label>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row gutters-tiny mx-5">
                                    <div class="col-12 mb-10">
                                        <button type="submit"
                                            class="btn btn-block btn-hero btn-noborder btn-rounded btn-warning">
                                            Login
                                        </button>
                                    </div>
                                    {{-- @if (Route::has('password.request'))
                                    <div class="col-sm-12 mb-5">
                                        <a class="btn btn-block btn-noborder btn-rounded "
                                            href="{{ route('password.request') }}">
                                            <i class="fa fa-warning text-muted mr-5"></i> Forgot password
                                        </a>
                                    </div>
                                    @endif --}}

                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Sign In Form -->
                </div>
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
    <script src="{{asset('assets/js/codebase.core.min.js')}}"></script>

    <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
    <script src="{{asset('assets/js/codebase.app.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{asset('assets/js/pages/op_auth_signin.min.js')}}"></script>
</body>

</html>