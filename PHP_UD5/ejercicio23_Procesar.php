<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información del Usuario</title>
</head>
<body>
    <h2>Página 2: Información del Usuario</h2>

    <?php
    function validarDatos($dato) {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }
    $errores = array();
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($errores)) {
        $nombre = validarDatos($_POST["nombre"]);
        $nivelEstudios = validarDatos($_POST["nivelEstudios"]);
        $situacion = validarDatos($_POST["situacion"]);
        $hobbies = isset($_POST["hobbies"]) ? $_POST["hobbies"] : array();
        $otrosHobbies = validarDatos($_POST["otrosHobbies"]);

        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Nivel de Estudios:</strong> $nivelEstudios</p>";
        echo "<p><strong>Situación Actual:</strong> $situacion</p>";
        
     

        if ($otrosHobbies != "") {
            echo "<p><strong>Otros Hobbies:</strong> $otrosHobbies</p>";
        }
    }

       // Mostrar errores

        echo "<h3>Errores:</h3><ul>";
        foreach ($errores as $error) {
            echo "<li>$error</li>";
     
        echo "</ul>";
    }
    ?>

    <p><a href=" ejercicio23.php">Volver al formulario</a></p>
</body>
</html>
