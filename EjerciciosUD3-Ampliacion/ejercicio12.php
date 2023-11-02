<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 12. Crear un programa para introducir números por teclado mientras su suma no alcance o iguale a 1000.
Cuando ésto ocurra, debes mostrar los números introducidos, cuántos son, el total de la suma y la media de todos ellos. */
$numero=ReadLine("Dime un número: ");
$numeros=[];
array_push($numeros,$numero);
$suma=$numero;
while($suma<=1000){ //Si la  suma de todos los números del array es mayor que 1000 se termina el programa.
    $numero2=ReadLine("Dime más numeros: ");
        array_push($numeros,$numero2); //Meto en un array los números pedidos.
        print_r($numeros);
        echo ("Hay un total de: ".count($numeros)." de números\n"); //Cuento el total de números.
        $suma=array_sum($numeros); //Hago que "suma" sea la suma de todo el array.
        echo ("La suma de todos es: ".$suma."\n");
        $media=$suma/count($numeros); //Calculo la media del array.
        echo ("La media es de: ".$media."\n");
}
?>