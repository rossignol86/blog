<?php
 
// Paramètres de connexion
$host = 'localhost';
$dbname = 'aquarium';
$user = 'root';
$password = '';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
 

// Version avec que des variables
$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password, $options);
 
?>