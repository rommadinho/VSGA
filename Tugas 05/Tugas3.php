<?php
// Mendeklarasikan variabel dengan data mahasiswa
$nim = "123456";
$nama = "Budi Santoso";
$nilaiQ1 = 80;
$nilaiQ2 = 70;
$nilaiUTS = 75;
$nilaiUAS = 85;
$nilaiProyek = 90;

// Menghitung nilai akhir
$nilaiAkhir = (0.10 * $nilaiQ1) + (0.10 * $nilaiQ2) + (0.10 * $nilaiUTS) + (0.20 * $nilaiUAS) + (0.50 * $nilaiProyek);

// Menentukan status kelulusan
$statusKelulusan = ($nilaiAkhir > 60) ? "Lulus" : "Tidak Lulus";

// Menampilkan hasil
echo "<h1>Status Kelulusan Mahasiswa</h1>";
echo "<p><strong>NIM:</strong> " . htmlspecialchars($nim) . "</p>";
echo "<p><strong>Nama:</strong> " . htmlspecialchars($nama) . "</p>";
echo "<p><strong>Nilai Q1:</strong> " . htmlspecialchars($nilaiQ1) . "</p>";
echo "<p><strong>Nilai Q2:</strong> " . htmlspecialchars($nilaiQ2) . "</p>";
echo "<p><strong>Nilai UTS:</strong> " . htmlspecialchars($nilaiUTS) . "</p>";
echo "<p><strong>Nilai UAS:</strong> " . htmlspecialchars($nilaiUAS) . "</p>";
echo "<p><strong>Nilai Proyek:</strong> " . htmlspecialchars($nilaiProyek) . "</p>";
echo "<p><strong>Nilai Akhir:</strong> " . number_format($nilaiAkhir, 2) . "</p>";
echo "<p><strong>Status Kelulusan:</strong> " . htmlspecialchars($statusKelulusan) . "</p>";
?>
