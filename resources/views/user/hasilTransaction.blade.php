<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Asia Pasific Retailers Convention & Exhibition</title>

    <meta name="description"
        content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description"
        content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('assets_user/images/aprce/logo_ori.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets_user/images/aprce/logo_ori.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets_user/images/aprce/logo_ori.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <div class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
        <!-- END Sidebar -->
        {{-- https://wbnxex.stripocdn.email/content/guids/d37b0ea9-7bd8-4eab-87e9-eceaf40ed347/images/logo_white.png
        --}}
        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="content">
                <div class="block">
                    <div class="block-header block-header-default">
                        <img src="https://wbnxex.stripocdn.email/content/guids/d37b0ea9-7bd8-4eab-87e9-eceaf40ed347/images/logo_white.png"
                            alt="Asia Pasific Retailers Conventation Exbition" class="w-25">
                        {{-- <img> --}}
                        <div class="block-options">
                            <!-- Print Page functionality is initialized in Helpers.print() -->
                            <button type="button" class="btn-block-option text-white"
                                onclick="Codebase.helpers('print-page');">
                                <i class="si si-printer"></i> Print Invoice
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <!-- Invoice Info -->
                        <div class="row my-20">
                            <!-- Company Info -->
                            <div class="col-6">
                                <p class="h3">User Detail</p>
                                <p>
                                    Full Name: {{ $result['namaLengkap'] }}<br>
                                    Email: {{ $result['email'] }}<br>
                                    Phone: {{ $result['nohp'] }}<br>
                                </p>
                            </div>
                            <div class="col-6 text-right">
                                <p class="h3">Transaction</p>
                                <p>
                                    Order ID: {{ $result['order_id'] }}<br>
                                    Gross Amount: Rp. {{ number_format($result['gross_amount']) }}<br>
                                    Transaction Time: {{ $result['transaction_time'] }}<br>
                                    Payment Type: {{ $result['payment_type'] }}
                                </p>
                            </div>
                            <!-- END Company Info -->
                        </div>
                        <!-- END Invoice Info -->

                        <!-- Table -->
                        <div class="table-responsive push">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 60px;">#</th>
                                        <th>Ticket</th>
                                        <th class="text-center" style="width: 200px;">Kategori</th>
                                        <th class="text-center" style="width: 90px;">Quantity</th>
                                        <th class="text-right" style="width: 120px;">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            <p class="font-w600 mb-5">{{ $result['participant'] }}</p>
                                            <div class="text-muted">{{ $result['nm_tiket'] }}</div>
                                        </td>
                                        <td class="text-center"><strong>{{ $result['kategori'] }}</strong></td>
                                        <td class="text-center">
                                            <span class="badge badge-pill badge-primary">{{ $result['quantity']
                                                }}</span>
                                        </td>
                                        <td class="text-right">{{ $result['harga_tiket'] }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="font-w600 text-right">Subtotal</td>
                                        <td class="text-right">{{ $result['gross_amount'] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- END Table -->

                        <!-- Footer -->
                        <p class="text-muted text-center">Thank you very much for doing business with us. We look
                            forward to working with you again!</p>
                        <!-- END Footer -->
                    </div>
                </div>
                <a href="{{ route('user.index') }}" class="btn btn-success">Back to Menu</a>
                <!-- END Invoice -->
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="opacity-0">
            <div class="content py-20 font-size-xs clearfix">
                <div class="float-right">
                    Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="#"
                        target="_blank">APRCE</a>
                </div>
                <div class="float-left">
                    <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Asia Pasific Retailers
                        Convention And Exbition.</a> &copy;
                    <span class="js-year-copy"></span>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <script src="{{ asset('assets/js/codebase.core.min.js') }}"></script>
    <script src="{{ asset('assets/js/codebase.app.min.js') }}"></script>
</body>

</html>