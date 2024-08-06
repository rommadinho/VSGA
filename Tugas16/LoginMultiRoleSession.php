<?php
include "koneksi.php"; // Menghubungkan ke database

// Mendapatkan data dari form
$username = $_POST['username'];
$password = md5($_POST['password']); // Menggunakan MD5 untuk hashing password (sebaiknya menggunakan hashing yang lebih aman seperti bcrypt atau Argon2)

// Query untuk memeriksa apakah username dan password cocok
$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($connect, $query);

// Memeriksa jumlah baris yang cocok
$rowcount = mysqli_num_rows($result);

if ($rowcount > 0) {
    // Memulai session
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";

    // Mendapatkan data user dari hasil query
    $fetchResult = mysqli_fetch_assoc($result);

    if ($fetchResult['role'] == 'admin') {
        echo "Anda berhasil login ";
        echo "<a href='adminDashboard.php'>Admin Dashboard</a>";
    } elseif ($fetchResult['role'] == 'user') {
        echo "Anda berhasil login ";
        echo "<a href='userDashboard.php'>User Dashboard</a>";
    }
} else {
    echo "Anda gagal login ";
    echo "<a href='loginForm.html'>Login Form</a>";
}

// Menutup koneksi database
mysqli_close($connect);
?>
