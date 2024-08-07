<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>

<body>


    <div class="container d-flex  justify-content-center align-items-center" style="height: 115vh;">
        <div class="col-lg-6 px-4 py-4 border rounded shadow">
            {{-- Successful message after registration --}}
            @if (session('message'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong>{{ session('message') }}</strong> <span>Please Login<a class="link-dark p-2"
                            href="{{ route('customers.login') }}">Here</a></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h1 class="text-center mb-3">Register</h1>
            {{--Registration Form  --}}
            <form action="{{ route('customers.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label for="firstName" class="form-label">First Name:</label>
                        <input type="text" name="firstName" class="form-control" id="firstName">
                    </div>
                    @error('firstName')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="col">
                        <label for="lastName" class="form-label">Last Name:</label>
                        <input type="text" name="lastName" class="form-control" id="lastName">
                    </div>
                    @error('firstName')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" name="username" class="form-control" id="username">
                </div>
                @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="gender" class="form-label">Gender:</label><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input shadow" name="gender" id="male"
                            value="male">
                        <label for="male" class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input shadow" name="gender" id="female"
                            value="female">
                        <label for="female" class="form-check-label">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input shadow" name="gender" id="others"
                            value="others">
                        <label for="others" class="form-check-label">Others</label>
                    </div>
                </div>
                @error('gender')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="row mb-3">
                    <div class="col">
                        <label for="address" class="form-label">Address:</label>
                        <input type="text" name="address" class="form-control" id="address">
                    </div>
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="number" class="form-label">Contact Number:</label>
                        <input type="number" name="number" class="form-control" id="number">
                        @error('number')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" name="email" class="form-control" id="email">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <div class="col">
                        <label for="confirmPassword" class="form-label">Confirm Password:</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="confirmPassword">
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
            {{-- Form End --}}

            {{--For Existing users, Login page link --}}
            <div class="form-group text-center">
                <p> Already have an account? <a href="{{ route('customers.login') }}">Login</a></p>
            </div>
        </div>
    </div>

</body>

</html>
