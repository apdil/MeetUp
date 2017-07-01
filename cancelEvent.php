<?php
include_once './Personne.php';
include_once './DataBase.php';
include_once './Event.php';
session_start();

$database = new DataBase();

$i = $_GET['boucle'];
$eventFile = $_GET['event'];

array_splice($_SESSION['profil']->participation, $i, 1);

$userFile = fopen('user/' . $_SESSION['profil']->login . '.sz', 'w');
fwrite($userFile, serialize($_SESSION['profil']));
fclose($userFile);

$event = $database->decodeFile('event/', $eventFile);
$event->capacite += 1;

$eventNewFile = fopen('event/' . $eventFile, 'w');
fwrite($eventNewFile, serialize($event));
fclose($eventNewFile);

header('Location:profileConnected.php');