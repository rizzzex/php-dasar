<?php
// if else
// if else if else
// ternary
// switch


$x = 20;
if ($x < 20) {
    echo "Benar";
} else if ($x == 20) {
    echo "Bingo!";
} else {
    echo "salah";
}


// Ternary operator
$x = 20;
echo ($x < 20) ? "Benar" : (($x == 20) ? "Bingo!" : "Salah");


// switch
$x = 20;

switch ($x) {
    case 10:
        echo "Nilai x adalah 10";
        break;
    case 15:
        echo "Nilai x adalah 15";
        break;
    case 20:
        echo "Bingo!";
        break;
    default:
        echo "Nilai x tidak dikenal";
}

