<?php
//Connexion PDO à la base de donnée
try
{
/* @var $bdd PDO */
$bdd = new PDO('mysql:host=localhost;dbname=id3906098_blog;charset=utf8', 'id3906098_quentin', 'aqfl59254');
$bdd->exec("set names utf8");

// Afficher les exception PDO 
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
?>

