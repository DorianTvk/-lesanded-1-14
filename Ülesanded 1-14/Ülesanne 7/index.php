<!DOCTYPE html>
<html>
<head>
    <title>Funktsioonid</title>
</head>
<body>
    <h1>Funktsioonid</h1>

    <h2>Tervitusfunktsioon</h2>
    <?php
    function tervitus() {
        echo "Tere päiksekesekene!";
    }

    tervitus();
    ?>

    <h2>Liitu uudiskirjaga funktsioon</h2>
    <?php
    function liituUudiskirjaga() {
        echo '<form>
                <div class="form-group">
                    <label for="kasutajanimi">Kasutajanimi</label>
                    <input type="text" class="form-control" id="kasutajanimi" placeholder="Sisesta kasutajanimi">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Sisesta email">
                </div>
                <button type="submit" class="btn btn-primary">Liitu</button>
            </form>';
    }

    liituUudiskirjaga();
    ?>

    <h2>Kasutajanimi ja email</h2>
    <?php
    function kasutajanimegaEmail() {
        $kasutajanimi = "kasutaja";
        $email = strtolower($kasutajanimi) . "@hkhk.edu.ee";
        $kood = rand(1000000, 9999999);
        $kood = str_shuffle($kood);

        return "Kasutajanimi: $kasutajanimi, Email: $email, 7-kohaline kood: $kood";
    }

    echo kasutajanimegaEmail();
    ?>

    <h2>Arvud</h2>
    <?php
    function valiArvud($algus, $lopp, $samm) {
        $arvud = range($algus, $lopp, $samm);
        return implode(", ", $arvud);
    }

    echo "Valitud arvud: " . valiArvud(2, 8, 1) . "<br>";
    echo "Valitud arvud sammuga 3: " . valiArvud(2, 8, 3);
    ?>

    <h2>Ristküliku pindala</h2>
    <?php
    function ristkulikuPindala($pikkus, $laius) {
        $pindala = $pikkus * $laius;
        return "Ristküliku pindala: $pindala";
    }

    echo ristkulikuPindala(5, 3);
    ?>

    <h2>Isikukood</h2>
    <?php
    function kontrolliIsikukoodi($isikukood) {
        if (strlen($isikukood) == 11) {
            $sugu = ($isikukood[0] % 2 == 0) ? "Naine" : "Mees";
            $sunniaeg = substr($isikukood, 5, 2) . "." . substr($isikukood, 3, 2) . "." . substr($isikukood, 1, 2);
            return "Õige isikukood. Sugu: $sugu, Sünniaeg: $sunniaeg";
        } else {
            return "Vale isikukoodi pikkus.";
        }
    }

    echo kontrolliIsikukoodi("49912123456");
    ?>

    <h2>Head mõtted</h2>
    <?php
    function looLause() {
        $alus = ["Täna", "Homme", "Igal päeval"];
        $öeldis = ["õpin", "tean", "unustan"];
        $sihitis = ["PHP-d", "tänulikkust", "uusi asju"];

        $juhuslikAlus = array_rand($alus);
        $juhuslikÖeldis = array_rand($öeldis);
        $juhuslikSihitis = array_rand($sihitis);

        return "$alus[$juhuslikAlus] $öeldis[$juhuslikÖeldis] $sihitis[$juhuslikSihitis].";
    }

    echo looLause();
    ?>
</body>
</html>
