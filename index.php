<?php
// Mockup sederhana untuk UI Toko Online
echo "<h1>Selamat datang di Toko Online</h1>";
echo '<form method="GET" action="">';
echo '<input type="text" name="cari" placeholder="Cari barang...">';
echo '<button type="submit">Cari</button>';
echo '</form>';

if (isset($_GET['cari']) && stripos($_GET['cari'], 'Kemeja') !== false) {
    echo "<p>Hasil pencarian: Kemeja Flanel - Rp 150.000</p>";
}
?>