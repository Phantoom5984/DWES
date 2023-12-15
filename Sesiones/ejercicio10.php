<?php
/**
 * @author Adrián Oriola Martos
 * 10. Usa el formulario del ejercicio 10 de Cookies con selección de si se desea publicidad o no de
 * modo que uses la sesión para mostrar el nombre del usuario y si desea o no publicidad del
 * usuario actual y además muestre usuario y elección del anterior.
 */
if (isset($_POST["enviar"])) {
    $email = $_POST["correo"];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El usuario con email $email ha aceptado recibir publicidad <br>";
    } else {
        echo "ERROR!<br>";
    }
    if (isset($_POST["publicidad"])) {
        //ob_start();
        echo "Acepta recibir publicidad";
        //$on = ob_get_clean();
        //$_SESSION['on'] = $on;
    } else {
        //ob_start();
        echo "No desea recibir publicidad";
        //$off = ob_get_clean();
        //$_SESSION['off'] = $on;
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrián Oriola Martos</title>
</head>

<body>
    <h1>Formulario alta en boletín de noticias</h1>
    <form action="ejercicio10.php" method="post">
        <label for="correo">Introduce tu correo:</label><br><br>
        <input type="text" name="correo"><br><br>
        <input type="checkbox" name="publicidad">Acepto recibir publicidad<br><br>
        <input type="submit" name="enviar" value="Enviar">&nbsp;
        <input type="reset" name="borrar" value="Borrar">

    </form>
    <?php
        session_start(); //iniciamos la sesión

        if (empty($_SESSION['correo']) && empty($_SESSION['publicidad'])) {
            $_SESSION['correo'] = $_POST['correo'];
            $_SESSION['publicidad'] = $_POST['publicidad'];
           
        } else {
            $_SESSION['correoAntiguo'] = $_SESSION['correo'];
            $_SESSION['correo'] = $_POST['correo'];

            $_SESSION['publicidadAntiguo'] = $_SESSION['publicidad'];
            $_SESSION['publicidad'] = $_POST['publicidad'];

            echo "El dato introducido anteriormente es: ", $_SESSION['correoAntiguo']. "-" .$_SESSION['publicidadAntiguo'];
            
        }
        // Cambia "cliente nuevo" por el valor introducido en el Text
        ?>
</body>

</html>