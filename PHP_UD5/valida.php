<?php
function validaRequerido($valor)
{ 
    // Obliga a introducir datos en campos requeridos
    if (trim($valor) == '') {
        return false;
    } else {
        return true;
    }
}

function validarEntero($valor, $opciones = null)
{ 
    // Valida que se haya introducido un número entero
    if (filter_var($valor, FILTER_VALIDATE_INT, $opciones) === FALSE) {
        return false;
    } else {
        return true;
    }
}

function validaEmail($valor)
{ 
    // Valida que se haya introducido un email (user@ejemplo.com)
    if (filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE) {
        return false;
    } else {
        return true;
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
    <strong>Sus datos han sido enviados correctamente</strong>
</body>
</html>
