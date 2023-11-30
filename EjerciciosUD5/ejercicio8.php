<?php 
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 7 Calcula, dada dos fechas inicio y final introducidas por el usuario (puede ser la actual y otra deseada),
cuántos días, horas y minutos hay de diferencia entre dichas horas. */

 if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $fecha1 = strtotime($_GET["fecha1"]);
    $fecha2 = strtotime($_GET["fecha2"]);

    $resto = $fecha2 - $fecha1;

    $dias = floor($resto / (60 * 60 * 24));
    $horas = floor(($resto % (60 * 60 * 24)) / 3600);
    $minutos = floor(($resto % 3600) / 60);

    echo ("Días: $dias, Horas restantes: $horas, Minutos restantes: $minutos");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <form action="ejercicio8.php" method="get">
        <label for="fecha1">Introduce la fecha inicial</label><br><br>
        <input type="datetime-local" name="fecha1"><br><br>
        <label for="fecha2">Introduce la fecha final</label><br><br>
        <input type="datetime-local" name="fecha2"><br><br>
        <input type="submit" value="Enviar"><br><br>
    </form>
</body>
</html>