<?php

function nomFonction()
{
    // logique
    //return 
}


/**
 * Déclarer un tableau contenant au moins 5 produits.
Chaque produit doit contenir :
nom
prix
quantite
 */

function getProduit()
{
    return [
        [
            'nom' => 'Produit 1',
            'prix' => 10.99,
            'quantite' => 5
        ],
        [
            'nom' => 'Produit 2',
            'prix' => 15.49,
            'quantite' => 0
        ],
        [
            'nom' => 'Produit 3',
            'prix' => 7.99,
            'quantite' => 10
        ],
        [
            'nom' => 'Produit 4',
            'prix' => 20.00,
            'quantite' => 0
        ],
        [
            'nom' => 'Produit 5',
            'prix' => 5.50,
            'quantite' => 8
        ],
        [
            'nom' => 'Produit 6',
            'prix' => 1.99,
            'quantite' => 20
        ],
        [
            'nom' => 'Produit 7',
            'prix' => 12.75,
            'quantite' => 0
        ]
    ];
}

function totalStock($tab)
{
    $total = 0;
    foreach ($tab as $val) {
        $total += $val['prix'] * $val['quantite'];
    }
    return $total;
}

// $tab = getProduit();
// $tab[0];

// getProduit()[0];

function most_expensive($tab)
{
    // $plus_chere = ["nom" => '', 'prix' => 0, 'quantite' => 0];
    $plus_chere = $tab[0];
    foreach ($tab as $prod) {
        if ($prod['prix'] > $plus_chere['prix']) {
            $plus_chere = $prod;
        }
    }

    return $plus_chere;
}

//! generer un tableau de 10 entiers

function generer_entier()
{
    $tab = [];

    // rand(min, max)

    for ($i = 0; $i < 10; $i++) {
        // ajouter un element a la fin du tableau
        $tab[] = rand(10, 100);
    }
    return $tab;
}

$tableau = generer_entier();


// var_dump($tableau);

function custom_tableau($taille = 10, $min = 1, $max = 100)
{
    $tab = [];
    for ($i = 0; $i < $taille; $i++) {
        $tab[] = rand($min, $max);
    }

    return $tab;
}

$tabcustom = custom_tableau();

var_dump($tabcustom);
