<?php
// Konfigurasi Database
$host = "localhost";
$user = "root";     // Default user XAMPP
$pass = "";         // Default password XAMPP (kosong)
$db   = "db_pariwisata"; 

// Membuat Koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek Koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

?>