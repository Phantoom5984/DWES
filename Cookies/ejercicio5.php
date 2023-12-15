<?php
/**
 * @author Sergio Salvago Medina
 */
/* Usa el formulario (Ejercicio 8 UD5) de la quincena donde se indique el día de la semana y muestre la quincena guardando estos datos en una Cookie.
Se deben mostrar el día y la quincena actual y el día y la quincena anterior (cookie). */
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $fecha1 = $_GET["fecha1"];
    $cookie_value="";
    if($fecha1<15){
        $cookie_value=$fecha1.", 1ª quincena";
    }else if($fecha1>=15 && $fecha1<=31){
        $cookie_value=$fecha1.", 2ª quincena";
    }else{
        echo ("Te has pasado de días");
    }
    $cookie_name="Ejercicio5";
    setcookie($cookie_name, $cookie_value);
    echo ($cookie_value);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <form method="get">
        <label for="fecha1">Introduce un dia del mes</label><br><br>
        <input type="text" name="fecha1"><br><br>
        <input type="submit" value="Enviar"><br><br>
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