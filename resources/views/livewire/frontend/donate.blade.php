<div>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Donate Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Donate Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Donate Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Donate</p>
                <h1 class="display-6 mb-5">Please Donate</h1>
            </div>
            <div class="row g-5 bg-light rounded">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
<h2 class='display-5'>Donation Information</h2>
<h4 class="display-6">How much will you like to donate:</h4>
</div>
    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">
        <form wire:submit.prevent='store'>
                    <div class="row  g-3 p-2">
                        <div class="col-md-12">
                            @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            @if(session('error'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <div class="col-md-4 mb-3" style="float:right">
                                <div class="form-floating">
                                    {{-- <input type="text" wire:model='payment_name' >
                                    <input type="text" wire:model='quantity' > --}}
                                    <input wire:model='amount' type="number" class="form-control" id="name" placeholder="Enter Amount in Dollars">
                                    <label for="name">Enter Amount in Dollars</label>
                                    @error('amount')
                                        <span class='text-danger'>{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row g-3 p-2 ">
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input wire:model='name' type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                    @error('name')
                                    <span class='text-danger'>{{$message}}</span>
                                @enderror

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input wire:model='email' type="text" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                    @error('email')
                                    <span class='text-danger'>{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input wire:model='address' type="text" class="form-control" id="email" placeholder="Your Address">
                                    <label for="address">Your Address</label>
                                    @error('address')
                                    <span class='text-danger'>{{$message}}</span>
                                @enderror

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input wire:model='phone' type="tel" class="form-control" id="subject" placeholder="Phone">
                                    <label for="Phone">Phone</label>
                                    @error('phone')
                                    <span class='text-danger'>{{$message}}</span>
                                @enderror

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-block mb-3 btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" wire:model="btnpayment" id="btnradio1" autocomplete="off" value='stripe' name="btnradio">
                                    <label class="btn btn-outline-primary" for="btnradio1">Stripe</label>
                                
                                    <input type="radio" wire:model="btnpayment" class="btn-check" id="btnradio2" autocomplete="off" value='paypal' name="btnradio">
                                    <label class="btn btn-outline-primary" for="btnradio2">Paypal</label>
                                    @error('btnpayment')
                                @enderror
                                </div>
                                <button wire:click='store' class="btn btn-primary rounded-pill py-3 px-5" type="submit">Donate Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <p>Donate Now</p>
                    <h2>Let's donate to needy people for better lives</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End -->

</div>
