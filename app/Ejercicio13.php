<?php
/******************************************************************************

Mengassini Alan
Aplicación No 13 (Invertir palabra)
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán:
1 si la palabra pertenece a algún elemento del listado.
0 en caso contrario.

*******************************************************************************/

$cadena="Programacion"; $numero=5;

echo contador($cadena,$numero);

function contador($palabra,$max)
{
    $cantidad=strlen($palabra);
    if($cantidad>$max)
    {
        echo "La cantidad de caracteres supera el maximo. \n";
    }
    elseif ($cantidad<=$max) 
    {
        echo "La cantidad de caracteres no supera el maximo. \n";
    }
    
    
    $palabrasValidas=array("Recuperatorio","Parcial","Programacion");
    $retorno=0;
    foreach ($palabrasValidas as $valor) 
    {
        if($valor == $palabra)
        {
            $retorno = 1;
        }
    }
    return $retorno;
}

?>