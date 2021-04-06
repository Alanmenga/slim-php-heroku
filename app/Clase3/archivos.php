<?php


function EscribirArchivoTxt($file_name, $msg){    
    $pudo = 0;
    if (!file_exists($file_name) || filesize($file_name) == 0){
        $file = fopen($file_name, "w");
        $pudo = fwrite($file, $msg);
        fclose($file);
    }
    else{
        $file = fopen($file_name, "a");        
        $pudo = fwrite($file, "\n".$msg);
        fclose($file);
    }
    return $pudo;
}

function LeerArchivoTxt($file_name)
{
    $array = [];
    if (file_exists($file_name) && filesize($file_name) > 0){
        $file = fopen($file_name, "r");
        $contenido = fread($file, filesize($file_name));
        $array = explode("\n",$contenido);
        fclose($file);
    }    
    return $array;
}


?>