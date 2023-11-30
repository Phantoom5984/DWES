<?php
$errores = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        empty($_POST["nombre"]) || empty($_POST["apellidos"]) || empty($_POST["edad"]) ||
        empty($_POST["peso"]) || empty($_POST["sexo"]) || empty($_POST["estado_civil"])
    ) {
        echo "<p>Error: Todos los campos son obligatorios.</p>";
        $errores = true;
    } elseif ($_POST["peso"] < 10 || $_POST["peso"] > 150) {
        echo "<p>Error: El peso debe estar entre 10 y 150.</p>";
        $errores = true;
    }
}

// Si no hay errores, mostrar la información del usuario
if (!$errores && $_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p><strong>Nombre:</strong> " . $_POST["nombre"] . "</p>";
    echo "<p><strong>Apellidos:</strong> " . $_POST["apellidos"] . "</p>";
    echo "<p><strong>Edad:</strong> " . $_POST["edad"] . "</p>";
    echo "<p><strong>Peso:</strong> " . $_POST["peso"] . "</p>";
    echo "<p><strong>Sexo:</strong> " . $_POST["sexo"] . "</p>";
    echo "<p><strong>Estado Civil:</strong> " . $_POST["estado_civil"] . "</p>";

    echo "<p><strong>Aficiones:</strong> ";
    if (!empty($_POST["aficiones"])) {
        $aficiones = $_POST["aficiones"];
        foreach ($aficiones as $aficion) {
            echo $aficion . ", ";
        }
    }
    echo "</p>";
} else {
    echo "<p>Por favor, regrese al <a href='formulario.php'>formulario</a> y complete la información.</p>";
}
?>