<?php
/**
 * @author Adrián Oriola Martos
 * 7. Usa el formulario del ejercicio 7 de Cookies de caja fuerte de modo que uses la sesión para
 * mostrar la contraseña introducida y el número de intentos actuales y además muestre el las
 * contraseñas introducidas de la ejecución anterior. Si abre la caja o llega al máximo de intentos, a
 * los datos anteriores se añadirá la contraseña correcta y un mensaje de éxito o no conseguido.
 */
$numeroRandom = mt_rand(1000, 9999);
echo $numeroRandom;
if (isset($_POST["enviar"])) {

    $numeroInsertado = $_POST["numeroInsertado"];
    $numeroRandom = $_POST["numeroRandom"];

    if ($numeroInsertado == $numeroRandom) {
        echo "<p style='color:green;'>Enhorabuena, la caja se ha abierto, reclama tu premio!</p>";
    } else {
        echo "<p style='color:red;'>Te has equivocado, sigue intentando</p>";
    }

}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrián Oriola</title>
</head>

<body>
    <form action="ejercicio7.php" method="post" enctype="multipart/form-data">
        <!-- Usamos un hidden para añadir el numeroRandom al formulario y poder cogerlo luego con el método POST y poder tratarlo -->
        <input type="hidden" name="numeroRandom" value="<?php echo $numeroRandom; ?>">

        <label for="numeroInsertado">Introduce la combinación de 4 dígitos para abrir la caja fuerte:</label>
        <input type="text" name="numeroInsertado"><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
        session_start(); //iniciamos la sesión

        if (empty($_SESSION['numeroRandom']) && empty($_SESSION['numeroInsertado']) ) {
            $_SESSION['numeroRandom'] = $_POST['numeroRandom'];
            $_SESSION['numeroInsertado'] = $_POST['numeroInsertado'];
           
        } else {
            $_SESSION['numeroRandomAntiguo'] = $_SESSION['numeroRandom'];
            $_SESSION['numeroRandom'] = $_POST['numeroRandom'];

            $_SESSION['numeroInsertadoAntiguo'] = $_SESSION['numeroInsertado'];
            $_SESSION['numeroInsertado'] = $_POST['numeroInsertado'];

            echo "El dato introducido anteriormente es: ", $_SESSION['numeroRandomAntiguo']. "-" .$_SESSION['numeroInsertadoAntiguo'];
            
        }
        // Cambia "cliente nuevo" por el valor introducido en el Text
        ?>
</body>

</html>