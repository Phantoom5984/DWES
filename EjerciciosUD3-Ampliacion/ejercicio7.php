<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 7. Define tres arrays de 20 números enteros cada uno, con nombres “numero”, “cuadrado” y “cubo”. Carga el array “numero” con valores aleatorios entre 0 y 100.
En el array “cuadrado” se deben almacenar los cuadrados de los valores que hay en el array “numero”.
En el array ,“cubo” se deben almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de los tres arrays dispuesto en tres columnas. */
$numero=[];
$cuadrado=[];
$cubo=[];
for ($i=0;$i<20;$i++) {
    array_push($numero,rand(0,100)); //Meto en el array "numero" un número random entre 0 y 100.
    array_push($cuadrado,pow($numero[$i],2)); //Meto en el array "cuadrado" el número que este en la posición i del array "numero" al cuadrado.
    array_push($cubo,pow($numero[$i],3)); //Meto en el array "cubo" el número que este en la posición i del array "numero" al cubo.
}
foreach ($numero as $i => $value) {
    printf("%d\t%d\t%d\n",$numero[$i],$cuadrado[$i],$cubo[$i]); //Aqui hago un print de los 3 arrays.
}
?>