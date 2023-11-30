<?php 
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 8. Crea la tabla de multiplicar de un número indicado por el usuario siendo que el multiplicador se podrá seleccionar entre 1 y 10.
Se multiplicará desde 1 al multiplicador seleccionado. */

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
if (isset($_GET["enviar"])) {

    $numero=$_GET["numero"];
    for($i=1;$i<=10;$i++){
        echo ($numero*$i."<br>");
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <form action="ejercicio9.php" method="get">
        <label for="numero">Introduce el numero:</label><br><br>
        <input type="number" name="numero" ><br><br>
        <input type="submit" name="enviar" value="Enviar"><br><br>

    </form>
</body>
</html>