<?php
// require => importer un fichier qui existe s'il n'existe pas il genere une erreur
// include => importer un fichier s'il n'existe pas il continue le programme

require_once("module.php");

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
    <h1>Notes des etudiants</h1>
    <table class="table table-stripped">
        <tr>
            <th>Nom</th>
            <th>Note</th>
            <th>Mention</th>
        </tr>
        <?php foreach ($tab_etu as $etudiant) {
        ?>
            <tr>
                <td><?= $etudiant['nom'] ?></td>
                <td><?= $etudiant['note'] ?></td>
                <td><?= get_mention($etudiant['note']) ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>