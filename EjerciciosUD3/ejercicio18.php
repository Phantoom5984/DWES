<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 18. Escribe un programa que diga cuál es la cifra que está en el centro (o las dos del centro si elnúmero de cifras es par)
de un número entero introducido por teclado */
$num=ReadLine("Dime un número: ");
$numerito=str_split($num);
$long=count($numerito);
// Con estas líneas de código recojo un número y lo meto en un array dividiendolo por cifras con el "str_split".
if(is_numeric($num)){
if($long%2==0){
    $centro=$numerito[($long/2)-1];
    $centrito=$numerito[$long/2];
    echo ("Los centros son: ".$centro." y ".$centrito."\n");
    // Con estas líneas de código hago un if para saber si el número de cifras es par y por lo tanto tener que sacar 2 centros.
}else{
    $centro=$numerito[$long/2];
    echo ("El centro es ".$centro."\n");
    // Con estas líneas de código hago un if para cuando el número de cifras sea impar y por lo tanto sacar un solo centro.
}
}else{
    echo ("Pon un número");
}
?>