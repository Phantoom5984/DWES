<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 4. Elabora un programa para determinar si una hora leída en la forma horas, minutos y segundos está correctamente expresada.
$horas=ReadLine("Dime las horas: ");
$minutos=ReadLine("Dime los minutos: ");
$segundos=ReadLine("Dime los segundos: "); // Con estas líneas de código recojo las horas, los minutos y los segundos.
if($horas>0 && $horas<23 && $minutos>0 && $minutos<60 && $segundos>0 && $segundos<60){
    echo ("Has puesto la hora bien");
}
else{
    echo ("La has puesto mal");
}
?>
