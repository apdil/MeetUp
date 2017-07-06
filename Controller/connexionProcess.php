<?php
include_once '../Model/DataBase.php';
include_once '../Model/Personne.php';
session_start();

$login = htmlspecialchars($_POST['login']);
$mdp = htmlspecialchars($_POST['mdp']);

// si input vide
if(empty($_POST['login']) || empty($_POST['mdp'])){header('Location:../View/connexion.php');}

$users = scandir('../user');
        
foreach ($users as $user){ // boucle sur les fichiers
    if(is_dir($user)){ continue; }
            
    $database = new DataBase();
    $decode = $database->decodeFile('user', $user);
            
    if($decode->getLogin() == $login){
        if($decode->getMdp() == $mdp){
            $_SESSION['profil'] = $decode;
            header('Location:../View/profileConnected.php');
            } else {
            header('Location:../View/connexion.php');
        }
    }
}

//header('location:../View/connexion.php');
