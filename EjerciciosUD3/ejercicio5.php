<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 5. Diseña un programa que determine la cantidad total a pagar por una llamada telefónica de acuerdo a las siguientes premisas:
Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos. Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos. */
$segundos=ReadLine("Dime lo que dura la llamada: ");
$precio=10;
$minutos=0;
while($segundos>59){
    $segundos-=60; // Con este while hago que cada vez que los segundos sean mayor a 60 se sume 1 minuto.
    $minutos++;
}
for($x=3;$x<$minutos;$x++){
    $precio+=5; // Con este for hago que cada vez que minutos sea mayor que 3 se sumen 5 céntimos.
}
echo("Tu tiempo de llamada ha sido: ".$minutos."m ".$segundos."s y ha costado: ".$precio." céntimos");
// Con esta línea de código hago un print de la duración de la llamada y su coste.
?>  