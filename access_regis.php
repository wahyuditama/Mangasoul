<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register Page</title>
  <link rel="stylesheet" href="assets/css/register.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <div class="wrapper">
    <form action="process_regis.php">
      <h1>REGISTER</h1>
      <div class="input-box">
        <input type="text" placeholder="Username" name="username" />
        <i class="bx bx-user-circle"></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password" />
        <i class="bx bxs-lock-alt"></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confrim Password" name="confirm_password" />
        <i class="bx bxs-lock-alt"></i>
      </div>

      <div class="remember-forgot">
        <label for="#"><input type="checkbox" /> Ingat Password ??</label>
        <a href="#">Forgot Password</a>
      </div>

      <button class="btn" type="submit">Register</button>
      <div class="register-link">
        <p>
          Don't Have an Account?
          <a href="#">Register</a>
        </p>
      </div>
    </form>
  </div>

  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>