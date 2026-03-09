<?php
if (isset($_POST["btn_submit"])) {
    if (
        empty($_POST["nom"]) || empty($_POST["auteur"])
        || empty($_POST["genre"]) || empty($_POST["pegi"])
    ) {
        echo "tous les champs sont obligatoire";
    } else {
        echo "Nom" . $_POST['nom'] . "<br>";
        echo "Auteur" . $_POST['auteur'] . "<br>";
    }
}

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
    <form method="post" class="col-8 offset-2 my-5">
        <div class="form-group">
            <label for="">nom du film</label>
            <input type="text" name="nom" class="form-control">
        </div>
        <div class="form-group">
            <label for="">auteur du film</label>
            <input type="text" name="auteur" class="form-control">
        </div>
        <div class="form-group">
            <label for="">genre du film</label>
            <select name="genre" id="" class="form-control">
                <option value="">...</option>
                <option value="horreur">Horreur</option>
                <option value="action">Action</option>
                <option value="thriller">Thriller</option>
                <option value="romance">Romance</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">categories du film</label>
            <div class="form-check">
                <input class="form-check-input" value="pegi 12" type="radio" name="pegi">
                <label class="form-check-label" for="radioDefault1">
                    PEGI 12+
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" value="pegi 16" type="radio" name="pegi">
                <label class="form-check-label" for="radioDefault2">
                    PEGI 16
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" value="pegi 18" type="radio" name="pegi">
                <label class="form-check-label" for="radioDefault2">
                    PEGI 18
                </label>
            </div>

        </div>
        <button name="btn_submit" class="btn btn-sm col-4 btn-success">enregistrer</button>
    </form>
</body>

</html>