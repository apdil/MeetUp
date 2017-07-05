<?php
include_once './Personne.php';
include_once './Event.php';
session_start();

$profil = $_SESSION['profil'];
$eventName = htmlspecialchars($_POST['eventName']);

for($i = 0 ; $i < sizeof($profil->myEvent) ; $i++){
    if($profil->myEvent[$i] == $eventName){
        array_splice($profil->myEvent, $i, 1);
    }
}
unlink('event/' . $eventName . '.sz');
header('Location:profileConnected.php');