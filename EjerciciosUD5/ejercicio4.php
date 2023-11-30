<?php 
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 4. Escribe un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas ordinarias (40 primeras horas de trabajo)
se pagan a 12 euros la hora. A partir de la hora 41, se pagan a 16 euros la hora. */

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
$horas=$_GET["horas"];
$salSem=40*12;
$salEx=($horas-40)*16;
$salTot=$salSem+$salEx;
if($horas<=40){
    echo ("Tu salario semanal es de: ".$salSem."€");
}else{
    echo ("Tu salario semanal es de: ".$salTot."€");
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <form action="ejercicio4.php" method="get">
        <label for="horas">Introduce las horas trabajadas:</label><br><br>
        <input type="text" name="horas"><br><br>
        <input type="submit" value="Enviar"><br><br>


    </form>
</body>
</html>