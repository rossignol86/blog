<?php
require_once "bdd/bdd.php";

$requete = 'SELECT DISTINCT categories FROM articles'; // Requête pour récupérer les catégories distinctes
$categories = $bdd->query($requete); // Réalisation de la requête

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon aquarium</title>
</head>
<body>
    <div class="header">
        <h1> Aquarium d'Amazonie</h1>
        <button class="bouton-admin"><a href="admin/adminblog.php">Admin</a></button>
    </div>

    <div>
        <legend>Choisir une catégorie</legend>
        <form method="get" action="categorie.php">
            <select name="categorie">
                <?php foreach ($categories as $categorie): ?>
                    <option value="<?= $categorie['categories'] ?>"><?= $categorie['categories'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Valider</button>
        </form>
    </div>
</body>
</html>
