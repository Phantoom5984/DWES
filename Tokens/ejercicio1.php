<?php
/**
 * @author Sergio Salvago Medina
 */
/*1.Crea un token de formulario para el formulario del ejercicio 1 de Roles (Gerente, Sindicalista y Responsable de Nóminas) de modo que se pueda asegurar
la sesión de cada usuario desde la página del formulario a la página personalizada de cada uno. Debes comprobar el resultado
avisando en caso de que el token no coincida. Puedes añadir un botón cambiar SID que generará un nuevo token en la sesión y así comprobar que detecta si la SID no coincide.*/
    session_start();
    if (!isset($_SESSION["token"])) {
        $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(24));
    }else{
        echo "hola";
    }
$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['rol'] = $_POST['rol'];
$_SESSION["codigo"] = $_POST["codigo"];
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
    <input type="hidden" name="codigo" value="<?php echo $_SESSION["token"]; ?>">
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