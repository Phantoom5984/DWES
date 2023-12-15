<?php
/**
 * @author Sergio Salvago Medina
 */
/* Usa el formulario (Ejercicio 12 UD5) de la caja fuerte donde se indique la contraseña y muestre las contraseñas ya introducidas y
el número de intentos guardando estos datos en una Cookie. Se deben mostrar la contraseña correcta, las contraseñas ya introducidas y el número de intentos (cookie). */
$numeroRandom = isset($_POST["numeroRandom"]) ? $_POST["numeroRandom"] : rand(1000, 9999);
$intentos = isset($_POST["intentos"]) ? $_POST["intentos"] : 4;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = $_POST["numero"];
    $intentos--;
    $cookie_name="Ejercicio7";
    $cookie_value= $numeroRandom.", contraseña introducida: ".$numero.", intentos: ".$intentos;
    setcookie($cookie_name, $cookie_value);
    echo $numeroRandom.", contraseña introducida: ".$numero.", intentos: ".$intentos;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <form method="post">
        <input type="hidden" name="numeroRandom" value="<?php echo $numeroRandom; ?>">
        <input type="hidden" name="intentos" value="<?php echo $intentos; ?>">

        <label for="numero">Introduce el número de 4 cifras</label><br><br>
        <input type="text" name="numero"><br><br>
        <input type="submit" name="enviar" value="Enviar">
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