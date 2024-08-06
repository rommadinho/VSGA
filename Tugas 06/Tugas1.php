<?php

function hitungBiayaFotokopi($jumlahLembar) {
    $biaya = 0;

    if ($jumlahLembar <= 100) {
        $biaya = $jumlahLembar * 150;
    } elseif ($jumlahLembar <= 500) {
        $biaya = $jumlahLembar * 120;
    } else {
        $biaya = $jumlahLembar * 100;
    }

    if ($biaya > 200000) {
        $biaya = $biaya * 0.90; // Diskon 10%
    } elseif ($biaya > 100000) {
        $biaya = $biaya * 0.95; // Diskon 5%
    }

    return $biaya;
}

// Contoh penggunaan:
$jumlahLembar = 350; // Ganti dengan jumlah lembar yang akan difotokopi
$totalBiaya = hitungBiayaFotokopi($jumlahLembar);

echo "Total biaya fotokopi untuk $jumlahLembar lembar adalah Rp" . number_format($totalBiaya, 0, ',', '.') . "\n";
?>
