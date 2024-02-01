<?php
include 'config/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Periksa apakah password dan konfirmasi password sesuai
    if ($password != $confirm_password) {
        echo "Password dan konfirmasi password tidak sesuai.";
        exit();
    }

    // Periksa apakah username sudah digunakan
    $check_query = "SELECT * FROM users WHERE username='$username'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        echo "Username sudah digunakan. Silakan pilih username lain.";
        exit();
    }

    // Insert ke database
    $insert_query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $insert_result = mysqli_query($conn, $insert_query);

    if ($insert_result) {
        echo "Registrasi berhasil! Silakan login <a href='login.php'>disini</a>.";
    } else {
        echo "Registrasi gagal. Silakan coba lagi.";
    }
}
?>
