<?php 
// File: process_login.php

// Mulai sesi
session_start();


// Hubungkan ke database
require_once('database/koneksi.php');

// Tangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Lindungi dari SQL Injection
$username = $koneksi->real_escape_string($username);
$password = $koneksi->real_escape_string($password);

// Query untuk mencari pengguna dengan username dan password yang sesuai
$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = $koneksi->query($query);

if ($result->num_rows > 0) {
    // Login berhasil
    $row = $result->fetch_assoc();

    // Simpan informasi pengguna ke sesi jika diperlukan
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];

    // Redirect ke halaman yang sesuai setelah login
    header("Location: tes.php");
} else {
    // Login gagal
    echo "Login gagal. Periksa kembali username dan password.";
}


?>
