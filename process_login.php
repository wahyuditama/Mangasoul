<?php
// Fungsi untuk memproses login
function processLogin($username, $password) {
    // Panggil file koneksi
    include "config/koneksi.php";

    // Lakukan pemeriksaan login
    $query = "SELECT * FROM admin WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    // Periksa apakah username ditemukan
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];

        // Periksa apakah password cocok
        if (password_verify($password, $hashed_password)) {
            // Login berhasil
            return true;
        } else {
            // Password tidak cocok
            return false;
        }
    } else {
        // Username tidak ditemukan
        return false;
    }

    // Tidak perlu menutup koneksi di sini, karena $conn sudah ada di file koneksi.php
}
?>
