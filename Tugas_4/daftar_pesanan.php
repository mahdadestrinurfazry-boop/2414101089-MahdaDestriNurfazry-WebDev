<?php
include 'koneksi.php';

// Ambil data dari database
$query = "SELECT * FROM pemesanan ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pesanan - Desa Wisata</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
        .btn-edit { background-color: #007bff; color: white; padding: 5px 10px; text-decoration: none; border-radius: 3px; }
        .btn-delete { background-color: #dc3545; color: white; padding: 5px 10px; text-decoration: none; border-radius: 3px; }
    </style>
</head>
<body>

<h2>Daftar Pesanan</h2>
<table>
    <tr>
        <th>Nama</th>
        <th>Phone</th>
        <th>Jumlah Peserta</th>
        <th>Jumlah Hari</th>
        <th>Akomodasi</th>
        <th>Transportasi</th>
        <th>Service/Makanan</th>
        <th>Harga Paket</th>
        <th>Total Tagihan</th>
        <th>Aksi</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['nama_pemesan']; ?></td>
        <td><?php echo $row['nomor_hp']; ?></td>
        <td><?php echo $row['jumlah_peserta']; ?></td>
        <td><?php echo $row['durasi_perjalanan']; ?></td>
        <td><?php echo $row['penginapan']; ?></td>
        <td><?php echo $row['transportasi']; ?></td>
        <td><?php echo $row['makanan']; ?></td>
        <td><?php echo number_format($row['harga_paket']); ?></td>
        <td><?php echo number_format($row['total_tagihan']); ?></td>
        <td>
            <a href="edit_pesanan.php?id=<?php echo $row['id']; ?>" class="btn-edit">Edit</a>
            <a href="hapus_pesanan.php?id=<?php echo $row['id']; ?>" 
               class="btn-delete" 
               onclick="return confirm('Anda yakin akan hapus?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>