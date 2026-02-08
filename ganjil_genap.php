<!DOCTYPE html>
<html>
<head>
    <title>Cek Ganjil Genap</title>
</head>
<body>
    <h2>Cek Angka Ganjil atau Genap</h2>
    
    <form method="POST">
        <label>Masukkan batas angka:</label><br>
        <input type="number" name="batas" value="10" min="1"><br><br>
        <button type="submit">Cek</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $batas = (int)$_POST['batas'];
        
        echo "<h3>Hasil dari 1 sampai $batas:</h3>";
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><th>Angka</th><th>Status</th></tr>";
        
        // Loop untuk mengecek setiap angka
        for ($i = 1; $i <= $batas; $i++) {
            // Cek apakah angka ganjil atau genap menggunakan modulo (%)
            if ($i % 2 == 0) {
                echo "<tr><td>$i</td><td><b>Genap</b></td></tr>";
            } else {
                echo "<tr><td>$i</td><td><b>Ganjil</b></td></tr>";
            }
        }
        
        echo "</table>";
    }
    ?>

    
