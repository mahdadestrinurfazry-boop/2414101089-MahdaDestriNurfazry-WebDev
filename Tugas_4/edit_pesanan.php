<?php
include 'koneksi.php';

// 1. Ambil data lama berdasarkan ID
$id = $_GET['id'];
$query = "SELECT * FROM pemesanan WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

// 2. Proses Update jika tombol Simpan diklik
if (isset($_POST['update'])) {
    $nama = $_POST['nama_pemesan'];
    $hp = $_POST['nomor_hp'];
    $durasi = $_POST['durasi'];
    $peserta = $_POST['peserta'];
    
    $penginapan = isset($_POST['penginapan']) ? 'Y' : 'N';
    $transportasi = isset($_POST['transportasi']) ? 'Y' : 'N';
    $makanan = isset($_POST['makanan']) ? 'Y' : 'N';
    
    $harga_paket = $_POST['harga_paket'];
    $total_tagihan = $_POST['total_tagihan'];

    $sql = "UPDATE pemesanan SET 
            nama_pemesan='$nama', nomor_hp='$hp', durasi_perjalanan='$durasi', 
            jumlah_peserta='$peserta', penginapan='$penginapan', 
            transportasi='$transportasi', makanan='$makanan', 
            harga_paket='$harga_paket', total_tagihan='$total_tagihan' 
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil diupdate!'); window.location.href='daftar_pesanan.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Pesanan</title>
</head>
<body>
    <h2>Form Edit Pemesanan</h2>
    <form method="POST">
        Nama: <input type="text" name="nama_pemesan" value="<?php echo $data['nama_pemesan']; ?>"><br>
        No HP: <input type="text" name="nomor_hp" value="<?php echo $data['nomor_hp']; ?>"><br>
        Durasi (Hari): <input type="number" id="durasi" name="durasi" value="<?php echo $data['durasi_perjalanan']; ?>"><br>
        Peserta: <input type="number" id="peserta" name="peserta" value="<?php echo $data['jumlah_peserta']; ?>"><br>
        
        Layanan:<br>
        <input type="checkbox" class="layanan" value="1000000" name="penginapan" <?php echo ($data['penginapan'] == 'Y') ? 'checked' : ''; ?>> Penginapan<br>
        <input type="checkbox" class="layanan" value="1200000" name="transportasi" <?php echo ($data['transportasi'] == 'Y') ? 'checked' : ''; ?>> Transportasi<br>
        <input type="checkbox" class="layanan" value="500000" name="makanan" <?php echo ($data['makanan'] == 'Y') ? 'checked' : ''; ?>> Makanan<br>
        
        Harga Paket: <input type="text" id="harga_paket" name="harga_paket" value="<?php echo $data['harga_paket']; ?>" readonly><br>
        Total Tagihan: <input type="text" id="total_tagihan" name="total_tagihan" value="<?php echo $data['total_tagihan']; ?>" readonly><br>
        
        <button type="button" onclick="hitungTotal()">Hitung Total Baru</button>
        <button type="submit" name="update">Update Pesanan</button>
    </form>

    <script>
    function hitungTotal() {
        let hargaPaket = 0;
        let durasi = parseInt(document.getElementById('durasi').value) || 0;
        let peserta = parseInt(document.getElementById('peserta').value) || 0;
        let checkboxes = document.querySelectorAll('.layanan');

        checkboxes.forEach((cb) => { if (cb.checked) { hargaPaket += parseInt(cb.value); } });

        document.getElementById('harga_paket').value = hargaPaket;
        document.getElementById('total_tagihan').value = durasi * peserta * hargaPaket;
    }
    </script>
</body>
</html>