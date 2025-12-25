-- Perintah untuk membuat database
CREATE DATABASE IF NOT EXISTS db_pariwisata;
USE db_pariwisata;

-- Perintah untuk membuat tabel pemesanan
CREATE TABLE IF NOT EXISTS pemesanan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pemesan VARCHAR(100),
    nomor_hp VARCHAR(20),
    tanggal_pesan DATE,
    durasi_perjalanan INT,
    jumlah_peserta INT,
    penginapan CHAR(1),
    transportasi CHAR(1),
    makanan CHAR(1),
    harga_paket DECIMAL(15, 2),
    total_tagihan DECIMAL(15, 2)
);