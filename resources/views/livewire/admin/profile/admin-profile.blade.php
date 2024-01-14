
     
  
      <!-- add content stop here-->
    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
       @include('livewire.admin.includes.navbar')
        <!-- Navbar End -->


        <!-- Form Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row">
                <div class="col-12">
                  <div class="card bg-dark text-white">
                    <div class="card-header">
                      <h4>Admin</h4>
                    </div>
                    <div class="card-body">

                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa fa-exclamation-circle me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
        
                      <div class="row">
                        <div class="col-md-4">
                          <form wire:submit='updateImage'>
                            <div class="row mb-3">
                              @if(Auth::guard('admin')->user()->image != null)
                              <img src="{{Storage::url(Auth::guard('admin')->user()->image)}}" alt="Admin profile"
                                style="width: 100%; height:300px">
        
                              @else
                              <img src="{{asset('admin/img/no-image/no-image1.png') }}" alt="Admin profile"
                                style="width: 100%; height:300px">
        
                              @endif
                              @if($new_image)
        
                              <img src="{{ $new_image->temporaryUrl()}}" alt="" style="width: 100px; height:50px; object-fit:cover; object-position: 100% 0%;"
                                class="img-fluid">
                              @endif
                            </div>
                            <div class="row">
        
                              <input wire:model.lazy='new_image' type="file" name="" id="" class="form-control">
                              @error('new_image')
                              <span class='text-danger'>{{$message}}</span>
                              @enderror
        
                              @if(!empty($new_image))
                              <button class='btn btn-primary mt-2'>Upload Image</button>
        
                              @endif
                            </div>
                          </form>
                        </div>
                        @auth('admin')
        
                        <div class="col-md-8">
                          <form wire:submit='updateAdmin'>

                            <div class="col-sm-12 col-xl-12">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <h6 class="mb-4">Change Password</h6>
                                    <div class="form-floating mb-3">
                                        <input wire:model.defer='name' type="text" class="form-control" id="floatingInput"
                                            >
                                        <label for="floatingInput">Name</label>
                                        @error('name')
                                            <span class='text-danger'>{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input wire:model.defer='email' type="text" class="form-control" id="floatingPassword"
                                            placeholder="email">
                                        <label for="floatingPassword">Email</label>
                                        @error('email')
                                        <span class='text-danger'>{{ $message }}</span>
                                    @enderror
                                    </div>
                      
                                    
                                    <div class='my-2'>
                                        <button class="btn btn-primary ">Submit</button>
                                    </div>
                                </div>
                            </div>
                            
        
                        </div>
                        @endauth
                      </div>
                      </form>
                    </div>
        
                  </div>
                </div>
        
        
              </div>
            </div>
        </div>
    </div>