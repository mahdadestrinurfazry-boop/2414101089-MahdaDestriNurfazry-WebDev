<?php
$server = "localhost";
$user = "root";
$password = ""; // Kosongkan jika pakai XAMPP standar
$nama_database = "pendaftaran_siswa";

// Menghubungkan ke database
$db = mysqli_connect($server, $user, $password, $nama_database);

// Cek apakah koneksi berhasil
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>