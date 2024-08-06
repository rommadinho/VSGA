<?php
// Mendeklarasikan variabel untuk panjang dan lebar persegi panjang
$length = 10; // Panjang (misalnya dalam satuan meter)
$width = 5;   // Lebar (misalnya dalam satuan meter)

// Menghitung luas persegi panjang
$area = $length * $width;

// Menghitung keliling persegi panjang
$perimeter = 2 * ($length + $width);

// Menghitung panjang diagonal persegi panjang
$diagonal = sqrt(($length * $length) + ($width * $width));

// Menampilkan hasil perhitungan
echo "<h1>Hasil Perhitungan Persegi Panjang</h1>";
echo "<p><strong>Panjang:</strong> " . htmlspecialchars($length) . " meter</p>";
echo "<p><strong>Lebar:</strong> " . htmlspecialchars($width) . " meter</p>";
echo "<p><strong>Luas:</strong> " . htmlspecialchars($area) . " meter<sup>2</sup></p>";
echo "<p><strong>Keliling:</strong> " . htmlspecialchars($perimeter) . " meter</p>";
echo "<p><strong>Panjang Diagonal:</strong> " . number_format($diagonal, 2) . " meter</p>";
?>
