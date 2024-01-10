<?php
session_start();
echo "Hola director,<br> Tu nombre y apellidos son: ".$_SESSION["nombre"]." ".$_SESSION["apellidos"].".<br> Tu asignatura y grupo son:"
.$_SESSION["asignatura"]." y ".$_SESSION["grupo"];
if (isset($_POST["cerrar"])){
    session_unset();
    header("Location: ejercicio2.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director</title>
</head>
<body>
<form action="ejercicio2.php" method="post">
    <input type="submit" value="Cerrar Sesión" name="cerrar">
</form>
</body>
</html>