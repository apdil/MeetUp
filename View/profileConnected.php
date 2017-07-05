<?php
include_once '../Model/Personne.php';
include_once '../Model/DataBase.php';
session_start();
$profil = $_SESSION['profil'];
echo 'Bienvenue ' . $profil->getLogin();
echo '<br/>';
var_dump($profil);
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
    <?php
    foreach($profil->myEvent as $eventName){ // affiche les evenement crée
        $database = new DataBase();
        $eventObject = $database->decodeFile('event', $eventName.'.sz');
        include '../Partial/displayEvent.php';?>
    
        <form action='../Controller/removeEventProcess.php' method='POST'>
            <input type='hidden' value=<?php echo $eventName; ?> name='eventName'>
            <input type='submit' value='Delete'>
        </form>
    <?php } ?>
</body>
</html>