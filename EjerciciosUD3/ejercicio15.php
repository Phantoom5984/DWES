<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 15. Crea una función llamada permutaciones que reciba un vector $V y que cambie la posición de los elementos dicho vector haciendo permutaciones.
Las permutaciones se harán entre los elementos $V[$N-1] y $V[0], $V[$N-2] y $V[1] , $V[$N-3] y $V[2] etc. siendo $N el tamaño del vector. */
$long=ReadLine("Dime la longitud del array: ");
$V=[];
for ($i=0;$i<$long;$i++) { 
    $num=ReadLine("Dime los números: ");
    array_push($V,$num);
}
// Con estas líneas de código recojo la longitud del array y luego con un for lo relleno.
permutaciones($V);
function permutaciones($V){
    $N=count($V);
    for ($i=0;$i<$N/2;$i++) { 
            $let=$V[$i];
            $V[$i]=$V[$N-$i-1];
            $V[$N-$i-1]=$let;
    }
    print_r($V);
    // Con estas líneas de código hago un función con un for para cambiar el orden del array usando una variable auxiliar.
}
?>