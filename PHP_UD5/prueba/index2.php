<?php
/* FICHERO INDEX.PHP */
require_once 'valida2.php'; // Importamos el archivo con las validaciones (requerido, y lo carga una vez).
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$estudios = isset($_POST['estudios']) ? $_POST['estudios'] : null;
$situacion = isset($_POST['situacion']) ? $_POST['situacion'] : [];
$hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
$otroHobby = isset($_POST['otro_hobby']) ? $_POST['otro_hobby'] : '';
$errores = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Validar nombre
    if (!validaRequerido($nombre)) {
        $errores[] = 'El campo Nombre es obligatorio.';
    }

    // Validar nivel de estudios
    $nivelesEstudios = ['sin_estudios', 'primaria', 'secundaria', 'universitario'];
    if (!in_array($estudios, $nivelesEstudios)) {
        $errores[] = 'Selecciona un nivel de estudios válido.';
    }

    // Validar situación actual (al menos una opción seleccionada)
    if (!validarCheckbox($situacion)) {
        $errores[] = 'Selecciona al menos una opción en Situación Actual.';
    }

    // Validar hobbies (al menos una opción seleccionada si selecciona 'otro')
    if (in_array('otro', $hobbies) && empty($otroHobby)) {
        $errores[] = 'Especifica un hobby en el campo Otro.';
    } elseif (!validarCheckbox($hobbies)) {
        $errores[] = 'Selecciona al menos un hobby.';
    }
    if (!$errores) {
        // Construir la URL con los datos
        $urlDatos = 'mostrar_datos.php?nombre=' . urlencode($nombre) .
                    '&estudios=' . urlencode($estudios) .
                    '&situacion=' . urlencode(implode(',', $situacion)) .
                    '&hobbies=' . urlencode(implode(',', $hobbies)) .
                    '&otro_hobby=' . urlencode($otroHobby);

        // Redirigir a la URL con los datos
        header('Location: ' . $urlDatos);
        exit;
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php if ($errores): ?>
    <ul style="color: #f00;">
        <?php foreach ($errores as $error): ?>
            <li><?php echo $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form method="post" action="index2.php">
    <label>Nombre:</label><br />
    <input type="text" name="nombre" value="<?php echo htmlspecialchars($nombre) ?>" required /><br />

    <label>Nivel de Estudios:</label><br />
    <select name="estudios" required>
        <option value="sin_estudios" <?php echo ($estudios === 'sin_estudios') ? 'selected' : ''; ?>>Sin Estudios</option>
        <option value="primaria" <?php echo ($estudios === 'primaria') ? 'selected' : ''; ?>>Primaria</option>
        <option value="secundaria" <?php echo ($estudios === 'secundaria') ? 'selected' : ''; ?>>Secundaria</option>
        <option value="universitario" <?php echo ($estudios === 'universitario') ? 'selected' : ''; ?>>Universitario</option>
    </select><br />

    <!-- Cambiar de casillas de verificación a desplegable con selección múltiple -->
<label for="situacion">Situación Actual:</label><br />
<select name="situacion[]" multiple>
    <option value="estudiando" <?php echo in_array('estudiando', $situacion) ? 'selected' : ''; ?>>Estudiando</option>
    <option value="trabajando" <?php echo in_array('trabajando', $situacion) ? 'selected' : ''; ?>>Trabajando</option>
    <option value="buscando_empleo" <?php echo in_array('buscando_empleo', $situacion) ? 'selected' : ''; ?>>Buscando Empleo</option>
    <option value="desempleado" <?php echo in_array('desempleado', $situacion) ? 'selected' : ''; ?>>Desempleado</option>
</select><br />

    <br />

    <label>Hobbies:</label><br />
    <input type="checkbox" name="hobbies[]" value="deportes" <?php echo in_array('deportes', $hobbies) ? 'checked' : ''; ?>> Deportes<br />
    <input type="checkbox" name="hobbies[]" value="lectura" <?php echo in_array('lectura', $hobbies) ? 'checked' : ''; ?>> Lectura<br />
    <input type="checkbox" name="hobbies[]" value="viajes" <?php echo in_array('viajes', $hobbies) ? 'checked' : ''; ?>> Viajes<br />
    <input type="checkbox" name="hobbies[]" value="otro" <?php echo in_array('otro', $hobbies) ? 'checked' : ''; ?>> Otro (Especificar):<br />
    <input type="text" name="otro_hobby" value="<?php echo htmlspecialchars($otroHobby) ?>"><br />

    <input type="submit" value="Enviar" />
</form>
</body>
</html>
