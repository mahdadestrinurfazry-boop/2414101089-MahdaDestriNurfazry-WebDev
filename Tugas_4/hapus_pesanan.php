<?php
include 'koneksi.php';

// Ambil ID dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM pemesanan WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        // Jika berhasil, muncul pesan dan kembali ke daftar
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href='daftar_pesanan.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>