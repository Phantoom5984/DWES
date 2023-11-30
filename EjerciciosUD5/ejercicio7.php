<?php 
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 5 Diseña un programa que determine la cantidad total a pagar por 5 llamadas telefónicas de duración a introducir por el usuario de acuerdo a las siguientes premisas:
Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos. Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos. */

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
if (isset($_GET["enviar"])) {
    for($i=1;$i<=5;$i++){
    $segundos[$i]=$_GET["segundos$i"];
    $precio=10;
    $minutos=0;
    while($segundos[$i]>59){
        $segundos[$i]-=60;
        $minutos++;
    }
    for($x=3;$x<$minutos;$x++){
        $precio+=5;
    }
    echo("Tu tiempo de llamada ha sido: ".$minutos."m ".$segundos[$i]."s y ha costado: ".$precio." céntimos<br>");
}
}
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <form action="ejercicio7.php" method="get">
        <h1>Introduce las llamadas en segundos</h1> 
        <label for="segundos">Introduce la primera llamada</label><br><br>
        <input type="text" name="segundos1"><br><br>
        <label for="segundos">Introduce la segunda llamada</label><br><br>
        <input type="text" name="segundos2"><br><br>
        <label for="segundos">Introduce la tercera llamada</label><br><br>
        <input type="text" name="segundos3"><br><br>
        <label for="segundos">Introduce la cuarta llamada</label><br><br>
        <input type="text" name="segundos4"><br><br>
        <label for="segundos">Introduce la quinta llamada</label><br><br>
        <input type="text" name="segundos5"><br><br>

        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>