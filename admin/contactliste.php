<?php

require_once "../bdd/bdd.php";

$requete='SELECT * FROM contacts'; // écriture de la requête
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
    <h2>Liste des contacts</h2>
    <hr>
    <?php foreach ($reponses as $reponse): ?>
        <section>
            <h3><?= $reponse['prenom'] ?> <?= $reponse['nom'] ?></h2>
            <p><?= $reponse['email'] ?></h2>
            <p><?= $reponse['message'] ?></p>
        </section>
        <div>
        <a href="contactdelete.php?id=<?=$reponse['id'] ?>"> Suprimer </a>
        <hr>
    <?php endforeach; ?>

</body>
</html>