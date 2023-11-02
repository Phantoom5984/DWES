<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 23. Dado un vector asociativo de trabajadores con su salario creado solicitando al usuario el nombre y salario de cada trabajador,
crea usando funciones el salario máximo, el salario mínimo y el salario medio. */
$trabajadores=ReadLine("Dime cuántos trabajadores hay: ");
$vec=[];
for ($i=0;$i<$trabajadores;$i++) { 
    $nom=ReadLine("Dime su nombre: ");
    $sal=ReadLine("Dime su salario: ");
    $vec[$nom]=$sal;
    // Con estas líneas de código hago un for para rellenar el vector con los nombres y salarios pedidos.
}
function salmax($vec){
    $max=max($vec);
    echo ("El salario máximo es: ".$max."\n");
    // Con estas líneas de código hago una función para sacar el valor máximo del array.
}
function salmin($vec){
    $min=min($vec);
    echo ("El salario mínimo es: ".$min."\n");
    // Con estas líneas de código hago una función para sacar el valor mínimo del array.
}
function salmed($vec){
    $long=count($vec);
    $media=array_sum($vec)/$long;
    echo ("El salario medio es: ".$media);
    // Con estas líneas de código hago una función para sacar la media de los valores del array.
}
salmax($vec);
salmin($vec);
salmed($vec);
?>