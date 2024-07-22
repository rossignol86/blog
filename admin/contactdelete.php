<?php

// Inclusion du fichier de connexion à la base de données
require_once "../bdd/bdd.php";

// Vérification si un identifiant 'id' est passé en paramètre dans l'URL
if (isset($_GET['id'])) {
    // Conversion de l'identifiant en entier pour éviter les injections SQL
    $id = intval($_GET['id']);
    
    // Préparation de la requête SQL pour supprimer un article avec l'identifiant spécifié
    $requete = $bdd->prepare('DELETE FROM contacts WHERE id = :id');
    
    // Liaison du paramètre :id avec la variable $id en tant qu'entier
    $requete->bindParam(':id', $id, PDO::PARAM_INT);
    
    // Exécution de la requête SQL
    $requete->execute();
}

// Redirection vers la page principale après la suppression
header('Location:contactlist.php');
exit;

?>