<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 3. Igual que el programa anterior, pero esta vez la pirámide estará hueca (se debe ver únicamente
el contorno hecho con asteriscos). */
$altura=5; // Con esta línea de código pongo la altura que quiero que tenga la pirámide.
for ($i=1;$i<=$altura;$i++) {
    for ($j=1;$j<=$altura-$i;$j++) {
        echo (" ");
    }
    for ($k=1;$k<=2*$i-1;$k++) {
        if ($k===1 || $k===2*$i-1 || $i===$altura) {
        echo ("*");
        }else{
            echo (" ");
        }
    }
    echo ("\n");
}
// Con estas líneas de código hago unos for para rellenar la pirámide con "*" y con los espacios en blanco.
?>