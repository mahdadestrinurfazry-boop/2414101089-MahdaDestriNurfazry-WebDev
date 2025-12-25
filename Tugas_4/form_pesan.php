<form id="formPemesanan" action="simpan_pesanan.php" method="POST">
    <label>Nama Pemesan:</label>
    <input type="text" name="nama_pemesan" required><br><br>

    <label>Phone:</label>
    <input type="text" name="phone" required placeholder="Masukkan nomor telepon"><br><br>

    <label>Jumlah Hari:</label>
    <input type="number" id="durasi" name="durasi" value="1" min="1"><br><br>

    <label>Jumlah Peserta:</label>
    <input type="number" id="peserta" name="peserta" value="1" min="1"><br><br>

    <label>Pelayanan Paket:</label><br>
    <input type="checkbox" class="layanan" value="1000000" id="penginapan"> Penginapan (Rp 1.000.000)<br>
    <input type="checkbox" class="layanan" value="1200000" id="transportasi"> Transportasi (Rp 1.200.000)<br>
    <input type="checkbox" class="layanan" value="500000" id="makanan"> Makanan (Rp 500.000)<br><br>

    <label>Harga Paket Perjalanan:</label>
    <input type="text" id="harga_paket" name="harga_paket" readonly><br><br>

    <label>Total Tagihan:</label>
    <input type="text" id="total_tagihan" name="total_tagihan" readonly><br><br>

    <button type="button" onclick="hitungTotal()">Hitung</button>
    <button type="submit">Simpan</button>
</form>

<script>
function hitungTotal() {
    let hargaPaket = 0;
    let durasi = parseInt(document.getElementById('durasi').value) || 0;
    let peserta = parseInt(document.getElementById('peserta').value) || 0;
    let checkboxes = document.querySelectorAll('.layanan');

    checkboxes.forEach((cb) => {
        if (cb.checked) {
            hargaPaket += parseInt(cb.value);
        }
    });

    document.getElementById('harga_paket').value = hargaPaket;

    let total = durasi * peserta * hargaPaket;
    document.getElementById('total_tagihan').value = total;
}
</script>