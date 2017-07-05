<?php
    include_once './Event.php';
    include_once './DataBase.php';
    include_once './Put.php';
    include_once './Personne.php';
    include_once './Searchfile.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel='stylesheet' href='styleEvent.css'>
    </head>
    <body>
        <article>
            <div class='fx'>
                <h2><?php echo $_SESSION['event']->getNom() ?></h2>
                <p><?php echo $_SESSION['event']->getCreator() ?></p>
            </div>
            <p>Lieux de l'événement : <?php echo $_SESSION['event']->getLieu() ?> pour 
            <?php echo $_SESSION['event']->getDuree() ?> le <?php echo $_SESSION['event']->getDate() ?>
            </p> 
            <p>Type : <?php echo $_SESSION['event']->getCategorie() ?></p>
            <p>descript : <?php echo $_SESSION['event']->getDescription() ?> les besoins :
            <?php echo $_SESSION['event']->getRessources() ?>
            </p>
            <p class='capacite'>capacite : <?php echo $_SESSION['event']->getCapacite() ?></p>     
        </article>
    </body>
</html>
