<?php
require 'connect_and_create_table.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Filter Products</title>
</head>
<body>
    <form method="post" action="">
        <label for="min_price">Minimum Price:</label>
        <input type="number" step="0.01" id="min_price" name="min_price">
        <input type="submit" value="Filter">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $min_price = $_POST['min_price'];
        
        try {
            $sql = "SELECT name, price FROM products WHERE price > :min_price";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['min_price' => $min_price]);
            
            echo "<table border='1'>";
            echo "<tr><th>Name</th><th>Price</th></tr>";
            while ($row = $stmt->fetch()) {
                echo "<tr><td>" . htmlspecialchars($row['name']) . "</td><td>" . htmlspecialchars($row['price']) . "</td></tr>";
            }
            echo "</table>";
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    ?>
</body>
</html>
