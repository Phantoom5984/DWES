<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 7. Calcula, dada la fecha y hora actual y la fecha y hora deseada, cuántas horas y minutos quedan para dicho momento.
date_default_timezone_set('Europe/Madrid'); // Con esta línea de código hago que la zona horaria predeterminada sea la de madrid.
$fecha=new DateTime();
$fecha2=new DateTime('2023-10-19 24:00:00');
$intervalo = $fecha->diff($fecha2);
// Con el "diff" hago que se calcule diferencia.
$horasRestantes = $intervalo->format('%h');
$minutosRestantes = $intervalo->format('%i');
// Con estas líneas de código obtengo las horas y minutos restantes.
echo ("Horas restantes: ".$horasRestantes." horas y ".$minutosRestantes." minutos.");
// Con estas líneas de código hago un print de las horas y minutos que quedan para dicho dia.
?>