<?php

require_once "bdd/bdd.php";

// Requete pour Récupérer l'ID à partir des paramètres de l'URL
$id = $_GET['id'];

// Préparer et exécuter la requête SQL
// La requête SQL pour sélectionner toutes les colonnes de la table "articles"
// où l'ID est égal à une valeur spécifique (indiquée par le paramètre nommé ":id").
$sql = "SELECT * FROM articles WHERE ID = :id";

// Prépare la requête SQL pour exécution par la base de données, en utilisant l'objet PDO (ici représenté par "$bdd").
// La préparation de la requête permet de protéger contre les injections SQL en utilisant des paramètres.
$stmt = $bdd->prepare($sql);

// Lie la valeur de la variable PHP "$id" au paramètre nommé ":id" dans la requête SQL préparée.
// La méthode "bindValue" lie la valeur directement au paramètre,
// ici on suppose que "$id" contient l'identifiant de l'article que vous voulez sélectionner.
$stmt->bindValue(":id", $id);

// Exécute la requête préparée avec les paramètres liés.
$stmt->execute();

// Récupère le résultat de la requête sous forme de tableau associatif (clé-valeur).
// "PDO::FETCH_ASSOC" indique que les résultats doivent être retournés sous forme de tableau associatif,
// où les clés sont les noms des colonnes de la table.
$article = $stmt->fetch(PDO::FETCH_ASSOC);

?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/stylearticle.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon aquarium</title>
</head>
<body>
    
    <div class="header">
        <h1>Aquarium d'eau douce d'Amazonie</h1>
        <div class="boutons">
            <button class="bouton"><a href="index.php">Index</a></button>
            <button class="bouton"><a href="categorie.php?categorie=<?= $article['categories'] ?>">Catégorie</a></button>
            <button class="bouton"><a href="admin/adminblog.php">Admin</a></button>
        </div>
    </div>


    <div class="article-card">
        <h2> > <?= $article['titre'] ?></h2>
        <h3><?= $article['categories'] ?></h2>
        <div class="article-texte">
            <p><?= $article['texte'] ?></p>
            <div class="article-image">
                <img src="<?=($article['photo']) ?>" alt="Project Image">
            </div>
        </div>
    </div>

</body>
</html>