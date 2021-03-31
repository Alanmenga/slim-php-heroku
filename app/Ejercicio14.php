<?php
/******************************************************************************

Mengassini Alan
Aplicación No 14 (Par e impar)
Crear una función llamada esPar que reciba un valor entero como parámetro y devuelva TRUE
si este número es par ó FALSE si es impar.
Reutilizando el código anterior, crear la función esImpar.

*******************************************************************************/

$numero=51;

esPar($numero);

function esPar($num)
{
    if ($num%2==0)
    {
        echo "El numero es par. \n";
        $retorno=TRUE;
    }
    else
    {
        echo "El numero es impar. \n";
        $retorno=FALSE;
    }
    return $retorno;
}

?>