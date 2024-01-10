<?php
/**
 * 
 * @author Sergio Salvago Medina
 */
/*5. Usa el formulario del ejercicio 5 de Cookies con indicación de la quincena dado el día de la semana de modo que uses la sesión para mostrar el día
y la quincena actuales y además muestre el día y la quincena anteriores.*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    if (empty($_SESSION['fecha1'])) {
        $_SESSION['fecha1'] = $_POST['fecha1'];
    
    } else {
        $_SESSION['fecha1Antigua'] = $_SESSION['fecha1'];
        $_SESSION['fecha1'] = $_POST['fecha1'];

        echo "El dato introducido anteriormente es: ", $_SESSION['fecha1Antigua']."<br>";
        
    }
    $fecha1 = $_POST["fecha1"];
    if($fecha1<15){
        echo $fecha1.", 1ª quincena";
    }else if($fecha1>=15 && $fecha1<=31){
        echo $fecha1.", 2ª quincena";
    }else{
        echo ("Te has pasado de días");
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <form method="post">
        <label for="fecha1">Introduce un dia del mes</label><br><br>
        <input type="text" name="fecha1"><br><br>
        <input type="submit" value="Enviar"><br><br>
    </form>
</body>
</html>