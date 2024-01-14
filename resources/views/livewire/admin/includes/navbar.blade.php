<div>
    {{-- Be like water. --}}
</div>
 <!-- Navbar Start -->
 <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    {{-- <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a> --}}
    <a href="{{ route('admin_dashboard') }}" class="navbar-brand d-flex d-lg-none me-4">
        <h3 class="text-primary mb-0 "><img style='width:100px; height:100px; object-fit:cover; object-position:100% 0%;' src="{{ asset('admin/img/logo/men1.png') }}" alt=""></h3>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <form class="d-none d-md-flex ms-4">
        <input class="form-control bg-dark border-0" type="search" placeholder="Search">
    </form>
    <div class="navbar-nav align-items-center ms-auto">
       
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                @auth('admin')  
                <img class="rounded-circle me-lg-2" src="{{ Storage::url(Auth::guard('admin')->user()->image) }}" alt="" style="width: 40px; height: 40px; object-fit:cover; object-position:100% 0%;">
                @endauth
                <span class="d-none d-lg-inline-flex">
                    @auth('admin')
                    {{ Auth::guard('admin')->user()->name }}
                @endauth
            </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="{{ route('admin_profile') }}" class="dropdown-item">My Profile</a>
                <a href="{{ route('admin_change_password') }}" class="dropdown-item">Change Password</a>
                <livewire:admin.auth.admin-logout>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->