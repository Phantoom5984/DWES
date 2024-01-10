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
    <title>Responsable de nóminas</title>
</head>
<body>
    <form action="ejercicio1.php" method="post">
        <input type="submit" value="Cerrar Sesión" name="cerrar">
        <input type="submit" value="Cambiar SID" name="SID" <?php $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(24)) ?>>
    </form>
</body>
</html>