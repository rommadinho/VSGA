<?php
$produk = [
    'produk1' => ['nama' => 'Produk A', 'harga' => 50000, 'stok' => 20],
    'produk2' => ['nama' => 'Produk B', 'harga' => 30000, 'stok' => 50]
];
echo $produk['produk1']['nama']; // Output: Produk A
?>
