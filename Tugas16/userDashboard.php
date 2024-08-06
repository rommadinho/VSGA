<html>
<body>
<?php
session_start();

if (isset($_SESSION['status']) && $_SESSION['status'] === 'login') {
    echo '<h1> Hai ', $_SESSION['username'], '</h1><br>';
    echo '<a href="sessionLogout.php">Logout</a>';
} else {
    echo "Anda belum login";
}
?>
</body>
</html>
