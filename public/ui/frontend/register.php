<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container d-flex  justify-content-center align-items-center" style="height: 115vh;">
        <div class="col-lg-6 px-4 py-4 border rounded shadow">
            <h1 class="text-center mb-3">Register</h1>
            <form action="./index.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col">
                        <label for="firstname" class="form-label">First Name:</label>
                        <input type="text" name="firstname" class="form-control" id="firstname" required>
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label">Last Name:</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" name="username" class="form-control" id="username" required>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender:</label><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input shadow" name="gender" id="male" value="male" required>
                        <label for="male" class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input shadow" name="gender" id="female" value="female" required>
                        <label for="female" class="form-check-label">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input shadow" name="gender" id="others" value="others" required>
                        <label for="others" class="form-check-label">Others</label>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="contactnumber" class="form-label">Contact Number:</label>
                        <input type="tel" name="contactnumber" class="form-control" id="contactnumber" required>
                    </div>
                    <div class="col">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="col">
                        <label for="confirmpassword" class="form-label">Confirm Password:</label>
                        <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" required>
                    </div>
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input shadow" id="terms" required>
                    <label for="terms" class="form-check-label">I agree to the <a href="#">terms and conditions</a>.</label>
                </div>
                <div class="text-center mb-3">
                    <button type="submit" class="btn btn-primary shadow">Register</button>
                </div>
                <div class="form-group text-center">
                    <p> Already have an account? <a href="#">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>