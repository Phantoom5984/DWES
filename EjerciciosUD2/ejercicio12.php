<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 12. Crea un conversor de monedas de pesetas a euros usando variables para almacenar el resultado
$pesetas=ReadLine("Cantidad de pesetas (Acuérdate de que las pesetas son números enteros): "); /* Con esta línea de código guardo en una variable la cantidad de pesetas
que se ponga por teclado. */
$euro=$pesetas*0.0060; // Con esta línea de código guardo en una variable el conversor de pesetas a euros.
$euroR=round($euro,2); // Con esta línea de código guardo en una variable los euros redondeados.
echo ($pesetas." en euros son: ".$euro."€ que redondeado es: ".$euroR."€"); // Con esta línea de código hago un print de las pesetas y su respectiva cantidad en euros.
?>  