<?php
include_once '../Model/Personne.php';
include_once '../Model/DataBase.php';
include_once '../Model/Event.php';
session_start();

$profil = $_SESSION['profil'];
$eventName = htmlspecialchars($_POST['eventName']);

for($i = 0 ; $i < sizeof($profil->myEvent) ; $i++){
    if($profil->myEvent[$i] == $eventName){
        array_splice($profil->myEvent, $i, 1);
    }
}

$database = new DataBase();
$database->modifFile('user', $profil->getLogin(), $profil);

unlink('../event/' . $eventName . '.sz');

$users = scandir('../user');
foreach($users as $user){
    if(is_dir($user)) {continue; }
    $decodeUser = $database->decodeFile('user', $user);
    var_dump($decodeUser->participation);
    if(in_array($eventName, $decodeUser->participation)){
        $key = array_search($eventName, $decodeUser->participation);
        array_splice($decodeUser->participation, $key, 1);
        
        $database->modifFile('user', $decodeUser->getLogin(), $decodeUser);
    }
}

//header('Location:../View/profileConnected.php');