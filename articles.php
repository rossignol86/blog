<?php
require_once "bdd/bdd.php";

$requete = 'SELECT DISTINCT categories FROM articles'; // Requête pour récupérer les catégories distinctes
$categories = $bdd->query($requete); // Réalisation de la requête
$categorie = null;
//initialisiation de la catégerie vide avec "" ou null

if (isset($_GET['categorie']) && $_GET['categorie'] !== "Animalerie") {
    $categorie = $_GET['categorie'];

    $requete = $bdd->prepare('SELECT * FROM articles WHERE categories = :categorie'); // Préparation de la requête
    $requete->execute(['categorie' => $categorie]); // Exécution de la requête
    $articles = $requete->fetchAll(); // Récupération des résultats
} else {
    // Si j'ai selectionné "Animalerie" ou si je vais directement sur la page articles
    // je recupere tous les articles
    // SELECT * FROM articles
    $requete = $bdd->prepare('SELECT * FROM articles');
    $requete->execute([]); // Exécution de la requête
    $articles = $requete->fetchAll(); // Récupération des résultats
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
        <h1>Articles de la labrairie <strong><?= ($categorie) ?></strong></h1>
        <div class="boutons">
            <button class="bouton"><a href="index.php">Accueil</a></button>
                <div class="boutonfixe">
            <button class="bouton2"><a>Articles</a></button>
            </div>
            <button class="bouton"><a href="admin/temoignages.php">Vos témoignages</a></button>
            <button class="bouton"><a href="admin/contact.php">Contactez-moi</a></button>
        </div>
    </div>

    <div class="form-container">
        <form method="get" action="articles.php">
            <h2>Découvrez dans notre librairie participative tous nos produits,
                articles et matériels.</h2>
            <select class="select_categorie" name="categorie">
                <option value="Librairie">Librairie</option>
                <?php foreach ($categories as $categorie): ?>
                    <option value="<?= $categorie['categories'] ?>">
                        <?= $categorie['categories'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button type="submit"><a>Valider</a></button>
        </form>
    </div>

    <div class="cards-container">
        <?php foreach ($articles as $article): ?>
            <div class="card">
                <h1><?= ($article['categories']) ?></h1>
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
