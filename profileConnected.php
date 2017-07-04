<?php
include_once './DataBase.php';
include_once './Searchfile.php';
include_once './Personne.php';
include_once './Put.php';
session_start();

if(isset($_POST['login']) && isset($_POST['mdp'])){
    $login = htmlspecialchars($_POST['login']);
    $mdp = htmlspecialchars($_POST['mdp']);

    $searchFile = new Searchfile();
    $profil = $searchFile->IdentifyUser($login, $mdp);


    $_SESSION['profil'] = $profil;
}

$profil = $_SESSION['profil'];

if(!$profil){ header('Location:connexion.php'); } // si profil est null
echo 'Bienvenue ' . $profil->getPrenom();

$searchFile = new Searchfile();
$put = new Put();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profilPage</title>
</head>
<body>
    <form action='connexion.php'>
        <input type='submit' value='deconnecter'> <!- ne detruit pas la session -->
    </form>
    <a href='creatEvent.php'>Creer un evenement?</a>
    <?php 
        if(!empty($profil->myEvent)){
            $put->profilMyEvent($profil);
        }
     ?>
</body>
</html>