
    <div class="card" style="width: 20rem;">
        <img class="card-img-top cardSize" src="../img/image.png" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title"><?php echo $eventObject->getNom() ?></h4>
            <p class="card-text"><?php echo $eventObject->getDescription() ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <?php include '../Partial/buttonParticip.php'; ?>
    </div>  