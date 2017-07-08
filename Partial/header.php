<?php 
include_once '../Model/Personne.php';
 ?>
<header class='navbar navbar-inverse'>
    <nav class='container-fluid'>
        <div class="navbar-header">
            <a class="navbar-brand" href="#">JUMP</a>
        </div>
        <ul class="nav mr-auto">
            <li><a href="#">Home</a></li>
            <li><a href="#">Carte</a></li>
            <li><a href="#">BUZZ</a></li>
            <li><a href="#">Message</a></li>
            <li><a href="#">Profil</a></li>
        </ul>
        <?php if(isset($_SESSION['profil'])){ ?>
        <a href='profileConnected.php'>Mon Profil</a>
        <a href='../Controller/deconectProcess.php'>Se Deconnecter</a>
        <?php } else {?>
        <!--<a class='col-sm-1' href='connexion.php'>Se connecter...</a>
        <a class='col-sm-1' href='inscription.php'>S'Inscrire</a>-->
        <?php } ?>
    </nav>
</header>
