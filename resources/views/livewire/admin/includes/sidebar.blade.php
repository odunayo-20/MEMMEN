<div>
 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{ route('admin_dashboard') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><img style='width:100px; height:100px; object-fit:cover; object-position:100% 0%;' src="{{ asset('admin/img/logo/men1.png') }}" alt=""></h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                @auth('admin')  
                <img class="rounded-circle me-lg-2" src="{{ Storage::url(Auth::guard('admin')->user()->image) }}" alt="" style="width: 40px; height: 40px; object-fit:cover; object-position:100% 0%;">
                @endauth
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::guard('admin')->user()->name }}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('admin_dashboard') }}" class="nav-item nav-link @if(Request::segment(2) == 'dashboard') active @endif"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('admin_event') }}" class="nav-item nav-link @if(Request::segment(2) == 'event') active @endif"><i class="fa fa-chart-pie me-2"></i>Events</a>
            <a href="{{ route('admin_testimonial') }}" class="nav-item nav-link @if(Request::segment(2) == 'testimonial') active @endif"><i class="fa fa-th me-2"></i>Testimonials</a>
            <a href="{{ route('admin_team') }}" class="nav-item nav-link @if(Request::segment(2) == 'team') active @endif"><i class="fa fa-table me-2"></i>Teams</a>
            <a href="{{ route('admin_contact') }}" class="nav-item nav-link @if(Request::segment(2) == 'contact') active @endif"><i class="fa fa-mail-bulk me-2"></i>Contacts</a>
            <a href="{{ route('admin_donate') }}" class="nav-item nav-link @if(Request::segment(2) == 'donate') active @endif"><i class="fa fa-chart-line me-2"></i>Donates</a>
            
        </div>
    </nav>
</div>
<!-- Sidebar End -->
</div>
