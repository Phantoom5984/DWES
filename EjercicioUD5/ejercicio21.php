<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 21. Realiza un programa donde el usuario seleccione una zona horaria de un máximo de 20 y le muestre la hora actual de dicha zona horaria.
$array=["Madrid","Helsinki","Amsterdam","Berlin","Andorra","Budapest","Dublin","Kiev","London","Gibraltar","Malta","Prague","Moscow","Oslo","Sofia","Riga","Kirov","Rome","Minsk",
"Saratov"];
print_r($array);
$zona=ReadLine("Dime una zona horaria de las anteriores: ");
date_default_timezone_set('Europe/'.$zona);
echo (date("H:i:s"));
?>