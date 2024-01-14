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
            <h1 class="display-2 text-white mb-4 animated slideInDown">Testimonial</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Testimonial</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Testimonial</p>
                <h1 class="display-5 mb-5">What Clients Say About Our Services!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
               

                @foreach ($testimonial as $value)
                    
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" style="object-fit: cover; object-position:100% 0%;" src="{{ Storage::url($value->image) }}" alt="">
                    <p class="mb-4">{{ $value->content }}</p>
                    <h5 style='text-transform: capitalize'>{{ $value->name }}</h5>
                    <span class="text-primary" style='text-transform: capitalize'> {{ $value->profession }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



</div>