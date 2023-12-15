<?php
/**
 * @author Adrián Oriola Martos
 * 8. Usa el formulario del ejercicio 8 de Cookies con selección de zona horaria para mostrar la hora
 * y zona elegidas de modo que uses la sesión para mostrar la zona horaria y hora actuales y
 * además muestre la zona horaria y hora de la selección anterior.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numeros = $_POST["numeros"];
    $calcularMedia = isset($_POST["calcularMedia"]);
    $calcularModa = isset($_POST["calcularModa"]);
    $calcularMediana = isset($_POST["calcularMediana"]);


    if (empty($numeros)) {
        echo "<p>Por favor, ingresa al menos un número.</p>";
    } else {

        $numerosArray = explode(",", $numeros);
        $numerosArray = array_map('intval', $numerosArray);
        function calcularModa($array)
        {
            $frecuencias = array_count_values($array);
            $moda = array_search(max($frecuencias), $frecuencias);
            return $moda;
        }
        function calcularMediana($array)
        {
            sort($array);
            $count = count($array);
            $middle = floor(($count - 1) / 2);

            if ($count % 2 == 0) {
                $mediana = ($array[$middle] + $array[$middle + 1]) / 2;
            } else {
                $mediana = $array[$middle];
            }

            return $mediana;
        }

        if ($calcularMedia) {
            $media = array_sum($numerosArray) / count($numerosArray);
            echo "<p>La media es: $media</p>";
        }
        if ($calcularModa) {
            $moda = calcularModa($numerosArray);
            echo "<p>La moda es: $moda</p>";
        }
        if ($calcularMediana) {
            $mediana = calcularMediana($numerosArray);
            echo "<p>La mediana es: $mediana</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Adrián Oriola</title>
</head>

<body>
    <h1>Calculadora de estadísticas</h1>
    <form method="post" action="ejercicio8.php" enctype="multipart/form-data">
        <label for="numeros">Ingrese números (separados por comas):</label>
        <input type="text" name="numeros" required><br>

        <label><input type="checkbox" name="calcularMedia"> Calcular Media</label><br>
        <label><input type="checkbox" name="calcularModa"> Calcular Moda</label><br>
        <label><input type="checkbox" name="calcularMediana"> Calcular Mediana</label><br>

        <input type="submit" value="Calcular">
        <input type="reset" name="limpiar" value="Limpiar">
    </form>
    <?php
        session_start(); //iniciamos la sesión

        if (empty($_SESSION['numeros']) && empty($_SESSION['calcularMedia']) && empty($_SESSION['calcularModa']) && empty($_SESSION['calcularMediana'])) {
            $_SESSION['numeros'] = $_POST['numeros'];
            $_SESSION['calcularMedia'] = $_POST['calcularMedia'];
            $_SESSION['calcularModa'] = $_POST['calcularModa'];
            $_SESSION['calcularMediana'] = $_POST['calcularMediana'];
           
        } else {
            $_SESSION['numerosAntiguo'] = $_SESSION['numeros'];
            $_SESSION['numeros'] = $_POST['numeros'];

            $_SESSION['calcularMediaAntigua'] = $_SESSION['calcularMedia'];
            $_SESSION['calcularMedia'] = $_POST['calcularMedia'];

            $_SESSION['calcularModaAntigua'] = $_SESSION['calcularModa'];
            $_SESSION['calcularModa'] = $_POST['calcularModa'];

            $_SESSION['calcularMedianaAntigua'] = $_SESSION['calcularMediana'];
            $_SESSION['calcularMediana'] = $_POST['calcularMediana'];

            echo "El dato introducido anteriormente es: ", $_SESSION['numerosAntiguo']. "-" .$_SESSION['calcularMediaAntigua']. "-" .$_SESSION['calcularModaAntigua']. "-" .$_SESSION['calcularMedianaAntigua'];
            
        }
        // Cambia "cliente nuevo" por el valor introducido en el Text
        ?>
</body>

</html>