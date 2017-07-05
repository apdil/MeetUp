<?php
include_once '../Model/Event.php';
include_once '../Model/DataBase.php';
session_start();
$profil = $_SESSION['profil'];

$nom = htmlspecialchars($_POST['nom']);
$lieu = htmlspecialchars($_POST['lieu']);
$dure = htmlspecialchars($_POST['dure']);
$categorie = htmlspecialchars($_POST['categorie']);
$descript = htmlspecialchars($_POST['descript']);
$date = htmlspecialchars($_POST['date']);
$capacite = htmlspecialchars(intval($_POST['capacite']));
$ressource = htmlspecialchars($_POST['ressource']);

$event = new Event($nom, $lieu, $dure, $categorie, $date, $descript, $ressource, $capacite, $profil->getLogin());
$database = new DataBase();
$database->creatFile('event', $event->getNom(), $event);

for( $i = 0; $i < sizeof($profil->myEvent) ; $i++){ //si l'event existe
    if($profil->myEvent[$i] == $event->getNom()){
        header('location:../View/profileConnected.php');
        return;
    }
}
$profil->myEvent[] = $event->getNom();
var_dump($profil->myEvent);
$database->modifFile('user', $profil->getLogin(), $profil);

header('location:../View/profileConnected.php');
