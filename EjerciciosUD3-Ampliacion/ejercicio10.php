<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 10. Crear y rellenar por teclado dos matrices de tamaño 3x3, sumarlas y mostrar su suma.
$mat1=[];
$mat2=[];
$mat3=[];
for ($n=0;$n<3;$n++) {
    for ($m=0;$m<3;$m++) { 
        $mat1[$n][$m]=$n+$m; //Relleno la matriz en cada posición sumando las filas y las columnas, es decir, fila 1 y columna 0 el número sería 1+0=1.
        $mat2[$n][$m]=$n+$m; //Relleno la matriz en cada posición sumando las filas y las columnas, es decir, fila 1 y columna 0 el número sería 1+0=1.
        $mat3[$n][$m]=$mat1[$n][$m]+$mat2[$n][$m]; //Relleno la matriz en cada posición sumando los números de ambas matrices en esa posición.
    }
}
for ($n=0;$n<3;$n++) {
    for ($m=0;$m<3;$m++) { 
       printf ("%d\t",$mat1[$n][$m]);
    }
    echo ("\n");
}
echo ("\n");
for ($n=0;$n<3;$n++) {
    for ($m=0;$m<3;$m++) { 
       printf ("%d\t",$mat2[$n][$m]);
    }
    echo ("\n");
}
echo ("\n");
for ($n=0;$n<3;$n++) {
    for ($m=0;$m<3;$m++) { 
       printf ("%d\t",$mat3[$n][$m]);
    }
    echo ("\n");
} //Aquí hago un print de las matrices.
?>