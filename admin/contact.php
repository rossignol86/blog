<?php
 
// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "aquarium";
 
// Établir la connexion
 $connexion = mysqli_connect($serveur, $utilisateur,
$mot_de_passe, $base_de_donnees);

// Vérifier la connexion
if (!$connexion) {
    die("Échec de la connexion : " . mysqli_connect_error());
} else {
    echo "Connexion réussie à la base de données.";
}
 
 
// Vérification si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
// Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
   
// Requête d'insertion des données
    $sql = "INSERT INTO contacts (nom, prenom, email, message)
    VALUES ('$nom', '$prenom', '$email', '$message')";
 
// Exécution de la requête d'insertion
    mysqli_query($connexion,$sql);
}
 
// Fermer la connexion
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../styles/stylecontact.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="icon" href="favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aquarium amazonien</title>     
</head>
    
    <body>
        
        <div class="header">
            <h1>Réaliser un aquarium amazonien</h1>

            <div class="boutons">
                <button class="bouton"><a href="../index.php">Accueil</a></button>
                <button class="bouton"><a href="temoignages.php">Vos témoignages</a></button>
                <div class="boutonfixe">
                    <button class="bouton2"><a>Contactez-moi</a></button>
                </div>
                <button class="bouton"><a href="adminblog.php">Admin</a></button>
            </div>
        </div>


        <container class="cards-container">
            <div class="card">
                <h1>Contactez-moi</h1>

            <!-- Formulaire de renseignement -->
                <form action="contact.php" method="post">
                    <label for="nom"><a>Nom</a></label>
                    <input class="formulaire" type="text" id="nom" name="nom" required>
                    
                    <label for="prenom"><a>Prénom</a></label>
                    <input class="formulaire" type="text" id="prenom" name="prenom">
                    
                    <label for="email"><a>Email</a></label>
                    <input class="formulaire" type="email" id="email" name="email" required><br><br>
                    
                    <label for="message"><a>Message</a></label>
                    <textarea  class="formulaire" id="message" name="message" required></textarea><br><br>
                    
                    <input class="bouton-envoyer" type="submit" value="Envoyer">
                </form>

            </div>
        </container>            
    </body>
</html>
