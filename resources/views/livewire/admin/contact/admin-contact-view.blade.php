<!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
    @include('livewire.admin.includes.navbar')
    <!-- Navbar End -->


    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">


            <div class="col-md-12">
                <div class="bg-secondary rounded h-100">
                    <div class="card bg-secondary border-primary mb-3 w-100 ">
                        <div class="card-header"><strong class='text-white'>Name: </strong>
                            {{ $contact->name }}</div>
                        <div class="card-header">
                            <strong class='text-white'>Email:
                            </strong>{{ $contact->email }}
                        </div>
                        <div class="card-body text-primary">
                            <h6 class="card-title "><strong class="my-2 d-block text-white">Subject:</strong>
                                <span class='text-primary'>{{$contact->subject}}</span>
                            </h6>
                            <p class="card-text" style="text-align: justify">
                                <strong class='my-2 d-block text-white'>Message:</strong>
                                <span style="text-align: justify">{{$contact->message}}</span>
                            </p>
                        </div>
                        <div class="card-footer">
                            <span class="text-white">Created: </span>
                            {{ $contact->created_at->format('d-M-Y h:iA') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->

    <!-- Footer Start -->
    @include('livewire.admin.includes.footer')
    <!-- Footer End -->
</div>
<!-- Content End -->