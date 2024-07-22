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
    <title>Page administration du blog</title>
</head>
<body>
    <h1>Page administration</h1>
    <nav>                    
        <ul>
            <li><a href="../index.php">Accueil</a></li>
            <!-- <li><a href="admin.php">Page Administration</a></li> -->
            <li><a href="inserer.php">Inserer nouvel article</a></li>
            <li><a href="contactliste.php">Liste des contacts</a></li>
        </ul>
    </nav>

    <hr>

    <?php foreach ($reponses as $reponse): ?>
        <section>
            <h3><?= $reponse['categories'] ?></h2>
            <h2><?= $reponse['titre'] ?></h2>
            <p><?= $reponse['texte'] ?></p>
        </section>
        <div>
        <a href="traitementdelete.php?id=<?=$reponse['id'] ?>"> Suprimer </a>
        <a href="modifier.php?id=<?=$reponse['id'] ?>"> modifier </a>
        </div>
        <hr>

    <?php endforeach; ?>

</body>
</html>