<!DOCTYPE html>
<html>
<head>
    <title>Penjumlahan Bilangan Genap</title>
</head>
<body>
    <h1>Penjumlahan Bilangan Genap dari 2 hingga 24</h1>
    <?php
        $i = 2; // Inisialisasi variabel $i dengan nilai awal 2
        $sum = 0; // Inisialisasi variabel $sum untuk menyimpan hasil penjumlahan

        // Menggunakan perulangan while untuk menjumlahkan bilangan genap dari 2-24
        while ($i <= 24) {
            $sum += $i; // Menambahkan nilai $i ke $sum
            $i += 2; // Menambah nilai $i sebesar 2
        }

        echo "Hasil penjumlahan bilangan genap dari 2 hingga 24 adalah: " . $sum;
    ?>
</body>
</html>
