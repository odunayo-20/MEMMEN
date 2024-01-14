<div>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Event</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Event</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center text-capitalize  mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Event Section</p>
                <h1 class="display-6 mb-5">The latest out going of events</h1>
            </div>
            <div class="row g-4">




                <div class="card bg-dark text-white">
                    <p><strong>Posted at</strong>: {{ $event->created_at->format('j F, Y, h : iA' ) }}</p>
                    <h5 class="card-title text-white" style="text-align: justify">{{ $event->title }}</h5>
                    <img src="{{ Storage::url($event->image) }}" class="card-img" style="width: 100%; height:400px; object-fit:cover; object-position:100% 0%;" alt="...">
                    {{-- <div class="c"> --}}
                        <p class="card-text"  style="text-align: justify">{{ $event->content }}</p>
                        {{-- <p class="card-text"  style="text-align: justify">Last updated 3 mins ago</p> --}}
                        <p class="card-text" style='text-align:justify'><strong>Location: </strong>{{ $event->location }}</p>
                        <p class="card-text "> <span>Date: {{$event->date}}</span> <span class='float-end'>Time: {{$event->time}}</span></p>

                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->




</div>
