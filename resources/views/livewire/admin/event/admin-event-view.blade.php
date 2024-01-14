
        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
           @include('livewire.admin.includes.navbar')
            <!-- Navbar End -->


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                   
                    <div class="col-md-12 mb-4">
                        <div class="card bg-dark text-white">
                            <h5 class="card-title" style="text-align: justify">{{ $event->title }}</h5>
                            <img src="{{ Storage::url($event->image) }}" class="card-img w-100" style='width:100%; height:400px; object-fit:cover; object-position:100% 0%' alt="...">
                            <p class="card-text"> <span>Date: {{$event->date}}</span> <span class='float-end'>Time: {{$event->time}}</span></p>
                                <p class="card-text" style="text-align: justify">{{ $event->content }}</p>
                                <p class="card-text" style='text-align:justify'><strong>Location: </strong>{{ $event->location }}</p>
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
