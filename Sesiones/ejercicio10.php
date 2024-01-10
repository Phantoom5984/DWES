<?php
/**
 * @author Sergio Salvago Medina
 */
/*10. Usa el formulario del ejercicio 10 de Cookies con selección de si se desea publicidad o no de modo que uses la sesión para mostrar el nombre del usuario
y si desea o no publicidad del usuario actual y además muestre usuario y elección del anterior.*/
if(isset($_POST["publicidad"])){
    $publi="ha aceptado recibir publicidad";
}else{
    $publi="no ha aceptado recibir publicidad";
    //Al ser un checbox guardo en una variable la publicidad para que al mostrarla en la SESSION no salga "on"-"of", muestro si hay o no publicidad,
}
session_start();

if (empty($_SESSION['correo'])) {
    $_SESSION['correo'] = $_POST['correo'];
   
} else {
    $_SESSION['correo2'] = $_SESSION['correo'];
    $_SESSION['correo'] = $_POST['correo'];


    echo "El dato introducido anteriormente es: ", $_SESSION['correo2']. "-" .$publi."<br>";
    
}
$correo = $_POST["correo"];
if(filter_var($correo, FILTER_VALIDATE_EMAIL) && isset($_POST["publicidad"])){
    echo ("El usuario con email $correo ha aceptado recibir publicidad <br>");
    
}else if(filter_var($correo, FILTER_VALIDATE_EMAIL) && !isset($_POST["publicidad"])){
    echo ("El usuario con email $correo no ha aceptado recibir publicidad <br>");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <form method="post">
        <label for="correo">Introduce tu correo:</label><br><br>
        <input type="text" name="correo"><br><br>
        Acepto recibir publicidad<input type="checkbox" name="publicidad"><br><br>
        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" name="borrar" value="Borrar">
    </form>
</body>
</html>