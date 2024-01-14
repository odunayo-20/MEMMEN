
        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
           @include('livewire.admin.includes.navbar')
            <!-- Navbar End -->


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                   <div class="col-md-4">
                    <a href="{{ route('admin_team_create') }}" class="btn btn-sm btn-primary">New Team</a>
                   </div>
                   
                   <div class="row g-3 align-items-center">
                    <div class="col-auto">
                            <input wire:model.live='search' class="form-control bg-white border-0" type="search" placeholder="Search">
                        </div>
                    <div class="col-auto">
                            <select wire:model.live='pagination' class="form-select bg-white">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-12">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa fa-exclamation-circle me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Team</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Profession</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Created</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-white">
                                      @foreach ($teams as $value)
                                      <tr>

                                          <td>{{ $loop->iteration }}</td>
                                              <td>{{ Str::limit($value->name, 40, '...') }}</td>
                                              <td><img style="width:50px; height:50px; object-fit:cover; object-position:50% 50%;" class="rounded-circle" src="{{ Storage::url($value->image) }}" alt=""></td>
                                              <td>{{ $value->profession }}</td>
                                              <td>{{ $value->status }}</td>
                                              <td>{{ $value->created_at->format('d-M-Y, h:iA') }}</td>
                                              <td>
                                                <a wire:navigate href="team/edit/{{$value->id}}" class="btn btn-sm btn-success">Edit</a>
                                                <button wire:click='delete({{ $value->id }})' class="btn btn-sm btn-danger">Del</button>
                                            </td>
                                      </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                                {{ $teams->links() }}
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
