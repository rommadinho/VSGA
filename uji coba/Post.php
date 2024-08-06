<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // untuk mengambil data dari formulir
    $name = $_POST['name'];
    $email = $_POST['email'];

    // untuk melakukan validasi sederhana
    if (empty($name) || empty($email)) {
        echo "Nama dan email harus diisi!";
    } else {
        echo "Nama: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email);
    }
} else {
    echo "Metode request tidak valid!";
}
?>
