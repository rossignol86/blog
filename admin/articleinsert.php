<?php

require_once "../bdd/bdd.php";

$categories=$_POST['categories'];
$titre=$_POST['titre'];
$texte=$_POST['texte'];
$photo=$_POST['photo'];

$query="INSERT INTO articles(categories, titre, texte, photo) VALUES('$categories', '$titre','$texte','$photo')";

$execution=$bdd->exec($query);

// Redirigez vers la page principale après la suppression
header('Location: ../admin/adminblog.php');
exit

?>