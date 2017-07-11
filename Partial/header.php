<?php 
include_once '../Model/Personne.php';
 ?>
<header class='navbar navbar-inverse margin0'>
    <nav class="navbar navbar-toggleable-md navbar navbar-inverse bg-primary bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">JUMP</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">CARTE <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">BUZZ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Message</a>
          </li>
      <?php if(isset($_SESSION['profil'])){ ?>
          <li class="nav-item"><a class='nav-link' href='profileConnected.php'>Profil</a></li>
          <li class='nav-item'><a class='nav-link' href='../Controller/deconectProcess.php'>Se Deconnecter</a></li>  
        </ul>
      <?php } else {?>
          <li class='nav-item'><a class='nav-link' href='connexion.php'>Se connecter...</a></li>
          <li class='nav-item'><a class='nav-link' href='inscription.php'>S'Inscrire</a></li>
        </ul>
      <?php } ?>
      </div>
  </nav>
</header>
