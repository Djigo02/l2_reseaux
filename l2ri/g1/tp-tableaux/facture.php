<?php
// 1. Déclarer un tableau contenant au moins 5 produits.
// Chaque produit doit être représenté par un tableau contenant :
// nom
// prix
// quantite

//! tableau associatif simple 

// $personne = [
//     'nom' => 'Yayah',
//     'marcher',
//     'prenom' => 'About',
//     2,
//     'age' => 45,
//     1,
//     4
// ];

// foreach ($personne as $cle => $p) {
//     echo "$cle : $p <br>";
// }

//! acces

// echo $personne[1]; => 2

//? nom : $personne['nom']
//? prenom : $personne['prenom']

$produits = [
    [
        'nom' => 'Produit 1',
        'prix' => 10000,
        'quantite' => 2
    ],
    [
        'nom' => 'Produit 2',
        'prix' => 200,
        'quantite' => 1
    ],
    [
        'nom' => 'Produit 3',
        'prix' => 500,
        'quantite' => 3
    ],
    [
        'nom' => 'Produit 4',
        'prix' => 4500,
        'quantite' => 1
    ],
    [
        'nom' => 'Produit 5',
        'prix' => 5000,
        'quantite' => 1
    ]
];

$totalG = 0;

// foreach ($produits as $p) {
//     $totalG += $p['prix'] * $p['quantite'];
// }

//! structure ternaire

//TODO (Condition) ? valeur si vrai : valeur si faux;

// $a = 7;

// $couleur = $a > 5 ? 'vert' : 'rouge';

// if ($a > 5) {
//     $couleur = 'vert';
// }else{
//     $couleur = 'rouge';
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
    <h2>Liste de produits</h2>

    <table class="table table-striped constainer col-8">
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantite</th>
            <th>Total</th>
        </tr>
        <?php foreach ($produits as $p) { ?>
            <tr>
                <td><?= $p['nom'] ?></td>
                <td><?= $p['prix'] ?></td>
                <td><?= $p['quantite'] ?></td>
                <td><?= $p['quantite'] * $p['prix'] ?></td>
            </tr>
        <?php
            $totalG += $p['quantite'] * $p['prix'];
        } ?>
        <tr>
            <th colspan="3">Total</th>
            <th><?= $totalG ?></th>
        </tr>
    </table>

    <p style="color: <?= $totalG > 50000 ? 'green' : 'red' ?>;">Le montant total est de <?= $totalG ?></p>
    <p class="<?= $totalG > 60000 ? 'text-primary' : 'text-warning' ?>">
        <!-- <?php
                // if ($totalG > 60000) {
                //     echo "Livraison gratuite";
                // } else {
                //     echo "Frais de livraison : 3 000 FCFA";
                // }
                ?> -->
        <?= $totalG <= 60000 ? "Frais de livraison : 3 000 FCFA" : "Livraison gratuite" ?>
    </p>
</body>

</html>