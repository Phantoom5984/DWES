<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 14. Escribe una función que calcule todas las potencias de un número hasta llegar al exponente indicado,
las almacene en un vector y muestre el resultado de cada potencia indicando además la suma de todas las potencias incluyendo la del exponente indicado. */
$numero=ReadLine("Dime un número: ");
$expo=ReadLine("Dime el exponente: ");
$vec=[];
for ($i=1;$i<=$expo;$i++) { 
    $resul=pow($numero,$i);
    array_push($vec,$resul);
    echo ("El número: ".$numero." elevado a ".$i." da: ".$resul."\n");
}
// Con estas líneas de código recojo dos números y hago un for para hacer las potencias del número recogido elevado al exponente recogido y todos sus anteriores.
// Además meto el resultado de las potencias en un array para luego sumarlo todo.
echo ("La suma de todas las potencias es: ".array_sum($vec));
?>