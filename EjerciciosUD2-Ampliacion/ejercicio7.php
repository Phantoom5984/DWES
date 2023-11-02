<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 7. Escribe un programa que diga cuál es la última cifra de un número entero introducido por teclado.
$numero=ReadLine("Dime un número: "); // Con esta línea de código recojo el número que se escribe por teclado.
if($numero<10){
    echo ("La última cifra de: ".$numero." es: ".$numero);
}else{
    echo ("La última cifra de: ".$numero." es: ".$numero%10);
} // Con estas líneas de código hago un if para dependiendo de cada caso haga un print de cada cosa.
?>