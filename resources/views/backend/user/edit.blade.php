<x-backend.layouts.master>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card bg-light mx-auto" style="width: 80rem;">
            <div class="card-body border rounded bg-light">
                <div class="alert alert-info" role="alert">
                    <h2 class="text-center">Update user Info</h2>
                </div>
                <div class="container rounded bg-white">
                    {{-- Cutomer Update Form  --}}
                    <form method="POST" class="px-3"
                        action="{{ route('users.update', ['user' => $user->id]) }}"enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <div class="d-flex flex-column align-items-center text-center p-3">
                                    <img class="rounded-circle mt-5" width="150px" src="https://cutt.ly/N4M2Cu0">
                                    <span class="font-weight-bold">{{ $user->username }}</span>
                                    <span class="text-black-50">{{ $user->email }}</span>
                                </div>
                            </div>


                            <div class="col-md-5 offset-md-1 ">
                                <div class="p-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="text-right">Profile Settings</h4>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <label class="fs-6 text-secondary" for="firstName">First name</label>
                                            <input class="form-control shadow"
                                                value="{{ old('firstName', $user->firstName) }}" type="text"
                                                name="firstName" id="firstName" placeholder="Enter first name"> <br>
                                            @error('firstName')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <label class="fs-6 text-secondary" for="lastName">Surname</label>
                                            <input class="form-control shadow"
                                                value="{{ old('lastName', $user->lastName) }}" type="text"
                                                name="lastName" id="lastName" placeholder="Enter last name"> <br>
                                            @error('lastName')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <label class="fs-6 text-secondary" for="number">Phone number</label>
                                            <input class="form-control shadow"
                                                value="{{ old('number', $user->number) }}" type="text" name="number"
                                                id="number" placeholder="Enter phone number"> <br>
                                            @error('number')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <label class="fs-6 text-secondary" for="address">Address</label>
                                            <input class="form-control shadow"
                                                value="{{ old('address', $user->address) }}" type="text"
                                                name="address" id="address" placeholder="Enter first name"> <br>
                                            @error('address')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3">

                                    <div class="col-md-12 border rounded p-4">
                                        <label class="fs-6 text-secondary">User role</label>
                                        <p class="fw-semibold fs-5">
                                            {{ $user->role_id == 0 ? 'Not set yet' : $user->role->name }}</p>
                                    </div>
                                    <br>

                                    <label for="user_role" class="fs-5 text-secondary my-2">Change role</label>
                                    <select class="form-select shadow" name="user_role" id="user_role">
                                        <option selected disabled value="0">Select role</option>
                                        @foreach ($roles as $role)
                                            <option class="text-dark" value="{{ old($role->id, $role->id) }}"
                                                {{ $user->role_id == $role->id ? 'selected' : '' }}>
                                                {{ $role->name }}</option>
                                        @endforeach
                                    </select><br>
                                    @error('user_role')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="pt-3 text-center">
                                <button type="submit" class="btn btn-dark btn-lg px-4 ">Update</button>
                                <a href="{{ route('users.list') }}" class="btn btn-secondary btn-lg px-4 ">Cancel</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-backend.layouts.master>
