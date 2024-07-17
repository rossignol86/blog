<?php
require_once "bdd/bdd.php";

$requete = 'SELECT DISTINCT categories FROM articles'; // Requête pour récupérer les catégories distinctes
$categories = $bdd->query($requete); // Réalisation de la requête
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/styleindex.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon aquarium</title>
</head>
<body>
    <div class="header">
        <h1>Comment réaliser un aquarium amazonien ?</h1>
    </div>

    <div class="form-container">
        <form method="get" action="categorie.php">
            <h2>Choisissez la catégorie</h2>
            <select name="categorie">
                <?php foreach ($categories as $categorie): ?>
                    <option value="<?= $categorie['categories'] ?>"><?= $categorie['categories'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Valider</button>
        </form>
    </div>

    <div class="cards">
        <?php foreach ($categories as $categorie): ?>
        <div class="card">
            <img src="images/<?= ($categorie['categories']) ?>.jpg" alt="<?= $categorie['categories'] ?>">
            <h3><?= $categorie['categories'] ?></h3>
            <p>Description de la catégorie <?= $categorie['categories'] ?>.</p>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
