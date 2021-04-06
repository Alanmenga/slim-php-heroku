<?php
/******************************************************************************

Mengassini Alan
Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.

*******************************************************************************/

$cadena="HOLA";

invertir($cadena);

function invertir($cad)
{
    $cadenaInvertida=strrev($cad);
    echo $cadenaInvertida;
}

?>