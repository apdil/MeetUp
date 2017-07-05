<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Put
 *
 * @author apdil
 */
include_once './DataBase.php';
class Put {
    
    function profilMyEvent($profil){
        
        foreach($profil->myEvent as $eventName){
            $database = new DataBase();
            $eventObject = $database->decodeFile('event', $eventName.'.sz');
            $_SESSION['event'] = $eventObject;
            include './putEventProfil.php';
            include './removeButt.php';
        }
    }
    
    function indexAllEvent(){
        $events = scandir('event');
        $database = new DataBase();
        foreach($events as $event){
            $eventObject = $database->decodeFile('event', $event);
            $_SESSION['event'] = $eventObject;
            include './putEventProfil.php';
        }
    }
}
