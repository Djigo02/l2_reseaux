<?php

// include || require
include_once("module.php");
$tab_produit = getProduit();
$plus_cher = most_expensive($tab_produit);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>

<body>
    <h1>Liste des produits</h1>
    <table class="table table-striped">
        <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantite</th>
            <th>Total</th>
        </tr>
        <?php foreach ($tab_produit as $produit) { ?>
            <tr>
                <td><?= $produit['nom'] ?></td>
                <td><?= $produit['prix'] ?></td>
                <td><?= $produit['quantite'] ?></td>
                <td><?= $produit['prix'] * $produit['quantite'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <p>Le montant total en stock est de : <?= totalStock($tab_produit) ?></p>
    <p>Le produit le plus chere est : <?= $plus_cher['nom'] ?> avec un prix de <?= $plus_cher['prix'] ?></p>

    <h2 class="h2 my-4">Produit en rupture</h2>
    <ul class="list-group">

        <?php foreach ($tab_produit as $produit) :
            if ($produit['quantite'] == 0) :
        ?>
                <li class="list-group-item"><?= $produit['nom'] ?></li>
        <?php endif;
        endforeach; ?>

    </ul>
</body>

</html>