<?php

// Déclarer un tableau PHP contenant au moins 5 produits.
// Chaque produit doit avoir les informations suivantes :
// nom
// prix
// stock

$produit =  [
    'nom' => 'Produit 1',
    'prix' => 19000,
    'stock' => 10
];
$catalogue = [
    [
        'nom' => 'Produit 1',
        'prix' => 19000,
        'stock' => 10
    ],
    [
        'nom' => 'Produit 2',
        'prix' => 29000,
        'stock' => 5
    ],
    [
        'nom' => 'Produit 3',
        'prix' => 9000,
        'stock' => 20
    ],
    [
        'nom' => 'Produit 4',
        'prix' => 49000,
        'stock' => 0
    ],
    [
        'nom' => 'Produit 5',
        'prix' => 14000,
        'stock' => 0
    ],
    [
        'nom' => 'Produit 6',
        'prix' => 24000,
        'stock' => 8
    ]
];

$nbProduit = 0;
$totalStock = 0;

// foreach ($catalogue as $value) {
//     $nbProduit++;
//     $totalStock += $value['prix'] * $value['stock'];
// }

//! ternaire

//? condition ? valeur si vrai : valeur si faux 

/**
 * if ($prod['stock'] > 0) {
                        echo 'Disponible';
                    } else {
                        echo 'Rupture de stock';
                    }
 */
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap\bootstrap.min.css">
</head>

<body>
    <h2>Catalogue</h2>
    <table class="table table-striped">
        <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Disponibilite</th>
        </tr>

        <?php foreach ($catalogue as $prod) {
            // $nbProduit++;
            // $totalStock += $value['prix'] * $value['stock'];
        ?>
            <tr>
                <td><?= $prod['nom'] ?></td>
                <td><?= $prod['prix'] ?></td>
                <td><?= $prod['stock'] ?></td>
                <td>
                    <?= $prod['stock'] > 0 ? 'Disponible' : 'Rupture de stock' ?>
                </td>
            </tr>
        <?php
            $nbProduit++;
            $totalStock += $prod['prix'] * $prod['stock'];
        } ?>
        <tr>
            <td colspan="2">Total produit : <?= $nbProduit ?></td>
            <td colspan="2">Montant total Stock : <?= $totalStock ?> </td>
        </tr>

    </table>
</body>

</html>