{{-- <div> --}}
    <div class="content">
        <!-- Navbar Start -->
        @include('livewire.admin.includes.navbar')
        <!-- Navbar End -->


        <!-- Sale & Revenue Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-line fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2"><a href="{{ route('admin_donate') }}">Total Donation</a></p>
                            <h6 class="mb-0">${{number_format($donate->sum('amount'), 2)  }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-table fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2"><a href="{{ route('admin_team') }}">Total Teams</a></p>
                            <h6 class="mb-0">{{ count($team) }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-mail-bulk fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2"><a href="{{ route('admin_contact') }}">Total Contacts</a></p>
                            <h6 class="mb-0">{{ count($contact) }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-pie fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2"><a href="{{ route('admin_event') }}">Total Events</a></p>
                            <h6 class="mb-0">{{ count($event) }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-bar fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2"><a href="{{ route('admin_testimonial') }}">Total Testimonial</a></p>
                            <h6 class="mb-0">{{ count($testimonial) }}</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Sale & Revenue End -->
 <!-- Chart Start -->
 <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-md-12">

            <div wire:ignore>
                <canvas id="myChart"></canvas>
              </div>
        </div>
          @assets
          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
          @endassets

          @script
          <script>
              const ctx = document.getElementById('myChart');
          const subscriptions = $wire.subscriptions;
          console.log(subscriptions)
        const labels = subscriptions.map(item=>item.Day)
        const values = subscriptions.map(item=>item.Value)
            new Chart(ctx, {
              type: 'bar',
              data: {
                labels: labels,
                datasets: [{
                  label: 'MENo~MEN',
                  data: values,
                  backgroundColor: [
                    "rgba(235, 22, 22, .7)",
                    "rgba(235, 22, 22, .6)",
                    "rgba(235, 22, 22, .5)",
                    "rgba(235, 22, 22, .4)",
                    "rgba(235, 22, 22, .3)"
                ],
                    fill: true
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        //     options: {
        //     responsive: true
        // }
        });
        </script>
        @endscript


    </div>
</div>
<!-- Chart End -->

        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Recent Donation</h6>
                    <a href="{{ route('admin_donate') }}">Show All</a>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                <th scope="col">Date</th>
                                <th scope="col">Payer Name</th>
                                <th scope="col">Payer Email</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donates as $value)

                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td>{{ $value->created_at->format('D-m-Y h:iA') }}</td>
                                <td>{{ $value->payer_name }}</td>
                                <td>{{ $value->payer_email }}</td>
                                <td>${{ $value->amount }}</td>
                                <td>{{ $value->payment_status }}</td>
                                <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->


        <!-- Widgets Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">

                <div class="col-sm-12 col-md-12 col-xl-12">
                    <div class="h-100 bg-secondary rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Calender</h6>
                            <a href="">Show All</a>
                        </div>
                        <div id="calender"></div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Widgets End -->


        <!-- Footer Start -->
        @include('livewire.admin.includes.footer')
        <!-- Footer End -->
    </div>
{{-- </div> --}}
