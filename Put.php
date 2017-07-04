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
            echo $eventName;
            echo '<br/>';
            $eventObject = $database->decodeFile('event', $eventName.'.sz');
            var_dump($eventObject);
            echo '<br/>';
            $_SESSION['event'] = $eventObject;
//            include './putEventProfil.php';
        }
    }
}
