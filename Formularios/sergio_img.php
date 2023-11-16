<?php
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$imagen = isset($_FILES['imagen']) ? $_FILES['imagen'] : null;

$errores = array();

function validaRequerido($valor){
    if(trim($valor) == ''){
        return false;
    }else{
        return true;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!validaRequerido($nombre)) {
        $errores[] = 'El campo nombre es incorrecto.';
    }



    if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
        $nombreDirectorio = "./";

        $infoArchivo = pathinfo($_FILES['imagen']['name']);

        $extensionesPermitidas = array('jpg', 'png', 'gif');
        if (!in_array(strtolower($infoArchivo['extension']), $extensionesPermitidas)) {
            $errores[] = 'La extensión del archivo no es válida.';
        }

        define('TAMANO_MAXIMO', 0.1 * 1024 * 1024);
        if ($_FILES['imagen']['size'] > TAMANO_MAXIMO) {
            $errores[] = 'El tamaño del archivo excede el límite permitido.';
        }

        if (is_dir($nombreDirectorio) && is_writable($nombreDirectorio)) {
            $idUnico = time();
            $nombreFichero = $idUnico . "-" . $infoArchivo['filename'] . '.' . $infoArchivo['extension'];
            $nombreCompleto = $nombreDirectorio . $nombreFichero;

            move_uploaded_file($_FILES['imagen']['tmp_name'], $nombreCompleto);
            echo "Fichero subido con el nombre: $nombreFichero<br>";
        } else {
            $errores[] = 'El directorio de destino no es válido o no tiene permisos de escritura.';
        }
    } else {
        $errores[] = "No se ha podido subir el fichero.";
    }


    if (!$errores) {
        $params = http_build_query(array(
            'nombre' => $nombre,
            
            'imagen' => isset($nombreUnico) ? $nombreUnico : null,
        ));
        header('Location: sergio_img.php?' . $params);
        exit;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title> Formulario </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <?php if ($errores) : ?>
        <ul style="color: #f00;">
            <?php foreach ($errores as $error) : ?>
                <li> <?php echo $error ?> </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form method="post" action="sergio_img.php" enctype="multipart/form-data">

        <fieldset>
            <legend>Datos personales</legend>

            <label for="nombre"> Nombre: </label>
            <input type="text" id="nombre" name="nombre" maxlength="50" value="<?php echo $nombre ?>">
            <br><br>

            <input type="submit" value="Enviar" />
            <br>
            <label for="imagen">Adjuntar Foto:</label>
            <input type="file" id="imagen" name="imagen" />

        </fieldset>


    </form>
</body>

</html>