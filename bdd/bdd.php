<?php
 
// Paramètres de connexion
$host = 'localhost';
$dbname = 'aquarium';
$user = 'root';
$password = '';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
 
// Version sans variable
// $bdd = new PDO('mysql:host=localhost;dbname=projet_to_do_list;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 
// Version avec variables, mais options en dur
// $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
 
// Version avec que des variables
$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password, $options);
 
?>