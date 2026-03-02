<?php

/**
 * Déclarer un tableau associatif contenant au moins 10 équipes.
Chaque équipe doit contenir :
nom
points
buts_marques
buts_encaisses
 */

function get_equipe()
{
    return [
        [
            'nom' => 'PSG',
            'points' => 30,
            'buts_marques' => 100,
            'buts_encaisses' => 20
        ],
        [
            'nom' => 'Olympique Lyonnais',
            'points' => 22,
            'buts_marques' => 44,
            'buts_encaisses' => 9
        ],
        [
            'nom' => 'AS Monaco',
            'points' => 1,
            'buts_marques' => 22,
            'buts_encaisses' => 8
        ],
        [
            'nom' => 'AS Saint-Etienne',
            'points' => 12,
            'buts_marques' => 21,
            'buts_encaisses' => 7
        ],
        [
            'nom' => 'FC Nantes',
            'points' => 8,
            'buts_marques' => 14,
            'buts_encaisses' => 6
        ],
        [
            'nom' => 'LOSC Lille',
            'points' => 11,
            'buts_marques' => 9,
            'buts_encaisses' => 5
        ],
        [
            'nom' => 'OGC Nice',
            'points' => 4,
            'buts_marques' => 3,
            'buts_encaisses' => 4
        ],
        [
            'nom' => 'Stade Rennais',
            'points' => 8,
            'buts_marques' => 49,
            'buts_encaisses' => 3
        ],
        [
            'nom' => 'Montpellier HSC',
            'points' => 6,
            'buts_marques' => 33,
            'buts_encaisses' => 2
        ],
        [
            'nom' => 'FC Metz',
            'points' => 9,
            'buts_marques' => 11,
            'buts_encaisses' => 1
        ]

    ];
}

function get_best_team($equipes)
{
    $meilleur = $equipes[0];
    foreach ($equipes as $eq) {
        if ($eq["point"] > $meilleur["point"]) {
            $meilleur = $eq;
        }
    }
    return $meilleur;
}
