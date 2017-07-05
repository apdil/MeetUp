<?php
include_once '../Model/Event.php';
include_once '../Model/Personne.php';
include_once '../Model/DataBase.php';
session_start();

if(!isset($_SESSION['profil'])){ header('Location:../View/connexion.php'); return;}

$profil = $_SESSION['profil'];
$eventName = htmlspecialchars($_POST['eventName']);

$database = new DataBase();
$event = $database->decodeFile('event', $eventName . '.sz');

if($profil->getLogin() == $event->getCreator() || in_array($eventName, $profil->participation)){
    header('Location:../View/index.php'); return;}

$event->capaciteLess(); // capacite -1
$database->modifFile('event', $eventName, $event);

$profil->participation[] = $eventName;
$database->modifFile('user', $profil->getLogin(), $profil);

header('Location:../View/index.php');