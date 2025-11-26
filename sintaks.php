<?php
// PHP Dasar

// Ini adalah komentar
/* Ini untuk banyak baris */

// Standar Output
// echo, print 
// print_r untuk array
// var_dum untuk melihat isi variabel

print("Rizkulloh Alpriyansah\n");
print_r("Rizkulloh Alpriyansah\n");
var_dump("Rizkulloh Alpriyansah\n");
echo "Rizkulloh Alpriyansah";

// Penulisan Sintaks PHP
// 1.PHP di dalam HTML
// 2.HTML di dalam PHP
// Variable dan Tipe Data
// Variable
// Tidak boleh di awali dengan angka tapi boleh mengandung angka
$nama = "Rizkulloh Alpriyansah";

// Operator
// aritmatika
// + - * / %
$x = 10;
$y = 20;
echo $x * $y;

// Penggabungan string / concatention / concat
//  .
$nama_depan = "Rizkulloh";
$nama_belakang = "Alpriyansah";
echo $nama_depan . "" . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
$s = 2;
$s /= 3;
echo $s;

// Perbandingan 
// <, >, <=, >=, ==(Data)
var_dump(1 > 5);
var_dump(1 == "1");

// Identitas
// ===, !== (tipe data)
var_dump(1 === "1");

// Logika
// &&(Harus Benar semua), ||(Salah satu benar), !
$a = 10;
var_dump($x < 20 && $a % 2 == 0);
// ===========================================================================
// 1
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Halo, Selamat Datang <?= $nama; ?></h1>
</body>

</html>