<?php
require_once "bdd/bdd.php";

$requete = 'SELECT DISTINCT categories FROM articles'; // Requête pour récupérer les catégories distinctes
$categories = $bdd->query($requete); // Réalisation de la requête
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/styleindex.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquarium amazonien</title>
</head>
<body>
    <div class="header">
        <h1>Réaliser un aquarium amazonien</h1>

        <div class="boutons">
            <div class="boutonfixe">
            <button class="bouton2"><a>Accueil</a></button>
            </div>
            <button class="bouton"><a href="admin/temoignages.php">Vos témoignages</a></button>
            <button class="bouton"><a href="admin/contact.php">Contactez-moi</a></button>
            <button class="bouton"><a href="admin/adminblog.php">Admin</a></button>
        </div>
    </div>

    <div class="form-container">
        <form method="get" action="categorie.php">
            <h2>Choisissez la catégorie</h2>
            <select class="select_categorie" name="categorie">
                <?php foreach ($categories as $categorie): ?>
                    <option value="<?= $categorie['categories'] ?>">
                        <?= $categorie['categories'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit"><a>Valider</a></button>
        </form>
    </div>

    <div class="card_aqua">
        <div class="card2">
            <h1>Editorial du mois</h1>
            <h3>Reproduire le milieu naturel... tentant mais pas si facile !</h3>
            <p>L'aquariophilie consiste à reproduire et maintenir en captivité des animaux aquatiques
            en mettant en valeur l'aspect esthétique des animaux et du décor, ce qui la différencie
            de l'aquaculture dont le but est la production agro-alimentaire. L'aquarium est alors utilisé
            comme une vitrine ornementale sur un monde habité différent, il devient un centre d'attraction
            qui remplace les photos, les tableaux ou la télévision.
            L'aquariophilie est aussi une pratique naturaliste exploitant l'aquarium comme outil
            d'observation et de pédagogie écologiques.</p>
            <a href="categorie.php?categorie=Editorial">Retrouvez ici tous nos éditoriaux</a>
        </div>
    </div>
</body>
</html>
