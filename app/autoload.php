<?php

function autoload($class_Name){

    $arquivos = array(  
                    "controller/",
                    "model/",
                    "view/", 
                    "config/",
                    "../config/", 
                    "../controller/", 
                    "../model/", 
                    "../view/",
                    "../../config/", 
                    "../../controller/", 
                    "../../model/", 
                    "../../../view/",
                    "../../../config/", 
                    "../../../controller/", 
                    "../../../model/", 
                    "../../../view/");
                    
    foreach($arquivos as $dir){

        $file = ("$dir" . "$class_Name" . ".php");

        if(file_exists($file)){
        
            require_once($file);
        
        }else{
                
            //include_once("../controller/valiedLogin.php");

        }
    }

}

spl_autoload_register('autoload');

?>
