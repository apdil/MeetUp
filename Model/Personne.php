<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personne
 *
 * @author apdil
 */
include_once '../Model/Event.php';
class Personne {
    
    private $nom;
    private $prenom;
    private $login;
    private $mdp;
    private $dateNaissance;
    private $region;
    private $email;
    private $situation;
    private $interet; // sous forme de tableau
    private $genre;
    public $participation = [];
    public $myEvent = [];
            
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
    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getLogin() {
        return $this->login;
    }

    function getMdp() {
        return $this->mdp;
    }

    function getDateNaissance() {
        return $this->dateNaissance;
    }

    function getRegion() {
        return $this->region;
    }

    function getEmail() {
        return $this->email;
    }

    function getSituation() {
        return $this->situation;
    }

    function getInteret() {
        return $this->interet;
    }

    function getGenre() {
        return $this->genre;
    }
}
