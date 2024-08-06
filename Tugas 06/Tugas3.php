<?php

function hitungHargaAkhir($jumlahProduk, $hargaSatuan) {
    $totalHarga = $jumlahProduk * $hargaSatuan;
    $diskon = 0;

    if ($jumlahProduk > 20) {
        $diskon = 0.20; // Diskon 20%
    } elseif ($jumlahProduk > 10) {
        $diskon = 0.10; // Diskon 10%
    }

    $hargaSetelahDiskon = $totalHarga - ($totalHarga * $diskon);
    $pengirimanGratis = $hargaSetelahDiskon > 500000;

    return [
        'harga_akhir' => $hargaSetelahDiskon,
        'pengiriman_gratis' => $pengirimanGratis
    ];
}

// Contoh penggunaan:
$jumlahProduk = 25; // Ganti dengan jumlah produk yang dibeli
$hargaSatuan = 25000; // Ganti dengan harga satuan produk

$hasil = hitungHargaAkhir($jumlahProduk, $hargaSatuan);
$hargaAkhir = $hasil['harga_akhir'];
$pengirimanGratis = $hasil['pengiriman_gratis'];

echo "Jumlah Produk: $jumlahProduk\n";
echo "Harga Satuan: Rp" . number_format($hargaSatuan, 0, ',', '.') . "\n";
echo "Harga Akhir Setelah Diskon: Rp" . number_format($hargaAkhir, 0, ',', '.') . "\n";
echo "Pengiriman Gratis: " . ($pengirimanGratis ? "Ya" : "Tidak") . "\n";
?>
