<?php
require_once "bdd/bdd.php";

if (isset($_GET['categorie'])) {
    $categorie = $_GET['categorie'];

    $requete = $bdd->prepare('SELECT * FROM articles WHERE categories = :categorie'); // Préparation de la requête
    $requete->execute(['categorie' => $categorie]); // Exécution de la requête
    $articles = $requete->fetchAll(); // Récupération des résultats
} else {
    // Si j'ai selectionné "tous"
    
    // je recupere tous les articles
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquarium amazonien : <?= ($categorie) ?></title>
</head>
<body>
    <div class="header">
        <h1>Articles de la catégorie : <strong><?= ($categorie) ?></strong></h1>
        <div class="boutons">
            <button class="bouton"><a href="index.php">Accueil</a></button>
            <button class="bouton"><a href="admin/temoignages.php">Vos témoignages</a></button>
            <button class="bouton"><a href="admin/contact.php">Contactez-moi</a></button>
        </div>
    </div>

    <div class="cards-container">
        <?php foreach ($articles as $article): ?>
            <div class="card">
                <h2><?= ($article['titre']) ?></h2>
                <div class="card-image">
                    <img src="<?=($article['photo']) ?>" alt="Project Image">
                </div>
                <button class="bouton-details">
                    <a href="article.php?id=<?= $article['id'] ?>">En savoir +</a>
                </button>
            </div>
        <?php endforeach; ?>
    </div>
    
</body>
</html>
