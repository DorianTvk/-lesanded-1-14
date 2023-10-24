<!DOCTYPE html>
<html>
<head>
    <title>Kalkulaator</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 3;

    $sum = $a + $b;
    $diff = $a - $b;
    $product = $a * $b;
    $quotient = $a / $b;
    $remainder = $a % $b;

    echo "<h2>Arvutused:</h2>";
    echo "Liitmine: $a + $b = $sum <br>";
    echo "Lahutamine: $a - $b = $diff <br>";
    echo "Korrutamine: $a * $b = $product <br>";
    echo "Jagamine: $a / $b = $quotient <br>";
    echo "Jääk: $a % $b = $remainder <br>";

    $millimeetrid = 2500;

    $sentimeetrid = $millimeetrid / 10;
    $meetrid = $sentimeetrid / 100;

    echo "<h2>Teisendamine:</h2>";
    echo "Millimeetrid: $millimeetrid mm <br>";
    echo "Sentimeetrid: " . number_format($sentimeetrid, 2) . " cm <br>";
    echo "Meetrid: " . number_format($meetrid, 2) . " m <br>";

    $kate1 = 5;
    $kate2 = 12;

    $hupotenuus = sqrt($kate1 * $kate1 + $kate2 * $kate2);
    $ymbermoõt = $kate1 + $kate2 + $hupotenuus;
    $pindala = ($kate1 * $kate2) / 2;

    echo "<h2>Täisnurkse kolmnurga arvutused:</h2>";
    echo "Kate 1: $kate1 <br>";
    echo "Kate 2: $kate2 <br>";
    echo "Hüpotenuus: " . round($hupotenuus) . " <br>";
    echo "Ümbermõõt: " . round($ymbermoõt) . " <br>";
    echo "Pindala: " . round($pindala) . " <br>";
    ?>
