<?php
// declaration du tableau de nombre
$tab = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$som = 0;
$taille = 0;
// foreach ($tab as $val) {
//     $som += $val;
//     if ($min > $val) {
//         $min = $val;
//     }
//     if ($max < $val) {
//         $max = $val;
//     }
// }
$min = $tab[0];
$max = $tab[0];

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
    <h2>Affichage du tableau</h2>

    <ul class="container col-8 offset-2 list-group">
        <?php foreach ($tab as $val) {
            $taille++;
            $som += $val;
            if ($min > $val) {
                $min = $val;
            }
            if ($max < $val) {
                $max = $val;
            }
        ?>
            <li class="list-group-item"> <?php echo $val ?> </li>
        <?php } ?>
    </ul>

    <p>La somme des elememts du tableau est de <?php echo $som ?></p>
    <p>La moyenne des elememts du tableau est de <?= $som / $taille ?></p>
    <p>Le minimum est <?= $min ?></p>
    <p>Le maximum est <?= $max ?></p>
</body>

</html>