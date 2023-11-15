<?php
function validarRequerido($valor){
    if (trim($valor) == '') {
        return false;
    } else {
        return true;
    }
}

function validadEdad($valor){
    if($valor<0 && $valor>130 && ctype_xdigit($valor)){
        return false;
    }else{
        return true;
    }
}

function validadPeso($valor){
    if($valor<10 && $valor>150){
        return false;
    }else{
        return true;
    }
}

?>