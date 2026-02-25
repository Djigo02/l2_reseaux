<?php

// Déclarer un tableau associatif contenant au moins 5 produits.
// Chaque produit doit contenir :
// nom
// prix en fcfa
// stock

$catalogue = [
    [
        'nom' => 'Produit 1',
        'prix' => 1000,
        'stock' => 10
    ],
    [
        'nom' => 'Produit 2',
        'prix' => 2000,
        'stock' => 5
    ],
    [
        'nom' => 'Produit 3',
        'prix' => 1500,
        'stock' => 20
    ],
    [
        'nom' => 'Produit 4',
        'prix' => 3000,
        'stock' => 8
    ],
    [
        'nom' => 'Produit 5',
        'prix' => 2500,
        'stock' => 12
    ]
];

$stockTotal = 0;
$nombreTotal = 0;

// ? condition ? valeur si vrai : valeur si faux;

$a = rand(1, 50);

//! Structure ternaire
// $couleur = $a > 25 ? 'red' : 'green';

//! Structure conditionnel alternative
// if ($a > 25) {
//     $couleur = 'red';
// } else {
//     $couleur = 'green';
// }




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
    <h3>Affichage du catalogue</h3>

    <table class="table ">
        <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Disponibilite</th>
        </tr>

        <?php foreach ($catalogue as $prod) { ?>
            <tr>
                <td><?= $prod['nom'] ?></td>
                <td><?= $prod['prix'] ?></td>
                <td><?= $prod['stock'] ?></td>
                <td><?= $prod['stock'] > 0 ? 'Disponible' : 'Rupture de stock' ?></td>
            </tr>

        <?php
            $nombreTotal++;
            $stockTotal += $prod['prix'] * $prod['stock'];
        } ?>
        <tr>
            <th colspan="3">Nombre de produit</th>
            <th><?= $nombreTotal ?></th>
        </tr>
        <tr>
            <th colspan="3">Total en stock</th>
            <th><?= $stockTotal ?></th>
        </tr>
    </table>

    <p>Nombre de produit est de <?= $nombreTotal ?></p>

</body>

</html>