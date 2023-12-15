<?php 

session_start(); //iniciamos la sesión

$_SESSION['nombre'];

$_SESSION['apellidos'];

$_SESSION['estudios'];

$_SESSION['situacion'];

$_SESSION['hobbies'];

echo "El dato introducido es: ", $_SESSION['nombre'] .
    "-" . $_SESSION['apellidos'] .
    "-" . $_SESSION['estudios'] .
    "-" . implode(", ", $_SESSION['situacion']).
    "-" . implode(", ", $_SESSION['hobbies']);

?>