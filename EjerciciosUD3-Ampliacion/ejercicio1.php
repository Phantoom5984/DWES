<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 1. Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día de la semana.
$numero=ReadLine("Dime un número del 1 al 7: "); //Pido un número.
while($numero<1 || $numero>7){ //Si el número no es del 1 al 7 da error.
    echo ("El número es entre 1 y 7\n");
    $numero=ReadLine("Dime un número del 1 al 7: ");
}
$array=["Lunes","Martes","Miercoles","Jueves","Viernes","Sábado","Domingo"]; //Relleno un array con todos los días que hay en una semana.
echo ($array[$numero-1]); //Hago un print del número restando una posición ya que el array empieza en 0.
?>