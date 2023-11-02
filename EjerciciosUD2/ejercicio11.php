<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 11. Crea un conversor de monedas de euros a pesetas usando variables para almacenar el resultado.
$euro=ReadLine("Cantidad de euros (Acuérdate de si es decimal poner un '.'): "); // Con esta línea de código guardo en una variable la cantidad de euros que se ponga por teclado.
$pesetas=$euro*166.386; // Con esta línea de código guardo en una variable el conversor de euro a pesetas.
$pesetasR=round($pesetas); // Con esta línea de código guardo en una variable las pesetas redondeadas.
echo ($euro."€ en pesetas son: ".$pesetas." que redondeado son: ".$pesetasR); // Con esta línea de código hago un print de los euros y su respectiva cantidad en pesetas.
?>