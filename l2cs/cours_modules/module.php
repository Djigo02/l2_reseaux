<?php

/**
 * 1. Déclarer un tableau associatif contenant au moins 6 équipes.
Chaque équipe doit contenir :
nom
points
buts_marques
buts_encaisses
 */

$equipes = [
    [
        'nom' => 'Equipe A',
        'points' => 10,
        'buts_marques' => 15,
        'buts_encaisses' => 5
    ],
    [
        'nom' => 'Equipe B',
        'points' => 8,
        'buts_marques' => 12,
        'buts_encaisses' => 7
    ],
    [
        'nom' => 'Equipe C',
        'points' => 12,
        'buts_marques' => 20,
        'buts_encaisses' => 10
    ],
    [
        'nom' => 'Equipe D',
        'points' => 6,
        'buts_marques' => 8,
        'buts_encaisses' => 12
    ],
    [
        'nom' => 'Equipe E',
        'points' => 14,
        'buts_marques' => 25,
        'buts_encaisses' => 5
    ],
    [
        'nom' => 'Equipe F',
        'points' => 4,
        'buts_marques' => 5,
        'buts_encaisses' => 15
    ]
];

function getAllEquipe()
{
    return [
        [
            'nom' => 'Equipe A',
            'points' => 10,
            'buts_marques' => 15,
            'buts_encaisses' => 5
        ],
        [
            'nom' => 'Equipe B',
            'points' => 8,
            'buts_marques' => 12,
            'buts_encaisses' => 7
        ],
        [
            'nom' => 'Equipe C',
            'points' => 12,
            'buts_marques' => 20,
            'buts_encaisses' => 10
        ],
        [
            'nom' => 'Equipe D',
            'points' => 6,
            'buts_marques' => 8,
            'buts_encaisses' => 12
        ],
        [
            'nom' => 'Equipe E',
            'points' => 14,
            'buts_marques' => 25,
            'buts_encaisses' => 18
        ],
        [
            'nom' => 'Equipe F',
            'points' => 4,
            'buts_marques' => 5,
            'buts_encaisses' => 15
        ]
    ];
}


// $teams = getAllEquipe();

// $teams[0] == getAllEquipe()[0]

// echo $teams[0]['nom'] . '<br>';
// echo getAllEquipe()[2]['nom'];

function getGD($team)
{
    return $team['buts_marques'] - $team['buts_encaisses'];
}

// echo getGD($equipes[1]);

function getBestTeam($teams)
{
    $bestTeam = $teams[0];
    foreach ($teams as $team) {
        if ($team['points'] > $bestTeam['points']) {
            $bestTeam = $team;
        }
    }
    return $bestTeam;
}

function getBestTeamGD($teams)
{
    $bestTeam = $teams[0];
    foreach ($teams as $team) {
        if (getGD($team) > getGD($bestTeam)) {
            $bestTeam = $team;
        }
    }
    return $bestTeam;
}

function getPlusDix($teams)
{
    $nb = 0;
    foreach ($teams as $team) {
        if ($team['points'] > 10) {
            $nb++;
        }
    }
    return $nb;
}

function getTeamPLusDix($teams)
{
    $equipes = [];
    foreach ($teams as $team) {
        if ($team['points'] > 10) {
            $equipes[] = $team;
        }
    }
    return $equipes;
}
