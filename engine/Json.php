<?php
    function verifExistJSON($_fileLocation, $_fileName){
        $tmp = file_exists($_fileLocation.$_fileName.'.json');
        return $tmp;
    }

    function readJSON($_fileLocation, $_fileName){   
        if(verifExistJSON($_fileLocation, $_fileName)){
            $json_source = file_get_contents($_fileLocation.$_fileName.'.json');
            $json_data = json_decode($json_source);
            return $json_data;
        }
    }