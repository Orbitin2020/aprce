<!doctype html>
<html lang="en" class="no-focus">
    <head>
        @include('layouts_admin.incl_top')
    </head>
    <body>

        <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed page-header-modern main-content-boxed">

            <!-- Sidebar -->
            @include('layouts_admin.sidebar')
            <!-- END Sidebar -->

            <!-- Header -->
            @include('layouts_admin.header')
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                @yield('content')
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            @include('layouts_admin.footer')
            <!-- END Footer -->
        </div>
       {{-- Include Bot --}}
        @include('layouts_admin.incl_bot')
        @stack('scripts')
       {{-- End Include Bot --}}
    </body>
</html>