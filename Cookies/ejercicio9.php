<?php
/**
 * @author Sergio Salvago Medina
 */
/* Usa el formulario (Ejercicio 21 UD5) de zona horaria donde se indique la zona horaria y muestre la hora y la zona elegidas guardando estos datos en una Cookie.
Se deben mostrar la hora y la zona actual y la hora y la zona anterior (cookie). */
if ($_SERVER["REQUEST_METHOD"] === "GET"){
    if (isset($_GET["enviar"])) {
    $zonaHoraria=$_GET["zonaHoraria"];
        date_default_timezone_set('Europe/'.$zonaHoraria);
        $cookie_name="Ejercicio9";
        $cookie_value= date("H:i:s")." ".$zonaHoraria;
        setcookie($cookie_name, $cookie_value);
        echo date("H:i:s")." ".$zonaHoraria;
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <form method="get">
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
<?php
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
        }
        ?>