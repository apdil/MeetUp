<article class='col-md-8'> 
    <div class="card card-inverse cardSize">
        <div class="card-block">
            <h3 class="card-title"><?php echo $eventObject->getNom() ?></h3>
            <p class="card-text"><?php echo $eventObject->getDescription() ?></p>
            <p><?php echo $eventObject->getCreator() ?></p>
            <p>Lieux de l'événement : <?php echo $eventObject->getLieu() ?> pour 
            <?php echo $eventObject->getDuree() ?> le <?php echo $eventObject->getDate() ?>
            </p> 
            <p>Type : <?php foreach($eventObject->getCategorie() as $type){ echo $type.', ';} ?></p>
            <p>descript : <?php echo $eventObject->getDescription() ?> les besoins :
            <?php echo $eventObject->getRessources() ?>
            </p>
            <p class='capacite'>capacite : <?php echo $eventObject->getCapacite() ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</article>