<?php

require_once "bdd/bdd.php";

$requete='SELECT * FROM articles'; // écriture de la requête
$reponses=$bdd->query($requete); // réalisation de la requête

// Initialiser un tableau pour stocker les articles par catégorie
$articles_par_categorie = [];

// Parcourir les résultats de la requête et les classer par catégorie
foreach ($reponses as $reponse) {
    $categorie = $reponse['categories'];
    if (!isset($articles_par_categorie[$categorie])) {
        $articles_par_categorie[$categorie] = [];
    }
    $articles_par_categorie[$categorie][] = $reponse;
}

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

    <div class="content">
        <?php foreach ($articles_par_categorie as $categorie => $articles): ?>
            <div class="category-section">
                <h2><?= htmlspecialchars($categorie) ?></h2>
                <div class="cards-container">
                    <?php foreach ($articles as $article): ?>
                        <div class="card">
                            <h3><?= htmlspecialchars($article['titre']) ?></h3>
                            <div class="card-image">
                                <img src="<?= htmlspecialchars($article['photo']) ?>" alt="Project Image">
                            </div>
                            <button class="bouton-details">
                                <a href="article.php?id=<?= htmlspecialchars($article['id']) ?>">En savoir +</a>
                            </button>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
