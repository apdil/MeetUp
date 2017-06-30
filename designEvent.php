<?php
    include_once './DataBase.php';
    include_once './Event.php';
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
                <h2><?php echo $_SESSION['recoverEvent']->nom ?></h2>
                <p><?php echo $_SESSION['recoverEvent']->creator ?></p>
            </div>
            <p>Lieux de l'événement : <?php echo $_SESSION['recoverEvent']->lieu ?> pour 
            <?php echo $_SESSION['recoverEvent']->duree ?> le <?php echo $_SESSION['recoverEvent']->date ?>
            </p> 
            <p>Type : <?php echo $_SESSION['recoverEvent']->categorie ?></p>
            <p>descript : <?php echo $_SESSION['recoverEvent']->description ?> les besoins :
            <?php echo $_SESSION['recoverEvent']->ressources ?>
            </p>
            <p class='capacite'>capacite : <?php echo $_SESSION['recoverEvent']->capacite ?></p>     
        </article>
    </body>
</html>
