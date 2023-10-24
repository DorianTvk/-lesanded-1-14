<!DOCTYPE html>
<html>
<head>
    <title>Ülesanded</title>
</head>
<body>
    <h1>Ülesanded</h1>

    <h2>Arvud 1-100 koos reavahetusega ja punktiga</h2>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        echo $i;
        if ($i % 10 == 0) {
            echo "<br>";
        } else {
            echo ". ";
        }
    }
    ?>

    <h2>Rida tärnidest</h2>
    <?php
    $rida_tarnidest = str_repeat('*', 10);
    echo $rida_tarnidest;
    ?>

    <h2>Rida II tärnidest</h2>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "*<br>";
    }
    ?>

    <h2>Ruut tärnidest (kohandatava suurusega)</h2>
    <form method="post">
        <label for="ruudu_suurus">Sisesta ruudu suurus:</label>
        <input type="number" name="ruudu_suurus" id="ruudu_suurus">
        <input type="submit" value="Kuva ruut">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ruudu_suurus = $_POST["ruudu_suurus"];
        for ($i = 1; $i <= $ruudu_suurus; $i++) {
            for ($j = 1; $j <= $ruudu_suurus; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }
    ?>

    <h2>Kahanevad paarisarvud 10-0</h2>
    <?php
    for ($i = 10; $i >= 0; $i -= 2) {
        echo $i . " ";
    }
    ?>

    <h2>Kolmega jagunevad arvud 1-100</h2>
    <?php
    for ($i = 3; $i <= 100; $i += 3) {
        echo $i . " ";
    }
    ?>

    <h2>Massiivid ja tsüklid</h2>
    <?php
    $tudrukud = ["Alice", "Eva", "Maria", "Laura", "Sophia"];
    $poisid = ["John", "Peter", "Michael", "David", "William"];
    
    echo "<h3>Tüdrukud ja poisid paaridena:</h3>";
    for ($i = 0; $i < count($tudrukud); $i++) {
        echo $tudrukud[$i] . " ja " . $poisid[$i] . "<br>";
    }
    
    $tudrukud_koopia = $tudrukud;
    $poisid_koopia = $poisid;
    
    echo "<h3>Tüdrukud ja poisid koopiadena:</h3>";
    echo "Tüdrukud: " . implode(", ", $tudrukud_koopia) . "<br>";
    echo "Poisid: " . implode(", ", $poisid_koopia) . "<br>";
    
    $suvalised_tudrukud = array_diff($tudrukud, $poisid_koopia);
    $suvalised_poisid = array_diff($poisid, $tudrukud_koopia);
    
    echo "<h3>Suvalised tüdrukud ja poisid (nimed ei kordu):</h3>";
    echo "Tüdrukud: " . reset($suvalised_tudrukud) . " ja Poisid: " . reset($suvalised_poisid);
    ?>
</body>
</html>
