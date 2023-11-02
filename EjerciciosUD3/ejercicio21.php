<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 21. Escribe un programa que diga cuál es la penúltima cifra de un número entero introducido por teclado.
Se permiten números de hasta 5 cifras. Puedes usar la función creada para el ejercicio 19. */
$numero=ReadLine("Dime un número: ");
$vec=str_split($numero);
$long=count($vec)-1;
if($numero>9){
    echo ($vec[$long-1]);
        // Con estas líneas de código recojo un número y lo meto en un array dividiendolo por cifras con el "str_split".
        // Con este if hago que si el número tiene 2 o más cifras coja la posición última -1, es decir, la penúltima.
}else{
    echo ($numero);
    // Con este if hago que si el número tiene 1 sola cifra se haga un print de ese número.
}
?>