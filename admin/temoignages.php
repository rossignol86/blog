<?php
// Paramètres de connexion
$host = 'localhost';
$dbname = 'aquarium';
$user = 'root';
$password = '';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    // Connexion à la base de données
    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password, $options);
    
    // Préparation et exécution de la requête
    $stmt = $bdd->query("SELECT * FROM temoignages");
    
    // Extraction des résultats
    $temoignages = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/styleindex.css">

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
            <button class="bouton"><a href="../index.php">Accueil</a></button>
            <div class="boutonfixe">
                <button class="bouton2"><a>Vos témoignages</a></button>
            </div>
            <button class="bouton"><a href="contact.php">Contactez-moi</a></button>
            <button class="bouton"><a href="adminblog.php">Admin</a></button>
        </div>
    </div>

    <div class="card_aqua">
        <div class="card2">
            <h3>Partagez votre expérience, rejoignez notre Forum de Témoignages</h3>
            <p>"Si vous souhaitez partager votre histoire et contribuer à notre forum de témoignages,
            nous vous invitons à vous inscrire dès maintenant. En rejoignant notre communauté,
            vous aurez la possibilité de publier votre témoignage, échanger avec d'autres participants,
            et apporter votre soutien à ceux qui en ont besoin. Cliquez ici pour vous inscrire et
            commencer à partager votre expérience !"</p>
            <div class="boutonstemoins">
                <button  class="temoins">
                    <a href="temoins-form.php">Retrouvez ici le formulaire de témoignage</a>
                </button>
            </div>
        </div>
    </div>

    <div class="cards-container">
        <?php if (!empty($temoignages)): ?>
            <?php foreach ($temoignages as $temoignage): ?>
                <div class="cardtemoignages">
                    <h3><?=($temoignage['prenom']) ?> <?=($temoignage['nom']) ?></h3>
                    <p><?=($temoignage['message']) ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun témoignage trouvé.</p>
        <?php endif; ?>
    </div>

</body>
</html>
