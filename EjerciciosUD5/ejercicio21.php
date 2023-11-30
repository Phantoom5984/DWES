<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 21. Realiza un programa donde el usuario seleccione una zona horaria de un máximo de 20 y le muestre la hora actual de dicha zona horaria.
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    if (isset($_GET["enviar"])) {
    $zonaHoraria=$_GET["zonaHoraria"];
        date_default_timezone_set('Europe/'.$zonaHoraria);
        echo (date("H:i:s"));
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21</title>
</head>
<body>
    <form action="ejercicio21.php" method="get">
        <label for="zonaHoraria">Selecciona el lugar para saber su hora</label><br><br>
        <select name="zonaHoraria">
            <option value="Madrid">Madrid</option>
            <option value="Helsinki">Helsinki</option>
            <option value="Amsterdam">Amsterdam</option>
            <option value="Berlin">Berlin</option>
            <option value="Andorra">Andorra</option>
            <option value="Budapest">Budapest</option>
            <option value="Dublin">Dublin</option>
            <option value="Kiev">Kiev</option>
            <option value="London">London</option>
            <option value="Gibraltar">Gibraltar</option>
            <option value="Malta">Malta</option>
            <option value="Prague">Prague</option>
            <option value="Moscow">Moscow</option>
            <option value="Oslo">Oslo</option>
            <option value="Sofia">Sofia</option>
            <option value="Riga">Riga</option>
            <option value="Kirov">Kirov</option>
            <option value="Rome">Rome</option>
            <option value="Minsk">Minsk</option>
            <option value="Saratov">Saratov</option>
        </select><br><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>
    </form>
</body>
</html>
