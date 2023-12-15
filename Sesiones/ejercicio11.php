<?php
/**
 * @author Adrián Oriola Martos
 * 
 * 11. Aplica la sesión en el ejercicio 23 de la UD5 para poder pasar los datos en lugar de construir la
 * url para enviarlos.
 */
    session_start(); //iniciamos la sesión
    $nombre=isset($_POST["nombre"]) ? $_POST["nombre"] : null;
    $estudios=isset($_POST["estudios"]) ? $_POST["estudios"] : null;
    $situacion=isset($_POST["situacion"]) ? $_POST["situacion"] : [];
    $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
    $otroHobby = isset($_POST['otro_hobby']) ? $_POST['otro_hobby'] : '';
    $apellidos=isset($_POST["apellidos"]) ?  $_POST["apellidos"] : null;
    $errores = array();
    function validaRequerido($valor){
        return trim($valor) !=="";
    }
    
    function validarCheckbox($valor){
        return is_array($valor) && count($valor) >0;
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!validaRequerido($nombre)){
            $errores[] ="El campo nombre es obligatorio";
        } else {
            echo "Tu nombre es: ".$nombre."<br>";
        }

        if(!validaRequerido($apellidos)){
            $errores[] ="El campo apellidos es obligatorio";
        } else {
            echo "Tu/s apellido/s es/son: ".$apellidos."<br>";
        }

        $nivelesEstudios = ['sin estudios', 'primaria', 'secundaria', 'universitario'];
        if (!in_array($estudios, $nivelesEstudios)) {
            $errores[] = 'Selecciona un nivel de estudios válido.';
        } else {
            echo "Tu nivel de estudios es: ".$estudios."<br>";
        }

        if(!validarCheckbox($situacion)){
            $errores[]="Seleciona almenos una opcion";
        } else {
            echo "La situación en la que te encuentras actualmente es: ".implode(", ",$situacion)."<br>";
        }

        if (in_array('otro', $hobbies) && empty($otroHobby)) {
            $errores[] = 'Especifica un hobby en el campo Otro.';
        } elseif (!validarCheckbox($hobbies)) {
            $errores[] = 'Selecciona al menos un hobby.';
        } else {
            echo "Tus hobbies son: ".implode(", ",$hobbies)."<br>";
        }
        if (
            empty($_SESSION["nombre"]) && empty($_SESSION["apellidos"]) && empty($_SESSION["estudios"])
            && empty($_SESSION["trabajo"]) && empty($_SESSION["hobbies"])
        ) {
            $_SESSION["nombre"] = $_POST["nombre"];
            $_SESSION["apellidos"] = $_POST["apellidos"];
            $_SESSION["estudios"] = $_POST["estudios"];
            $_SESSION["situacion"] = $_POST["situacion"];
            $_SESSION["hobbies"] = $_POST["hobbies"];
            
        } else {
            $_SESSION["nombreAntiguo"]  = $_SESSION["nombre"];
            $_SESSION["nombre"] = $_POST["nombre"];

            $_SESSION["apellidosAntiguo"]  = $_SESSION["apellidos"];
            $_SESSION["apellidos"] = $_POST["apellidos"];

            $_SESSION["estudiosAntiguo"]  = $_SESSION["estudios"];
            $_SESSION["estudios"] = $_POST["estudios"];

            $_SESSION["trabajoAntiguo"]  = $_SESSION["trabajo"];
            $_SESSION["trabajo"] = $_POST["trabajo"];

            $_SESSION["hobbiesAntiguo"]  = $_SESSION["hobbies"];
            $_SESSION["hobbies"] = $_POST["hobbies"];

        }
        if(isset($_POST['enviar'])){
            header('Location: ejercicio11mostrar.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Adrián Oriola</title>
</head>
<body>
  <?php if ($errores): ?>
        <ul style="color: #f00;">
            <?php foreach ($errores as $error): ?>
                <li><?php echo $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif;  ?>
    <form action="ejercicio11.php" method="post">
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
        <input type="checkbox" name="hobbies[]" value="deportes" <?php echo in_array('deportes', $hobbies) ? 'checked' : ''; ?>> Deportes<br/>
        <input type="checkbox" name="hobbies[]" value="lectura" <?php echo in_array('lectura', $hobbies) ? 'checked' : ''; ?>> Lectura<br/>
        <input type="checkbox" name="hobbies[]" value="viajes" <?php echo in_array('viajes', $hobbies) ? 'checked' : ''; ?>> Viajes<br/>
        <input type="checkbox" name="hobbies[]" value="otro" <?php echo in_array('otro', $hobbies) ? 'checked' : ''; ?>> Otro (Especificar):<br/>
        <input type="text" name="otro_hobby" value="<?php echo htmlspecialchars($otroHobby) ?>"><br />

    <input type="submit" value="Enviar" name="enviar"/>
    </form>
</body>
</html>