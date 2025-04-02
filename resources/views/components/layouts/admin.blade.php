<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.min.css') }}">
</head>
<body id="page-top">
    <div id="wrapper">
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
    <x-dashboard-modal id="logoutModal" title="Ready to Leave?" actionUrl="javascript:;" actionText="Logout">
        <p>Select "Logout" below if you are ready to end your current session.</p>
    </x-dashboard-modal>
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/script.min.js') }}"></script>
</body>
</html>
