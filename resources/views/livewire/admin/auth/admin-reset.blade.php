<!-- Sign In Start -->
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-4">
            <form wire:submit.prevent='resetPassword'>

                <div class="bg-secondary rounded p-4 p-sm-5 my-2 mx-3">
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fa fa-exclamation-circle me-2"></i>{{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa fa-exclamation-circle me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="d-flex align-items-center justify-content-between mb-2">

                        <a href="{{ route('index') }}" class="text-primary">
                            <h3 class="text-primary mb-0 "><img
                                    style='width:100px; height:100px; object-fit:cover; object-position:100% 0%;'
                                    src="{{ asset('frontend/img/logo/men1.png') }}" alt=""></h3>
                        </a>

                        <h6>Reset Password</h6>
                    </div>
                    <input wire:model='email' type="hidden" value="{{ $admin->email }}">
                    <input wire:model='token' type="hidden" value="{{ $admin->token }}">

                    <div class="form-floating mb-3">
                        <input wire:model.defer='password' type="password" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Password</label>
                        @error('password')
                            <span class='text-danger'>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input wire:model.defer='confirm_password' type="password" class="form-control"
                            id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Password</label>
                        @error('confirm_password')
                            <span class='text-danger'>{{ $message }}</span>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Sign In End -->
