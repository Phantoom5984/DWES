<?php
/**
 * @author Sergio Salvago Medina
*/
/*2.Crea un token de formulario para el formulario del ejercicio 2 de Roles (Delegado, Estudiante, Profesor y Director) de modo que se pueda asegurar
la sesión de cada usuario desde la página del formulario a la página personalizada de cada uno. Debes comprobar el resultado avisando
en caso de que el token no coincida. Puedes añadir un botón cambiar SID que generará un nuevo token en la sesión y así comprobar que detecta si la SID no coincide.*/
session_start();
if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(24));
}
$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['apellidos'] = $_POST['apellidos'];
$_SESSION['asignatura'] = $_POST['asignatura'];
$_SESSION['grupo'] = $_POST['grupo'];
$_SESSION['edad'] = $_POST['edad'];
$_SESSION['cargo'] = $_POST['cargo'];
$_SESSION["codigo"] = $_POST["codigo"];
if (isset($_POST["enviar"])){
$edad = $_POST["edad"];
$cargo = $_POST["cargo"];
if($edad === "no" && $cargo === "si"){
    header("Location: delegado.php");
} else if ($edad === "no" && $cargo === "no"){
    header("Location: estudiante.php");
} else if ($edad === "si" && $cargo === "no"){
    header("Location: profesor.php");
} else if($edad === "si" && $cargo === "si"){
    header("Location: director.php");
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="ejercicio2.php" method="post">
    <input type="hidden" name="codigo" value="<?php echo $_SESSION["token"]; ?>">
    <label for="nombre">Nombre: </label><br>
    <input type="text" name="nombre" id="nombre"><br><br>
    <label for="apellido">Apellido: </label><br>
    <input type="text" name="apellidos" id="apellidos"><br><br>
    <label for="asignatura">Asignatura: </label><br>
    <input type="text" name="asignatura" id="asignatura"><br><br>
    <label for="grupo">Grupo: </label><br>
    <input type="text" name="grupo" id="grupo"><br><br>
    <label for="edad">¿Eres mayor de edad?</label>
    <select name="edad">
    <option value="si">SI</option>
    <option value="no">NO</option>
    </select><br><br>
    <label for="cargo">¿Tienes algún cargo?</label>
    <select name="cargo">
    <option value="si">SI</option>
    <option value="no">NO</option>
    </select><br><br>
    <button type="submit" name="enviar" value="enviar">Enviar</button>
    </form>
</body>
</html>