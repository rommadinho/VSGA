<?php
require 'connect_and_create_table.php';

try {
    $sql = "UPDATE products SET price = :price WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['price' => 17500.00, 'id' => 1]);
    echo "Product updated successfully!";
} catch (\PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
