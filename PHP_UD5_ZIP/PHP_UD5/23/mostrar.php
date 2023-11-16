<!-- FICHERO MOSTRAR_DATOS.PHP -->
<!DOCTYPE html>
<html>
<head>
    <title>Datos Recogidos</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <h1>Datos Recogidos</h1>

    <?php
    // Recoge los datos de la URL después de la redirección
    $nombre = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : '';
    $estudios = isset($_GET['estudios']) ? htmlspecialchars($_GET['estudios']) : '';
    $situacion = isset($_GET['situacion']) ? htmlspecialchars($_GET['situacion']) : '';
    $hobbies = isset($_GET['hobbies']) ? htmlspecialchars($_GET['hobbies']) : '';
    $otroHobby = isset($_GET['otro_hobby']) ? htmlspecialchars($_GET['otro_hobby']) : '';

    // Muestra los datos
    echo '<p><strong>Nombre:</strong> ' . $nombre . '</p>';
    echo '<p><strong>Nivel de Estudios:</strong> ' . $estudios . '</p>';
    echo '<p><strong>Situación Actual:</strong> ' . $situacion . '</p>';
    echo '<p><strong>Hobbies:</strong> ' . $hobbies;
    if (!empty($otroHobby)) {
        echo ' - Otro: ' . $otroHobby;
    }
    echo '</p>';
    ?>

</body>
</html>
