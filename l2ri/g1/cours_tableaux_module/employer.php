<?php
$tab = [
    [
        "nom" => "Ali",
        "salaire" => 1500,
        "poste" => "Responsable des systeme ",
        "anciennete" => 5
    ],
    [
        "nom" => "habib",
        "salaire" => 1200,
        "poste" => "Responsable des systeme ",
        "anciennete" => 4
    ],
    [
        "nom" => "ahmadou",
        "salaire" => 1300,
        "poste" => "Responsable des systeme ",
        "anciennete" => 3
    ],
    [
        "nom" => "oumar",
        "salaire" => 1700,
        "poste" => "Responsable des systeme ",
        "anciennete" => 1
    ],
    [
        "nom" => "saliou",
        "salaire" => 1900,
        "poste" => "Responsable des systeme ",
        "anciennete" => 7
    ]
];
function get_prime($employer)
{
    if ($employer["anciennete"] >= 5) {
        return 0.1 * $employer['salaire'];
    } else {
        return 0.05 * $employer['salaire'];
    }
}
