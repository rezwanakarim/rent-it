<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login to your account</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>

<body>


    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">

                    <div class="p-5 ms-xl-4">
                        <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                        <a href="{{ route('frontend.index') }}" class="text-secondary"
                            style="text-decoration: none"><span class="h1 fw-bold mb-0">Rent !t</span></a>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4  pt-5 pt-xl-0 mt-xl-n5">

                        <form style="width: 23rem;" action="{{ route('customers.authenticate') }}" method="post">
                            @csrf
                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example18" name="email" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example18">Email address</label>
                            </div>

                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example28" name="password" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example28">Password</label>
                            </div>

                            <div class="pt-1 mb-4">
                                <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
                            </div>

                            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                            <p>Don't have an account? <a href="{{ route('customers.create') }}"
                                    class="link-primary fs-6">Register here</a></p>

                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="{{ asset('ui/backend/assets/img/login.jpg') }}" alt="Login image" class="w-100 vh-100"
                        style="object-fit: cover; object-position: left;">
                </div>
            </div>
        </div>
    </section>

</body>

</html>
