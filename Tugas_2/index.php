<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tugas 2 - Perhitungan Diskon</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f4; padding: 20px; }
        .box { background: white; padding: 20px; border-radius: 8px; border: 1px solid #ddd; max-width: 400px; }
        input { width: 100%; padding: 8px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { background-color: #ff9800; color: white; border: none; padding: 10px; width: 100%; cursor: pointer; border-radius: 4px; font-weight: bold; }
        .hasil { margin-top: 20px; padding: 10px; background: #e7f3fe; border-left: 5px solid #2196F3; }
    </style>
</head>
<body>

<div class="box">
    <h3>Program Hitung Diskon Kedai Mahda</h3>
    <form method="POST">
        <label>Masukkan Total Belanja (Rp):</label>
        <input type="number" name="total_belanja" placeholder="Contoh: 120000" required>
        <button type="submit" name="hitung">Hitung Sekarang</button>
    </form>

    <?php
    // Fungsi Hitung Diskon (Logika Utama Tugas 2)
    function hitungDiskon($totalBelanja) {
        $diskon = 0;
        if ($totalBelanja >= 100000) {
            $diskon = 0.1 * $totalBelanja; // Diskon 10%
        } elseif ($totalBelanja >= 50000) {
            $diskon = 0.05 * $totalBelanja; // Diskon 5%
        } else {
            $diskon = 0; // Tidak ada diskon
        }
        return $diskon;
    }

    // Cek jika tombol hitung sudah diklik
    if (isset($_POST['hitung'])) {
        $inputBelanja = $_POST['total_belanja'];
        $nilaiDiskon = hitungDiskon($inputBelanja);
        $totalBayar = $inputBelanja - $nilaiDiskon;

        echo "<div class='hasil'>";
        echo "Total Belanja: Rp " . number_format($inputBelanja, 0, ',', '.') . "<br>";
        echo "Diskon: Rp " . number_format($nilaiDiskon, 0, ',', '.') . "<br>";
        echo "<strong>Total Bayar: Rp " . number_format($totalBayar, 0, ',', '.') . "</strong>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>