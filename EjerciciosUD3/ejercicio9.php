<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 9. Genera un número entre 1 y 15 y calcula su factorial. Nota: El factorial de un número es la multiplicación de él mismo con sus anteriores. Ejemplo 3!=3*2*1=6.
$numero=rand(1,15);
$numero2=1;
for($i=1;$i<=$numero;$i++){
    $numero2*=$i;
}
// Con estas líneas de código hago con el "rand" un número aleatorio y luego hago un for para recorrer y multiplicar los números anteriores al indicado.
echo ("El número: ".$numero." y su factorial: ".$numero2."\n");
?>