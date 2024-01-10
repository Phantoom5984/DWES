<?php
/**
 * @author Sergio Salvago Medina
 */
/*9.Usa el formulario del ejercicio 9 de Cookies con selección de cálculo de media, mediana y moda de modo que uses la sesión para mostrar los números,
la media, mediana y/o moda seleccionadas actualmente y además muestre los números, la media, mediana y moda de la selección anterior.*/
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();

    if (empty($_SESSION['numeros']) && empty($_SESSION['estadisticas'])) {
        $_SESSION['numeros'] = $_POST['numeros'];
        $_SESSION['estadisticas'] = $_POST['estadisticas'];
       
    } else {
        $_SESSION['numeros2'] = $_SESSION['numeros'];
        $_SESSION['numeros'] = $_POST['numeros'];

        $_SESSION['estadisticas2'] = $_SESSION['estadisticas'];
        $_SESSION['estadisticas'] = $_POST['estadisticas'];

        echo "El dato introducido anteriormente es: ", $_SESSION['numeros2']. "-".implode(",",$_SESSION['estadisticas2'])."<br>";
        
    }
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
                foreach ($resultados as $estadistica => $valor) {
                    echo "$estadistica: $valor ";
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
    <title>Ejercicio 8</title>
</head>
<body>
    <h2>Calculadora de Estadísticas</h2>
    <form method="post">
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