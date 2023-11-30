<?php 
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 8: Genera un mensaje de modo que si el día seleccionado o introducido es menor o igual que 15 muestre “primera quincena” mostrando “segunda quincena” en otro caso. */

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
$dia = $_GET["dia"];

if($dia<=15){
    echo ("Primera quincena, día: ".$dia); // Con esta línea de código hago un if para hacer un print cuando el día es menor o igual a 15.
} else if($dia<=31) {
    echo ("Segunda quincena, día: ".$dia); // Con esta línea de código hago un if para hacer un print cuando es un caso distinto al de arriba.
}else{
    echo ("Te has pasado de día");
}
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="ejercicio2.php" method="get">
        <label for="dia">Introduce el dia:</label><br><br>
        <input type="text" name="dia"><br><br>
        <input type="submit" value="Enviar"><br><br>
    </form>
</body>
</html>