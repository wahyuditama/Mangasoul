<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

    <h2>Login</h2>
    
    <?php
    // Menangani form submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan data dari form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Panggil file koneksi
        include("koneksi.php");

        // Panggil fungsi untuk memproses login
        include("process_login.php");
        $login_result = processLogin($username, $password);

        // Periksa hasil login
        if ($login_result === true) {
            echo "Login berhasil!";
            // Redirect atau lakukan aksi sesuai kebutuhan setelah login
        } else {
            echo "Login gagal. Silakan cek username dan password.";
        }
    }
    ?>

    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        
        <input type="submit" value="Login">
    </form>

</body>
</html>
