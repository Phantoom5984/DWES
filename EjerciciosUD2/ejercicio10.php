<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 10. Generar un número aleatorio entre 1 y 5 de modo que muestre el número y su nombre en letras (Ejemplo: 3 – tres).
$numero=rand(1,5); // Con esta línea de código guardo en una variable un número aleatorio entre el 1 y el 5.
if($numero==1){
    echo ($numero." - uno"); // Con esta línea de código hago un if para hacer un print cuando el número aleatorio es 1.
} else if ($numero==2){
    echo ($numero." - dos"); // Con esta línea de código hago un if para hacer un print cuando el número aleatorio es 2.
} else if ($numero==3){
    echo ($numero." - tres"); // Con esta línea de código hago un if para hacer un print cuando el número aleatorio es 3.
} else if ($numero==4){
    echo ($numero." - cuatro"); // Con esta línea de código hago un if para hacer un print cuando el número aleatorio es 4.
} else if ($numero==5){
    echo ($numero." - cinco"); // Con esta línea de código hago un if para hacer un print cuando el número aleatorio es 5.
}
?>