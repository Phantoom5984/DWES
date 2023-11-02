<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 2. Escribe un programa que dada una nota (entera) indique su correspondencia en el boletín (Ejemplo 5 sería SUFICIENTE).
$nota=ReadLine("Dime una nota: "); //Aqui pido una nota.
$notas=["INSUFICIENTE","SUFICIENTE","BIEN","NOTABLE","SOBRESALIENTE"]; //En un array meto las posibles notas.
while(!is_numeric($nota)){ //Comprueba si $nota no es un número
    echo ("Introduce un número entero porfavor\n");
    $nota=ReadLine("Dime una nota: ");
}
$nota=(int)$nota; //Convierte la nota a un entero
if($nota<5){
    echo ($notas[0]); //Si la nota es menor que 5, muestra "INSUFICIENTE"
}else if($nota<6){
    echo ($notas[1]); //Si la nota es mayor o igual a 5 pero menor que 6, muestra "SUFICIENTE"
}else if($nota<7){
    echo ($notas[2]); //Si la nota es mayor o igual a 6 pero menor que 7, muestra "BIEN"
}else if($nota<9){
    echo ($notas[3]); //Si la nota es mayor o igual a 7 pero menor que 9, muestra "NOTABLE"
}else if($nota<=10){
    echo ($notas[4]); //Si la nota es mayor o igual a 9 y menor o igual a 10, muestra "SOBRESALIENTE"
}else{
    echo ("No existe esa nota"); // Si la nota no se encuentra en ninguno de los rangos anteriores, muestra "No existe esa nota".
}
?>