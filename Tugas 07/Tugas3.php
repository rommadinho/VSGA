<!DOCTYPE html>
<html>
<head>
    <title>Kotak Bintang</title>
    <style>
        .kotak {
            font-family: monospace;
            line-height: 1.2em;
        }
    </style>
</head>
<body>
    <h1>Kotak Bintang 5x5</h1>
    <div class="kotak">
        <?php
            // Menggunakan perulangan for untuk membuat kotak bintang 5x5
            for ($i = 0; $i < 5; $i++) {
                for ($j = 0; $j < 5; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        ?>
    </div>
</body>
</html>
