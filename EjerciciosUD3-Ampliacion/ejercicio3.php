<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 3. Escribe un programa que calcule la media aritmética de 7 notas y la muestre junto con su correspondencia en el boletín que has realizado en el ejercicio anterior.
$notitas=[];
for ($i=0;$i<7;$i++){
    $nota=ReadLine("Dime las notas: "); //Pido las notas.
    if ($nota<0 || $nota>10 || !is_numeric($nota)){
        echo ("Las notas son entre 0 y 10\n"); //Muestro un mensaje de error si la nota está fuera del rango o no es un número.
        $nota=ReadLine("Dime las notas: ");
        array_push($notitas, $nota);
    }else{
        $nota=(int)$nota; //Convierto la nota a un entero.
        array_push($notitas, $nota); //Agrego la nota al array.
    }
}
$media=array_sum($notitas)/7; //Calculo la media de las notas ingresadas.
$notas=["INSUFICIENTE","SUFICIENTE","BIEN","NOTABLE","SOBRESALIENTE"];
if ($media<5) {
    echo ($media." ".$notas[0]); //Si la media es menor que 5, muestra la media seguida de "INSUFICIENTE".
} else if ($media<6) {
    echo ($media." ".$notas[1]); //Si la media es mayor o igual a 5 pero menor que 6, muestra la media seguida de "SUFICIENTE".
} else if ($media<7) {
    echo ($media." ".$notas[2]); //Si la media es mayor o igual a 6 pero menor que 7, muestra la media seguida de "BIEN".
} else if ($media<9) {
    echo ($media." ".$notas[3]); //Si la media es mayor o igual a 7 pero menor que 9, muestra la media seguida de "NOTABLE".
} else if ($media<=10) {
    echo ($media." ".$notas[4]); //Si la media es mayor o igual a 9 y menor o igual a 10, muestra la media seguida de "SOBRESALIENTE".
}
?>