<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 11. Diseña un programa para imprimir los números impares menores que N.
$N=ReadLine("Dime un número: ");
for($i=$N;$i>0;$i--){
    if($i%2!=0){
    echo ($i." ");
    }
    // Con estas líneas de código hago recojo un número para luego hacer un for recorriendo los números más pequeños a este.
    // Y dentro de ese for un if para saber si son impares, incluido el número indicado.
}
?>