<?php
function onLubatudLeht($leht) {
    $lubatudLehed = ['leht1', 'leht2', 'leht3', 'leht4'];
    return in_array($leht, $lubatudLehed);
}

if (isset($_GET['leht'])) {
    $leht = $_GET['leht'];
    if (onLubatudLeht($leht)) {
        $lehtFail = $leht . '.html';
        if (file_exists($lehtFail)) {
            include($lehtFail);
        } else {
            echo 'Lehte ei eksisteeri!';
        }
    } else {
        echo 'Turvalisuse viga: Ei ole lubatud juurdepääs!';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne 10</title>
</head>
<body>
    <h1>Ülesanne 10</h1>
    <p>Vali üks järgmistest lehtedest:</p>
    <ul>
        <li><a href="index.php?leht=leht1">Leht 1</a></li>
        <li><a href="index.php?leht=leht2">Leht 2</a></li>
        <li><a href="index.php?leht=leht3">Leht 3</a></li>
        <li><a href="index.php?leht=leht4">Leht 4</a></li>
    </ul>
</body>
</html>