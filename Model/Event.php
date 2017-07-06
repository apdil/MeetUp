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
    
    private $nom;
    private $lieu;
    private $duree;
    private $categorie;
    private $date;
    private $description;
    private $ressources;
    private $capacite;
    private $creator;
    
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
    
    function getNom() {
        return $this->nom;
    }

    function getLieu() {
        return $this->lieu;
    }

    function getDuree() {
        return $this->duree;
    }

    function getCategorie() {
        return $this->categorie;
    }

    function getDate() {
        return $this->date;
    }

    function getDescription() {
        return $this->description;
    }

    function getRessources() {
        return $this->ressources;
    }

    function getCapacite() {
        return $this->capacite;
    }

    function getCreator() {
        return $this->creator;
    }
    
    function capaciteLess(){
        $this->capacite -= 1;
    }
    
    function capaciteMore(){
        $this->capacite += 1;
    }

}
