<?php 
include_once './DataBase.php';
include_once './Event.php';
include_once './Personne.php';
session_start();
$database = new DataBase();

if(isset($_SESSION['profil'])){
    
    $profil = $_SESSION['profil'];
    
    $contentCrypt = $_GET['contentCrypt'];
    $event = $_GET['file'];
        
    $decode = $database->decodeFile('event', $event); // recupere evenement
    for($i = 0 ; $i < sizeof($profil->participation) ; $i++){ // le connecter ne peut pas participer 2 fois a l'evenement
        if($profil->participation[$i] == $decode->nom){
            return header('Location:index.php');
        }
    }
    if($profil->login == $decode->creator){ return header('Location:index.php');} //le connecter ne peut pas particper a ces propres evenements
    
    $profil->participation[] = $decode->nom; // affile nom evenement a user session
    $database->modifiFile('event', $event, 'capacite', -1, 1); // enleve -1 a capacite
    
    $changeFile = fopen('user/'. $profil->login .'.sz', 'w');
    fwrite($changeFile, serialize($profil));
    fclose($changeFile);
    
    header('Location:index.php');

} else { 
    header('Location:connexion.php');
}
