<div>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Contact Us</p>
                <h1 class="display-5 mb-5">If You Have Any Query, Please Contact Us</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4">Please drop your informations here</h3>
                    <p class="mb-4"></p>
                    <form wire:submit.prevent='store'>
                        <div class="row g-3">
                            @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" wire:model.live='name' class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" wire:model.live='email' class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" wire:model.live='subject' class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                    @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea wire:model.live='message' class="form-control" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                                    <label for="message">Message</label>
                                    @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="mb-4">Contact Details</h3>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Our Office</h6>
                            <span>123 Street, New York, USA</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Call Us</h6>
                            <span>+012 345 67890</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom-0 pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Mail Us</h6>
                            <span>info@example.com</span>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63348.643094388346!2d4.8025655120468835!3d7.0923221850610325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10386269d18b3449%3A0x4f347e4670cd572e!2sOndo%2C%20Nigeria!5e0!3m2!1sen!2sbd!4v1703498578458!5m2!1sen!2sbd" width="600" style="min-height: 300px; border:0;" class="w-100 rounded"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

</div>
