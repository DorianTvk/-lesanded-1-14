<?php
$filename = 'andmefail.txt';
if (file_exists($filename)) {
    $fileSize = filesize($filename);
    if ($fileSize > 200) {
        unlink($filename);
        echo 'Fail on suurem kui 200 baiti ja see on kustutatud.';
    } else {
        echo 'Fail ei vasta kustutamise kriteeriumile.';
    }
} else {
    echo 'Faili ei leitud.';
}
?>