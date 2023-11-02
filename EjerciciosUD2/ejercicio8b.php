<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 8. Genera un mensaje de modo que si el día actual es menor o igual que 15 muestre “primera quincena” mostrando “segunda quincena” en otro caso.
Haz una modificación para poder leer el día */
$dia=ReadLine("Dime que día es hoy: "); // Con esta línea de código recojo el día que se escribe por teclado.
if($dia<=15){
    echo ("Primera quincena, día: ".$dia); // Con esta línea de código hago un if para hacer un print cuando el día es menor o igual a 15.
} else {
    echo ("Segunda quincena, día: ".$dia); // Con esta línea de código hago un if para hacer un print cuando es un caso distinto al de arriba.
}
?>