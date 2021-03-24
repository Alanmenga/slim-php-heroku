<?php
/******************************************************************************

Mengassini Alan
Aplicación No 11 (Potencias de números)
Mostrar por pantalla las primeras 4 potencias de los números del uno 1 al 4 (hacer una función
que las calcule invocando la función pow).


*******************************************************************************/
define('TAM',4);
function potencia ($v1, $v2) 
   $resultado= pow($v1, $v2);
   return $resultado;
}

echo "<table border=1>";
for ($n1=1; $n1<=TAM; $n1++) 
{
   echo "<tr>";
   for ($n2=1; $n2<=TAM; $n2++)
      echo "<td>". potencia($n1,$n2). "</td>"; 
   echo "</tr>";
}
echo "</table>";

?>