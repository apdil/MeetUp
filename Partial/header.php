<?php 
include_once '../Model/Personne.php';
 ?>
<header class='navbar navbar-inverse margin0'>
    <nav class='container-fluid'>
        <div class="navbar-header">
            <a class="navbar-brand" href="#">JUMP</a>
        </div>
        <ul class="nav mr-auto">
            <li><a href="#">Carte</a></li>
            <li><a href="#">BUZZ</a></li>
            <li><a href="#">Message</a></li>
        <?php if(isset($_SESSION['profil'])){ ?>
        <li><a href='profileConnected.php'>Profil</a></li>
        <li><a href='../Controller/deconectProcess.php'>Se Deconnecter</a></li>  
        </ul>
        <?php } else {?>
        <li><a href='connexion.php'>Se connecter...</a></li>
        <li><a href='inscription.php'>S'Inscrire</a></li>
        </ul>
        <?php } ?>
    </nav>
</header>
