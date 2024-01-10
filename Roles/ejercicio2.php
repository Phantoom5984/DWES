<?php
/**
 * @author Sergio Salvago Medina
*/
/*2. Crea un formulario de identificación de usuario de modo que el usuario introduzca su nombre, apellido, asignatura y grupo.
Además debe seleccionar si es menor o mayor de edad y si tiene un cargo o no. Según los datos introducidos, se clasificará en un perfil según la siguiente tabla:
Genera una página para cada perfil de la tabla en la que se muestre un saludo de bienvenida indicando los datos del usuario (nombre y apellidos)
y mostrando la asignatura y grupo elegidos. Además deberá poder cerrar la sesión y volver a la página del formulario.
Utiliza las sesiones para poder realizar este ejercicio.*/
session_start();
$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['apellidos'] = $_POST['apellidos'];
$_SESSION['asignatura'] = $_POST['asignatura'];
$_SESSION['grupo'] = $_POST['grupo'];
$_SESSION['edad'] = $_POST['edad'];
$_SESSION['cargo'] = $_POST['cargo'];
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