<?php
include_once '../Model/Event.php';
include_once '../Model/DataBase.php';
include_once '../Model/Personne.php';
session_start();
$profil = $_SESSION['profil'];

$nom = htmlspecialchars($_POST['nom']);
$lieu = htmlspecialchars($_POST['lieu']);
$dure = htmlspecialchars($_POST['dure']);
foreach($_POST["categorie"] as $check){ // recuper les checkbox en tableau
$categorieTab[] = $check;
}
$descript = htmlspecialchars($_POST['descript']);
$date = htmlspecialchars($_POST['date']);
$capacite = htmlspecialchars(intval($_POST['capacite']));
$ressource = htmlspecialchars($_POST['ressource']);

if(file_exists('../event/' . $nom . '.sz')){
    header('location:../View/profileConnected.php');
    return;
}
$event = new Event($nom, $lieu, $dure, $categorieTab, $date, $descript, $ressource, $capacite, $profil->getLogin());
$database = new DataBase();
$database->creatFile('event', $event->getNom(), $event);

$profil->myEvent[] = $event->getNom();
$database->modifFile('user', $profil->getLogin(), $profil);

header('location:../View/profileConnected.php');
