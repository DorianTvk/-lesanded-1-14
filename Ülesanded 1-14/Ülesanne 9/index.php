<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne</title>
</head>
<body>
    <h2>Tervitus</h2>
    <form method="post">
        <label>Sisesta oma nimi: <input type="text" name="nimi"></label>
        <input type="submit" name="tervita" value="Tervita">
    </form>
    <?php
    if (isset($_POST['tervita'])) {
        $nimi = $_POST['nimi'];
        $nimi = ucfirst(strtolower($nimi));
        echo "Tere, $nimi!<br>";
    }
    ?>

    <h2>Punktid</h2>
    <form method="post">
        <label>Sisesta tekst: <input type="text" name="tekst"></label>
        <input type="submit" name="lisa_punktid" value="Lisa punktid">
    </form>
    <?php
    if (isset($_POST['lisa_punktid'])) {
        $sisestatud_tekst = $_POST['tekst'];
        $tekst_punktidega = implode('. ', str_split($sisestatud_tekst));
        echo "Tekst punktidega: $tekst_punktidega<br>";
    }
    ?>

    <h2>Ropud sõnad</h2>
    <form method="post">
        <label>Sisesta oma sõnum: <input type="text" name="sõnum"></label>
        <input type="submit" name="tsenseeri" value="Tsenseeri">
    </form>
    <?php
    if (isset($_POST['tsenseeri'])) {
        $sõnum = $_POST['sõnum'];
        $keelatud_sonad = array("kurat", "perse", "raisk","lohh","debiilik","vittu"); // Lisa siia keelatud sõnad
        $tsensuuritud_sõnum = str_ireplace($keelatud_sonad, "****", $sõnum);
        echo "Tsenseeritud sõnum: $tsensuuritud_sõnum<br>";
    }
    ?>

    <h2>E-posti aadress</h2>
    <form method="post">
        <label>Eesnimi: <input type="text" name="eesnimi"></label><br>
        <label>Perenimi: <input type="text" name="perenimi"></label><br>
        <input type="submit" name="loo_epost" value="Loo e-post">
    </form>
    <?php
    if (isset($_POST['loo_epost'])) {
        $eesnimi = $_POST['eesnimi'];
        $perenimi = $_POST['perenimi'];
        $asendused = array('ä' => 'a', 'ö' => 'o', 'ü' => 'y', 'õ' => 'o');
        $email_nimi = strtr(strtolower($eesnimi . $perenimi), $asendused);
        $email = $email_nimi . '@tthk.ee';
        echo "Sinu e-posti aadress: $email<br>";
    }
    ?>
</body>
</html>
