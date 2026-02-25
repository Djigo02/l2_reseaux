<?php
// Déclarer un tableau simple contenant au moins 10 nombres entiers
// $nombres = [5, 12, 7, 3, 9, 15, 2, 8, 10, 4];

// rand(1,100) pour générer un nombre aléatoire

// $nombres = [];

for ($i = 0; $i < 10; $i++) {
    $nombres[] = rand(1, 100);
}
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
    <h1>Affichage du tableau</h1>
    <ul class="col-6 offset-1 list-group">
        <?php foreach ($nombres as $nb) { ?>
            <li class="list-group-item"><?= $nb ?></li>
        <?php } ?>

    </ul>
</body>

</html>