<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 5. Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0).
echo ("Vamos a resolver una ecuación básica (ax + b = 0), dime los siguientes valores porfavor.\n");  // Con esta línea de código hago un print para pedir los valores.
$a=ReadLine("El valor de a: ");  // Con esta línea de código pido el valor de "a".
$b=ReadLine("El valor de b: ");  // Con esta línea de código pido el valor de "b".
$resultado=-$b/$a; // Con esta línea de código saco el resultado de la ecuación.
if($b>=0){
echo ("El resultado de la ecuación: ".$a."x + ".$b." = 0 es: ".$resultado);
} else {
    echo ("El resultado de la ecuación: ".$a."x ".$b." = 0 es: ".$resultado);
}// Con estas líneas de código hago un if de la ecuación y del resultado dependiendo de si b es positivo o negativo.
?>