<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 24. Con los trabajadores del ejercicio anterior, calcular el salario actual y el salario aumentado un porcentaje indicado por la variable.
$trabajadores=ReadLine("Dime cuántos trabajadores hay: ");
$vec=[];
for ($i=0;$i<$trabajadores;$i++) { 
    $nom=ReadLine("Dime su nombre: ");                                  
    $sal=ReadLine("Dime su salario: ");
    $vec[$nom]=$sal;
    // Con estas líneas de código hago un for para rellenar el vector con los nombres y salarios pedidos.
}
function salAct($vec){
    print_r($vec);
    // Con estas líneas de código hago una función para hacer un print de los salarios actuales.
}
function salAum($vec){
    $var=ReadLine("Dime cuánto % quieres aumentar: ");
    foreach ($vec as $k=>$a) {
        $resul=$a+(($var/100)*$a);
        echo ($resul);
         // Con estas líneas de código hago un foreach para recorrer el vector asociativo y sumarle el % pedido.
    }
}
salAct($vec);
salAum($vec);
?>