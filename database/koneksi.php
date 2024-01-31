<?php 
$servername = "localhost";
$database = "db_mangasoul";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (mysqli_connect_errno()) {
    die("gagal bre". mysqli_connect_error());
} else {
    echo"bisa cuy";
}

?>