<?php

require_once "../bdd/bdd.php";

$id = $_POST['id'];
$titre = $_POST['titre'];
$texte = $_POST['texte'];
$photo = $_POST['photo'];

$query="UPDATE articles
        SET id='$id', titre='$titre', texte='$texte', photo='$photo'
        where id='$id'";

// var_dump($query);

$execution=$bdd->exec($query);

// Redirigez vers la page principale après la suppression
header('Location: ../admin/adminblog.php');
exit

?>