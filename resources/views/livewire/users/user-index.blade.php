  <div>
   <!-- Page Heading -->
    <div class="mb-4 d-sm-flex align-items-center justify-content-between">
        <h1 class="mb-0 text-gray-800 h3">Users</h1>
    </div>
    <div class="row">
        <div class="mx-auto card">
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form method="GET" action="{{ route('users.index') }}">
                            <div class="form-row align-items-center">
                                <div class="col">
                                    <input type="search" wire:model="search" class="mb-2 form-control" id="inlineFormInput"
                                        placeholder="Jane Doe">
                                </div>
                            <div wire:loading>
                              <div class="spinner-border text-danger" role="status">
                                 <span class="visually-hidden"> </span>
                              </div>
                            </div>
                                {{-- <div class="col">
                                    <button type="submit" class="mb-2 btn btn-primary">Search</button>
                                </div> --}}
                            </div>
                        </form>
                    </div>
                    <div>
                        <a href="" class="mb-2 btn btn-primary">Create</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#Id</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="" class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                            @empty
                            <tr><th>No results</th></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 