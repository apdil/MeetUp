<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataBase
 *
 * @author apdil
 */
include_once './Personne.php';
class DataBase {
        
    function creatFile($perso){
        
        if(!is_dir('user')){
            mkdir('user');
        }

        if(!file_exists('user/' . $perso->login . '.json')){
            $file = fopen('user/' . $perso->login . '.json', 'w+');
            fwrite($file, serialize($perso));
            fclose($file);
            echo 'un nouveau compte a été crée';
        } else {
            echo 'login existant';
        }
    }
    
    function creatEvent($event){
        if(!is_dir('event')){
            mkdir('event');
        }
        
        if(!file_exists('event/' . $event->nom . '.sz')){
            $file = fopen('event/' . $event->nom . '.sz', 'w+');
            fwrite($file, serialize($event));
            fclose($file);
            echo 'un nouvel evenement a été crée';
        } else {
            echo 'evenement existant';
        }
    }
    
        
    function recoverProfil($lastLogin, $lastMdp){
    
        $users = scandir('user');
        
        foreach ($users as $user){ // boucle sur les fichiers
            if(is_dir($user)){ continue; }
        
            $contentUser = file_get_contents('user/' . $user); // recupere le contenu des fichiers
            $decode = unserialize($contentUser);// decode le contenu = objets
            
            if($decode->login == $lastLogin){
                if($decode->mdp == $lastMdp){
                    return $decode;
                }
            }
        }
    }
}
