<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 8. Escribe un programa que diga cuál es la primera cifra de un número entero introducido por teclado. Se permiten números de hasta 5 cifras.
$numero=ReadLine("Dime un número que tenga como máximo 5 cifras: "); // Con esta línea de código recojo el número que se escribe por teclado.
if($numero<10){
    echo ("La primera cifra de: ".$numero." es: ".$numero);
}else if($numero<=100){
    echo ("La primera cifra de: ".$numero." es: ".floor($numero/10));
/* El "floor" sirve para redondear un número a la baja, o lo que es lo mismo, para truncar. */
}else if($numero<=1000){
    echo ("La primera cifra de: ".$numero." es: ".floor($numero/100));
}else if($numero<10000){
    echo ("La primera cifra de: ".$numero." es: ".floor($numero/1000));
}else if($numero<100000){
    echo ("La primera cifra de: ".$numero." es: ".floor($numero/10000));
}else{
    echo ("No se permite un número tan grande");
}// Con estas líneas de código hago un if para dependiendo de cada caso haga un print de cada cosa.
?>