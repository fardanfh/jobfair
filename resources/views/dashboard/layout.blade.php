<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMK TI GNC</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    {{-- sweet alert2 --}}
    <link rel="stylesheet" href="sweetalert2.min.css">
    {{-- sweet alert2  --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{-- icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM+gJ8MJQbzC6Dzh9AI/GbMpDm17V5ZkA2ceD3F" crossorigin="anonymous">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container-scroller">

        <!-- Navbar -->
        @include('components.navbarDashboard')
        <!-- End Of Navbar -->

        <div class="container-fluid page-body-wrapper">
            <!-- Sidebar -->
            @include('components.sidebar')
            <!-- End Of Sidebar -->

            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>


                <div class="main">
                    <div class="content-wrapper">
                        @yield('createjob')
                        @yield('scripts')
                    </div>

                    {{-- Footer --}}
                    @include('components.footer')
                    {{-- End Of Footer --}}
                </div>
            </div>
        </div>

        {{-- sweet alert2 CDN --}}
        <script src="sweetalert2.all.min.js"></script>
        <script src="sweetalert2.min.js"></script>
        {{-- sweet alert2 CDN --}}
        <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="/assets/vendors/chart.js/chart.umd.js"></script>
        <script src="/assets/vendors/datatables.net/jquery.dataTables.js"></script>
        <!-- <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
        <script src="/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
        <script src="/assets/js/dataTables.select.min.js"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="/assets/js/off-canvas.js"></script>
        <script src="/assets/js/template.js"></script>
        <script src="/assets/js/settings.js"></script>
        <script src="/assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="/assets/js/jquery.cookie.js" type="text/javascript"></script>
        <script src="/assets/js/dashboard.js"></script>
        <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
</body>

</html>
