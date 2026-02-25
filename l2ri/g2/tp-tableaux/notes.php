<?php
// 1. Déclarer un tableau associatif contenant au moins 5 étudiants :
// Clé = nom
// Valeur = note

$a = 8;
$b = 10;

$etudiants = [
    'Etudiant 1' => 15,
    'Etudiant 2' => 12,
    'Etudiant 3' => 18,
    'Etudiant 4' => 14,
    'Etudiant 5' => 16,
    'Etudiant 6' => 10,
    'Etudiant 7' => 13,
    'Etudiant 8' => 17,
    'Etudiant 9' => 11,
    'Etudiant 10' => 19
];

$somme = 0;
$nombreTotal = 0;
$noteMajor = -1;
$major = '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <!-- 
        rouge : text-danger < 10
        vert : text-success >= 16
        bleu : text-primary >=14
        jaune : warning >= 10
    -->
</head>

<body>
    <h2>Tableau de notes</h2>

    <table class="table table-striped">
        <tr>
            <th>Nom</th>
            <th>Note</th>
            <th>Mention</th>
        </tr>
        <?php foreach ($etudiants as $nom => $note) {
            $nombreTotal++;
            $somme += $note;

            if ($note > $noteMajor) {
                $noteMajor = $note;
                $major = $nom;
            }

        ?>
            <tr>
                <td><?= $nom ?></td>
                <td><?= $note ?></td>
                <!-- <td class="">
                    <?php
                    // if ($note >= 16) {
                    //     echo "<p class='text-success' >Tres bien</p>";
                    // } elseif ($note >= 14) {
                    //     echo "<p class='text-primary' >Bien</p>";
                    // } else if ($note >= 10) {
                    //     echo "<p class='text-warning' >Passable</p>";
                    // } else {
                    //     echo "<p class='text-danger' >Ajourné</p>";
                    // }
                    ?>
                </td> -->
                <?php
                if ($note >= 16) {
                    echo "<td class='text-success' >Tres bien</td>";
                } elseif ($note >= 14) {
                    echo "<td class='text-primary' >Bien</td>";
                } else if ($note >= 10) {
                    echo "<td class='text-warning' >Passable</td>";
                } else {
                    echo "<td class='text-danger' >Ajourné</td>";
                }
                ?>
            </tr>
        <?php }
        // $moyenne = $somme / $nombreTotal
        ?>
        <tr>
            <td colspan="3">La moyenne est : <?= $somme / $nombreTotal ?> </td>
        </tr>
        <tr>
            <td colspan="3">La note major est : <?= $noteMajor ?></td>
        </tr>
        <tr>
            <td colspan="3">L'etudiant major est : <?= $major ?></td>
        </tr>
    </table>
</body>

</html>