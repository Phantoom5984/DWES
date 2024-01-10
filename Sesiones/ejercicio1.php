<?php
/**
 * @author Sergio Salvago Medina
 */
/*1. Usa el formulario del ejercicio 1 de Cookies de saludo o despedida de modo que uses la sesión para mostrar el usuario y saludo actuales
 y además muestre el usuario y saludo anterior.*/
if (isset($_POST["enviar"])) {

    session_start();
    if (empty($_SESSION['nombre']) && empty($_POST['elige'])) {
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['elige'] = $_POST['elige'];
    } else {
        $_SESSION['nombre2'] = $_SESSION['nombre'];
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['elige2'] = $_SESSION['elige'];
        $_SESSION['elige'] = $_POST['elige'];
        echo "El dato introducido anteriormente es: ", $_SESSION['nombre2']. "-" .$_SESSION['elige2']."<br>";
    }
    $elige = $_POST["elige"];
    if ($elige === "Saludo") {
        echo "Hola, ";
    } else {
        echo "Adiós, ";
    }
    $nombre = $_POST["nombre"];
    if (isset($nombre)) {
        echo "$nombre";
    } else {
        echo "Rellene el campo nombre";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form method="POST" action="ejercicio1.php" enctype="multiplatform/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre"><br>
        <input type="radio" name="elige" value="Saludo">Saludo
        <input type="radio" name="elige" value="Despedida">Despedida<br>
        <input type="submit" name="enviar" value="ENVIAR">
    </form>
</body>
</html>