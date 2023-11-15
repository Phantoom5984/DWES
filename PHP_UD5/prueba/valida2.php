<?php
// FICHERO VALIDACION.PHP

function validaRequerido($valor)
{ 
    // Obliga a introducir datos en campos requeridos
    return trim($valor) !== '';
}

function validarEntero($valor, $opciones = null)
{ 
    // Valida que se haya introducido un número entero
    return filter_var($valor, FILTER_VALIDATE_INT, $opciones) !== false;
}

function validaEmail($valor)
{ 
    // Valida que se haya introducido un email (user@ejemplo.com)
    return filter_var($valor, FILTER_VALIDATE_EMAIL) !== false;
}

function validarCheckbox($valor)
{
    // Valida que al menos una opción esté seleccionada en un array de checkboxes
    return is_array($valor) && count($valor) > 0;
}

?>
