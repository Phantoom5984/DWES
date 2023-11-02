<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 16. Realiza un programa que resuelva una ecuación de primer grado (del tipo 2(ax - b)=0.
echo ("Vamos a resolver una ecuación básica (2(ax - b) = 0), dime los siguientes valores porfavor.\n");  // Con esta línea de código hago un print para pedir los valores.
$a=ReadLine("El valor de a: ");  // Con esta línea de código pido el valor de "a".
$b=ReadLine("El valor de b: ");  // Con esta línea de código pido el valor de "b".
$a*=2;
$b*=2;
$resultado=$b/$a; // Con estas líneas de código saco el resultado de la ecuación.
echo ("El resultado de la ecuación: 2(".$a/(2)."x - ".$b/(2).") = 0 es: ".$resultado);
// Con estas líneas de código hago un if de la ecuación y del resultado dependiendo de si b es positivo o negativo.
?>