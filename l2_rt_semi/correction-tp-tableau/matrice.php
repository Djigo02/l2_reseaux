<?php

// Déclarer une matrice 6 × 8 contenant des nombres entiers.

$mat = [
    [1, 2, 3, 4, 5, 6, 7, 8],
    [9, 10, 11, 12, 13, 14, 15, 16],
    [17, 18, 19, 20, 21, 22, 23, 24],
    [25, 26, 27, 28, 29, 30, 31, 32],
    [33, 34, 35, 36, 37, 38, 39, 40],
    [41, 42, 43, 44, 45, 46, 47, 48]
];

// condition ? valeur si vrai : valeur si faux;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>

<body>
    <h1>Affichage de la matrice</h1>
    <table border="1">
        <?php for ($i = 0; $i < count($mat); $i++) { ?>
            <tr style="background-color: <?= $i % 2 == 0 ? 'blue' : '' ?>">
                <?php for ($j = 0; $j < count($mat[$i]); $j++) { ?>
                    <td style="color: <?= $mat[$i][$j] % 2 != 0 ? 'orange' : 'black' ?>"><?= $mat[$i][$j] ?> </td>
                <?php } ?>
            </tr>

        <?php
        } ?>

    </table>
</body>

</html>