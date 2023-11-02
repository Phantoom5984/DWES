<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 17. Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 3.
$numero=ReadLine("Dime un número: ");
if($numero%2==0 && $numero%3==0){
    echo ("El número: ".$numero." es par y divisible entre 3");
}if($numero%2==0 && $numero%3!=0){
    echo ("El número: ".$numero." es par y no es divisible entre 3");
}if($numero%2!=0 && $numero%3==0){
    echo ("El número: ".$numero." es impar y divisible entre 3");
}else{
    echo ("El número: ".$numero." es impar y no es divisible entre 3");
    // Con estas líneas de código recojo un número y luego con unos ifs digo si es par y/o divisible entre 3.
}
?>