<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 6. Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 5.
$numero=ReadLine("Dime un número: "); // Con esta línea de código recojo el número que se escribe por teclado.
if($numero%2==0){
    if($numero%5==0){
        echo ("El número ".$numero." es par y divisible entre 5");
    }else{
        echo ("El número ".$numero." es par y no es divisible entre 5");
    }
}else if($numero%5==0){
    echo ("El número ".$numero." es divisible entre 5");
}else{
    echo ("El número ".$numero." no es par y no es divisible entre 5");
}// Con estas líneas de código hago un if para dependiendo de cada caso haga un print de cada cosa.
?>