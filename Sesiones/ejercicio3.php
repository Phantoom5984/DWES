<?php
/**
 * @author Adrián Oriola Martos
 * 3. Usa el formulario del ejercicio 3 de Cookies del selector de operación de modo que uses la
 * sesión para mostrar el resultado de la operación indicando cuáles han sido las operaciones
 * elegidas en la ejecución actual y el resultado y las operaciones elegidas en la ejecución anterior
 * a la actual.
 */
if (isset($_POST["calcular"])) {
    $numero1 = $_POST['numero1'];
    echo "El primer número introducido es: $numero1<br>";

    $numero2 = $_POST['numero2'];
    echo "El segundo número introducido es: $numero2<br>";

    $operario = $_POST['operadores'];
    foreach ($operario as $operadores => $valor) {

        if ($valor == "suma") {
            echo "El resultado es: " . $numero1 + $numero2;

        } else if ($valor == "resta") {
            echo "El resultado es: " . $numero1 - $numero2;

        } else if ($valor == "multiplicación") {
            echo "El resultado es: " . $numero1 * $numero2;

        } else if ($valor == "división") {
            echo "El resultado es: " . $numero1 / $numero2;

        }
    }

}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrián Oriola Martos</title>
</head>

<body>
    <form action="ejercicio3.php" method="post" enctype="multipart/form-data">

        <label for="numero1">Número 1:</label>
        <input type="text" name="numero1"><br><br>

        <label for="numero2">Número 2:</label>
        <input type="text" name="numero2"><br><br>

        <label for="selector">Selector de operaciones:</label>
        <select multiple name="operadores[]">
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multiplicación">Multiplicar</option>
            <option value="división">Dividir</option>
            <select><br><br>

                <input type="submit" name="calcular" value="Calcular"><br><br>
                <?php
                session_start(); //iniciamos la sesión
                
                if (empty($_SESSION['numero1']) && empty($_SESSION['numero2']) && empty($_SESSION['operadores'])) {
                    $_SESSION['numero1'] = $_POST['numero1'];
                    $_SESSION['numero2'] = $_POST['numero2'];
                    $_SESSION['operadores'] = $_POST['operadores'];
                } else {
                    $_SESSION['numero1Antiguo'] = $_SESSION['numero1'];
                    $_SESSION['numero1'] = $_POST['numero1'];

                    $_SESSION['numero2Antiguo'] = $_SESSION['numero2'];
                    $_SESSION['numero2'] = $_POST['numero2'];

                    $_SESSION['operadoresAntiguo'] = $_SESSION['operadores'];
                    $_SESSION['operadores'] = $_POST['operadores'];

                    echo "El dato introducido anteriormente es: ", $_SESSION['numero1Antiguo'] . "-" . $_SESSION['numero2Antiguo'] . "-" . implode(", ", $_SESSION['operadoresAntiguo']);
                }
                // Cambia "cliente nuevo" por el valor introducido en el Text
                ?>
    </form>
</body>

</html>