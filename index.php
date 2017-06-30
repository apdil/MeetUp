<?php
    include_once './DataBase.php';
    include_once './Event.php';
    include_once './Personne.php';
    session_start();
    
    if(isset($_SESSION['profil'])){ // evite les message d'erreur pour inconnu
        echo 'Hello '. $_SESSION['profil']->nom;
    }
    $_SESSION['pomme'] = ''; // pour que la condition soit else
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>index</title>
    </head>
    <body>
        <?php if(isset($_SESSION['profil'])){ ?>
        <a href='profileConnected.php'>Voir Profile</a>
        <?php } if(!isset($_SESSION['profil'])){ ?>
        <a href='inscription.php'>s'inscrire?</a>
        <br/>
        <a href='connexion.php'>Se connecter?</a>
        <?php } ?>
        <h2>Bienvenu chez PUmB</h2>
        <?php 
            $database = new DataBase();
            $database->recoverEvent($_SESSION['pomme']);
        ?>
    </body>
</html>
