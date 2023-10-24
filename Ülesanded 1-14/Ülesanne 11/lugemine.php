<?php
$filename = 'andmefail.txt';
$file = fopen($filename, 'r');
if ($file) {
    $content = fread($file, filesize($filename));
    $content = nl2br($content); 
    fclose($file);
    echo $content;
} else {
    echo 'Faili ei saanud avada lugemiseks.';
}
?>