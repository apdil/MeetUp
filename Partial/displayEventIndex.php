
    <div class="card cardLeft">
        <img class="card-img-top cardSize" src="../img/image.png" alt="Card image cap">
        <div class="card-block margin0">
            <h4 class="d-flex justify-content-start"><?php echo $eventObject->getNom() ?></h4>
            <p class=""><?php echo $eventObject->getDescription() ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <?php include '../Partial/buttonParticip.php'; ?>
    </div>  
    
    <!--<div class="card card-inverse cardSize">
        <div class="card-block padding0">
            <h3 class="card-title"><?php echo $eventObject->getNom() ?></h3>
            <p class="card-text"><?php echo $eventObject->getDescription() ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>-->