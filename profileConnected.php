<?php
include_once './DataBase.php';
include_once './Event.php';
include_once './Personne.php';
session_start();

if(isset($_GET['login']) && isset($_GET['mdp'])){ // avoir acces profile 1 fois sinon erreur
    $login = $_GET['login'];
    $mdp = $_GET['mdp'];
    
    $profile = new DataBase();
    $profilObject = $profile->recoverProfil($login, $mdp); //  ==== object Profil
    
    $_SESSION['profil'] = $profilObject;
}

$persoSession = $_SESSION['profil'];


if(!is_object($persoSession)){ header('Location:connexion.php'); } // pour connexion.php, la reconnaisance

echo 'Bienvenue ' . $persoSession->nom;

$profile = new DataBase();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>connexion</title>
</head>
<body>
    <form action='connexion.php'>
        <input type='submit' value='deconnecter'>
    </form>
    <a href='creatEvent.php'>Creer un evenement?</a>
    <br/>
    <a href='index.php'>Go Index</a>
    <div>
        <?php echo $profile->recoverEvent($_SESSION['profil']); //aficher les events ?>
    </div>
    <?php if(!empty($persoSession->participation)){ //aficher les evenements auquell on participe ?> 
        <h2>les evenement auqels ons participent</h2>
    <?php 
        echo $profile->participEvent($persoSession);
    } ?>
</body>
</html>