<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 20. Elabora un programa que lea un número entero y escriba el número resultante de invertir el orden de sus cifras Puedes usar la función creada para el ejercicio 19.
$numero=ReadLine("Dime un número: ");
$vec=str_split($numero);
$long=count($vec);
for ($i=$long-1;$i>=0;$i--) { 
    echo ($vec[$i]);
        // Con estas líneas de código recojo un número y lo meto en un array dividiendolo por cifras con el "str_split".
        // Luego hago un for para que lea el array al revés y por lo tanto invierta el número.
}
?>