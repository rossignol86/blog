
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mon aquarium</title>     
</head>
    
    <body>   
        <container>
            <div>
                <h1>Me contacter</h1>

            <!-- Formulaire de renseignement -->
                <form action="contact.php" method="post">
                    <label for="nom">Nom :</label>
                    <input class="formulaire" type="text" id="nom" name="nom" required>
                    
                    <label for="societe">Prénom :</label>
                    <input class="formulaire" type="text" id="societe" name="societe">
                    
                    <label for="email">Email :</label>
                    <input class="formulaire" type="email" id="email" name="email" required><br><br>
                    
                    <label for="message">Message :</label>
                    <textarea  class="formulaire" id="message" name="message" required></textarea><br><br>
                    
                    <input class="boutton" type="submit" value="Envoyer">
                </form>

            </div>
        </container>            
    </body>
</html>
