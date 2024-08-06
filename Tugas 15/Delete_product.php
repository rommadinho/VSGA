<?php
require 'connect_and_create_table.php';

try {
    $sql = "DELETE FROM products WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => 3]);
    echo "Product deleted successfully!";
} catch (\PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
