<?php
/**
 * @author Sergio Salvago Medina
 */
/*Crea un formulario en el que se le pida al usuario los siguientes datos: nombre y preferencia de idioma, color y ciudad. Crea una Cookie que almacene estos datos y que,
al recargar la página por realizar una nueva selección de datos (y posiblemente usuario)
muestre los datos introducidos en el formulario junto con los datos obtenidos de la Cookie. */
if ($_POST["enviar"]==="ENVIAR") {
    $cookie_value=[];
    $nombre=$_POST["nombre"];
    if(isset($nombre)){
        array_push($cookie_value,$nombre);
    }else{
        echo "Rellene el campo nombre";
    }
    $idioma=$_POST["idioma"];
    if(isset($idioma)){
        array_push($cookie_value,$idioma);
    }else{
        echo "Rellene el campo nombre";
    }
    $color=$_POST["color"];
    if(isset($color)){
        array_push($cookie_value,$color);
    }else{
        echo "Rellene el campo nombre";
    }
    $ciudad=$_POST["ciudad"];
    if(isset($ciudad)){
        array_push($cookie_value,$ciudad);
    }else{
        echo "Rellene el campo nombre";
    }
    $cookie_name="Ejercicio2";
    $cookie_value=implode(" - ",$cookie_value);
    setcookie($cookie_name, $cookie_value);
    echo implode(" - ",$_POST);
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
        <input type="submit" value="ENVIAR">
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
