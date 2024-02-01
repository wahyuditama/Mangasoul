<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>

<h2>Register</h2>
<form action="process_register.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    
    <br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    
    <br>

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required>
    
    <br>

    <button type="submit">Register</button>
</form>

<p>Sudah punya akun? <a href="login.php">Login disini</a></p>

</body>
</html>
