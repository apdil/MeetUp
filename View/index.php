<?php
    include_once '../Model/Event.php';
    include_once '../Model/DataBase.php';
    session_start();
    
    $events = scandir('../event');
    $database = new DataBase();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href='../style.css'>
    </head>
    <body class='container-fluid'>
        <?php include_once '../Partial/header.php' ?>
        <section class='container-fluid row'>
        <h2 class=''>All evenement</h2>
            <?php
            foreach($events as $event){
                if(is_dir($event)) { continue; }
                $eventObject = $database->decodeFile('event', $event);
                include '../Partial/displayEvent.php';
                include '../Partial/buttonParticip.php';?>

            <?php } ?>
        </section>
        <section class='container-fluid row'>
        <h2>Fete</h2>
            <?php
            foreach($events as $event){
                if(is_dir($event)) { continue; }
                $eventObject = $database->decodeFile('event', $event);
                if(in_array('fete', $eventObject->getCategorie()) == 'fete'){
                include '../Partial/displayEvent.php';
                include '../Partial/buttonParticip.php';?>

            <?php } }?>
        </section>
        <section class='container-fluid row'>
            <h2>Voyage</h2>
            <?php
            foreach($events as $event){
                if(is_dir($event)) { continue; }
                $eventObject = $database->decodeFile('event', $event);
                if(in_array('voyage', $eventObject->getCategorie()) == 'voyage'){
                include '../Partial/displayEvent.php';
                include '../Partial/buttonParticip.php';?>
            
            <?php } } ?>
        </section>
        <section class='container-fluid row'>
            <h2>Music</h2>
            <?php
            foreach($events as $event){
                if(is_dir($event)) { continue; }
                $eventObject = $database->decodeFile('event', $event);
                if(in_array('music', $eventObject->getCategorie()) == 'music'){
                include '../Partial/displayEvent.php';
                include '../Partial/buttonParticip.php';?>

            <?php } } ?>
        </section>
        <section class='container-fluid row'>
            <h2>Art</h2>
            <?php
            foreach($events as $event){
                if(is_dir($event)) { continue; }
                $eventObject = $database->decodeFile('event', $event);
                if(in_array('art', $eventObject->getCategorie()) == 'art'){
                    include '../Partial/displayEvent.php';
                    include '../Partial/buttonParticip.php';
                }
            } ?>
        </section>
        <section class='container-fluid row'>
            <h2>Hight-tech</h2>
            <?php
            foreach($events as $event){
                if(is_dir($event)) { continue; }
                $eventObject = $database->decodeFile('event', $event);
                if(in_array('high-tech', $eventObject->getCategorie()) == 'high-tech'){
                    include '../Partial/displayEvent.php';
                    include '../Partial/buttonParticip.php';
                }
            } ?>
        </section>
        <section class='container-fluid row'>
            <h2>Apprendre</h2>
            <?php
            foreach($events as $event){
                if(is_dir($event)) { continue; }
                $eventObject = $database->decodeFile('event', $event);
                if(in_array('apprendre', $eventObject->getCategorie()) == 'apprendre'){
                    include '../Partial/displayEvent.php';
                    include '../Partial/buttonParticip.php';
                }
            } ?>
        </section>
        <section class='container-fluid row'>
            <h2>Sport</h2>
            <?php
            foreach($events as $event){
                if(is_dir($event)) { continue; }
                $eventObject = $database->decodeFile('event', $event);
                if(in_array('sport', $eventObject->getCategorie()) == 'sport'){
                    include '../Partial/displayEvent.php';
                    include '../Partial/buttonParticip.php';
                }
            } ?>
        </section>
        <section class='container-fluid row'>
            <h2>Aider</h2>
            <?php
            foreach($events as $event){
                if(is_dir($event)) { continue; }
                $eventObject = $database->decodeFile('event', $event);
                if(in_array('aider', $eventObject->getCategorie()) == 'aider'){
                    include '../Partial/displayEvent.php';
                    include '../Partial/buttonParticip.php';
                }
            } ?>
        </section>
        <section class='container-fluid row'>
            <h2>Travailler</h2>
            <?php
            foreach($events as $event){
                if(is_dir($event)) { continue; }
                $eventObject = $database->decodeFile('event', $event);
                if(in_array('travailler', $eventObject->getCategorie()) == 'travailler'){
                    include '../Partial/displayEvent.php';
                    include '../Partial/buttonParticip.php';
                }
            } ?>
        </section>
    </body>
</html>
