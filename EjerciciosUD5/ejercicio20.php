<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 20. Realiza un programa que pida una hora por teclado y que muestre luego el saludo, esto es: buenos días, buenas tardes o buenas noches según la hora.
Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5 respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.*/
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    if (isset($_GET["enviar"])) {
$hora=$_GET["hora"];
if($hora>=6 && $hora<=12){
    echo ("Buenos días");
}
else if($hora>=13 && $hora<=20){
    echo ("Buenas tardes");
}else if($hora>=21 && $hora<=24 || $hora>=0 && $hora<=5){
    echo ("Buenas noches");
}
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20</title>
</head>
<body>
    <form action="ejercicio20.php" method="get">
        <label for="hora">Introduce la hora</label><br><br>
        <input type="text" name="hora"><br><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>
    </form>
</body>
</html>