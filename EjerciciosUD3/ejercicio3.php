<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 3. Crea un programa que reciba una hora expresada en segundos transcurridos desde las 12 de la noche y la convierta en horas, minutos y segundos.
$segundos=ReadLine("Dime los segundos: ");
echo gmdate("H:i:s",$segundos);
// Con estas líneas de código hago un print de el día y de las horas, minutos y segundos.
?>  