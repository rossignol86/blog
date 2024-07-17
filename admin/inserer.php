<?php

require_once "../bdd/bdd.php";

$requete='SELECT * FROM articles'; // écriture de la requête
$reponses=$bdd->query($requete); // réalisation de la requête

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page inserer un article</title>
</head>
<body>


    <h1>Insérer un nouvel article</h1>
    <nav>                    
        <ul>
            <li><a href="../index.php">Accueil</a></li>
            <li><a href="adminblog.php">Page Administration</a></li>
            <!-- <li><a href="modifier.php">Page Modifer Article</a></li> -->
        </ul>
    </nav>

    <hr>

            <form action="articleinsert.php" method="post">
                <label for="categories">Catégories :</label>
                <input type="text" id="categories" name="categories">
                <hr>
                <label for="titre">Titre :</label>
                <input type="text" id="titre" name="titre">
                <hr>
                <label for="texte">Texte :</label>
                <textarea id="texte" name="texte"></textarea>
                <hr>
                <label for="photo">Sélectionner la photo :</label>
                <input type="texte" id="photo" name="photo" accept="photo/png, photo/jpeg" />
                <hr>
                <input type="submit" value="Envoyer">
            </form>
            
</body>
</html>