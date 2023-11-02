<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 9. Realiza un programa que diga si un número entero positivo introducido por teclado es capicúa. Se permiten números de hasta 5 cifras.
$numero=ReadLine("Dime un número, máximo de 5 cifras: "); // Con esta línea de código recojo el número que se escribe por teclado.
if($numero<10){
    echo ("El número: ".$numero." es capicúa");
}else if($numero<100){
    if(floor($numero/10)==$numero%10){
        echo ("El número: ".$numero." es capicúa");
    }else{
        echo ("El número: ".$numero." no es capicúa");
    }
}else if($numero<1000){
    if(floor($numero/100)==$numero%10){
        echo ("El número: ".$numero." es capicúa");
    }else{
        echo ("El número: ".$numero." no es capicúa");
    }
}else if($numero<10000){
    if(floor($numero/1000)==$numero%10 && floor(($numero%1000)/100)==floor(($numero%100)/10)){
        echo ("El número: ".$numero." es capicúa");
    }else{
        echo ("El número: ".$numero." no es capicúa");
    }
}else if($numero<100000){
    if(floor($numero/10000)==$numero%10 && floor(($numero%10000)/1000)==floor(($numero%100)/10)){
        echo ("El número: ".$numero." es capicúa");
    }else{
        echo ("El número: ".$numero." no es capicúa");
    }
}else{
    echo ("El número tiene más de 5 cifras");
}
// Con estas líneas de código hago un if para dependiendo de cada caso haga un print de cada cosa usando como en el ejercicio anterior el "floor".
?>