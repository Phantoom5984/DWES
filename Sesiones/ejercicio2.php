<?php
/**
 * @author Sergio Salvago Medina
 */
/*2. Usa el formulario del ejercicio 2 de Cookies con selección de color, idioma y ciudad de modo que uses la sesión para mostrar el nombre del usuario,
color, idioma y ciudad actuales y además muestre el nombre del usuario, color, idioma y ciudad anterior.*/
if ($_POST["enviar"]==="ENVIAR") {
    session_start();
    if (empty($_SESSION['nombre']) && empty($_SESSION['idioma']) && empty($_SESSION['color']) && empty($_SESSION['ciudad'])) {
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['idioma'] = $_POST['idioma'];
        $_SESSION['color'] = $_POST['color'];
        $_SESSION['ciudad'] = $_POST['ciudad'];
    } else {
        $_SESSION['nombre2'] = $_SESSION['nombre'];
        $_SESSION['nombre'] = $_POST['nombre'];

        $_SESSION['idioma2'] = $_SESSION['idioma'];
        $_SESSION['idioma'] = $_POST['idioma'];

        $_SESSION['color2'] = $_SESSION['color'];
        $_SESSION['color'] = $_POST['color'];

        $_SESSION['ciudad2'] = $_SESSION['ciudad'];
        $_SESSION['ciudad'] = $_POST['ciudad'];
        echo "El dato introducido anteriormente es: ", $_SESSION['nombre2']. "-" .$_SESSION['idioma2']. "-" .$_SESSION['color']. "-" .$_SESSION['ciudad2']."<br>";
    }
    $nombre=$_POST["nombre"];
    if(isset($nombre)){
        echo "$nombre ";
        }else{
        echo "Rellene el campo nombre";
    }
    $idioma=$_POST["idioma"];
    if(isset($idioma)){
        echo "$idioma ";
        }else{
        echo "Rellene el campo nombre";
    }
    $color=$_POST["color"];
    if(isset($color)){
        echo "$color ";
        }else{
        echo "Rellene el campo nombre";
    }
    $ciudad=$_POST["ciudad"];
    if(isset($ciudad)){
       echo "$ciudad";
    }else{
        echo "Rellene el campo nombre";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre"><br>
        <label for="idioma">Idioma:</label>
        <input type="text" name="idioma"><br>
        <label for="color">Color:</label>
        <input type="text" name="color"><br>
        <label for="ciudad">Ciudad:</label>
        <input type="text" name="ciudad"><br>
        <input type="submit" name="enviar" value="ENVIAR">
    </form>
</body>
</html>