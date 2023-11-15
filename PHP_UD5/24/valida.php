<?php
    function validaRequerido($valor){
        return trim($valor) !=="";
    }
    function validarEdad($valor){
        return is_numeric($valor) && $valor > 0 && $valor < 130;

    }
    function validarPeso($valor) {
        return is_numeric($valor) && $valor >= 10 && $valor <= 150;

    }
    function validarCheckbox($valor){
        return is_array($valor) && count($valor) > 0;
    }
?>