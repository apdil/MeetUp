<?php
include_once './Personne.php';
include_once './Event.php';
include_once './DataBase.php';
session_start();
$sessionProfile = $_SESSION['profil'];

$nom = $_GET['nom'];
$lieu = $_GET['lieu'];
$dure = $_GET['dure'];
$categorie = $_GET['categorie'];
$descript = $_GET['descript'];
$date = $_GET['date'];
$capacite = $_GET['capacite'];
$ressource = $_GET['ressource'];

$event = new Event($nom, $lieu, $dure, $categorie, $date, $descript, $ressource, $capacite, $sessionProfile->nom);
$creatEvent = new DataBase();
$creatEvent->creatEvent($event);

var_dump($event);
