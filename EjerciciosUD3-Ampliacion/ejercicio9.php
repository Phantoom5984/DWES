<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 9. Crear una matriz de tamaño 5x5 y rellenarla de la siguiente forma: la posición M[n,m] debe contener n+m. Después se debe mostrar su contenido.
$M=[];
for ($n=0;$n<5;$n++) {
    for ($m=0;$m<5;$m++){
        $M[$n][$m]=$n+$m; //Relleno la matriz en cada posición sumando las filas y las columnas, es decir, fila 1 y columna 0 el número sería 1+0=1.
    }
}
for ($n=0;$n<5;$n++) {
    for ($m=0;$m<5;$m++){ 
        echo ($M[$n][$m]." "); //Aquí hago un print de la matriz.
    }
    echo ("\n");
}
?>