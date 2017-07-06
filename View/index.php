<?php
    include_once '../Model/Event.php';
    include_once '../Model/DataBase.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <link rel="stylesheet" type="text/css" href="../styleEvent.css">
    </head>
    <body>
        <h2>Bienvenue sur JUMP</h2>
        <?php if(isset($_SESSION['profil'])){ ?>
        <a href='profileConnected.php'>Mon Profil</a>
        <br/>
        <a href='../Controller/deconectProcess.php'>Se Deconnecter</a>
        <?php } else {?>
        <a href='connexion.php'>Se connecter...</a>
        <br/>
        <a href='inscription.php'>S'Inscrire</a>
        <?php } ?>
        <h2>All evenement</h2>
        <?php
        $events = scandir('../event');
        $database = new DataBase();
        foreach($events as $event){
            if(is_dir($event)) { continue; }
            $eventObject = $database->decodeFile('event', $event);
            include '../Partial/displayEvent.php';?>
            
            <form action='../Controller/participeEventProcess.php' method='POST'>
                <input type='hidden' value=<?php echo $eventObject->getNom(); ?> name='eventName'>
                <input type='submit' value="J'y vais">
            </form>
        <?php } ?>
    </body>
</html>
