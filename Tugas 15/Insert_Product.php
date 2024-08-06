<?php
require 'connect_and_create_table.php';

try {
    $sql = "INSERT INTO products (name, price) VALUES (:name, :price)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => 'Laptop', 'price' => 15000.00]);
    $stmt->execute(['name' => 'TV', 'price' => 17000.00]);
    echo "Product added successfully!";
} catch (\PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
