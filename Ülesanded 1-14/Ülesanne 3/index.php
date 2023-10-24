<!DOCTYPE html>
<html>
<head>
    <title>Geomeetria Kalkulaator</title>
</head>
<body>
    <h1>Trapetsi pindala ja Rombi ümbermõõdu kalkulaator</h1>
    <form method="post" action="">
        <label for="alumine_pikkus">Alumine pikkus (a): </label>
        <input type="number" name="alumine_pikkus" step="0.01" required><br>

        <label for="ülemine_pikkus">Ülemine pikkus (b): </label>
        <input type="number" name="ülemine_pikkus" step="0.01" required><br>

        <label for="kõrgus">Kõrgus (h): </label>
        <input type="number" name="kõrgus" step="0.01" required><br>

        <label for="rombi_diagonaal1">Rombi diagonaal 1 (d1): </label>
        <input type="number" name="rombi_diagonaal1" step="0.01" required><br>

        <input type="submit" value="Arvuta">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["alumine_pikkus"];
        $b = $_POST["ülemine_pikkus"];
        $h = $_POST["kõrgus"];
        $d1 = $_POST["rombi_diagonaal1"];

        $trapetsi_pindala = ($a + $b) * $h / 2;
        $rombi_ümbermõõt = 4 * $d1;

        echo "<h2>Vastused:</h2>";
        echo "Trapetsi pindala: " . round($trapetsi_pindala, 1) . " ruutühikut<br>";
        echo "Rombi ümbermõõt: " . round($rombi_ümbermõõt, 1) . " ühikut<br>";
    }
    ?>
</body>
</html>
