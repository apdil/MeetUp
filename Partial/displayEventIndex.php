
    <div class="card cardLeft">
        <img class="card-img-top cardSize" src="../img/sport-nav.jpg" alt="Card image cap">
        <div class="card-block margin0">
            <h4 class="d-flex justify-content-start"><?php echo $eventObject->getNom() ?></h4>
            <p class=""><?php echo $eventObject->getDescription() ?></p>
            <div class='container-fluid d-flex'>
                <form class='col-md-2' action='../Controller/participeEventProcess.php' method='POST'>
                    <input type='hidden' value=<?php echo $eventObject->getNom(); ?> name='eventName'>
                    <input class='btn btn-primary' type='submit' value="J'y vais">
                </form>
                <p class='col-md-2 offset-md-6'><?php echo $eventObject->getCapacite(); ?></p>
            </div>
        </div>
    </div>  
