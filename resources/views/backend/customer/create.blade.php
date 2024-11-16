<x-backend.layouts.master>
    {{-- <x-slot:title>info
    </x-slot> --}}
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card bg-light mx-auto" style="width: 45rem;">
            <div class="card-body border rounded bg-light">
                <div class="alert alert-secondary" role="alert">
                    <h2 class="text-center">Create New Customer</h2>
                </div>
                {{-- Registration Form  --}}
                <form action="{{ route('customers.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <span class="text-danger">{{ $error }}</span>
                        @endforeach
                    @endif
                    <div class="row mb-3">
                        <div class="col">
                            <label for="firstName" class="form-label">First Name:</label>
                            <input type="text" name="firstName" class="form-control" id="firstName"
                                value="{{ old('firstName') }}">
                        </div>
                        @error('firstName')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="col">
                            <label for="lastName" class="form-label">Last Name:</label>
                            <input type="text" name="lastName" class="form-control" id="lastName"
                                value="{{ old('lastName') }}">
                        </div>
                        @error('firstName')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" name="username" class="form-control" id="username"
                            value="{{ old('username') }}">
                    </div>
                    @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender:</label><br>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input shadow" name="gender" id="male"
                                value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                            <label for="male" class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input shadow" name="gender" id="female"
                                value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                            <label for="female" class="form-check-label">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input shadow" name="gender" id="others"
                                value="others" {{ old('gender') == 'others' ? 'checked' : '' }}>
                            <label for="others" class="form-check-label">Others</label>
                        </div>
                    </div>
                    @error('gender')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="row mb-3">
                        <div class="col">
                            <label for="address" class="form-label">Address:</label>
                            <input type="text" name="address" class="form-control" id="address"
                                value="{{ old('address') }}">
                        </div>
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="number" class="form-label">Contact Number:</label>
                            <input type="text" name="number" class="form-control" id="number"
                                value="{{ old('number') }}">
                            @error('number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" name="email" class="form-control" id="email"
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" name="password" class="form-control" id="password"
                                value="{{ old('password') }}">
                        </div>

                        <div class="col">
                            <label for="confirmPassword" class="form-label">Confirm Password:</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                id="confirmPassword" value="{{ old('password_confirmation') }}">
                        </div>
                    </div>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-check mb-3">
                        <input type="checkbox" name="terms" value="1" class="form-check-input shadow"
                            id="terms">
                        <label for="terms" class="form-check-label">I agree to the <a href="#">terms and
                                conditions</a>.</label>
                    </div>
                    <div class="text-center mb-3">
                        <button type="submit" class="btn btn-primary shadow btn-lg">Register</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

</x-backend.layouts.master>
