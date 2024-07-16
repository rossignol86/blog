<?php

require_once "bdd/bdd.php";


// Requete pour Récupérer l'ID à partir des paramètres de l'URL
$id = $_GET['id'];

// Préparer et exécuter la requête SQL
$sql = "SELECT * FROM articles WHERE ID = :id";
$stmt = $bdd->prepare($sql);
$stmt->bindValue(":id", $id);
$stmt->execute();
$article = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <link rel="icon" href="favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon aquarium</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
    </style>
</head>



<body>

    <h1> Aquarium d'Amazonie</h1>

    <form class="form" action="index.php" method="GET">
        <input type="hidden" name="id" value="1">
        <button class="boutton" type="submit">Accueil</button>
    </form>

    <div>
        <h2><?= $article['titre'] ?></h2>
        <p><?= $article['texte'] ?></p>
        <img src="<?=($article['photo']) ?>" alt="Project Image">
    </div>
    
</body>
</html>