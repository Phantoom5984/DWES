<?php
    require_once "validar.php";
    $nombre=isset($_POST["nombre"]) ? $_POST["nombre"] : null;
    $estudios=isset($_POST["estudios"]) ? $_POST["estudios"] : null;
    $situacion=isset($_POST["situacion"]) ? $_POST["situacion"] : [];
    $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
    $otroHobby = isset($_POST['otro_hobby']) ? $_POST['otro_hobby'] : '';
    $apellidos=isset($_POST["apellidos"]) ?  $_POST["apellidos"] : null;
    $errores = array();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!validaRequerido($nombre)){
            $errores[] ="El campo nombre es obligatorio";
        }

        if(!validaRequerido($apellidos)){
            $errores[] ="El campo apellidos es obligatorio";
        }

        $nivelesEstudios = ['sin estudios', 'primaria', 'secundaria', 'universitario'];
        if (!in_array($estudios, $nivelesEstudios)) {
            $errores[] = 'Selecciona un nivel de estudios válido.';
        }

        if(!validarCheckbox($situacion)){
            $errores[]="Seleciona almenos una opcion";
        }

        if (in_array('otro', $hobbies) && empty($otroHobby)) {
            $errores[] = 'Especifica un hobby en el campo Otro.';
        } elseif (!validarCheckbox($hobbies)) {
            $errores[] = 'Selecciona al menos un hobby.';
        }

        if (!$errores) {
      
            $urlDatos = 'mostrar.php?nombre=' . urlencode($nombre) .
                        '&estudios=' . urlencode($estudios) .
                        '&situacion=' . urlencode(implode(',', $situacion)) .
                        '&hobbies=' . urlencode(implode(',', $hobbies)) .
                        '&otro_hobby=' . urlencode($otroHobby);
    
            header('Location: ' . $urlDatos);
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php if ($errores): ?>
        <ul style="color: #f00;">
            <?php foreach ($errores as $error): ?>
                <li><?php echo $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif;  ?>
    <form action="index.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>"></br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" value="<?php echo $apellidos; ?>"><br>
        <label for="nivel_estudios">Nivel de estudios:</label>
        <select name="estudios">
            <option value="sin estudios" <?php echo ($estudios == "sin estudios") ? "selected" :"" ?>>sin estudios</option>
            <option value="primaria" <?php echo($estudios == "primaria") ? "selected" :"" ?>>primaria</option>
            <option value="secundaria" <?php echo($estudios == "secundaria") ? "selected" :"" ?>>secundaria</option>
            <option value="universidad" <?php echo($estudios == "universidad") ? "selected" :"" ?>>universidad</option>
        </select></br>
        <label for="situacion">Situacion</label></br>
        <select name="situacion[]" multiple>
            <option value="estudiando" <?php echo in_array('estudiando', $situacion) ? 'selected' : ''; ?>>Estudiando</option>
            <option value="trabajando" <?php echo in_array('trabajando', $situacion) ? 'selected' : ''; ?>>Trabajando</option>
            <option value="buscando_empleo" <?php echo in_array('buscando_empleo', $situacion) ? 'selected' : ''; ?>>Buscando Empleo</option>
            <option value="desempleado" <?php echo in_array('desempleado', $situacion) ? 'selected' : ''; ?>>Desempleado</option>
        </select></br>

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