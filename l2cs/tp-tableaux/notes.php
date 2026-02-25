<?php

/**
 * Déclarer un tableau associatif où :
La clé représente le nom de l’étudiant.
La valeur représente sa note sur 20.
Le tableau doit contenir au moins 4 étudiants.
 */

$notes = [
    'John' => 18,
    'Jane' => 15,
    'Bob' => 12,
    'Alice' => 19,
    'Eve' => 16,
    'Modou' => 4,
];


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
    <h2>Affcichage des notes</h2>
    <table class="table table-striped col-8">
        <thead>
            <th>Nom</th>
            <th>Note</th>
            <th>Mention</th>
        </thead>
        <tbody>
            <?php foreach ($notes as $nom => $note) {
                // if ($note >= 16) {
                //     $mention = "Tres Bien";
                //     $class = 'text-success';
                // } else if ($note >= 14) {
                //     $mention = "Bien";
                //     $class = 'text-primary';
                // } else if ($note >= 10) {
                //     $mention = "Passable";
                //     $class = 'text-warning';
                // } else {
                //     $mention = "Ajourné";
                //     $class = 'text-danger';
                // }
            ?>
                <tr>
                    <td><?= $nom ?></td>
                    <td><?= $note ?></td>
                    <!-- <td class="<?= $class ?>">
                        <?= $mention ?>
                    </td> -->

                    <?php
                    if ($note >= 16) {
                        echo "<td class='text-success'>Tres bien</td>";
                    } else if ($note >= 14) {
                        echo "<td class='text-primary'>Bien</td>";
                    } else if ($note >= 10) {
                        echo "<td class='text-warning'>Passable</td>";
                    } else {
                        echo "<td class='text-danger'>Ajourné</td>";
                    }
                    ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>