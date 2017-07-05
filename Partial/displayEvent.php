<article>
    <div class='fx'>
        <h2><?php echo $eventObject->getNom() ?></h2>
        <p><?php echo $eventObject->getCreator() ?></p>
    </div>
    <p>Lieux de l'événement : <?php echo $eventObject->getLieu() ?> pour 
    <?php echo $eventObject->getDuree() ?> le <?php echo $eventObject->getDate() ?>
    </p> 
    <p>Type : <?php echo $eventObject->getCategorie() ?></p>
    <p>descript : <?php echo $eventObject->getDescription() ?> les besoins :
    <?php echo $eventObject->getRessources() ?>
    </p>
    <p class='capacite'>capacite : <?php echo $eventObject->getCapacite() ?></p>     
</article>