<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 5. Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El programa nos pedirá la combinación para abrirla.
Si no acertamos, se nos mostrará el mensaje “Lo siento, esa no es la combinación” en color rojo y si acertamos se nos dirá “La caja fuerte se ha abierto satisfactoriamente”
en color verde. Tendremos cuatro oportunidades para abrir la caja fuerte. */

$numeroRandom = isset($_POST["numeroRandom"]) ? $_POST["numeroRandom"] : rand(1000, 9999);
$intentos = isset($_POST["intentos"]) ? $_POST["intentos"] : 4;
echo ($numeroRandom);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $intentos--;

    if ($numero == $numeroRandom) {
        echo ("<p style='color:green;'>La caja fuerte se ha abierto satisfactoriamente</p>");
    } else {
        echo ("<p style='color:red;'>Lo siento, esa no es la combinación</p>");

        if ($intentos > 0) {
            echo ("Te quedan $intentos intentos.");
        } else {
            echo ("Te has quedado sin intentos. La combinación era $numeroRandom.");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <form action="ejercicio12.php" method="post">
        <input type="hidden" name="numeroRandom" value="<?php echo $numeroRandom; ?>">
        <input type="hidden" name="intentos" value="<?php echo $intentos; ?>">

        <label for="numero">Introduce el número de 4 cifras</label><br><br>
        <input type="text" name="numero"><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>
