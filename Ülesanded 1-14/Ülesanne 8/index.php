<!DOCTYPE html>
<html>
<head>
    <title>Kuupäev ja Kellaaeg</title>
</head>
<body>
    <h1>Kuupäev ja Kellaaeg</h1>

    <h2>Kuupäev ja Kellaaeg</h2>
    <?php
    $kuupaev_kellaaeg = date("d.m.Y H:i");
    echo "Praegu on: $kuupaev_kellaaeg";
    ?>

<h2>Kasutaja vanus</h2>
<form method="post">
    <label for="synniaasta">Sisesta sünniaasta:</label>
    <input type="number" name="synniaasta" id="synniaasta">
    <input type="submit" value="Leia vanus">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["synniaasta"])) {
        $synniaasta = $_POST["synniaasta"];
        $praegune_aasta = date("Y");
        $vanus = $praegune_aasta - $synniaasta;
        echo "Te olete $vanus aastat vana.";
    } else {
        echo "Palun sisestage sünniaasta vormi kaudu.";
    }
}
?>

<h2>Kooliaasta lõpuni</h2>
<?php
$praegune_kuupaev = date("d.m");
$kooliaasta_lopp = "14.06";

$praegune_aasta = date("Y");
$kooliaasta_algus = "01.09." . $praegune_aasta;

if ($praegune_kuupaev >= $kooliaasta_lopp) {
    $jäänud_päeva = 0;
} elseif ($praegune_kuupaev >= $kooliaasta_algus) {
    $kooliaasta_lopp_aastal = "14.06." . ($praegune_aasta + 1);
    $kooliaasta_lopp_timestamp = strtotime($kooliaasta_lopp_aastal);
    $praegune_kuupaev_timestamp = strtotime(date("d.m.Y"));
    $jäänud_päeva = ceil(($kooliaasta_lopp_timestamp - $praegune_kuupaev_timestamp) / 86400);
} else {
    $kooliaasta_lopp_aastal = "14.06." . $praegune_aasta;
    $kooliaasta_algus_timestamp = strtotime($kooliaasta_algus);
    $kooliaasta_lopp_timestamp = strtotime($kooliaasta_lopp_aastal);
    $praegune_kuupaev_timestamp = strtotime(date("d.m.Y"));
    $jäänud_päeva = ceil(($kooliaasta_lopp_timestamp - $praegune_kuupaev_timestamp) / 86400);
}

echo "Kooliaasta lõpuni " . date("Y") . "/" . (date("Y") + 1) . " on jäänud $jäänud_päeva päeva";
?>




<h2>Vastavalt aastaajale pilt</h2>
<?php
$praegune_kuupaev = date("m-d");
$kevad_algus = "03-20";
$suvi_algus = "06-21";
$sugis_algus = "09-23";
$talv_algus = "12-21";

if ($praegune_kuupaev >= $kevad_algus && $praegune_kuupaev < $suvi_algus) {
    $aasta_aeg = "kevad";
    $pilt = "kevad.png";
} elseif ($praegune_kuupaev >= $suvi_algus && $praegune_kuupaev < $sugis_algus) {
    $aasta_aeg = "suvi";
    $pilt = "suvi.png";
} elseif ($praegune_kuupaev >= $sugis_algus && $praegune_kuupaev < $talv_algus) {
    $aasta_aeg = "sügis";
    $pilt = "https://www.tapa.lib.ee/wp-content/uploads/2018/11/S%C3%9CGIS_001.png";
} else {
    $aasta_aeg = "talv";
    $pilt = "talv.png";
}

echo "Hetkel on $aasta_aeg! <br>";
echo "<img src='$pilt' alt='$aasta_aeg' style='max-width: 400px;'>";
?>

</body>
</html>
