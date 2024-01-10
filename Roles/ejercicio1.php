<?php
/**
 * @author Sergio Salvago Medina
 */
/*Crea un formulario de autenticación para visualizar resultados basándote en el Ejercicio 10 de la UD5 de modo que, según el usuario que acceda
(recoge un nombre y perfil (Gerente, Sindicalista y Responsable de Nóminas, todos excluyentes entre sí) y crea el vector de empleados en este formulario),
sea redirigido a su página personalizada donde pueda ver los datos a los que tiene permiso. Así pues, el Gerente podrá ver todos los resultados del salario
mínimo, máximo y promedio, el sindicalista sólo puede acceder al salario medio y la responsable de Nóminas al salario mínimo y máximo.
Añade un título a cada página indicando el rol o si es el formulario de la empresa junto con tu nombre. En cada perfil,
añade un botón cerrar sesión que permita liberar la sesión y volver a la página del formulario.*/
    session_start();
$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['rol'] = $_POST['rol'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $salarios = array("Sergio" => 1000, "Adrián" => 1001, "Lucas" => 1002, "Jose" => 1003);
    $_SESSION["salarios"] = $salarios;
    switch ($_POST["rol"]) {
        case 'Gerente':
            header("Location: gerente.php");
            break;
        case 'Sindicalista':
            header("Location: sindicalista.php");
            break;
        case 'Responsable de Nominas':
            header("Location: responsable.php");
            break;
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body>
    <form method="post" action="ejercicio1.php">
        <label for="nombre">Nombre del trabajador</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="rol">Elige tu rol de trabajador</label>
        <select name="rol">
        <option value="Gerente">Gerente</option>
        <option value="Sindicalista">Sindicalista</option>
        <option value="Responsable de Nominas">Responsable de Nominas</option><br><br>
</select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>