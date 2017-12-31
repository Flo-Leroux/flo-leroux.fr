<?php
    function getParallaxHTML($path) {
        $tableName = [];
        $nbFichier = 0;
        if($dir = opendir($path)) {
            while(false !== ($fichier = readdir($dir))) {
                if($fichier != '.' && $fichier != '..'){
                    if(is_file($path.$fichier)) {
                        $nbFichier++;
                        array_push($tableName, $fichier);
                    }
                }              
            }
            closedir();
        }
        rsort($tableName, SORT_STRING);
        
        return $tableName;
    }