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
        <h2>Fete</h2>
        <?php
        foreach($events as $event){
            if(is_dir($event)) { continue; }
            $eventObject = $database->decodeFile('event', $event);
            if(in_array('fete', $eventObject->getCategorie()) == 'fete'){
            include '../Partial/displayEvent.php';?>
            
            <form action='../Controller/participeEventProcess.php' method='POST'>
                <input type='hidden' value=<?php echo $eventObject->getNom(); ?> name='eventName'>
                <input type='submit' value="J'y vais">
            </form>
        <?php } }?>
        <h2>Voyage</h2>
        <?php
        foreach($events as $event){
            if(is_dir($event)) { continue; }
            $eventObject = $database->decodeFile('event', $event);
            if(in_array('voyage', $eventObject->getCategorie()) == 'voyage'){
            include '../Partial/displayEvent.php';?>
        
        <form action='../Controller/participeEventProcess.php' method='POST'>
            <input type='hidden' value=<?php echo $eventObject->getNom(); ?> name='eventName'>
            <input type='submit' value="J'y vais">
        </form>
        <?php } } ?>
        <h2>Music</h2>
        <?php
        foreach($events as $event){
            if(is_dir($event)) { continue; }
            $eventObject = $database->decodeFile('event', $event);
            if(in_array('music', $eventObject->getCategorie()) == 'music'){
            include '../Partial/displayEvent.php';?>
        
        <form action='../Controller/participeEventProcess.php' method='POST'>
            <input type='hidden' value=<?php echo $eventObject->getNom(); ?> name='eventName'>
            <input type='submit' value="J'y vais">
        </form>
        <?php } } ?>
        <h2>Art</h2>
        <?php
        foreach($events as $event){
            if(is_dir($event)) { continue; }
            $eventObject = $database->decodeFile('event', $event);
            if(in_array('art', $eventObject->getCategorie()) == 'art'){
            include '../Partial/displayEvent.php';?>
        
        <form action='../Controller/participeEventProcess.php' method='POST'>
            <input type='hidden' value=<?php echo $eventObject->getNom(); ?> name='eventName'>
            <input type='submit' value="J'y vais">
        </form>
        <?php } } ?>
        <h2>Hight-tech</h2>
        <?php
        foreach($events as $event){
            if(is_dir($event)) { continue; }
            $eventObject = $database->decodeFile('event', $event);
            if(in_array('high-tech', $eventObject->getCategorie()) == 'high-tech'){
            include '../Partial/displayEvent.php';?>
        
        <form action='../Controller/participeEventProcess.php' method='POST'>
            <input type='hidden' value=<?php echo $eventObject->getNom(); ?> name='eventName'>
            <input type='submit' value="J'y vais">
        </form>
        <?php } } ?>
        <h2>Apprendre</h2>
        <?php
        foreach($events as $event){
            if(is_dir($event)) { continue; }
            $eventObject = $database->decodeFile('event', $event);
            if(in_array('apprendre', $eventObject->getCategorie()) == 'apprendre'){
            include '../Partial/displayEvent.php';?>
        
        <form action='../Controller/participeEventProcess.php' method='POST'>
            <input type='hidden' value=<?php echo $eventObject->getNom(); ?> name='eventName'>
            <input type='submit' value="J'y vais">
        </form>
        <?php } } ?>
        <h2>Sport</h2>
        <?php
        foreach($events as $event){
            if(is_dir($event)) { continue; }
            $eventObject = $database->decodeFile('event', $event);
            if(in_array('sport', $eventObject->getCategorie()) == 'sport'){
            include '../Partial/displayEvent.php';?>
        
        <form action='../Controller/participeEventProcess.php' method='POST'>
            <input type='hidden' value=<?php echo $eventObject->getNom(); ?> name='eventName'>
            <input type='submit' value="J'y vais">
        </form>
        <?php } } ?>
        <h2>Aider</h2>
        <?php
        foreach($events as $event){
            if(is_dir($event)) { continue; }
            $eventObject = $database->decodeFile('event', $event);
            if(in_array('aider', $eventObject->getCategorie()) == 'aider'){
            include '../Partial/displayEvent.php';?>
        
        <form action='../Controller/participeEventProcess.php' method='POST'>
            <input type='hidden' value=<?php echo $eventObject->getNom(); ?> name='eventName'>
            <input type='submit' value="J'y vais">
        </form>
        <?php } } ?>
        <h2>Travailler</h2>
        <?php
        foreach($events as $event){
            if(is_dir($event)) { continue; }
            $eventObject = $database->decodeFile('event', $event);
            if(in_array('travailler', $eventObject->getCategorie()) == 'travailler'){
            include '../Partial/displayEvent.php';?>
        
        <form action='../Controller/participeEventProcess.php' method='POST'>
            <input type='hidden' value=<?php echo $eventObject->getNom(); ?> name='eventName'>
            <input type='submit' value="J'y vais">
        </form>
        <?php } } ?>
    </body>
</html>
