<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 2. Dada la fecha del sistema, indicar las horas, minutos y segundos junto con el día de la semana.
date_default_timezone_set('Europe/Madrid'); // Con esta línea de código hago que la zona horaria predeterminada sea la de madrid.
$fechaHora = date('H:i:s'); // Con esta línea de código recojo las horas, minutos y segundos.
$diaSemana = date('l'); // Con esta línea de código recojo el día de la semana.
echo ("Fecha y hora actual: $fechaHora\n");
echo ("Día de la semana: $diaSemana");
// Con estas líneas de código hago un print de el día y de las horas, minutos y segundos.
?>  