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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <link rel="stylesheet" href='../style.css'>      
    </head>
    <body>
        <?php include_once '../Partial/header.php' ?>
        <div id="carouselExampleIndicators" class="carousel slide slidSiz container" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                <img class="d-block slidSiz" src="../img/help-nav.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block slidSiz" src="../img/travail-nav.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block slidSiz" src="../img/music-nav.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <main class='container'>
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
        </main>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>
