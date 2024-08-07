
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container d-flex  justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-lg-6 px-4 py-4 border rounded shadow">
            <h1 class="text-center mb-3">Login</h1>
            <form action="./index.php" method="post" enctype="multipart/form-data">
                <div >
                    <label for="email"></label>
                    <input  type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>
                </div>
                <div class="mb-3">
                    <label for="password"></label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>

                <div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input">
                                <label>Remember Me</label>
                            </div>
                        </div>
                        <div class="col text-md-center">
                            <a href="#">Forgot Your Password?</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mb-3">
                    <button type="submit" class="btn btn-primary shadow">Login</button>
                </div>
                <div class="text-center">
                    <p>Don't have an account? <a href="./register.php">Register a new account</a></p>
                </div>
            </form>
        </div>
    </div>

</body>

</html>