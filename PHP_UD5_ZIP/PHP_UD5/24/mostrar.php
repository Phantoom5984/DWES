<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $nombre = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : '';
    // $apellidos = isset($_GET['apellidos']) ? htmlspecialchars($_GET['apellidos']) : '';
    // $edad = isset($_GET['edad']) ? htmlspecialchars($_GET['edad']) : '';
    // $peso = isset($_GET['peso']) ? htmlspecialchars($_GET['peso']) : '';
    // $genero = isset($_GET['genero']) ? htmlspecialchars($_GET['genero']) : '';
    // $esCivil = isset($_GET['estado_civil']) ? htmlspecialchars($_GET['estado_civil']) : '';
    // $otroestado = isset($_GET['otroestado']) ? htmlspecialchars($_GET['otroestado']) : '';
    // $aficiones = isset($_GET['aficiones']) ? htmlspecialchars($_GET['aficiones']) : '';

    // echo '<p><strong>Nombre:</strong> '. $nombre. '</p>';
    // echo '<p><strong>Apellidos:</strong> '. $apellidos. '</p>';
    // echo '<p><strong>Edad:</strong> '. $edad. '</p>';
    // echo '<p><strong>Peso:</strong> '. $peso. '</p>';
    // echo '<p><strong>Sexo:</strong> '. $genero. '</p>';
    // echo '<p><strong>Estado Civil:</strong> '. $esCivil. '</p>';
    // if(!empty($otroestado)){
    //     echo '<p><strong>Otro Estado:</strong> '. $otroestado. '</p>';
    // }
    // echo '<p><strong>Aficiones:</strong> '. $aficiones. '</p>';
    foreach ($_GET as $key => $value) {
        echo '<p><strong>'. $key. ':</strong> '. $value. '</p>';
    }
    ?>
</body>
</html>