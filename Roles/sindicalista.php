<?php
session_start();
function salmed(){
    $long = count($_SESSION["salarios"]);
    $media = array_sum($_SESSION["salarios"]) / $long;
    echo "El salario medio es: " . $media . "<br>";
}
echo "El ".$_SESSION["rol"]." con nombre: ". $_SESSION["nombre"]." puede ver todos los resultados del salario medio.<br>";
salmed();
if (isset($_POST["cerrar"])){
    session_unset();
    header("Location: ejercicio1.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sindicalista</title>
</head>
<body>
    <form action="ejercicio1.php" method="post">
        <input type="submit" value="Cerrar Sesión" name="cerrar">
    </form>
</body>
</html>