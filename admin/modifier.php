<?php

require_once "../bdd/bdd.php";

// Récupération de l'article spécifique à modifier
$article = null;
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $requete_article = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $requete_article->execute([$id]);
    $article = $requete_article->fetch();
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page modification article</title>
</head>
<body>
    <h1>Page modification de l'article</h1>
    <nav>                    
        <ul>
            <li><a href="../index.php">Accueil</a></li>
            <li><a href="adminblog.php">Page Administration</a></li>
            <li><a href="inserer.php">Page Inserer nouvel article</a></li>
            <!-- <li><a href="modifier.php">Modifier article</a></li> -->
        </ul>
    </nav>

    

    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour de l'article</title>
</head>
<body>
    <h1>Mise à jour de l'article</h1>
    <form action="articlemodifier.php" method="post">
        <input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>" />
        <div>
            <label for="titre">Titre :</label>
            <input type="text" id="titre" name="titre" value="<?php echo ($article['titre']); ?>">
        </div>
        <div>
            <label for="texte">Texte :</label>
            <textarea id="text" name="texte"><?php echo ($article['texte']); ?></textarea>
        </div>
        <div>
            <label for="photo">Photo :</label>
            <input type="text" id="photo" name="photo">
        </div>
        <hr>
        <input type="submit" value="Modifier">
    </form>
</body>
</html>




</body>
</html>