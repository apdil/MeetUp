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
        
    function creatFile($directory, $nameFile, $contentFile){
        
        if(!is_dir($directory)){
            mkdir($directory);
        }
                
        if(!file_exists($directory . '/' . $nameFile . '.sz')){ // si le fichier n'existe pas
            $file = fopen($directory . '/' . $nameFile . '.sz', 'w');
            fwrite($file, serialize($contentFile));
            fclose($file);
            echo 'un nouveau fichier a été crée';
        } else {
            echo 'fichier existant';
        }
    }
    
    function decodeFile($directory, $file){
        
        $contentdecode = unserialize(file_get_contents($directory . '/' . $file)); //decripte
        return $contentdecode;
    }

    function modifFile($directory, $nameFile, $newContent){        
        
        $newFile = fopen( $directory . '/' . $nameFile . '.sz', 'w');;
        fwrite($newFile, serialize($newContent)); // reecrie
        fclose($newFile);
    }
}
