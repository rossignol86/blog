<?php

require_once "../bdd/bdd.php";

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$message=$_POST['message'];

$query="INSERT INTO contacts(nom, prenom, email, message) VALUES('$nom', '$prenom','$email','$message')";

$execution=$bdd->exec($query);

// Redirigez vers la page principale après la suppression
// header('Location: ../admin/listecontact.php');
exit

?>