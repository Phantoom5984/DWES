<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 8. Leer por teclado y rellenar dos vectores de 10 números enteros y mezclarlos en un tercer vector de la forma: el 1º de A, el 1º de B, el 2º de A, el 2º de B, etc.
$vec1=[];
$vec2=[];
$vec3=[];
$v1=0;
$v2=0;
for ($i=0;$i<10;$i++) { 
    array_push($vec1,ReadLine("Dime un número: "));
}
for ($i=0;$i<10;$i++) { 
    array_push($vec2,ReadLine("Dime un número: "));
} //Meto en los arrays los números que se pidan.
for ($i=0;$i<20;$i++) {
    if($i%2==0){ //Si la posición es par añado el numero del primer array en esa posición.
    array_push($vec3,$vec1[$v1]);
    $v1++; //Hago un contador para que el siguiente número que se inserte al tercer array sea en el orden en el que está el array.
    }else{ //Si la posición es ikpar añado el numero del segundo array en esa posición.
    array_push($vec3,$vec2[$v2]);
    $v2++;
    }
}
foreach ($vec1 as $i => $value) {
    printf("%d\t",$vec1[$i]);
}
echo ("\n");
foreach ($vec2 as $i => $value) {
    printf("%d\t",$vec2[$i]);
}
echo ("\n");
foreach ($vec3 as $i => $value) {
    printf("%d\t",$vec3[$i]);
} //Aqui hago un print de los 3 arrays.
?>