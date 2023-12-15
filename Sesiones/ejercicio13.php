<?php
/**
 * @author Adrián Oriola Martos
 * 13. Aplica la sesión en el ejercicio 25 de la UD5 para poder pasar los datos en lugar de construir la
 * url para enviarlos (de la foto sólo enviaremos nombre, extensión, ruta y tamaño).
 */
session_start(); //iniciamos la sesión
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$correo = isset($_POST['correo']) ? $_POST['correo'] : null;
$estudios = isset($_POST['estudios']) ? $_POST['estudios'] : null;
$nacionalidad = isset($_POST['nacionalidad']) ? $_POST['nacionalidad'] : null;
$idiomas = isset($_POST['idiomas']) ? $_POST['idiomas'] : array();
$imagen = isset($_FILES['imagen']) ? $_FILES['imagen'] : null;

$errores = array(); //Este array guardará los errores de validación que surjan.
//Pregunta si está llegando una petición por POST, lo que significa que el usuario envió el formulario.
function validaRequerido($valor)
{ //Obliga a introducir datos en campos requeridos
    if (trim($valor) == '') {
        return false;
    } else {
        return true;
    }
}
function validarEntero($valor, $opciones = null)
{ //valida que se haya introducido un número entero
    if (filter_var($valor, FILTER_VALIDATE_INT, $opciones) === FALSE) {
        return false;
    } else {
        return true;
    }
}
function validaEmail($valor)
{ //valida que se haya introducido un email user@ejemplo.com
    if (filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE) {
        return false;
    } else {
        return true;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!validaRequerido($nombre)) { //Valida que el campo nombre no esté vacío.
        $errores[] = 'El campo nombre es incorrecto.';
    } else {
        echo "Tu nombre es: " . $nombre . "<br>";
    }
    if (!validaEmail($correo)) {
        $errores[] = 'El campo email es incorrecto.';
    } else {
        echo "Tu correo es: " . $correo . "<br>";
    }

    //Esto debería de ir en form24valida
    if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
        $nombreDirectorio = "img/";

        // Obtener información sobre el archivo
        $infoArchivo = pathinfo($_FILES['imagen']['name']);

        // Verificar la extensión del archivo
        $extensionesPermitidas = array('jpg', 'jpeg', 'png', 'gif');
        if (!in_array(strtolower($infoArchivo['extension']), $extensionesPermitidas)) {
            $errores[] = 'La extensión del archivo no es válida.';
        }

        // Verificar el tamaño del archivo (5 MB)
        define('TAMANO_MAXIMO', 5 * 1024 * 1024); // 5 MB
        if ($_FILES['imagen']['size'] > TAMANO_MAXIMO) {
            $errores[] = 'El tamaño del archivo excede el límite permitido.';
        }
        $tamanyoImagen = $_FILES['imagen']['size'];
        // Verificar que el directorio de destino exista y sea escribible
        if (is_dir($nombreDirectorio) && is_writable($nombreDirectorio)) {
            $idUnico = time();
            $nombreFichero = $infoArchivo['filename'] . '.' . $infoArchivo['extension'];
            $nombreCompleto = $nombreDirectorio . $nombreFichero;

            move_uploaded_file($_FILES['imagen']['tmp_name'], $nombreCompleto);
            echo "Fichero subido con el nombre: $nombreFichero<br>";

            $_SESSION['imagen'] = array(
                'nombre' => $infoArchivo['filename'],
                'extension' => $infoArchivo['extension'],
                'ruta' => $nombreDirectorio,
                'size' => $_FILES['imagen']['size']." KB"
            );
            print_r($_SESSION);
        } else {
            $errores[] = 'El directorio de destino no es válido o no tiene permisos de escritura.';
        }
    } else {
        $errores[] = "No se ha podido subir el fichero.";
    }

    if (empty($_SESSION['nombre']) && empty($_SESSION['password']) && empty($_SESSION['estudios']) && empty($_SESSION['nacionalidad']) && empty($_SESSION['idiomas']) && empty($_SESSION['correo'])) {
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['estudios'] = $_POST['estudios'];
        $_SESSION['nacionalidad'] = $_POST['nacionalidad'];
        $_SESSION['idiomas'] = $_POST['idiomas'];
        $_SESSION['correo'] = $_POST['correo'];

    }
}
if (isset($_POST['enviar'])) {
     header('Location: ejercicio13mostrar.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <title> Formulario </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <?php if ($errores): ?>
        <ul style="color: #f00;">
            <?php foreach ($errores as $error): ?>
                <li>
                    <?php echo $error ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form method="post" action="ejercicio13.php" enctype="multipart/form-data">

        <fieldset>
            <legend>Datos personales</legend>

            <label for="nombre"> Nombre: </label>
            <input type="text" id="nombre" name="nombre" maxlength="50" value="<?php echo $nombre ?>">
            <br><br>

            <label for="clave"> Password: </label>
            <input type="password" id="clave" name="clave" maxlength="15" value="<?php echo $clave ?>">
            <br><br>


            <label for="estudios"> Nivel de estudios: </label>
            <select name="estudios" id="estudios">
                <option value="Sin estudios">Sin estudios</option>
                <option value="ESO">ESO</option>
                <option value="Bachillerato">Bachillerato</option>
                <option value="FP">FP</option>
                <option value="Universidad">Universidad</option>

            </select>
            <br><br>

            <label for="nacionalidad"> Nacionalidad: </label>
            <select name="nacionalidad" id="nacionalidad">
                <option value="espanyola">Española</option>
                <option value="otra">Otra</option>

            </select>
            <br><br>


            <label>Idiomas</label>
            <br>
            <label for="espanyol">Español</label>
            <input type="checkbox" name="idiomas[]" id="espanyol" value="espanyol">
            <label for="ingles">Inglés</label>
            <input type="checkbox" name="idiomas[]" id="ingles" value="ingles">
            <label for="frances">Francés</label>
            <input type="checkbox" name="idiomas[]" id="frances" value="frances">
            <label for="aleman">Alemán</label>
            <input type="checkbox" name="idiomas[]" id="aleman" value="aleman">
            <label for="italiano">Italiano</label>
            <input type="checkbox" name="idiomas[]" id="italiano" value="italiano">

            <br><br>

            <label for="correo"> Correo: </label>
            <input type="text" id="correo" name="correo" maxlength="250">
            <br><br>

            <input type="submit" value="Enviar" name="enviar" />
            <br>
            <label for="imagen">Adjuntar Foto:</label>
            <input type="file" id="imagen" name="imagen" />

        </fieldset>


    </form>
</body>

</html>