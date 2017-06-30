<?php

class Personne {
    
    public $nom;
    public $prenom;
    public $login;
    public $mdp;
    public $dateNaissance;
    public $region;
    public $email;
    public $situation;
    public $interet; // sous forme de tableau
    public $genre;
    public $participation = [];
    
    function __construct($nom, $prenom, $login, $mdp, $dateNaissance, $region, $email, $interet, $genre) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->login = $login;
        $this->mdp = $mdp;
        $this->dateNaissance = $dateNaissance;
        $this->region = $region;
        $this->email = $email;
        $this->interet = $interet;
        $this->genre = $genre;
    }
        
    function generateHtml(){
        echo '<br/> nom : ' . $this->nom;
        echo '<br/> prenom : ' . $this->prenom;
        echo '<br/> login : ' . $this->login;
        echo '<br/> mdp : ' . $this->mdp;
        echo '<br/> region : ' . $this->region;
        echo '<br/> date : ' . $this->dateNaissance;
        echo '<br/> email : ' . $this->email;
        echo '<br/> genre : ' . $this->genre;
        echo '<br/> interet : ' . $this->interet;
    }
}
