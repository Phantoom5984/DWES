<?php
/**
 * @author Sergio Salvago Medina
 */
/*8. Usa el formulario del ejercicio 8 de Cookies con selección de zona horaria para mostrar la hora y zona elegidas de modo que uses la sesión
para mostrar la zona horaria y hora actuales y además muestre la zona horaria y hora de la selección anterior.*/
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    session_start();
     if (empty($_SESSION['zonaHoraria'])) {
         $_SESSION['zonaHoraria'] = $_POST['zonaHoraria'];
        } else {
         $_SESSION['zonaHoraria2'] = $_SESSION['zonaHoraria'];
         $_SESSION['zonaHoraria'] = $_POST['zonaHoraria'];
         date_default_timezone_set('Europe/'.$_SESSION['zonaHoraria2']);
         $hora=date("H:i:s");
     
         echo "El dato introducido anteriormente es: ", $_SESSION['zonaHoraria2'] . "-".$hora."<br>";
     
     }
     $zonaHoraria=$_POST["zonaHoraria"];
     date_default_timezone_set('Europe/'.$zonaHoraria);
        echo date("H:i:s")." ".$zonaHoraria;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <form method="post">
        <label for="zonaHoraria">Selecciona el lugar para saber su hora</label><br><br>
        <select name="zonaHoraria">
            <option value="Madrid">Madrid</option>
            <option value="Helsinki">Helsinki</option>
            <option value="Amsterdam">Amsterdam</option>
            <option value="Berlin">Berlin</option>
            <option value="Andorra">Andorra</option>
            <option value="Budapest">Budapest</option>
            <option value="Dublin">Dublin</option>
            <option value="Kiev">Kiev</option>
            <option value="London">London</option>
            <option value="Gibraltar">Gibraltar</option>
            <option value="Malta">Malta</option>
            <option value="Prague">Prague</option>
            <option value="Moscow">Moscow</option>
            <option value="Oslo">Oslo</option>
            <option value="Sofia">Sofia</option>
            <option value="Riga">Riga</option>
            <option value="Kirov">Kirov</option>
            <option value="Rome">Rome</option>
            <option value="Minsk">Minsk</option>
            <option value="Saratov">Saratov</option>
        </select><br><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>
    </form>
</body>
</html>