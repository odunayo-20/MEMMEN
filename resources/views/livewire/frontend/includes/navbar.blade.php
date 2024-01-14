    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <style>
            .page-header {
    background: linear-gradient(rgba(145, 48, 48, 0.1), rgba(0, 0, 0, .1)), url({{ asset('event/IMG18.jpg') }}) center center no-repeat;
    background-size: cover;
}

.page-header .breadcrumb-item+.breadcrumb-item::before {
    color: var(--light);
}

.page-header .breadcrumb-item,
.page-header .breadcrumb-item a {
    font-size: 18px;
    color: var(--light);
}


/*** About ***/
.about {
    background: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1)), url({{ asset('event/IMG17.jpg') }}) left center no-repeat;
    background-size: cover;
}
        </style>
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="{{ route('index') }}" class="navbar-brand d-lg-none">
                    {{-- <h1 class="fw-bold m-0">NGO's</h1> --}}
                    <img class="rounded" style="width: 100px; height:70px; object-fit:cover; object-position:50% 50%;" src="{{ asset('frontend/img/logo/men2.png') }}" alt="">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="{{ route('index') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('service') }}" class="nav-item nav-link">Services</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="{{ route('team') }}" class="dropdown-item">Our Team</a>
                                <a href="{{route('testimonial')}}" class="dropdown-item">Testimonial</a>
                                <a href="{{route('donate')}}" class="dropdown-item">Donate</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="{{route('event_front')}}" class="dropdown-item">Event</a>
                                {{-- <a href="{{route('event')}}" class="dropdown-item">News</a> --}}
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="{{ route('donate') }}" class="btn btn-dark rounded-pill py-2 px-3">Donate</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
