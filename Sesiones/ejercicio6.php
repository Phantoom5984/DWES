<?php
/**
 * @author Adrián Oriola Martos
 * 6. Usa el formulario del ejercicio 6 de Cookies con la tabla de multiplicar de modo que uses la
 * sesión para mostrar el multiplicando, el multiplicador y la tabla actuales y además muestre el
 * multiplicando, el multiplicador y la tabla de la ejecución anterior.
 */
// Obtener el número ingresado por el usuario
$numero = $_POST["numero"];

// Validar que el número sea un entero positivo
if (is_numeric($numero) && $numero > 0) {
    echo "<h2>Tabla de multiplicar del número $numero</h2>";
    echo "<ul>";

    // Generar la tabla de multiplicar
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<li>$numero x $i = $resultado</li>";
    }

    echo "</ul>";
} else {
    echo "<p>Por favor, ingrese un número entero positivo.</p>";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrián Oriola</title>
</head>

<body>
    <h1>Generador de Tabla de Multiplicar</h1>

    <form method="post" action="ejercicio6.php" enctype="multipart/form-data">
        <label for="numero">Ingrese un número:</label>
        <input type="text" name="numero" id="numero" required>
        <button type="submit">Generar Tabla de Multiplicar</button>
    </form>
    <?php
        session_start(); //iniciamos la sesión

        if (empty($_SESSION['numero'])) {
            $_SESSION['numero'] = $_POST['numero'];
           
        } else {
            $_SESSION['numeroAntiguo'] = $_SESSION['numero'];
            $_SESSION['numero'] = $_POST['numero'];

            echo "El dato introducido anteriormente es: ", $_SESSION['numeroAntiguo'];
            
        }
        // Cambia "cliente nuevo" por el valor introducido en el Text
        ?>
</body>

</html>