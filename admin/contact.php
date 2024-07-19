
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
    <title>Mon aquarium</title>     
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
                    
                    <label for="societe"><a>Prénom</a></label>
                    <input class="formulaire" type="text" id="societe" name="societe">
                    
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
