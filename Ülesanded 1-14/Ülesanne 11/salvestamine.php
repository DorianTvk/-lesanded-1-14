<?php
$data = [
    'Nimi' => 'John Doe',
    'Email' => 'johndoe@tthk.ee',
    'Vanus' => 30,
    'Hobi' => 'Jalgrattasõit',
];

$filename = 'andmefail.txt';
$file = fopen($filename, 'w');

if ($file) {
    foreach ($data as $key => $value) {
        fwrite($file, "$key: $value\n");
    }
    fclose($file);
    echo 'Andmed on salvestatud faili.';
} else {
    echo 'Faili ei saanud avada kirjutamiseks.';
}
?>