<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 4. Elabora un programa para determinar si una hora leída en la forma horas, minutos y segundos está correctamente expresada.
$horas=ReadLine("Dime las horas: ");
$minutos=ReadLine("Dime los minutos: ");
$segundos=ReadLine("Dime los segundos: "); // Con estas líneas de código recojo las horas, los minutos y los segundos.
while($segundos>59){
    $segundos-=60;
    $minutos++;
}while($minutos>59){
    $minutos-=60;
    $horas++;
    // Con estas líneas de código hago unos whiles para calcular los segundos, los minutos y las horas.
}if($horas>23){
    echo ("Te has pasado de horas");
}
else{
    echo ($horas."h ".$minutos."m ".$segundos."s");
}
?>
