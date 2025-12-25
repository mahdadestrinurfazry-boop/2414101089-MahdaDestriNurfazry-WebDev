<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | UNIVERSITAS MAJALENGKA</title>
</head>
<body>
    <header>
        <h1>Pendaftaran Siswa Baru</h1>
        <h3>UNIVERSITAS MAJALENGKA</h3>
    </header>

    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="#">Pendaftar (Belum tersedia)</a></li>
        </ul>
    </nav>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "<b style='color: green;'>Pendaftaran siswa baru berhasil!</b>";
            } else {
                echo "<b style='color: red;'>Pendaftaran gagal!</b>";
            }
        ?>
    </p>
    <?php endif; ?>

</body>
</html>