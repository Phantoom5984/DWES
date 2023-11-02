<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 2. Modifica el ejercicio anterior para que muestre el mismo mensaje usando un operador de concatenación.
$nombre = ReadLine("Hola dime tu nombre : "); // Con esta línea de código recojo el nombre que se escribe por teclado.
$resultado = "Hola ".$nombre.", encantado de conocerte"; // Con esta línea de código concateno las dos variables.
echo ($resultado); // Con esta línea de código hago un print de la variable en la que he concatenado.
?>