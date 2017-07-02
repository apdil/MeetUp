<?php

include_once 'Personne.php';
include_once 'DataBase.php';

$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$login = htmlspecialchars($_POST['login']);
$mdp = htmlspecialchars($_POST['mdp']);
$region = htmlspecialchars($_POST['region']);
$date = htmlspecialchars($_POST['date']);
$email = htmlspecialchars($_POST['email']);
$genre = htmlspecialchars($_POST['genre']);
$interet = htmlspecialchars($_POST['interet']);

$newUser = new Personne($nom, $prenom, $login, $mdp, $date, $region, $email, $interet, $genre);

$database = new DataBase();
$database->creatFile('user', $newUser->getLogin(), $newUser);
