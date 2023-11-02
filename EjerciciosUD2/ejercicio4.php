<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 4. Dados dos números enteros realizar operaciones de suma, resta, división y multiplicación y mostrar los resultados por pantalla concatenando la operación y
el resultado. */
$numero1=ReadLine("Hola, dime un número: "); // Con esta línea de código recojo el número que se escribe por teclado.
$numero2=ReadLine("Dime otro número: ");  // Con esta línea de código recojo el otro número que se escribe por teclado.
$suma=$numero1 + $numero2;  // Con esta línea de código hago la suma entre los números.
$resta=$numero1 - $numero2; // Con esta línea de código hago la resta entre los números.
$division=$numero1 / $numero2; // Con esta línea de código hago la división entre los números.
$multiplicacion=$numero1 * $numero2; // Con esta línea de código hago la multiplicación entre los números.
echo ($numero1." + ".$numero2." = ".$suma."\n"); // Con esta línea de código hago un print de la suma entre los números y su resultado.
echo ($numero1." - ".$numero2." = ".$resta."\n"); // Con esta línea de código hago un print de la resta entre los números y su resultado.
echo ($numero1." / ".$numero2." = ".$division."\n"); // Con esta línea de código hago un print de la división entre los números y su resultado.
echo ($numero1." * ".$numero2." = ".$multiplicacion); // Con esta línea de código hago un print de la multiplicación entre los números y su resultado.
?>