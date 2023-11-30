<?php 
/**
 * @author Sergio Salvago Medina
 */

 /* Ejercicio 24 Con los trabajadores del ejercicio anterior, calcular el salario actual y el salario aumentado un porcentaje indicado por el usuario */
 if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $salario1 = $_GET["salario1"];
    $salario2 = $_GET["salario2"];

    $salarioFinal = ($salario2/100)*$salario1;

    echo ("Salario: ".$salario1 ."€<br>");
    echo ("Salario aumentado un $salario2 %: ". $salario1 + $salarioFinal ."€<br>");

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <form action="ejercicio11.php" method="get">
        <label for="salario1">Introduce el salario actual</label><br><br>
        <input type="text" name="salario1"><br><br>

        <label for="salario1">Introduce el porcentaje a aumentar el salario</label><br><br>
        <input type="text" name="salario2"><br><br>

        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>