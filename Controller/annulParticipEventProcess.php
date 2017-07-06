<?php
include_once '../Model/Personne.php';
include_once '../Model/Event.php';
include_once '../Model/DataBase.php';
session_start();

$profil = $_SESSION['profil'];
$eventName = htmlspecialchars($_POST['eventName']);

$key = array_search($eventName, $profil->participation);
array_splice($profil->participation, $key, 1); // participation[] efface l'evenement

$database = new DataBase();
$database->modifFile('user', $profil->getLogin(), $profil);

$eventObject = $database->decodeFile('event', $eventName . '.sz');
$eventObject->capaciteMore(); // capacite +1
$database->modifFile('event', $eventName, $eventObject);

header('Location:../View/profileConnected.php');