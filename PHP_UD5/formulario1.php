<?php
    $hora=$_POST["hora"];
    //validar hora 
    if (!empty($hora) && is_numeric($hora) && $hora >= 0 && $hora <= 23) {
        if ($hora >= 6 && $hora <= 12) {
            $saludo = "Buenos días";
        } elseif ($hora >= 13 && $hora <= 20) {
            $saludo = "Buenas tardes";
        } else {
            $saludo = "Buenas noches";
        }
    } else {
        echo "<p>Por favor, introduce una hora válida (0-23).</p>";
    }
    echo $saludo;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario </title>
</head>
<body>
    <form method="post" action="formulario1.php">
        <br>
        <label for="hora">Introduce la hora (0-23):</label>
        <input type="text" name="hora" value="<?php echo $hora; ?>">
        <br>

        <input type="submit" value="Obtener Saludo">
    </form>
</body>
</html>
