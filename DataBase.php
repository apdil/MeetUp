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
                
        if(!file_exists('user/' . $perso->login . '.sz')){
            $file = fopen('user/' . $perso->login . '.sz', 'w+');
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
    
    function recoverEvent($sessionName){
    
        $events = scandir('event');
        
        foreach ($events as $event){ // boucle sur les fichiers
            if(is_dir($event)){ continue; }
                    
            $_SESSION['file'] = $event;
            
            $contentEvent = file_get_contents('event/' . $event); // recupere le contenu des fichiers
            $decode = unserialize($contentEvent);// decode le contenu = objets
            
            $_SESSION['recoverEvent'] = $decode;
            
            if(!empty($sessionName)){ // si connecter
                if($decode->creator == $sessionName->login){
                    include './designEvent.php';
                    include './removButton.php';
                }
            } else { // pas connecter ou connecter
                include './designEvent.php';
                include './buttonParticipat.php';
            }
        }
        $_SESSION['recoverEvent'] = '';
    }
    
    function modifiFile($directory, $file, $modifProp, $modif, $operation){
        
        $contentdecode = unserialize(file_get_contents($directory . '/' . $file)); //decripte
        
        
        if($operation == 1){
            $contentdecode->$modifProp += $modif;
        } else if($operation == 2){
            $contentdecode->$modifProp = $modif; // pour tableau
        }

        $contentdecode = serialize($contentdecode); // reencripte
        
            $saveFile = fopen( $directory . '/' . $file, 'w');
            fwrite($saveFile, $contentdecode); // reecrie
            fclose($saveFile);
    }
    
    function decodeFile($directory, $file){
        $contentdecode = unserialize(file_get_contents($directory . '/' . $file)); //decripte
        return $contentdecode;
    }
    
}
