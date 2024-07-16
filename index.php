<?php

require_once "bdd/bdd.php";

$requete='SELECT * FROM articles'; // écriture de la requête
$reponses=$bdd->query($requete); // réalisation de la requête

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



    <div class="cards-container">
        <?php foreach ($reponses as $reponse): ?>
            <div class="card">
                <h2><?= $reponse['titre'] ?></h2>
                <div class="card-image">
                    <img src="<?=($reponse['photo']) ?>" alt="Project Image">
                </div>
                <button class="bouton-details">
                    <a href="article.php?id=<?= $reponse['id'] ?>">En savoir +</a>
                </button>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>