<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 11. Crear y rellenar una tabla de tamaño 10x10, mostrar la suma de cada fila y de cada columna.
$mat1=[];
for ($n=0;$n<10;$n++) {
    for ($m=0;$m<10;$m++) { 
        $mat1[$n][$m]=$n+$m; //Relleno la matriz en cada posición sumando las filas y las columnas, es decir, fila 1 y columna 0 el número sería 1+0=1.
    }
}
for ($n=0;$n<10;$n++) {
    $h=0;
    for ($m=0;$m<10;$m++) {
        printf ("%d\t",$mat1[$n][$m]);
        $h+=$mat1[$n][$m]; //Hago una suma acumulativa para sacar el resultado de las filas.
    }
    printf("=".$h."\n");
}
for ($m=0;$m<10;$m++) {
    $h=0;
    for ($n=0;$n<10;$n++) {
        $h+=$mat1[$n][$m]; //Hago una suma acumulativa para sacar el resultado de las columnas.
    }
    printf("=".$h."\t");
} //Aquí hago un print de las matrices.
?>