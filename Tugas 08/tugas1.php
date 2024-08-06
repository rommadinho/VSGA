<?php
// Array angka
$angka = [23, 24, 24, 30, 34, 35, 40, 40, 46, 47];

// Fungsi untuk menghitung total
function hitungTotal($array) {
    return array_sum($array);
}

// Fungsi untuk menghitung rata-rata (mean)
function hitungRataRata($array) {
    return array_sum($array) / count($array);
}

// Fungsi untuk menghitung median
function hitungMedian($array) {
    sort($array);
    $count = count($array);
    $middle = floor(($count-1) / 2);
    if ($count % 2) {
        return $array[$middle];
    } else {
        return ($array[$middle] + $array[$middle + 1]) / 2.0;
    }
}

// Fungsi untuk menampilkan angka ganjil
function tampilkanAngkaGanjil($array) {
    $ganjil = array_filter($array, function($value) {
        return $value % 2 != 0;
    });
    return $ganjil;
}

// Menghitung total
$total = hitungTotal($angka);

// Menghitung rata-rata (mean)
$rataRata = hitungRataRata($angka);

// Menghitung median
$median = hitungMedian($angka);

// Menampilkan angka ganjil
$angkaGanjil = tampilkanAngkaGanjil($angka);

// Menampilkan hasil
echo "Total: $total\n";
echo "Rata-rata: $rataRata\n";
echo "Median: $median\n";
echo "Angka Ganjil: " . implode(", ", $angkaGanjil) . "\n";
?>
