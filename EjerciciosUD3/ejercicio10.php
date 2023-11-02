<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 10. Genera un número entre 1 y 20 y calcula su sumatorio. Nota: El sumatorio de un número es la suma de él mismo con sus anteriores. Ejemplo ∑3=3+2+1=6.
$numero=rand(1,20);
$numero2=0;
for($i=1;$i<=$numero;$i++){
    $numero2+=$i;
}
// Con estas líneas de código hago con el "rand" un número aleatorio y luego hago un for para recorrer y sumar los números anteriores al indicado.
echo ("El número: ".$numero." y su sumatorio: ".$numero2."\n");
?>