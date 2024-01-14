<div>
    
    <!-- Spinner Start -->
    {{-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-dark" role="status" style="width: 3rem; height: 3rem;"></div>
    </div> --}}
    <!-- Spinner End -->
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">Our Team</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-primary" aria-current="page">Our Team</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->
    
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Team</p>
                <h1 class="display-5 mb-5">Our Expert People Ready to Help You</h1>
            </div>
            <div class="row g-4">
                @foreach ($teams as $team)
                    
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" style="height: 200px; width:100%; object-fit:cover; object-position:100% 0%;" src="{{ Storage::url($team->image) }}" alt="">
                        <h5 style="text-transform: capitalize">{{ $team->name }}</h5>
                        <span class="text-primary" style="text-transform: capitalize">{{ $team->profession }}</span>
                        <ul class="team-social">

                            @if(!empty($team->facebook))
                            <li><a class="btn btn-square" href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            @endif
                                
                            @if(!empty($team->twitter))
                            <li><a class="btn btn-square" href="{{ $team->twitter }}"><i class="fab fa-twitter"></i></a></li>
                            @endif
                                
                            @if(!empty($team->instagram))
                            <li><a class="btn btn-square" href="{{ $team->instagram }}"><i class="fab fa-instagram"></i></a></li>
                            @endif
                                
                            @if(!empty($team->linkedin))
                            <li><a class="btn btn-square" href="{{ $team->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                            @endif
                                
                        </ul>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- Team End -->
</div>
