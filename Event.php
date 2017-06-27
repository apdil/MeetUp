<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Event
 *
 * @author apdil
 */

class Event {
    
    public $nom;
    public $lieu;
    public $duree;
    public $categorie;
    public $date;
    public $description;
    public $ressources;
    public $capacite;
    public $creator;
    
    function __construct($nom, $lieu, $duree, $categorie, $date, $description, $ressources, $capacite, $creator) {
        $this->nom = $nom;
        $this->lieu = $lieu;
        $this->duree = $duree;
        $this->categorie = $categorie;
        $this->date = $date;
        $this->description = $description;
        $this->ressources = $ressources;
        $this->capacite = $capacite;
        $this->creator = $creator;
    }

}
