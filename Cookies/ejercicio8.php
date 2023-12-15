<?php
/**
 * @author Sergio Salvago Medina
 */
/* Usa el formulario (Ejercicio 18 UD5) de cálculo de media, mediana y moda donde se indiquen varios números y pueda seleccionar una o todas las opciones
de cálculo sobre esos números y las muestre guardando estos datos en una Cookie. Se deben mostrar los números con los cálculos seleccionados en el presente y
los números y los cálculos realizados en la ocasión anterior (cookie). */
if ($_SERVER["REQUEST_METHOD"] === "POST") {
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
                    $cookie_name="Ejercicio8";
                    $cookie_value= "$estadistica: $valor";
                    setcookie($cookie_name, $cookie_value);
                    echo "$estadistica: $valor";
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
<?php
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
        }
        ?>