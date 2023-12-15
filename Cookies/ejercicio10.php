<?php
/**
 * @author Sergio Salvago Medina
 */
/* Usa el formulario (Ejercicio 22 UD5) que guarde en una Cookie la preferencia del usuario de si desea o no recibir publicidad y que muestre la opción anterior y
la nueva elegida en caso de que la modifique. */
$correo = $_GET["correo"];
   if(filter_var($correo, FILTER_VALIDATE_EMAIL) && isset($_GET["publicidad"])){
    $cookie_value= ("El usuario con email $correo ha aceptado recibir publicidad <br>");
}else if(filter_var($correo, FILTER_VALIDATE_EMAIL) && !isset($_GET["publicidad"])){
    $cookie_value= ("El usuario con email $correo no ha aceptado recibir publicidad <br>");
}
$cookie_name="Ejercicio10";
setcookie($cookie_name, $cookie_value);
echo $cookie_value;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <form method="get">
        <label for="correo">Introduce tu correo:</label><br><br>
        <input type="text" name="correo"><br><br>
        Acepto recibir publicidad<input type="checkbox" name="publicidad"><br><br>
        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" name="borrar" value="Borrar">
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