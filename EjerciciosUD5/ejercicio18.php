<?php
/**
 * @author Sergio Salvago Medina
 */
/* 18. Escribe un programa para que, a criterio del usuario, obtenga la media, la moda (número más frecuente) o la mediana
(el número de en medio o el promedio de los dos centrales si son pares) de los números que introduzca el usuario,
Se podrán seleccionar de una a todas las opciones calculadas pero se deben mostrar todas para que el usuario las marque o desmarque. */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['numeros'])) {
        $numeros = explode(',', $_POST['numeros']);
        $numeros = array_map('trim', $numeros);
        $numeros = array_filter($numeros, 'is_numeric');
        
        if (!empty($numeros)) {
            $estadisticas = $_POST['estadisticas'] ?? [];
            $resultados = [];

            if (in_array('media', $estadisticas)) {
                $media = array_sum($numeros) / count($numeros);
                $resultados['Media'] = $media;
            }

            if (in_array('moda', $estadisticas)) {
                $conteo = array_count_values($numeros);
                $moda = array_search(max($conteo), $conteo);
                $resultados['Moda'] = $moda;
            }

            if (in_array('mediana', $estadisticas)) {
                sort($numeros);
                $longitud = count($numeros);
                $mediana = $longitud % 2 !== 0 ? $numeros[floor($longitud / 2)] : ($numeros[$longitud / 2 - 1] + $numeros[$longitud / 2]) / 2;
                $resultados['Mediana'] = $mediana;
            }

            if (!empty($resultados)) {
                echo "<p>Los resultados son:</p>";
                foreach ($resultados as $estadistica => $valor) {
                    echo "<p>$estadistica: $valor</p>";
                }
            } else {
                echo "<p>No se seleccionó ninguna estadística.</p>";
            }
        } else {
            echo "<p>No se ingresaron números válidos.</p>";
        }
    } else {
        echo "<p>No se proporcionaron números.</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 18</title>
</head>
<body>
    <h2>Calculadora de Estadísticas</h2>
    <form action="ejercicio18.php" method="post">
        <label for="numeros">Introduce números separados por comas:</label><br>
        <textarea name="numeros" rows="4" cols="50"></textarea><br><br>

        <label for="estadisticas">Selecciona las estadísticas a calcular:</label><br>
        <input type="checkbox" name="estadisticas[]" value="media"> Media<br>
        <input type="checkbox" name="estadisticas[]" value="moda"> Moda<br>
        <input type="checkbox" name="estadisticas[]" value="mediana"> Mediana<br><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>
