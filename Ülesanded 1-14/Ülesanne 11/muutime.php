<?php
$filename = 'andmefail.txt';
$file = fopen($filename, 'r+');
if ($file) {
    $currentData = fgets($file); 
    fseek($file, 0); 
    $newData = "Telefon: 555-1234\nAadress: 123 Main Street\n";
    fwrite($file, $newData . $currentData);
    fclose($file);
    echo 'Andmed on muudetud ja salvestatud faili.';
} else {
    echo 'Faili ei saanud avada lugemiseks ja kirjutamiseks.';
}
?>