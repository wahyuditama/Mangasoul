<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style5.css">
</head>



<body>
    <!-- maian container -->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!-- login container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!-- sidebox left -->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: blue">
                <div class="featured-image mb-3">
                    <img src="1.png" class="img-fluid" style="width: 250px" />
                </div>
                <p class="text-white fs-2 fw-600">verifikaision</p>
                <h2 class="text-white text-wrap text-center" style="width: 17rem">Join gas kkeun</h2>
            </div>
            <!-- sideboxright -->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <p>Haloo Guest</p>
                        <p>we are bad mood to be have your back again</p>
                    </div>
                    <form action="process_login.php" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6"
                                placeholder="email adress" name="username" />
                        </div>

                        <div class="input-group mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6"
                                placeholder="password" name="password" />
                        </div>

                        <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" />
                                <label for="form-check" class="form-check text-secondary">
                                    <h2>Remember us</h2>
                                </label>
                            </div>
                            <div class="forgot">
                                <h2><a href="#">Forgot Password</a></h2>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6"><img src="" sty;e="width:20px;"
                                    class="me-2" />Up by
                                Browser</button>
                        </div>
                        <div class="row">
                            <small>Do your Having Account ?!@ <a href="">Sign Up in kene</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container">
    <h2>Login</h2>
    <form action="process_login.php" method="POST">
        <label for="username">Username:</label><br>
      <input type="text" id="username" name="username"><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password"><br>
      <input type="submit" value="Login">
    </form>
  </div>

<p>Belum punya akun? <a href="register.php">Daftar disini</a></p> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>