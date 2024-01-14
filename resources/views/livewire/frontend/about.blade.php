<div>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl about mb-5" style="margin-top: 2px;">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="{{ asset('event/video8.mp4') }}" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <p class="fs-5 fw-medium text-primary">About Us</p>
                        <h6 class="display-6">VISION</h6>
                        <p>TO INCREASE PEOPLES HEALTH CONSCIOUSNESS THROUGH PUBLIC HEALTH EDUCATION AIMED AT DISEASE REDUCTION, IMPROVING ACCESS TO MATERNAL & CHILD HEALTH CARE, IMPROVE WELLNESS AND HEALTH SEEKING BEHAVIOUR OF THE PEOPLE TO ENHANCE THEIR QUALITY OF LIFE AND PRODUCTIVITY</p>
                        <div class="row g-5 pt-2 mb-3">
                            <div class="col-sm-6 col-md-12 ">
                                <h6 class="display-6">MISSION</h6>
                                <p>TO DEVELOP AND PROMOTE THE WELL-BEING OF THE PEOPLE IN COMMUNITIES IN AFRICA, NIGERIA, BY INCREASING ACCESS TO HEALTH CARE SERVICES THROUGH COMMUNITY MEDICAL OUTREACH, HEALTH TALK IN SCHOOLS AND RURAL AREAS, PROMPT REFERRAL SERVICES TO HOSPITAL WHERE NECCESORY WITH SUPPORT SYSTEM AND ENGAGING THEM IN ACTIVITY THAT IMPROVE HEALTHY LIVING.</p>
                            </div>
                            <div class="col-sm-6 col-md-12 ">
                                <h1 class="display-6">GOALS</h1>
            <p>CREATING LIMITLESS OPPORTUNITIES THROUGH BETTER HEALTH.</p>
                            </div>

                        </div>
                        <a class="btn btn-dark rounded-pill py-3 px-5" href="">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
{{-- vision start --}}

<div class="container-fluid container-service py-5">
    <div class="container">

       <div class="row g-5">
        <div class="col-md-6 py-3 wow fadeInUp" data-wow-delay="0.4s">
            <img src="{{asset('event/IMG15.jpg')}}" alt="" class="img-fluid rounded " style="width: 100%; height:400px; object-fit:cover; object-position:100% 50%;">
        </div>
        <div class='col-md-6 wow fadeInUp' data-wow-delay="0.5s">
            <h1 class="display-6">AIMS AND OBJECTIVES</h1>
            <ol class="list" style='font-size:14px;'>
                <li>TO CONTRIBUTE TO THE STRENGHTNING OF HEALTH-SEEKING BEHAVIOUR OF THE PUBLIC AND THE HEALTH CARE DELIVERY SYSTEM.</li>
                <li>TO DEVELOP AND PROMOTE INNOVATIVE WAYS OF ENGAGING PEOPLE TO CONTRIBUTE TO AFRICA AND NIGERIA’S SUSTAINABLE DEVELOPMENT ESPECIALLY IN THE AREAS OF HEALTH THROUGH COLLECTIVE COLLABORATIVE AND ACTIVE PARCITIPATION.</li>
                <li>TO IMPROVE THE QUALITY OF LIFE AND HEALTH OF THE RURAL POPULATIONS.</li>
                <li>TO CREAT AWARENESS, INFORM, EDUCATE AND EMPOWER PEOPLE ABOUT HEALTH RELATED ISSUES.</li>
                <li>TO PROMOTE ENVIRONMENTAL FRIENDLY ACTIVITITIES AIMED AT REDUCTION OF DEGREDATION AND WASTE MANAGEMNET.</li>
                <li>TO DEVELOP AND MAINTAIN NETWORK AND PATNERSHIP WITH ALL THE TIERS OF GOVERNMNET, NON GOVERNMENT ORGANISATIONS AND INTERNATIONAL ORGANISATIONS FOR PUBLIC HEALTH PROMOTION.</li>
                <li>TO INCREASE PEOPLES HEALTH CONSCIOUSNESS THROUGH PUBLIC HEALTH EDUCATION AIMED AT DISEASE REDUCTION, IMPROVED WELLNESS AND AN ENHANCED QUALITY OF LIFE AND PRODUCTIVITY.</li>
            </ol>
        </div>
       </div>
       {{-- <div class="row g-5  py-3">

        <div class='col-md-6 wow fadeInUp' data-wow-delay="0.5s">
            <h6 class="display-6">VISION</h6>
            <p>TO INCREASE PEOPLES HEALTH CONSCIOUSNESS THROUGH PUBLIC HEALTH EDUCATION AIMED AT DISEASE REDUCTION, IMPROVING ACCESS TO MATERNAL & CHILD HEALTH CARE, IMPROVE WELLNESS AND HEALTH SEEKING BEHAVIOUR OF THE PEOPLE TO ENHANCE THEIR QUALITY OF LIFE AND PRODUCTIVITY</p>
            <h6 class="display-6">MISSION</h6>
            <p>TO DEVELOP AND PROMOTE THE WELL-BEING OF THE PEOPLE IN COMMUNITIES IN AFRICA, NIGERIA, BY INCREASING ACCESS TO HEALTH CARE SERVICES THROUGH COMMUNITY MEDICAL OUTREACH, HEALTH TALK IN SCHOOLS AND RURAL AREAS, PROMPT REFERRAL SERVICES TO HOSPITAL WHERE NECCESORY WITH SUPPORT SYSTEM AND ENGAGING THEM IN ACTIVITY THAT IMPROVE HEALTHY LIVING.</p>

            <h1 class="display-6">GOALS</h1>
            <p>CREATING LIMITLESS OPPORTUNITIES THROUGH BETTER HEALTH.</p>
        </div>
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <img src="{{asset('event/IMG17.jpg')}}" alt="" class="img-fluid rounded " style="width: 100%; height:400px; object-fit:cover; object-position:100% 0%;">
        </div>
       </div> --}}
    </div>
</div>
{{-- vision end --}}

    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Event Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <video width="320" height="240" controls>
                            <source class="embed-responsive-item" id='video' allowfullscreen src="{{ asset('event/video8.mp4') }}" allowscriptaccess="always" allow="autoplay">
                           </video>
                        {{-- <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


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
