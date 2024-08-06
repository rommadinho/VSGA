<?php
require 'db_connect.php';

// Data pengguna yang akan dimasukkan
$username = 'user123';
$email = 'user123@example.com';

// Query SQL untuk menambahkan data pengguna
$sql = "INSERT INTO users (username, email) VALUES (:username, :email)";

// Persiapkan query
$stmt = $pdo->prepare($sql);

// Eksekusi query dengan mengikat parameter
$stmt->execute([
    ':username' => $username,
    ':email' => $email
]);

echo "User berhasil ditambahkan!";
?>
