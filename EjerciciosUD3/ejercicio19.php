<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 19. Realiza un programa que nos diga cuántos dígitos tiene un número dado.
$numero=ReadLine("Dime un número: ");
$vec=str_split($numero);
$long=count($vec);
$cont=0;
for ($i=0;$i<$long;$i++) { 
    $cont++;
    // Con estas líneas de código recojo un número y lo meto en un array dividiendolo por cifras con el "str_split".
    // Y hago un for para saber el número de cifras.
}
echo ("El número: ".$numero." tiene: ".$cont." dígitos");
?>