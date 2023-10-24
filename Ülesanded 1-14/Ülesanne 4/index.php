<!DOCTYPE html>
<html>
<head>
    <title>Ülesanded</title>
</head>
<body>
    <h1>Jagamine ja Vanuse võrdlemine</h1>
    
    <!-- Jagamine ja hoiatus nulliga jagamise kohta -->
    <form method="get" action="">
        <label for="number1">Sisesta esimene vanus: </label>
        <input type="number" name="age1">
        <br>
        <label for="number2">Sisesta teine vanus: </label>
        <input type="number" name="age2">
        <br>
        <input type="submit" name="jagamine" value="Jaga">
    </form>

    <?php
    if (isset($_GET['jagamine'])) {
        if (!empty($_GET['number1']) && !empty($_GET['number2'])) {
            $number1 = $_GET['number1'];
            $number2 = $_GET['number2'];
            
            if ($number2 != 0) {
                $result = $number1 / $number2;
                echo "Jagatud tulemus: $result";
            } else {
                echo "Hoiatus: Nulliga jagamine on lubamatu!";
            }
        }
    }
    ?>

    <!-- Vanuse võrdlemine -->
    <form method="get" action="">
        <label for="age1">Sisesta esimese inimese vanus: </label>
        <input type="number" name="age1">
        <br>
        <label for="age2">Sisesta teise inimese vanus: </label>
        <input type="number" name="age2">
        <br>
        <input type="submit" name="vanuse_vordlemine" value="Võrdle vanuseid">
    </form>

    <?php
    if (isset($_GET['vanuse_vordlemine'])) {
        if (!empty($_GET['age1']) && !empty($_GET['age2'])) {
            $age1 = $_GET['age1'];
            $age2 = $_GET['age2'];
            
            if ($age1 > $age2) {
                echo "Esimene inimene on vanem.";
            } elseif ($age2 > $age1) {
                echo "Teine inimene on vanem.";
            } else {
                echo "Mõlemad inimesed on ühevanused.";
            }
        }
    }
    ?>
</body>
</html>
