<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <a class="navbar-brand" href="{{ route('admin.index') }}"><img src="{{ asset('assets/admin/img/logo.png') }}"></a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="javascript:;" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 text-gray-600 small">ATik HaSan</span>
                <img class="img-profile rounded-circle" src="{{ asset('assets/admin/img/undraw_profile.svg') }}">
            </a>
            <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
            </div>
        </li>
    </ul>
</nav>
