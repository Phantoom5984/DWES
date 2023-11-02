<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 5. Dado un número decimal, calcula el resultado de aplicar el redondeo a dicho número y muestra el resultado.
$numero1=ReadLine("Hola, dime un número con decimales (recuerda que al escribirlo tienes que ponerlo con un '.'): "); /* Con esta línea de código recojo el número
que se escribe por teclado.*/
$resultado=round($numero1); // Con esta línea de código guardo el número redondeado usando el "round".
echo ("El número ".$numero1." redondeado es: ".$resultado); // Con esta línea de código hago un print del número con decimales y el número redondeado.
?>