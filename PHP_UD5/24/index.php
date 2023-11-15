<?php
require_once "valida.php";
    $nombre=isset($_POST["nombre"]) ? $_POST["nombre"] : null;
    $apellidos=isset($_POST["apellidos"]) ? $_POST["apellidos"] : null;
    $edad=isset($_POST["edad"]) ? $_POST["edad"] :null;
    $peso=isset($_POST["peso"]) ? $_POST["peso"] :null;
    $genero=isset($_POST["genero"]) ? $_POST["genero"] :null;
    $esCivil=isset($_POST["estado_civil"]) ? $_POST["estado_civil"] :null;
    $otroestado=isset($_POST["otroestado"]) ? $_POST["otroestado"] :null;
    $aficiones=isset($_POST["aficiones"]) ? $_POST["aficiones"] :[];
    $errores=array();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(!validaRequerido($nombre)){
            $errores[]="El nombre es obligatorio";
        }

        if(!validaRequerido($apellidos)){
            $errores[]="El apellido es obligatorio";
        }

        if(!validarEdad($edad)){
            $errores[]="La edad no es valida";
        }

        if(!validarPeso($peso)){
            $errores[]="El peso no es valido";
        }

        if(!validarCheckbox($aficiones)){
            $errores[]="Seleciona al menos una aficion";
        }

        if (!validarCheckbox($aficiones)) {
            $errores[] = 'Selecciona al menos un hobby.';
        }

        if(!$errores){
            $url = "mostrar.php?";
            $url .= "nombre=" . urlencode($nombre) . "&";
            $url .= "apellidos=" . urlencode($apellidos) . "&";
            $url .= "edad=" . urlencode($edad) . "&";
            $url .= "peso=" . urlencode($peso) . "&";
            $url .= "genero=" . urlencode($genero) . "&";
            $url .= "esCivil=" . urlencode($esCivil) . "&";
            $url .= "otroestado=" . urlencode($otroestado) . "&";
            $url .= "aficiones=" . implode(",", $aficiones);
    
        // Redireccionar a la URL construida
        header("Location: $url");
        exit;
        }
       
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <!-- Errores -->
    <?php if ($errores): ?>
        <ul style="color: #f00;">
            <?php foreach ($errores as $error): ?>
                <li><?php echo $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif;  ?>

    <form action="index.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>">
        <br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" value="<?php echo $apellidos; ?>">
        <br>

        <label for="edad">Edad:</label>
        <input type="text" name="edad" value="<?php echo $edad; ?>">
        <br>

        <label for="peso">Peso:</label>
        <input type="text" name="peso" value="<?php echo $peso; ?>">
        <br>

        <label for="sexo">Sexo:</label>
        <input type="radio" name="genero" value="hombre" <?php echo ($genero === "hombre") ? "checked" : ""; ?>> Hombre
        <input type="radio" name="genero" value="mujer" <?php echo ($genero === "mujer") ? "checked" : ""; ?>> Mujer
        <br>

        <label for="civil">Estado civil:</label>
        <input type="radio" name="estado_civil" value="soltero" <?php echo ($esCivil === "soltero") ? "checked" : ""; ?>> Soltero
        <input type="radio" name="estado_civil" value="casado" <?php echo ($esCivil === "casado") ? "checked" : ""; ?>> Casado
        <input type="radio" name="estado_civil" value="viudo" <?php echo ($esCivil === "viudo") ? "checked" : ""; ?>> Viudo
        <input type="radio" name="estado_civil" value="divorciado" <?php echo ($esCivil === "divorciado") ? "checked" : ""; ?>> Divorciado
        <input type="radio" name="estado_civil" value="otro" <?php echo ($esCivil === "otro") ? "checked" : ""; ?>> Otro
        <br>

        <input type="text" name="otroestado" value=<?php echo ($otroestado); ?>>
        <br>

        <label for="aficiones">Aficiones:</label>
        <input type="checkbox" name="aficiones[]" value="cine" <?php echo in_array("cine", $aficiones) ? "checked" : ""; ?>> Cine
        <input type="checkbox" name="aficiones[]" value="Deporte" <?php echo in_array("Deporte", $aficiones) ? "checked" : ""; ?>> Deporte
        <input type="checkbox" name="aficiones[]" value="Literatura" <?php echo in_array("Literatura", $aficiones) ? "checked" : ""; ?>> Literatura
        <input type="checkbox" name="aficiones[]" value="Música" <?php echo in_array("Música", $aficiones) ? "checked" : ""; ?>> Música
        <input type="checkbox" name="aficiones[]" value="Cómics" <?php echo in_array("Cómics", $aficiones) ? "checked" : ""; ?>> Cómics
        <input type="checkbox" name="aficiones[]" value="Series" <?php echo in_array("Series", $aficiones) ? "checked" : ""; ?>> Series
        <input type="checkbox" name="aficiones[]" value="Videojuegos" <?php echo in_array("Videojuegos", $aficiones) ? "checked" : ""; ?>> Videojuegos
        <br>

        <input type="reset" value="Borrar">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
