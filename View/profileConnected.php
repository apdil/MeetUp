<?php
include_once '../Model/Personne.php';
include_once '../Model/DataBase.php';
session_start();
$profil = $_SESSION['profil'];
echo 'Bienvenue ' . $profil->getLogin();
echo '<br/>';
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
    <a href="../Controller/deconectProcess.php">Deconnexion</a>
    <br/>
    <a href='creatEvent.php'>Creer un evenement?</a>
    <br/>
    <a href='index.php'>Index</a>
    <?php if(!empty($profil->myEvent)){?>
    <h2>Mes evenements</h2>
    <?php }
    foreach($profil->myEvent as $eventName){ // affiche les evenement crée
        $database = new DataBase();
        $eventObject = $database->decodeFile('event', $eventName.'.sz');
        include '../Partial/displayEvent.php';?>
    
        <form action='../Controller/removeEventProcess.php' method='POST'>
            <input type='hidden' value=<?php echo $eventName; ?> name='eventName'>
            <input type='submit' value='Delete'>
        </form>
    <?php } if(!empty($profil->participation)){?>
        <h2>Les evenements auquels je participe</h2>
    <?php } 
       foreach($profil->participation as $eventName){ // affiche les evenement crée
        $database = new DataBase();
        $eventObject = $database->decodeFile('event', $eventName.'.sz');
        include '../Partial/displayEvent.php';?>
    
        <form action='../Controller/annulParticipEventProcess.php' method='POST'>
            <input type='hidden' value=<?php echo $eventName; ?> name='eventName'>
            <input type='submit' value="j'annule">
        </form>
    <?php } ?>
</body>
</html>