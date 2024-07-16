<?php

require_once "bdd/bdd.php";

$requete='SELECT * FROM articles'; // écriture de la requête
$reponses=$bdd->query($requete); // réalisation de la requête

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <link rel="icon" href="favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon aquarium</title>

</head>



<body>

    <div>
        <h1> Aquarium d'Amazonie</h1>
        <bouton><a href="admin/admin.php">Admin</a></bouton>
    </div>

    <hr>

    <?php foreach ($reponses as $reponse): ?>
        <section>
            <h2><?= $reponse['titre'] ?></h2>
            <div>
                <img src="<?=($reponse['photo']) ?>" alt="Project Image">

                <button>
                    <a href="article.php?id=<?= $reponse['id'] ?>">En savoir +</a>
                </button>
            </div>
            <hr>
        </section>
    <?php endforeach; ?>

</body>
</html>
