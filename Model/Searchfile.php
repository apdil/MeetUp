<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Searchfile
 *
 * @author apdil
 */

include_once './Personne.php';
include_once './DataBase.php';

class Searchfile {
    
    function IdentifyUser($postLogin, $postMdp){
        $users = scandir('user');
        
        foreach ($users as $user){ // boucle sur les fichiers
            if(is_dir($user)){ continue; }
            
            $database = new DataBase();
            $decode = $database->decodeFile('user', $user);
            
            if($decode->getLogin() == $postLogin){
                if($decode->getMdp() == $postMdp){
                    return $decode;
                }
            }
        }
    }
}
