<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 2. Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. La base
de la pirámide debe estar formada por 9 asteriscos. */
$altura=5; // Con esta línea de código pongo la altura que quiero que tenga la pirámide.
for ($i=1;$i<=$altura;$i++) {
    for ($j=1;$j<=$altura-$i;$j++) {
        echo (" ");
    }
    for ($k=1;$k<=2*$i-1;$k++) {
        echo ("*");
    }
    echo ("\n");
}
// Con estas líneas de código hago unos for para rellenar la pirámide con "*" y con los espacios en blanco.
?>