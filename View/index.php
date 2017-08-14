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
    <body class='container-fluid'>
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
                        <p>help</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block slidSiz" src="../img/travail-nav.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>TRAVAIL</h1>
                        <p>travail</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block slidSiz" src="../img/music-nav.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>MUSIC</h1>
                        <p>music</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block slidSiz" src="../img/sport-nav.jpg" alt="forth slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>SPORT</h1>
                        <p>sport</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block slidSiz" src="../img/art-nav.jpg" alt="fifth slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>ART</h1>
                        <p>art</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block slidSiz" src="../img/voyage-nav.jpg" alt="sixth slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>VOYAGE</h1>
                        <p>voyage</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block slidSiz" src="../img/tech-nav.jpg" alt="seventh slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>HIGH-TECH</h1>
                        <p>tech</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block slidSiz" src="../img/apprendre-nav.jpg" alt="eigth slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>APPRENDRE</h1>
                        <p>apprendre</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block slidSiz" src="../img/fete-nav.jpg" alt="ninth slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>FETE</h1>
                        <p>fete</p>
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
            <section class='container-fluid row marginSection'>
                <h2 class='txt-align-center w-100'>Tous les événements</h2>
                <div class="container-fluid">
                    <div id="carouselAll" class="carousel slide" data-ride="carousel" data-interval="9000">
                        <div class="carousel-inner row w-100 mx-auto" role="listbox">
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
                        </div>
                        <a class="carousel-control-prev" href="#carouselAll" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left fa-lg text-muted"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next text-faded" href="#carouselAll" role="button" data-slide="next">
                            <i class="fa fa-chevron-right fa-lg text-muted"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>
            <section class='container-fluid row marginSection'>
                <h2 class='txt-align-center w-100'>FETE</h2>
                <div class="container-fluid">
                    <div id="carouselFete" class="carousel slide" data-ride="carousel" data-interval="9000">
                        <div class="carousel-inner row w-100 mx-auto" role="listbox">
                            <?php
                            $i = 0;
                            foreach($events as $event){
                                if(is_dir($event)) { continue; }
                                    $eventObject = $database->decodeFile('event', $event);
                                    if(in_array('fete', $eventObject->getCategorie()) == 'fete'){
                                        if($i == 0){
                                        echo '<div class="carousel-item active">';
                                            } else{
                                                echo '<div class="carousel-item">';
                                            }
                                        include '../Partial/displayEventIndex.php';
                                        echo '</div>';
                                        $i++;
                                    }
                                }?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselFete" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left fa-lg text-muted"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next text-faded" href="#carouselFete" role="button" data-slide="next">
                            <i class="fa fa-chevron-right fa-lg text-muted"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>
            <section class='container-fluid row marginSection'>
                <h2 class='txt-align-center w-100'>VOYAGE</h2>
                <div class="container-fluid">
                    <div id="carouselVoyage" class="carousel slide" data-ride="carousel" data-interval="9000">
                        <div class="carousel-inner row w-100 mx-auto" role="listbox">
                            <?php
                            $i = 0;
                            foreach($events as $event){
                                if(is_dir($event)) { continue; }
                                    $eventObject = $database->decodeFile('event', $event);
                                    if(in_array('voyage', $eventObject->getCategorie()) == 'voyage'){
                                        if($i == 0){
                                        echo '<div class="carousel-item active">';
                                            } else{
                                                echo '<div class="carousel-item">';
                                            }
                                        include '../Partial/displayEventIndex.php';
                                        echo '</div>';
                                        $i++;
                                    }
                                }?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselVoyage" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left fa-lg text-muted"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next text-faded" href="#carouselVoyage" role="button" data-slide="next">
                            <i class="fa fa-chevron-right fa-lg text-muted"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>
            <section class='container-fluid row marginSection'>
                <h2 class='txt-align-center w-100'>MUSIC</h2>
                <div class="container-fluid">
                    <div id="carouselMusic" class="carousel slide" data-ride="carousel" data-interval="9000">
                        <div class="carousel-inner row w-100 mx-auto" role="listbox">
                            <?php
                            $i = 0;
                            foreach($events as $event){
                                if(is_dir($event)) { continue; }
                                    $eventObject = $database->decodeFile('event', $event);
                                    if(in_array('music', $eventObject->getCategorie()) == 'music'){
                                        if($i == 0){
                                        echo '<div class="carousel-item active">';
                                            } else{
                                                echo '<div class="carousel-item">';
                                            }
                                        include '../Partial/displayEventIndex.php';
                                        echo '</div>';
                                        $i++;
                                    }
                                }?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselMusic" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left fa-lg text-muted"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next text-faded" href="#carouselMusic" role="button" data-slide="next">
                            <i class="fa fa-chevron-right fa-lg text-muted"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>
            <section class='container-fluid row marginSection'>
                <h2 class='txt-align-center w-100'>ART</h2>
                <div class="container-fluid">
                    <div id="carouselArt" class="carousel slide" data-ride="carousel" data-interval="9000">
                        <div class="carousel-inner row w-100 mx-auto" role="listbox">
                            <?php
                            $i = 0;
                            foreach($events as $event){
                                if(is_dir($event)) { continue; }
                                    $eventObject = $database->decodeFile('event', $event);
                                    if(in_array('art', $eventObject->getCategorie()) == 'art'){
                                        if($i == 0){
                                        echo '<div class="carousel-item active">';
                                            } else{
                                                echo '<div class="carousel-item">';
                                            }
                                        include '../Partial/displayEventIndex.php';
                                        echo '</div>';
                                        $i++;
                                    }
                                }?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselArt" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left fa-lg text-muted"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next text-faded" href="#carouselArt" role="button" data-slide="next">
                            <i class="fa fa-chevron-right fa-lg text-muted"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>
            <section class='container-fluid row marginSection'>
                <h2 class='txt-align-center w-100'>HIGH-TECH</h2>
                <div class="container-fluid">
                    <div id="carouselTech" class="carousel slide" data-ride="carousel" data-interval="9000">
                        <div class="carousel-inner row w-100 mx-auto" role="listbox">
                            <?php
                            $i = 0;
                            foreach($events as $event){
                                if(is_dir($event)) { continue; }
                                    $eventObject = $database->decodeFile('event', $event);
                                        if(in_array('high-tech', $eventObject->getCategorie()) == 'high-tech'){
                                        if($i == 0){
                                        echo '<div class="carousel-item active">';
                                            } else{
                                                echo '<div class="carousel-item">';
                                            }
                                        include '../Partial/displayEventIndex.php';
                                        echo '</div>';
                                        $i++;
                                    }
                                }?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselTech" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left fa-lg text-muted"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next text-faded" href="#carouselTech" role="button" data-slide="next">
                            <i class="fa fa-chevron-right fa-lg text-muted"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>
            <section class='container-fluid row marginSection'>
                <h2 class='txt-align-center w-100'>APPRENDRE</h2>
                <div class="container-fluid">
                    <div id="carouselApprendre" class="carousel slide" data-ride="carousel" data-interval="9000">
                        <div class="carousel-inner row w-100 mx-auto" role="listbox">
                            <?php
                            $i = 0;
                            foreach($events as $event){
                                if(is_dir($event)) { continue; }
                                    $eventObject = $database->decodeFile('event', $event);
                                        if(in_array('apprendre', $eventObject->getCategorie()) == 'apprendre'){
                                        if($i == 0){
                                        echo '<div class="carousel-item active">';
                                            } else{
                                                echo '<div class="carousel-item">';
                                            }
                                        include '../Partial/displayEventIndex.php';
                                        echo '</div>';
                                        $i++;
                                    }
                                }?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselApprendre" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left fa-lg text-muted"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next text-faded" href="#carouselApprendre" role="button" data-slide="next">
                            <i class="fa fa-chevron-right fa-lg text-muted"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>
            <section class='container-fluid row marginSection'>
                <h2 class='txt-align-center w-100'>SPORT</h2>
                <div class="container-fluid">
                    <div id="carouselSport" class="carousel slide" data-ride="carousel" data-interval="9000">
                        <div class="carousel-inner row w-100 mx-auto" role="listbox">
                            <?php
                            $i = 0;
                            foreach($events as $event){
                                if(is_dir($event)) { continue; }
                                    $eventObject = $database->decodeFile('event', $event);
                                        if(in_array('sport', $eventObject->getCategorie()) == 'sport'){
                                        if($i == 0){
                                        echo '<div class="carousel-item active">';
                                            } else{
                                                echo '<div class="carousel-item">';
                                            }
                                        include '../Partial/displayEventIndex.php';
                                        echo '</div>';
                                        $i++;
                                    }
                                }?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselSport" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left fa-lg text-muted"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next text-faded" href="#carouselSport" role="button" data-slide="next">
                            <i class="fa fa-chevron-right fa-lg text-muted"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>
            <section class='container-fluid row marginSection'>
                <h2 class='txt-align-center w-100'>PARTAGE</h2>
                <div class="container-fluid">
                    <div id="carouselPartage" class="carousel slide" data-ride="carousel" data-interval="9000">
                        <div class="carousel-inner row w-100 mx-auto" role="listbox">
                            <?php
                            $i = 0;
                            foreach($events as $event){
                                if(is_dir($event)) { continue; }
                                    $eventObject = $database->decodeFile('event', $event);
                                        if(in_array('aider', $eventObject->getCategorie()) == 'aider'){
                                        if($i == 0){
                                        echo '<div class="carousel-item active">';
                                            } else{
                                                echo '<div class="carousel-item">';
                                            }
                                        include '../Partial/displayEventIndex.php';
                                        echo '</div>';
                                        $i++;
                                    }
                                }?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselPartage" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left fa-lg text-muted"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next text-faded" href="#carouselPartage" role="button" data-slide="next">
                            <i class="fa fa-chevron-right fa-lg text-muted"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>
            <section class='container-fluid row marginSection'>
                <h2 class='txt-align-center w-100'>TRAVAIL</h2>
                <div class="container-fluid">
                    <div id="carouselTravail" class="carousel slide" data-ride="carousel" data-interval="9000">
                        <div class="carousel-inner row w-100 mx-auto" role="listbox">
                            <?php
                            $i = 0;
                            foreach($events as $event){
                                if(is_dir($event)) { continue; }
                                    $eventObject = $database->decodeFile('event', $event);
                                        if(in_array('travailler', $eventObject->getCategorie()) == 'travailler'){
                                        if($i == 0){
                                        echo '<div class="carousel-item active">';
                                            } else{
                                                echo '<div class="carousel-item">';
                                            }
                                        include '../Partial/displayEventIndex.php';
                                        echo '</div>';
                                        $i++;
                                    }
                                }?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselTravail" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left fa-lg text-muted"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next text-faded" href="#carouselTravail" role="button" data-slide="next">
                            <i class="fa fa-chevron-right fa-lg text-muted"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>
        </main>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src='../jquery/carouselEvent.js'></script>
    </body>
</html>
