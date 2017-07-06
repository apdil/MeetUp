<?php

include_once '../Model/Personne.php';
include_once '../Model/DataBase.php';

$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$login = htmlspecialchars($_POST['login']);
$mdp = htmlspecialchars($_POST['mdp']);
$region = htmlspecialchars($_POST['region']);
$date = htmlspecialchars($_POST['date']);
$email = htmlspecialchars($_POST['email']);
$genre = htmlspecialchars($_POST['genre']);
foreach($_POST["interet"] as $check){ // recuper les checkbox en tableau
$interetTab[] = $check;
}

$newUser = new Personne($nom, $prenom, $login, $mdp, $date, $region, $email, $interetTab, $genre);

$database = new DataBase();
$database->creatFile('user', $newUser->getLogin(), $newUser);

header('Location:../View/connexion.php');