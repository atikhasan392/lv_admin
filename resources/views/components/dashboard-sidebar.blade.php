<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center active" href="{{ route('admin.index') }}">
        <div class="sidebar-brand-icon"><i class="fa-solid fa-bolt"></i></div>
        <div class="sidebar-brand-text mx-3">E-Shopping</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">E-commerce</div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="true" aria-controls="collapseProducts">
            <i class="fa-solid fa-box"></i>
            <span>Products</span>
        </a>
        <div id="collapseProducts" class="collapse" aria-labelledby="headingProducts" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="products/status/all">All Products</a>
                <a class="collapse-item" href="add-products">Add new</a>
                <a class="collapse-item" href="products-view">View</a>
                <a class="collapse-item" href="products-category">Category</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseOrders" aria-expanded="true" aria-controls="collapseOrders">
            <i class="fa-solid fa-boxes-packing"></i>
            <span>Orders</span>
        </a>
        <div id="collapseOrders" class="collapse" aria-labelledby="headingOrders" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="new-order">New order</a>
                <a class="collapse-item" href="#">Order details</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseCustomers" aria-expanded="true" aria-controls="collapseCustomers">
            <i class="fa-solid fa-users"></i>
            <span>Customers</span>
        </a>
        <div id="collapseCustomers" class="collapse" aria-labelledby="headingCustomers" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="customers">All customers</a>
                <a class="collapse-item" href="customers-profile">Profile</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseSupport" aria-expanded="true" aria-controls="collapseSupport">
            <i class="fa-solid fa-headset"></i>
            <span>Support</span>
        </a>
        <div id="collapseSupport" class="collapse" aria-labelledby="headingSupport" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Chats</a>
                <a class="collapse-item" href="contact-list">Contact list</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">Website appearance</div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseAppearance" aria-expanded="true" aria-controls="collapseAppearance">
            <i class="fa-solid fa-brush"></i>
            <span>Appearance</span>
        </a>
        <div id="collapseAppearance" class="collapse" aria-labelledby="headingAppearance" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a href="javascript:void(0)" class="collapse-item">Slideshow</a>
                <a href="javascript:void(0)" class="collapse-item">Banner One</a>
                <a href="javascript:void(0)" class="collapse-item">Banner Two</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true" aria-controls="collapseBlog">
            <i class="fa-brands fa-blogger"></i>
            <span>Blog</span>
        </a>
        <div id="collapseBlog" class="collapse" aria-labelledby="headingBlog" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a href="javascript:void(0)" class="collapse-item">All blog</a>
                <a href="javascript:void(0)" class="collapse-item">Add new</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fa-solid fa-file-lines"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a href="javascript:void(0)" class="collapse-item">All pages</a>
                <a href="javascript:void(0)" class="collapse-item">Add new</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">Dev Tools</div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseEmploye" aria-expanded="true" aria-controls="collapseEmploye">
            <i class="fa-solid fa-user"></i>
            <span>Employe</span>
        </a>
        <div id="collapseEmploye" class="collapse" aria-labelledby="headingEmploye" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">All employe</a>
                <a class="collapse-item" href="#">Add new</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseApi" aria-expanded="true" aria-controls="collapseApi">
            <i class="fa-solid fa-file-code"></i>
            <span>API</span>
        </a>
        <div id="collapseApi" class="collapse" aria-labelledby="headingApi" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a href="#" class="collapse-item">Api documentation</a>
                <a href="#" class="collapse-item">Api key</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseFacebook" aria-expanded="true" aria-controls="collapseFacebook">
            <i class="fa-brands fa-facebook"></i>
            <span>Facebook</span>
        </a>
        <div id="collapseFacebook" class="collapse" aria-labelledby="headingFacebook" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="javascript:void(0)">Facebook Page</a>
                <a class="collapse-item" href="javascript:void(0)">Facebook pixels</a>
                <a class="collapse-item" href="javascript:void(0)">Open graph protocol</a>
                <a class="collapse-item" href="javascript:void(0)">Facebook marketplace</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="true" aria-controls="collapseSettings">
            <i class="fa-solid fa-gear"></i>
            <span>Settings</span>
        </a>
        <div id="collapseSettings" class="collapse" aria-labelledby="headingSettings" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="javascript:void(0)">General settings</a>
                <a class="collapse-item" href="javascript:void(0)">Facebook pixels</a>
                <a class="collapse-item" href="javascript:void(0)">Meta tags settings</a>
                <a class="collapse-item" href="javascript:void(0)">Sitemaps</a>
                <a class="collapse-item" target="_blank" href="https://search.google.com/search-console/">Google search console</a>
            </div>
        </div>
    </li>
    <div class="text-center d-none d-md-inline"><button class="rounded-circle border-0" id="sidebarToggle"></button></div>
</ul>
