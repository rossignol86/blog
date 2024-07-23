<?php

require_once "../bdd/bdd.php";

$requete='SELECT * FROM temoignages'; // écriture de la requête
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
            <li><a href="adminblog.php">Administration</a></li>
            <li><a href="inserer.php">Inserer nouvel article</a></li>
            <li><a href="contactliste.php">Liste des contacts</a></li>
            <li><a href="temoignagesliste.php">Liste des témoignages</a></li>
        </ul>
    </nav>

    <hr>
    <h2>Liste des témoignages</h2>
    <hr>
    <?php foreach ($reponses as $reponse): ?>
        <section>
            <h3><?= $reponse['prenom'] ?> <?= $reponse['nom'] ?></h2>
            <p><?= $reponse['email'] ?></h2>
            <p><?= $reponse['message'] ?></p>
        </section>
        <hr>
    <?php endforeach; ?>

</body>
</html>