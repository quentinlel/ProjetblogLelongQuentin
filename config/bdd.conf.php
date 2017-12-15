<?php
//Connexion PDO à la base de donnée
try
{
/* @var $bdd PDO */
$bdd = new PDO('mysql:host=localhost;dbname=blogtp;charset=utf8', 'root', 'root');
$bdd->exec("set names utf8");

// Afficher les exception PDO 
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
?>

