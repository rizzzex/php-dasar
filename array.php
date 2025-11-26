<?php
// array
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");

$arr = [123, "zen", false];

var_dump($hari);

echo "<br><br>";

print_r($hari);

echo "<br><br>";

// menampilkan 1 elemen pada array

echo $hari[3];
echo "<br><br>";
// menambah elemen baru pada array
var_dump($hari);
$hari[] = "Mingse";

echo "<br><br>";

var_dump($hari);
