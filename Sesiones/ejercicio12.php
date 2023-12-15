<?php
/**
 * @author Adrián Oriola Martos
 * 12. Aplica la sesión en el ejercicio 24 de la UD5 para poder pasar los datos en lugar de construir la
 * url para enviarlos.
 */
session_start(); //iniciamos la sesión
    $nombre=isset($_POST["nombre"]) ? $_POST["nombre"] : null;
    $apellidos=isset($_POST["apellidos"]) ? $_POST["apellidos"] : "";
    $edad=isset($_POST["edad"]) ? $_POST["edad"] :"";
    $peso=isset($_POST["peso"]) ? $_POST["peso"] :"";
    $genero=isset($_POST["genero"]) ? $_POST["genero"] :null;
    $esCivil=isset($_POST["estado_civil"]) ? $_POST["estado_civil"] :null;
    $otroestado=isset($_POST["otroestado"]) ? $_POST["otroestado"] :null;
    $aficiones=isset($_POST["aficiones"]) ? $_POST["aficiones"] :[];
    $errores=array();
    function validaRequerido($valor){
        return trim($valor) !=="";
    }
    function validarEdad($valor){
        return is_numeric($valor) && $valor >= 0 && $valor <= 130;

    }
    function validarPeso($valor) {
        return is_numeric($valor) && $valor >= 10 && $valor <= 150;

    }
  
    function validarCheckbox($valor){
        return is_array($valor) && count($valor) > 0;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(!validaRequerido($nombre)){
            $errores[]="El nombre es obligatorio";
        } else {
            echo "Tu nombre es: ".$nombre."<br>";
        }

        if(!validaRequerido($apellidos)){
            $errores[]="El apellido es obligatorio";
        } else {
            echo "Tu/s apellido/s es/son: ".$apellidos."<br>";
        }

        if(!validarEdad($edad)){
            $errores[]="La edad no es validad";
        } else {
            echo "Tu edad es: ".$edad."<br>";
        }

        if(!validarPeso($peso)){
            $errores[]="El peso no es valido";
        } else {
            echo "Tu peso es: ".$peso."<br>";
        }
        if (!isset($genero)){
            $errores[] = "No has elegido un género";
        } else {
            echo "Tu género es: ".$genero."<br>";
        }
        if (!isset($esCivil)) {
            $errores[] = "No has seleccionado un estado civil";
        } else {
            echo "Tu estado civil actual es: ".$esCivil."<br>";
        }
        if(!validarCheckbox($aficiones)){
            $errores[]="Seleciona al menos una aficion";
        } else {
            echo "Aficiones: ".implode(", ", $aficiones)."<br>";
        }
    
        if (empty($_SESSION['nombre']) && empty($_POST['apellidos']) && empty($_POST['edad']) && empty($_POST['peso']) && empty($_POST['genero']) && empty($_POST['estado_civil'])&& empty($_POST['aficiones'])) {
            $_SESSION['nombre'] = $_POST['nombre'];
            $_SESSION['apellidos'] = $_POST['apellidos'];
            $_SESSION['edad'] = $_POST['edad'];
            $_SESSION['peso'] = $_POST['peso'];
            $_SESSION['genero'] = $_POST['genero'];
            $_SESSION['estado_civil'] = $_POST['estado_civil'];
            $_SESSION['aficiones'] = $_POST['aficiones'];
        
        } else {
            $_SESSION['nombreAntiguo'] = $_SESSION['nombre'];
            $_SESSION['nombre'] = $_POST['nombre'];

            $_SESSION['apellidosAntiguo'] = $_SESSION['apellidos'];
            $_SESSION['apellidos'] = $_POST['apellidos'];

            $_SESSION['edadAntiguo'] = $_SESSION['edad'];
            $_SESSION['edad'] = $_POST['edad'];

            $_SESSION['pesoAntiguo'] = $_SESSION['peso'];
            $_SESSION['peso'] = $_POST['peso'];

            $_SESSION['generoAntiguo'] = $_SESSION['genero'];
            $_SESSION['genero'] = $_POST['genero'];

            $_SESSION['estado_civilAntiguo'] = $_SESSION['estado_civil'];
            $_SESSION['estado_civil'] = $_POST['estado_civil'];

            $_SESSION['aficionesAntiguo'] = $_SESSION['aficiones'];
            $_SESSION['aficiones'] = $_POST['aficiones'];

        }
        if(isset($_POST['enviar'])){
            header('Location: ejercicio12mostrar.php');
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

    <form action="ejercicio12.php" method="post">
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

        <input type="text" name="otroestado" value="<?php echo htmlspecialchars($otroestado); ?>">
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
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>
