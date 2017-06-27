<?php
include_once './DataBase.php';
session_start();

$login = $_GET['login'];
$mdp = $_GET['mdp'];

$profile = new DataBase();
$profilObject = $profile->recoverProfil($login, $mdp); // object Profil

if(!is_object($profilObject)){ header('Location:connexion.php'); }

$_SESSION['profil'] = $profilObject;
$persoSession = $_SESSION['profil'];

echo 'Bienvenue ' . $persoSession->nom;

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
    <form action='#'>
        <input type='submit' value='deconnecter'> <!- ne detruit pas la session -->
    </form>
    <a href='creatEvent.php'>Creer un evenement?</a>
</body>
</html>