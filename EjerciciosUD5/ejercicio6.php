<?php 
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 4: Elabora un programa para determinar si una hora leída en la forma horas, minutos y segundos está correctamente expresada.
Utiliza funciones para la comprobación de datos. */
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
$horas=$_GET["horas"];
$minutos=$_GET["minutos"];
$segundos=$_GET["segundos"];
if($horas>=0 && $horas<=23 && $minutos>=0 && $minutos<=60 && $segundos>=0 && $segundos<=60){
    echo ("Has puesto la hora bien");
}
else{
    echo ("La has puesto mal");
}
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <form action="ejercicio6.php" method="get">
        <br>
        <label for="hora">Introduce las horas:</label><br><br>
        <input type="text" name="horas"><br><br>
        <label for="minutos">Introduce los minutos:</label><br><br>
        <input type="text" name="minutos"><br><br>
        <label for="segundos">Introduce los segundos:</label><br><br>
        <input type="text" name="segundos"><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    
</body>
</html>