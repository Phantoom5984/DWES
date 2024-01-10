<?php 
session_start();
echo "Hola delegado,<br> Tu nombre y apellidos son: ".$_SESSION["nombre"]." ".$_SESSION["apellidos"].".<br> Tu asignatura y grupo son:"
.$_SESSION["asignatura"]." y ".$_SESSION["grupo"];
if (isset($_POST["cerrar"])){
    session_unset();
    header("Location: ejercicio2.php");
}
if (!isset($_SESSION['codigo'])) {
    print('No se ha encontrado token!');
} else {
    if (hash_equals($_SESSION['codigo'], $_SESSION['token']) === false) {
        print('El token no coincide!');
    } else {
        print('El token es correcto y podemos ejecutar acciones');
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delegado</title>
</head>
<body>
<form action="ejercicio2.php" method="post">
    <input type="submit" value="Cerrar Sesión" name="cerrar">
    <input type="submit" value="Cambiar SID" name="SID" <?php $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(24))?>>
</form>
</body>
</html>