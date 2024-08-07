<x-backend.layouts.master>

    <div class="height-100 bg-light p-2">
        <div class="height-100 bg-light">
            @if (session('message'))
                <div class="alert alert-success alert-dismissible " role="alert">
                    <strong>Success!</strong> {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h4>
                <x-slot:title>
                    User List
                    </x-slot>
            </h4>
            <a class="btn btn-primary m-2 " href="{{ route('users.create') }}">Create</a>

            <table id="example" class="table table-hover table-striped text-center shadow">
                <thead class="table-dark ">
                    <tr>
                        <th class="text-center">Serial No.</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Role</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($users as $user)
                    <tr>
                        <td class="align-middle">{{ $users->firstItem() + $loop->index }}</td>
                        <td class="align-middle">{{ $user->firstName }} {{ $user->lastName }}</td>
                        {{-- <td class="align-middle">{{ $user->role->name }}</td> --}}
                        <td class="align-middle">{{ $user->role_id == 0 ? 'Not set yet' : $user->role->name}}</td>
                            <td class="align-middle">
                                <a class="btn btn-primary my-1"
                                    href="{{ route('users.show', ['user' => $user->id]) }}">Show</a>
                                <a class="btn btn-warning my-1"
                                    href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a>
                                <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST"
                                    class="d-inline-block">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" name="submit" class="btn btn-danger my-1"
                                        onclick="confirm('Are you Sure?')">Delete</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>

    </div>


</x-backend.layouts.master>
