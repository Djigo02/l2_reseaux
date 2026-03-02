<?php
// include || require
include_once("module.php");
$tab_panier = getPanier();
$total = getMontantTotal($tab_panier);
$montant = getMontantAPayer($total);
$global = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier SHEIN</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>

<body>

    <h1>Article du panier</h1>

    <table class="table table-striped">
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantite</th>
            <th>Total</th>
        </tr>
        <?php foreach (getPanier() as $article) :
            $global += $article['prix'] * $article['quantite']; ?>
            <tr>
                <td><?= $article['nom'] ?></td>
                <td><?= $article['prix'] ?></td>
                <td><?= $article['quantite'] ?></td>
                <td><?= $article['prix'] * $article['quantite'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <p>Le montant total est de : <?= $total ?></p>
    <p>L emontant total a paye est de : <?= $montant ?></p>
</body>

</html>