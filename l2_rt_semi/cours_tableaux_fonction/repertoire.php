<?php

/**
 * 1. Déclarer un tableau associatif contenant au moins 6 contacts.
Clé : nom de la personne
Valeur : numéro de téléphone avec le format "77 123 45 67" ou "78 111 11 11" ou encore "76 444 55 55" (exemple)
 */

$contacts = [
    "Alice" => "77 123 45 67",
    "Bob" => "78 111 11 11",
    "Charlie" => "76 444 55 55",
    "David" => "77 987 65 43",
    "Eve" => "78 222 22 22",
    "Frank" => "76 555 66 66",
    "Frank" => "88 555 66 66",
    "Frank" => "88 555 66 66",
    "Frank" => "98 555 66 66",

];
$nbContact = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux associatif simple</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>

<body>

    <h1>Numero de telephone</h1>

    <table class="table table-striped">
        <tr>
            <th>Nom</th>
            <th>Telephone</th>
        </tr>
        <?php foreach ($contacts as $nom => $tel) :
            $nbContact++;
        ?>
            <tr>
                <td><?= $nom ?></td>
                <td><?= $tel ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <p>Le nombre de contact est de : <?= $nbContact ?></p>
    <h2>Contact Orange</h2>

    <ul class="list-group">
        <?php foreach ($contacts as $nom => $tel) {
            if ($tel[0] == '7' && ($tel[1] == '7' || $tel[1] == '8')) {
        ?>
                <li class="list-group-item"><?= $nom . " : " . $tel ?> </li>
        <?php }
        } ?>
    </ul>
</body>

</html>