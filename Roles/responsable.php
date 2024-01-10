<?php
session_start();
function salmax(){
    $max = max($_SESSION["salarios"]);
    echo "El salario máximo es: " . $max . "<br>";
}
function salmin(){
    $min = min($_SESSION["salarios"]);
    echo "El salario mínimo es: " . $min . "<br>";
}
echo "El ".$_SESSION["rol"]." con nombre: ". $_SESSION["nombre"]." puede ver todos los resultados del salario mínimo y máximo.<br>";
salmax();
salmin();
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
    <title>Responsable de nóminas</title>
</head>
<body>
    <form action="ejercicio1.php" method="post">
        <input type="submit" value="Cerrar Sesión" name="cerrar">
    </form>
</body>
</html>