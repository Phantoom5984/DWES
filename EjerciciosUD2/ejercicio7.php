<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 7. Ordena 3 números de modo que se impriman de mayor a menor. Si son iguales debe mostrar una advertencia indicando que son iguales.
$numero1=ReadLine("Dime un número : "); // Con esta línea de código recojo el número que se escribe por teclado.
$numero2=ReadLine("Dime otro número : "); // Con esta línea de código recojo el número que se escribe por teclado.
$numero3=ReadLine("Dime un último número : "); // Con esta línea de código recojo el número que se escribe por teclado.
if($numero1>$numero2 && $numero1>$numero3){
    if($numero2>$numero3){
        echo ("Los números ordenados son: ".$numero1." ".$numero2." ".$numero3);
    } else if ($numero2<$numero3){
        echo ("Los números ordenados son: ".$numero1." ".$numero3." ".$numero2);
    } else {
        echo ("Los números ".$numero2." y ".$numero3." son iguales \n");
        echo ("Los números ordenados son: ".$numero1." ".$numero2." ".$numero3);
    }
} else if($numero2>$numero1 && $numero2>$numero3){
    if($numero1>$numero3){
        echo ("Los números ordenados son: ".$numero2." ".$numero1." ".$numero3);
    } else if ($numero1<$numero3){
        echo ("Los números ordenados son: ".$numero2." ".$numero3." ".$numero1);
    } else {
        echo ("Los números ".$numero1." y ".$numero3." son iguales \n");
        echo ("Los números ordenados son: ".$numero2." ".$numero1." ".$numero3);
    }
} else if($numero3>$numero2 && $numero3>$numero1){
    if($numero2>$numero1){
        echo ("Los números ordenados son: ".$numero3." ".$numero2." ".$numero1);
    } else if ($numero2<$numero1){
        echo ("Los números ordenados son: ".$numero3." ".$numero1." ".$numero2);
    } else {
        echo ("Los números ".$numero1." y ".$numero2." son iguales \n");
        echo ("Los números ordenados son: ".$numero3." ".$numero1." ".$numero2);
    }
} else {
    echo ("Todos los números son iguales, son: ".$numero1." ".$numero2." ".$numero3);
} // Con estas líneas de código hago unos if para ordenar dependiendo de cual es más grande los números.
?>