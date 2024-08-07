<x-backend.layouts.master>

    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card bg-light mx-auto" style="width: 60rem;">
            <div class="card-body border rounded bg-light">
                <div class="alert alert-secondary" role="alert">
                    <h2 class="text-center">Update Role</h2>
                </div>

                <form method="POST" action="{{ route('roles.update', ['role' => $role->id]) }}"
                    enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <label for="name">Name</label>
                    <input class="w-50 form-control shadow" value="{{ old('name', $role->name) }}" type="text"
                        name="name" id="name"> <br>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="text-start">
                        <button class="w-25 btn btn-lg btn-secondary" type="submit" value="add"
                            name="add">Update</button>
                        <a class="w-25 btn btn-lg btn-danger" href="{{ route('roles.list') }}">Cancel</a><br><br>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-backend.layouts.master>
