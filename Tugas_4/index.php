<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Desa Wisata Pulesari</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        header { background: #4da6ff; color: white; padding: 20px; text-align: center; }
        nav { background: #333; overflow: hidden; }
        nav a { float: left; display: block; color: white; text-align: center; padding: 14px 20px; text-decoration: none; }
        nav a:hover { background: #ddd; color: black; }
        
        .container { padding: 40px 20px; display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; }
        
        /* Card tanpa gambar dibuat lebih rapi */
        .card { 
            background: white;
            border: 1px solid #ccc; 
            width: 300px; 
            border-radius: 12px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.1); 
            transition: transform 0.3s;
        }
        .card:hover { transform: translateY(-5px); }
        
        .card-body { padding: 20px; text-align: center; }
        .card-body h3 { color: #333; margin-top: 0; }
        .card-body p { color: #666; font-size: 14px; line-height: 1.5; }
        
        .btn-pesan { 
            background: #007bff; 
            color: white; 
            padding: 12px; 
            text-decoration: none; 
            display: block; 
            text-align: center; 
            border-radius: 8px; 
            font-weight: bold;
            margin-top: 15px;
        }
        .btn-pesan:hover { background: #0056b3; }
        
        .link-video { color: #6f42c1; text-decoration: none; font-size: 14px; font-weight: bold; }
        .link-video:hover { text-decoration: underline; }
    </style>
</head>
<body>

<header>
    <h1>Selamat Datang di Desa Wisata Pulesari</h1>
</header>

<nav>
    <a href="index.php">Beranda</a>
    <a href="form_pesan.php">Pemesanan Paket Wisata</a>
    <a href="daftar_pesanan.php">Modifikasi Pesanan</a>
</nav>

<div class="container">
    <div class="card">
        <div class="card-body">
            <h3>Paket Tour 2 Hari</h3>
            <p>Nikmati keindahan alam Pulesari selama 2 hari 1 malam dengan fasilitas lengkap.</p>
            <a href="https://www.youtube.com/results?search_query=desa+wisata+pulesari" target="_blank" class="link-video">🎥 Lihat Video Promosi</a>
            <a href="form_pesan.php" class="btn-pesan">Daftar Paket</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h3>Paket Edukasi Budaya</h3>
            <p>Belajar membatik dan melihat kesenian lokal langsung dari ahlinya di Pulesari.</p>
            <a href="https://www.youtube.com/results?search_query=desa+wisata+pulesari" target="_blank" class="link-video">🎥 Lihat Video Promosi</a>
            <a href="form_pesan.php" class="btn-pesan">Daftar Paket</a>
        </div>
    </div>
</div>

</body>
</html>