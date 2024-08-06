<?php
// Array multidimensi untuk menyimpan data produk
$produk = [
    ['nama' => 'Produk A', 'harga' => 50000, 'stok' => 20],
    ['nama' => 'Produk B', 'harga' => 30000, 'stok' => 50],
    ['nama' => 'Produk C', 'harga' => 40000, 'stok' => 30],
    ['nama' => 'Produk D', 'harga' => 20000, 'stok' => 10],
    ['nama' => 'Produk E', 'harga' => 60000, 'stok' => 40]
];

// Menampilkan data produk menggunakan foreach
echo "Data Produk:\n";
echo str_repeat("-", 40) . "\n";
echo str_pad("Nama Produk", 15) . str_pad("Harga", 10) . str_pad("Stok", 5) . "\n";
echo str_repeat("-", 40) . "\n";
foreach ($produk as $p) {
    echo str_pad($p['nama'], 15) . str_pad($p['harga'], 10) . str_pad($p['stok'], 5) . "\n";
}

// Mencari produk dengan stok terbanyak
$stokTerbanyak = $produk[0];
foreach ($produk as $p) {
    if ($p['stok'] > $stokTerbanyak['stok']) {
        $stokTerbanyak = $p;
    }
}

// Mencari produk dengan harga termurah
$hargaTermurah = $produk[0];
foreach ($produk as $p) {
    if ($p['harga'] < $hargaTermurah['harga']) {
        $hargaTermurah = $p;
    }
}

// Menampilkan produk dengan stok terbanyak
echo "\nProduk dengan Stok Terbanyak:\n";
echo str_repeat("-", 40) . "\n";
echo str_pad("Nama Produk", 15) . str_pad("Harga", 10) . str_pad("Stok", 5) . "\n";
echo str_repeat("-", 40) . "\n";
echo str_pad($stokTerbanyak['nama'], 15) . str_pad($stokTerbanyak['harga'], 10) . str_pad($stokTerbanyak['stok'], 5) . "\n";

// Menampilkan produk dengan harga termurah
echo "\nProduk dengan Harga Termurah:\n";
echo str_repeat("-", 40) . "\n";
echo str_pad("Nama Produk", 15) . str_pad("Harga", 10) . str_pad("Stok", 5) . "\n";
echo str_repeat("-", 40) . "\n";
echo str_pad($hargaTermurah['nama'], 15) . str_pad($hargaTermurah['harga'], 10) . str_pad($hargaTermurah['stok'], 5) . "\n";
?>
