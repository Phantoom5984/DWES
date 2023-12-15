<?php
/**
 * @author Sergio Salvago medina
 */
 /* 1. Usa el formulario del ejercicio 1 de Cookies de saludo o despedida de modo que uses la sesión para mostrar el usuario y
 saludo actuales y además muestre el usuario y saludo anterior. */
if (isset($_POST["enviar"])) {

    $nombre = $_POST["nombre"];
    if (isset($nombre)) {
        echo "<strong>Tu nombre es:</strong> $nombre\n<br><br>";
    } else {
        echo "<strong>No has rellenado el campo de nombre, no se como te llamas</strong>\n<br><br>";
    }

    $decision = $_POST["decidir"];
    if ($decision === "saludo") {
        echo "<strong>Has decidido recibir un saludo</strong>, HOLA!\n<br><br>";
    } else {
        echo "<strong>Has decidido recibir una despedida<strong>, Adiós :(\n<br><br>";
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
    <form action="ejercicio1.php" method="post" enctype="multiplatform/form-data">
        <label for="nombre">Nombre: </label><br><br>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label for="decidir">¿Quieres un saludo o una despedida?</label><br><br>
        <input type="radio" name="decidir" value="saludo">Saludo<br>
        <input type="radio" name="decidir" value="despedida">Despedida<br><br>

        <input type="submit" name="enviar" value="Enviar"><br><br>
        <?php
        session_start(); //iniciamos la sesión

        if (empty($_SESSION['nombre']) && empty($_POST['decidir'])) {
            $_SESSION['nombre'] = $_POST['nombre'];
            $_SESSION['decidir'] = $_POST['decidir'];
        
        } else {
            $_SESSION['nombreAntiguo'] = $_SESSION['nombre'];
            $_SESSION['nombre'] = $_POST['nombre'];

            $_SESSION['decidirAntiguo'] = $_SESSION['decidir'];
            $_SESSION['decidir'] = $_POST['decidir'];

            echo "El dato introducido anteriormente es: ", $_SESSION['nombreAntiguo']. "-" .$_SESSION['decidirAntiguo'];
            
        }
        // Cambia "cliente nuevo" por el valor introducido en el Text
        ?>
    </form>
</body>

</html>