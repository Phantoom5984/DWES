<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 4. Escribe un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas ordinarias (40 primeras horas de trabajo)
se pagan a 12 euros la hora. A partir de la hora 41, se pagan a 16 euros la hora. */
$horas=ReadLine("Dime las horas que ha trabajado en la semana: "); // Con esta línea de código recojo las horas que se escriban por teclado.
$salSem=40*12; // Con esta línea de código saco las horas ordinarias en euros.
$salEx=($horas-40)*16; // Con esta línea de código saco las horas extraordinarias en euros.
$salTot=$salSem+$salEx; // Con esta línea de código sumo los euros de todas las horas.
if($horas<=40){
    echo ("Tu salario semanal es de: ".$salSem."€");
}else{
    echo ("Tu salario semanal es de: ".$salTot."€");
} // Con estas líneas de código hago un if para dependiendo de cada caso haga un print de cada cosa.
?>