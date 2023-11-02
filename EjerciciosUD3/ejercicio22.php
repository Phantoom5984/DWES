<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 22. Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y cuántos son negativos
(muestra los números, la cantidad de positivos y negativos y el porcentaje de cada grupo). */
$vec=[];
$pos=0;
$neg=0;
for ($i=0;$i<10;$i++) { 
    $numero=ReadLine("Dime un número ");
    array_push($vec,$numero);
    // Con estas líneas de código hago un for para rellenar el vector con los números pedidos.
    if($numero>=0){
        $pos++;
    }else{
        $neg++;
    }
    // Con estos ifs hago que si el número es positivo se sume al contador de positivos y si es negativo al contador de negativos.
}
$por=($pos/10)*100;
$por2=($neg/10)*100;
// Con estas líneas de código calculo el % de números positivos y negativos con los contadores de antes.
print_r($vec);
echo ("\nLa cantidad de números positivos son: ".$pos." y su porcentaje es: ".$por."%\n");
echo ("La cantidad de números negativos son: ".$neg." y su porcentaje es: ".$por2."%");
?>