<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 6. Calcula la media de varios números (mínimo 5) y redondea el resultado. Muestra los números introducidos y el resultado.
$numero1=ReadLine("Dime un número: "); // Con esta línea de código recojo el número que se escribe por teclado.
$numero2=ReadLine("Dime un número: "); // Con esta línea de código recojo el número que se escribe por teclado.
$numero3=ReadLine("Dime un número: "); // Con esta línea de código recojo el número que se escribe por teclado.
$numero4=ReadLine("Dime un número: "); // Con esta línea de código recojo el número que se escribe por teclado.
$numero5=ReadLine("Dime un número: "); // Con esta línea de código recojo el número que se escribe por teclado.
$suma2=$numero1+$numero2+$numero3+$numero4+$numero5; // Con esta línea de código sumo todos los números recogidos.
$media2=$suma2/5; // Con esta línea de código hago la media de los números introducidos.
$mediaRed2=round($media2); // Con esta línea de código guardo el número redondeado usando el "round".
echo ("Los números introducidos son: ".$numero1.",".$numero2.",".$numero3.",".$numero4.",".$numero5."\n"); // Con esta línea de código hago un print de los números recogidos.
echo ("La media es ".$media2." y el redondeado es: ".$mediaRed2); // Con esta línea de código hago un print de la media con decimales y el número redondeado.
?>