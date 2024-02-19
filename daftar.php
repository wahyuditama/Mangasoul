<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register Page</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/style4.css" />
</head>

<body>
  <section>
    <form action="process_register.php" method="post">
      <h1>Login</h1>
      <div class="inputbox">
        <input type="text" name="username" />
        <label for="username">userame</label>
      </div>
      <div class="inputbox">
        <input type="password" name="password" />
        <label for="password">Password</label>
      </div>
      <div class="inputbox">
        <input type="password" name="confirm_password" />
        <label for="password">Password</label>
      </div>
      <div class="forgot">
        <label for="#"> <input type="checkbox" /> Remember Me ? </label>
        <a href="#">Forgot Password</a>
      </div>
      <button>Login</button>
      <div class="register">
        <p>
          Don't Have an Account ?
          <a href="#">Register</a>
        </p>
      </div>
    </form>
  </section>



  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>