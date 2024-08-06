<?php
// Mendeklarasikan variabel untuk menyimpan data produk
$productName = "Laptop";
$productQuantity = 10;
$productPrice = 7500000.00; // Harga per produk dalam IDR
$productStatus = "Tersedia";

// Menghitung total nilai inventaris
$totalValue = $productQuantity * $productPrice;

// Menampilkan laporan lengkap
echo "<h1>Laporan Inventaris</h1>";
echo "<p><strong>Nama Produk:</strong> " . htmlspecialchars($productName) . "</p>";
echo "<p><strong>Jumlah Produk:</strong> " . htmlspecialchars($productQuantity) . "</p>";
echo "<p><strong>Harga per Produk:</strong> Rp " . number_format($productPrice, 2, ',', '.') . "</p>";
echo "<p><strong>Total Nilai Inventaris:</strong> Rp " . number_format($totalValue, 2, ',', '.') . "</p>";
echo "<p><strong>Status Ketersediaan:</strong> " . htmlspecialchars($productStatus) . "</p>";
?>
