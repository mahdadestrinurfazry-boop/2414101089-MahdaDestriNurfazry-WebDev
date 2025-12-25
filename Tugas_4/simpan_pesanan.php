<?php
include 'koneksi.php';

// Ambil data dari form
$nama_pemesan = $_POST['nama_pemesan'];
$nomor_hp = $_POST['nomor_hp'];
$tanggal_pesan = $_POST['tanggal_pesan'];
$durasi = $_POST['durasi'];
$peserta = $_POST['peserta'];

// Cek layanan (Jika checkbox dicentang kirim 'Y', jika tidak 'N')
$penginapan = isset($_POST['penginapan']) ? 'Y' : 'N';
$transportasi = isset($_POST['transportasi']) ? 'Y' : 'N';
$makanan = isset($_POST['makanan']) ? 'Y' : 'N';

$harga_paket = $_POST['harga_paket'];
$total_tagihan = $_POST['total_tagihan'];

// Query Insert ke Database
$sql = "INSERT INTO pemesanan (nama_pemesan, nomor_hp, tanggal_pesan, durasi_perjalanan, jumlah_peserta, penginapan, transportasi, makanan, harga_paket, total_tagihan) 
        VALUES ('$nama_pemesan', '$nomor_hp', '$tanggal_pesan', '$durasi', '$peserta', '$penginapan', '$transportasi', '$makanan', '$harga_paket', '$total_tagihan')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('Pesanan Berhasil Disimpan!');
            window.location.href='daftar_pesanan.php';
          </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>