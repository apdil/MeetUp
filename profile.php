<?php

include_once 'Personne.php';
include_once 'DataBase.php';

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$login = $_GET['login'];
$mdp = $_GET['mdp'];
$region = $_GET['region'];
$date = $_GET['date'];
$email = $_GET['email'];
$genre = $_GET['genre'];
$interet = $_GET['interet'];

$perso = new Personne($nom, $prenom, $login, $mdp, $date, $region, $email, $interet, $genre);

$persoData = new DataBase();
$persoData->creatFile($perso);