<?php
include_once './DataBase.php';
include_once './Event.php';
$event = $_GET['file'];
$decodEvent = unserialize(file_get_contents('event/' . $event));
$database = new DataBase();

$filesUsers = scandir('user'); // section pour effacer l'evenement des users lorsque celui ci est supprimer
foreach ($filesUsers as $user){
    if(is_dir($user)){ continue; }
    $decodeUser = unserialize(file_get_contents('user/' . $user));
    for ($i = 0; $i < sizeof($decodeUser->participation) ; $i++){
            
            if($decodeUser->participation[$i] == $decodEvent->nom){
                unset($decodeUser->participation[$i]);
                $userFile = fopen('user/' . $user, 'w');
                fwrite($userFile, serialize($decodeUser));
                fclose($userFile);
            }
    }
}
unlink('event/' . $event);
header('Location:profileConnected.php')
?>