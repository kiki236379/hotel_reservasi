<?php
$host = "localhost";
$user = "root";     // default user XAMPP
$pass = "rpl12345";          // default password kosong
$dbname = "ichiban_sushi";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>