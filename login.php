<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>


    <h3>TES CUY</h3>
    <form action="validasi.php" method="POST">
    <input type="text" placeholder="username"  name="username" aria-label="Search">
    <input type="password" placeholder="password" name="password" aria-label="Search">
    <button type="submit" name="login">Login</button>

<h2>Login</h2>
<form action="process_login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    
    <br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    
    <br>

    <button type="submit">Login</button>
</form>

<p>Belum punya akun? <a href="register.php">Daftar disini</a></p>

</body>
</html>
