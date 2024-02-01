<?php
session_start();
include 'config/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Periksa ke database, sesuaikan dengan struktur tabel dan kolom di database kamu
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login berhasil, redirect ke halaman dashboard atau halaman lain yang diinginkan
        $_SESSION["username"] = $username;
        header("Location: ../mangasoul/");
   
    } else {
        // Login gagal
        echo "Login gagal. Periksa kembali username dan password.";
    }
}
?>
