<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fontawesome/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.min.css') }}">
</head>
<body id="page-top">
    <div id="wrapper">
        <x-dashboard-sidebar />
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <x-dashboard-topbar />
                <div class="container-fluid">
                    @yield('breadcrumb')
                    {{ $slot }}
                </div>
            </div>
            <x-dashboard-footer />
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <x-dashboard-logout-modal />

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/admin/js/sb-admin-2.min.js') }}"></script>
    <!-- Page level plugins -->
    <script src="{{ asset('assets/admin/vendor/chart.js/Chart.min.js') }}"></script>
    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/admin/js/demo/chart-pie-demo.js') }}"></script>
</body>
</html>
