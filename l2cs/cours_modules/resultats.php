<?php
// include || require

include_once("module.php");

$teams = getAllEquipe();
$meilleur_equipe = getBestTeam($teams);
$best_team_gd = getBestTeamGD($teams);

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
    <h1>Equipe qualifie</h1>
    <table class="table table-stripped">
        <tr>
            <th>Equipe</th>
            <th>Points</th>
            <th>But Marques</th>
            <th>But encaisses</th>
            <th>GD</th>
        </tr>
        <?php foreach ($teams as $equipe) {
        ?>
            <tr>
                <td><?= $equipe['nom'] ?></td>
                <td><?= $equipe['points'] ?></td>
                <td><?= $equipe['buts_marques'] ?></td>
                <td><?= $equipe['buts_encaisses'] ?></td>
                <td><?= getGD($equipe) ?></td>
            </tr>
        <?php } ?>
    </table>
    <p class="fw-bold">La meilleur equipe est Nom : <?= $meilleur_equipe['nom'] ?> Points : <?= $meilleur_equipe['points'] ?> </p>
    <p class="fw-bold">La meilleur equipe en terme de GD est Nom : <?= $best_team_gd['nom'] ?> Points : <?= $best_team_gd['points'] ?> </p>
    <p class="fw-bold">Le nombre d'equipe avec plus de 10 points est: <?= getPlusDix($teams) ?> </p>

    <h2>Liste d'equipe de plus de 10 points</h2>
    <ul class="col-6 list-group">
        <?php foreach (getTeamPLusDix($teams) as $eq) { ?>
            <li class="list-group-item"><?= "Nom : " . $eq['nom'] . " Points : " . $eq['points'] ?></li>
        <?php } ?>
    </ul>
</body>

</html>