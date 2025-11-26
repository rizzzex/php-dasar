<?php

$array = ["Apel", "Pisang", "Jeruk", "Mangga"];

?>



<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel 1 Kolom 1 Baris</title>
</head>

<body>

    <table border="1">
        <tr>
            <?php foreach ($array as $arr): ?>
                <td><?= $arr; ?></td>
            <?php endforeach; ?>
        </tr>
    </table>

</body>

</html>