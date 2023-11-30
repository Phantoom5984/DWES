<?php 
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 4 añadiendo selector de operación a aplicar (pueden seleccionarse mínimo una o todas las operaciones):
Dados dos números enteros realizar operaciones de suma, resta, división y multiplicación y mostrar los resultados por pantalla concatenando la operación
(expresión con operandos y operador) y el resultado. Comprueba que los datos introducidos son los esperados. */

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];
$operacion = $_GET["operacion"];

foreach ($operacion as $resultado) {
    switch ($resultado) {
        case 'suma':
            echo "La suma de $numero1 y $numero2 es ".$numero1 + $numero2. "<br><br>"; 
            break;
        case 'resta':
            echo "La resta de $numero1 y $numero2 es ".$numero1 - $numero2. "<br><br>"; 
            break;
        case 'multiplicación':
            echo "La multiplicación de $numero1 y $numero2 es ".$numero1 * $numero2. "<br><br>"; 
            break;
        case 'división':
            echo "La división de $numero1 y $numero2 es ".$numero1 / $numero2. "<br><br>"; 
            break;
        default:
            "Error en el sistema";
            break;
    }
}
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="ejercicio1.php" method="get">

        <label for="numero1">Numero 1:</label>
        <input type="text" name="numero1"><br><br>

        <label for="numero1">Numero 2:</label>
        <input type="text" name="numero2"><br><br>

        <select multiple name="operacion[]" id="operacion">Operación:
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicación">Multiplicación</option>
            <option value="división">División</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>