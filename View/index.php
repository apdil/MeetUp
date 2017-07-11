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
        <link rel="stylesheet" href='../style.css'>      
    </head>
    <body>
        <?php include_once '../Partial/header.php' ?>
        <div id="carouselExampleIndicators" class="carousel slide slidSiz container" data-ride="carousel">
            <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">HELP</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1">TRAVAIL</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2">MUSIC</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3">SPORT</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4">ART</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5">VOYAGE</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6">HIGH-TECH</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="7">APPRENDRE</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="8">FETE</li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block slidSiz" src="../img/help-nav.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>HELP</h1>
                        <p>Un coup de main ?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block slidSiz" src="../img/travail-nav.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>TRAVAIL</h1>
                        <p>Etender votre reseau</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block slidSiz" src="../img/music-nav.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>MUSIC</h1>
                        <p>Deviens Music</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block slidSiz" src="../img/sport-nav.jpg" alt="forth slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>SPORT</h1>
                        <p>Donnez le maximum</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block slidSiz" src="../img/art-nav.jpg" alt="fifth slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>ART</h1>
                        <p>La vie en dessin</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block slidSiz" src="../img/voyage-nav.jpg" alt="sixth slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>VOYAGE</h1>
                        <p>Allez encore plus loins</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block slidSiz" src="../img/tech-nav.jpg" alt="seventh slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>HIGH-TECH</h1>
                        <p>Mais qu'est ce que c'est ?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block slidSiz" src="../img/apprendre-nav.jpg" alt="eigth slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>APPRENDRE</h1>
                        <p>La connaissance c'est le pouvoir</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block slidSiz" src="../img/fete-nav.jpg" alt="ninth slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>FETE</h1>
                        <p>Alors tu viens?</p>
                    </div>
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
                <div class="container text-center my-3">
                    <h2 class='container row'>All evenement</h2>
                    <div class="row mx-auto my-auto">
                        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <section class='container-fluid row'>
                                    <?php
                                    $i = 0;
                                    foreach($events as $event){
                                        if(is_dir($event)) { continue; }
                                        $eventObject = $database->decodeFile('event', $event);
                                            if($i == 0){
                                                echo '<div class="carousel-item active">';
                                            } else{
                                                echo '<div class="carousel-item">';
                                            }
                                            include '../Partial/displayEventIndex.php';
                                            echo '</div>';
                                            $i++;
                                        }?>
                                </section>
                                <!--<div class="carousel-item active">
                                    <img class="d-block col-4 img-fluid" src="http://placehold.it/350x180?text=1">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block col-4 img-fluid" src="http://placehold.it/350x180?text=2">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block col-4 img-fluid" src="http://placehold.it/350x180?text=3">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block col-4 img-fluid" src="http://placehold.it/350x180?text=4">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block col-4 img-fluid" src="http://placehold.it/350x180?text=5">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block col-4 img-fluid" src="http://placehold.it/350x180?text=6">
                                </div>-->
                            </div>
                            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <h4>Advances one slide at a time</h4>
                </div>
            </section>
            <section class='container-fluid row'>
            <h2 class='container row'>Fete</h2>
                <?php
                foreach($events as $event){
                    if(is_dir($event)) { continue; }
                    $eventObject = $database->decodeFile('event', $event);
                    if(in_array('fete', $eventObject->getCategorie()) == 'fete'){
                        include '../Partial/displayEventIndex.php';
                    } 
                }?>
            </section>
            <section class='container-fluid row'>
                <h2 class='container row'>Voyage</h2>
                <?php
                foreach($events as $event){
                    if(is_dir($event)) { continue; }
                    $eventObject = $database->decodeFile('event', $event);
                    if(in_array('voyage', $eventObject->getCategorie()) == 'voyage'){
                        include '../Partial/displayEventIndex.php';
                    } 
                } ?>
            </section>
            <section class='container-fluid row'>
                <h2 class='container row'>Music</h2>
                <?php
                foreach($events as $event){
                    if(is_dir($event)) { continue; }
                    $eventObject = $database->decodeFile('event', $event);
                    if(in_array('music', $eventObject->getCategorie()) == 'music'){
                        include '../Partial/displayEventIndex.php';
                    } 
                } ?>
            </section>
            <section class='container-fluid row'>
                <h2 class='container row'>Art</h2>
                <?php
                foreach($events as $event){
                    if(is_dir($event)) { continue; }
                    $eventObject = $database->decodeFile('event', $event);
                    if(in_array('art', $eventObject->getCategorie()) == 'art'){
                        include '../Partial/displayEventIndex.php';
                    }
                } ?>
            </section>
            <section class='container-fluid row'>
                <h2 class='container row'>Hight-tech</h2>
                <?php
                foreach($events as $event){
                    if(is_dir($event)) { continue; }
                    $eventObject = $database->decodeFile('event', $event);
                    if(in_array('high-tech', $eventObject->getCategorie()) == 'high-tech'){
                        include '../Partial/displayEventIndex.php';
                    }
                } ?>
            </section>
            <section class='container-fluid row'>
                <h2 class='container row'>Apprendre</h2>
                <?php
                foreach($events as $event){
                    if(is_dir($event)) { continue; }
                    $eventObject = $database->decodeFile('event', $event);
                    if(in_array('apprendre', $eventObject->getCategorie()) == 'apprendre'){
                        include '../Partial/displayEventIndex.php';
                    }
                } ?>
            </section>
            <section class='container-fluid row'>
                <h2 class='container row'>Sport</h2>
                <?php
                foreach($events as $event){
                    if(is_dir($event)) { continue; }
                    $eventObject = $database->decodeFile('event', $event);
                    if(in_array('sport', $eventObject->getCategorie()) == 'sport'){
                        include '../Partial/displayEventIndex.php';
                    }
                } ?>
            </section>
            <section class='container-fluid row'>
                <h2 class='container row'>Aider</h2>
                <?php
                foreach($events as $event){
                    if(is_dir($event)) { continue; }
                    $eventObject = $database->decodeFile('event', $event);
                    if(in_array('aider', $eventObject->getCategorie()) == 'aider'){
                        include '../Partial/displayEventIndex.php';
                    }
                } ?>
            </section>
            <section class='container-fluid row'>
                <h2 class='container row'>Travailler</h2>
                <?php
                foreach($events as $event){
                    if(is_dir($event)) { continue; }
                    $eventObject = $database->decodeFile('event', $event);
                    if(in_array('travailler', $eventObject->getCategorie()) == 'travailler'){
                        include '../Partial/displayEventIndex.php';
                    }
                } ?>
            </section>
        </main>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src='../jquery/carouselEvent.js'></script>
    </body>
</html>
