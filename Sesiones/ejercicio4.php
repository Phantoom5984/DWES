<?php
/**
 * @author Adrián Oriola Martos
 * 4. Usa el formulario del ejercicio 4 de Cookies del conversor de euros y pesetas de modo que uses
 * la sesión para mostrar la cantidad, moneda y conversión actuales y además muestre la cantidad,
 * moneda y conversión anterior.
 */
if (isset($_POST["enviarEuros"])) {
    $enviarEuros = $_POST["enviarEuros"];
    $euros = $_POST["euros"];
    $pesetas = $_POST["pesetas"];
    $opciones = $_POST["opciones"];

    if ($opciones === "euros") {
        $resultado = $euros * 166.386;
        echo "La cantidad de euros convertida a pesetas es: " . round($resultado, 3) . "\n";
    } else if ($opciones === "pesetas") {
        echo $opciones;
        $resultado = $euros / 166.386;
        echo "La cantidad de pesetas convertida a euros es: " . round($resultado, 3) . "\n";
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
    <form action="ejercicio4.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>CALCULADORA</legend>

            <input type="radio" name="opciones" value="euros">Euros<br><br>
            <input type="radio" name="opciones" value="pesetas">Pesetas<br><br>

            <input type="text" name="euros" placeholder="Indica la cantidad aquí..."><br><br>
            <label for="informacion">1€ equivale a 166.386 pesetas</label><br><br>
            <label for="informacion">1pta equivale a 0,0060 euros</label><br><br>

            <input type="submit" name="enviarEuros" value="Calcular"><br><br>
        </fieldset>
        <?php
        session_start(); //iniciamos la sesión

        if (empty($_SESSION['opciones']) && empty($_POST['euros'])) {
            $_SESSION['opciones'] = $_POST['opciones'];
            $_SESSION['euros'] = $_POST['euros'];
        
        } else {
            $_SESSION['opcionesAntiguo'] = $_SESSION['opciones'];
            $_SESSION['opciones'] = $_POST['opciones'];

            $_SESSION['eurosAntiguo'] = $_SESSION['euros'];
            $_SESSION['euros'] = $_POST['euros'];

            echo "El dato introducido anteriormente es: ", $_SESSION['opcionesAntiguo']. "-" .$_SESSION['eurosAntiguo'];
            
        }
        // Cambia "cliente nuevo" por el valor introducido en el Text
        ?>
    </form>
</body>

</html>