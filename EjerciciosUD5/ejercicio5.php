<?php 
/**
 * @author Sergio Salvago Medina
 */

/* Ejercicio 1: Elabora un programa que dado un carácter introducido por el usuario y determine si es:
1. una letra mayúscula
2. una letra minúscula
3. un carácter numérico
4. un carácter blanco
5. un carácter de puntuación
6. un carácter especial
Se debe usar funciones para la comprobación de datos. */
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
$letra = $_GET["letra"];

if (isset($_GET["enviar"])) {
    if(ctype_upper($letra)){
        echo ("La letra es mayúscula\n");
    }else if(ctype_lower($letra)){
        echo ("La letra es minúscula\n");
    }else if(is_numeric($letra)){
        echo ("El carácter es un número\n");
    }else if(ctype_space($letra)){
        echo ("El carácter es un espacio\n");
    }else if(ctype_punct($letra)){
        echo ("El carácter es de puntuación\n");
    }
    if(ctype_alnum($letra)==false){
        echo ("El carácter es especial");
    }
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
    <form action="ejercicio5.php" method="get">
        <label for="letra">Comprobador de caracteres</label><br><br>
        <input type="text" name="letra"><br><br>
        <input type="submit" name="enviar" value="Enviar">

    </form>
</body>
</html>