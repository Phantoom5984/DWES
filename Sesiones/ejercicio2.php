<?php
/**
 * @author Adrián Oriola Martos
 * 2. Usa el formulario del ejercicio 2 de Cookies con selección de color, idioma y ciudad de modo
 * que uses la sesión para mostrar el nombre del usuario, color, idioma y ciudad actuales y además
 * muestre el nombre del usuario, color, idioma y ciudad anterior.
 */
if (isset($_POST["enviar"])) {

    $nombre = $_POST["nombre"];
    if (isset($nombre)) {
        echo "<strong>Tu nombre es:</strong> $nombre\n<br><br>";
    } else {
        echo "<strong>No has rellenado el campo de nombre, no se como te llamas</strong>\n<br><br>";
    }

    $decision = $_POST["decidir"];
    if ($decision === "vlc") {
        echo "<strong>Has decidido recibir la información en:</strong> Valenciano\n<br><br>";
    } else {
        echo "<strong>Has decidido recibir la información en:</strong> Español\n<br><br>";
    }

    $color = $_POST["color"];

    echo "<strong>Has elegido el color:</strong> " . $color . "\n<br><br>";

    $ciudad = $_POST["ciudad"];

    echo "<strong>Eres de:</strong> " . $ciudad . "\n<br><br>";
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
    <form action="ejercicio2.php" method="post" enctype="multiplatform/form-data">
        <label for="nombre">Nombre: </label><br><br>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label for="decidir">¿En que idioma quieres recibir la información?</label><br><br>
        <input type="radio" name="decidir" value="vlc">Valenciano<br>
        <input type="radio" name="decidir" value="esp">Castellano<br><br>

        <label for="color">¿Que color prefieres?</label><br><br>
        <select name="color" id="colores">
            <option value="azul">Azul</option>
            <option value="rojo">Rojo</option>
            <option value="amarillo">Amarillo</option>
            <option value="verde">Verde</option>
        </select><br><br>

        <label for="ciudad">¿De que ciudad eres?</label><br><br>
        <select name="ciudad" id="ciudades">
            <option value="valencia">Valencia</option>
            <option value="castellon">Castellón</option>
            <option value="alicante">Alicante</option>
        </select><br><br><br><br>


        <input type="submit" name="enviar" value="Enviar"><br><br>
        <?php
        session_start(); //iniciamos la sesión
      
        if (empty($_SESSION['nombre']) && empty($_SESSION['decidir']) && empty($_SESSION['color']) && empty($_SESSION['ciudad'])) {
            $_SESSION['nombre'] = $_POST['nombre'];
            $_SESSION['decidir'] = $_POST['decidir'];
            $_SESSION['color'] = $_POST['color'];
            $_SESSION['ciudad'] = $_POST['ciudad'];
        } else {
            $_SESSION['nombreAntiguo'] = $_SESSION['nombre'];
            $_SESSION['nombre'] = $_POST['nombre'];

            $_SESSION['decidirAntiguo'] = $_SESSION['decidir'];
            $_SESSION['decidir'] = $_POST['decidir'];

            $_SESSION['colorAntiguo'] = $_SESSION['color'];
            $_SESSION['color'] = $_POST['color'];

            $_SESSION['ciudadAntiguo'] = $_SESSION['ciudad'];
            $_SESSION['ciudad'] = $_POST['ciudad'];
            echo "El dato introducido anteriormente es: ", $_SESSION['nombreAntiguo']. "-" .$_SESSION['decidirAntiguo']. "-" .$_SESSION['colorAntiguo']. "-" .$_SESSION['ciudadAntiguo'];
        }
        // Cambia "cliente nuevo" por el valor introducido en el Text
        ?>
    </form>
</body>

</html>