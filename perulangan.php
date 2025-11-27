<?php
// Perulangan
// for
// while
// do..while
// foreach : perulangan khusus array
// ============================================================

// for
for ($i = 0; $i < 5; $i++) {
    echo "ini perulangan for <br>";
}

// while
$i = 0;
while ($i < 5) {
    echo "ini while<br>";
    $i++;
}

// do while
do {
    echo "ini do while <br>";
} while ($i < 5);

// Array dengan indeks numerik
$buah = array("Apel", "Pisang", "Jeruk", "Mangga");

foreach ($buah as $item) {
    echo "Buah: " . $item . "<br>";
}
