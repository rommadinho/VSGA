<?php

function tindakanPemain($jenisZombie) {
    switch ($jenisZombie) {
        case "Regular Zombie":
            return "Gunakan Peashooter!";
        case "Conehead Zombie":
            return "Gunakan Snow Pea!";
        case "Buckethead Zombie":
            return "Gunakan Repeater!";
        case "Newspaper Zombie":
            return "Gunakan Cherry Bomb!";
        case "Football Zombie":
            return "Gunakan Jalapeno!";
        default:
            return "Zombie tidak dikenali!";
    }
}

// Contoh penggunaan:
$jenisZombie = "Buckethead Zombie"; // Ganti dengan jenis zombie yang muncul
$tindakan = tindakanPemain($jenisZombie);

echo "Jenis Zombie: $jenisZombie\n";
echo "Tindakan: $tindakan\n";
?>
