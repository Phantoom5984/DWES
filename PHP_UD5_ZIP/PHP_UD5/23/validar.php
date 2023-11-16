<?php
function validaRequerido($valor){
    return trim($valor) !=="";
}

function validarCheckbox($valor){
    return is_array($valor) && count($valor) >0;
}


?>