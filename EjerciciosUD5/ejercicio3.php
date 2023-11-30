<?php 
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicios 11 y 12 unirlos en una calculadora de euros que convierta de euros a pesetas y de pesetas a euros según lo que elija el usuario (de forma excluyente)
y por la cantidad que introduzca. Comprueba que los datos introducidos son los esperados. */

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
$valor = $_GET["euro"];

$conversor = $_GET["conversor"];


if($conversor === "pesetas"){
    $euro=$valor*0.0060;
    $euroR=round($valor,2);
    echo ($valor." en euros son: ".$euro."€ que redondeado es: ".$euroR."€");
}


if($conversor === "euros"){
    $pesetas=$valor*166.386;
    $pesetasR=round($pesetas);
    echo ($valor."€ en pesetas son: ".$pesetas." que redondeado son: ".$pesetasR); 
}
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <form action="ejercicio3.php" method="get">
                <label for="conversor">Introduce la cantidad:</label><br><br>

                <input type="radio" name="conversor" value="euros" >€<br><br>
                <input type="radio" name="conversor" value="pesetas" >Pesetas<br><br>

                <input type="text" name="euro"><br><br>

                <p>1€ equivale a 166.386 pesetas</p>
                <p>1pta equivale a 0.0060 euros</p>

                <input type="submit" name="boton" value="calcular"><br><br>
    </form>
</body>
</html>