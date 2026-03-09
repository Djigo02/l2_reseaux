<?php

/**
 * Créer un fichier notes.php .
1. Déclarer un tableau d'etudiant contenant au moins 8 étudiants :
    Un étudiant est représenté par un tableau associatif contenant les clés suivantes :
    - nom : le nom de l'étudiant
    - note : la note de l'étudiant

 */

function tableau_etudiant()
{
    return [
        ["nom" => "Alice", "note" => 15],
        ["nom" => "Bob", "note" => 12],
        ["nom" => "Charlie", "note" => 18],
        ["nom" => "David", "note" => 10],
        ["nom" => "Eve", "note" => 14],
        ["nom" => "Frank", "note" => 8],
        ["nom" => "Grace", "note" => 16],
        ["nom" => "Heidi", "note" => 9],
        ["nom" => "Ivan", "note" => 11],
        ["nom" => "Judy", "note" => 13],
        ["nom" => "Kevin", "note" => 17],
    ];
}
// echo tableau_etudiant()[3];
$tab_etu = tableau_etudiant();

function get_mention($note)
{
    $mention = '';
    if ($note >= 16) {
        $mention = 'Très Bien';
    } else if ($note >= 14) {
        $mention = 'Bien';
    } else if ($note >= 10) {
        $mention = 'Passable';
    } else {
        $mention = 'Ajourné';
    }
    return $mention;
}
