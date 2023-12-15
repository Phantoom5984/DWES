<?php
/**
 * @author Sergio Salvago Medina
 */
/* Crea un formulario sencillo donde el usuario indique su nombre y seleccione si quiere un saludo o despedida.
Se debe almacenar en una Cookie el usuario y el saludo y al pulsar Enviar, se debe indicar los valores actuales (usuario y saludo o despedida elegidos) y
los valores del usuario anterior y acción elegida almacenadas en la Cookie. */
if ($_POST["enviar"]==="ENVIAR") {
    $elige=$_POST["elige"];
    if(isset($elige)){
        if($elige==="Saludo"){
        $elige= "Hola, ";
        }else{
            $elige= "Adiós, ";
        }
    }else{
        echo "Rellene el campo de elegir";
    }
    $nombre=$_POST["nombre"];
    if(isset($nombre)){
        $nombre= ($nombre);
    }else{
        echo "Rellene el campo nombre";
    }
    $cookie_name="Ejercicio1";
    $cookie_value=$nombre." - ".$elige;
    setcookie($cookie_name, $cookie_value);
    echo $elige."".$nombre;
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
        <?php
    if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
