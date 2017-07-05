<?php
include_once '../Model/Personne.php';
session_start();

$profil = $_SESSION['profil'];
$eventName = htmlspecialchars($_POST['eventName']);

for($i = 0 ; $i < sizeof($profil->myEvent) ; $i++){
    if($profil->myEvent[$i] == $eventName){
        array_splice($profil->myEvent, $i, 1);
    }
}

unlink('../event/' . $eventName . '.sz');
header('Location:../View/profileConnected.php');