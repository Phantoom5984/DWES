<?php
session_start();

$_SESSION['nombre'];
$_SESSION['apellidos'];
$_SESSION['edad'];
$_SESSION['peso'];
$_SESSION['genero'];
$_SESSION['estado_civil'];
$_SESSION['aficiones'];

echo "El dato introducido es: ", $_SESSION['nombre'] .
    "-" . $_SESSION['apellidos'] .
    "-" . $_SESSION['edad'] .
    "-" . $_SESSION['peso'] .
    "-" . $_SESSION['genero'] .
    "-" . $_SESSION['estado_civil'] .
    "-" . implode(", ", $_SESSION['aficiones']);
?>