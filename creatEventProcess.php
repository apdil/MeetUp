<?php
include_once './Personne.php';
include_once './Event.php';
include_once './DataBase.php';
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

header('location:profileConnected.php');
