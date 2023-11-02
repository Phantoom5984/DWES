<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 3. Modifica el ejercicio anterior de modo que el nombre se muestre incluyendo otra línea con “¡Gracias por la visita!”.
$nombre = ReadLine("Hola dime tu nombre : "); // Con esta línea de código recojo el nombre que se escribe por teclado.
$resultado = "Hola ".$nombre.", encantado de conocerte.\n¡Gracias por la visita!"; // Con esta línea de código concateno las dos variables y con el \n hago un salto de línea.
echo ($resultado); // Con esta línea de código hago un print de la variable en la que he concatenado.
?>