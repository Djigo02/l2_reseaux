<?php

function getPanier()
{
    return [
        [
            'nom' => 'Produit 1',
            'prix' => 1000,
            'quantite' => 10
        ],
        [
            'nom' => 'Produit 2',
            'prix' => 2000,
            'quantite' => 5
        ],
        [
            'nom' => 'Produit 3',
            'prix' => 1500,
            'quantite' => 20
        ],
        [
            'nom' => 'Produit 4',
            'prix' => 3000,
            'quantite' => 8
        ],
        [
            'nom' => 'Produit 5',
            'prix' => 2500,
            'quantite' => 12
        ]
    ];
}
// $panier = getPanier();



//! echo $panier[0] ==> getPanier()[0];

function getMontantTotal($tab)
{
    $total = 0;
    foreach ($tab as $article) {
        $total += $article['prix'] * $article['quantite'];
    }
    return $total;
}

function getMontantAPayer($total)
{
    $montant = $total;
    if ($total > 50000) {
        $montant = $total - $total * 0.1;
    }
    // if ($montant > 70000) {
    //     return $montant;
    // } else {
    //     return $montant + 3000;
    // }

    return $montant > 70000 ? $montant : $montant + 3000;
}

function create_tab()
{
    $tab = [];
    for ($i = 0; $i < 10; $i++) {
        $tab[] = rand(1, 100);
    }
    return $tab;
}

function create_tab_with_taille($taille, $min, $max)
{
    $tab = [];
    for ($i = 0; $i < $taille; $i++) {
        $tab[] = rand($min, $max);
    }
    return $tab;
}
// var_dump(create_tab());

$table = create_tab_with_taille(75, 5, 15);

var_dump($table);
