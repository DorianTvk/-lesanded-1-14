<?php
$maleSalaries = [];
$femaleSalaries = [];

$filename = 'tootajad.csv';

if (($handle = fopen($filename, 'r')) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
        $name = $data[0];
        $gender = $data[1];
        $salary = $data[2];

        if ($gender === 'm') {
            $maleSalaries[] = $salary;
        } elseif ($gender === 'n') {
            $femaleSalaries[] = $salary;
        }
    }
    fclose($handle);

    $maleAverageSalary = count($maleSalaries) > 0 ? array_sum($maleSalaries) / count($maleSalaries) : 0;
    $femaleAverageSalary = count($femaleSalaries) > 0 ? array_sum($femaleSalaries) / count($femaleSalaries) : 0;
    $maxMaleSalary = max($maleSalaries);
    $maxFemaleSalary = max($femaleSalaries);

    echo "Meeste keskmine palk: $maleAverageSalary<br>";
    echo "Naiste keskmine palk: $femaleAverageSalary<br>";
    echo "Meeste suurim palk: $maxMaleSalary<br>";
    echo "Naiste suurim palk: $maxFemaleSalary<br>";
} else {
    echo "Andmefaili ei leitud.";
}
?>