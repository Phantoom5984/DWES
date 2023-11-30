<?php
$nombre=$_GET['nombre'];
echo "<i>Nombre: </i><b>".strtoupper($nombre)."</b><br>";
$apellidos=$_GET['apellidos'];
echo "<i>Apellidos: </i><b>".strtoupper($apellidos)."</b><br>";
$usuario=$_GET['usuario'];
echo "<i>Nombre de usuario: </i><b>".strtoupper($usuario)."</b><br>";
$password=$_GET['password'];
echo "<i>Password: </i><b>".strtoupper($password)."</b><br>";
$sexo=$_GET['sexo'];
echo "<i>Sexo: </i><b>".strtoupper($sexo)."</b><br>";
$correo=$_GET['correo'];
echo "<i>Correo: </i><b>".strtoupper($correo)."</b><br>";
$provincia=$_GET['provincia'];
echo "<i>Provincia: </i><b>".strtoupper($provincia)."</b><br>";
$horario = $_GET['horario'];
echo "<i>Horario de contacto: </i><b>";
echo implode(" - ", $horario);
echo "</b><br>";
$conocer = $_GET['conocer'];
echo "<i>¿Cómo nos ha conocido?: </i><b>";
echo implode(" - ", $conocer);
echo "</b><br>";
$incidencia = $_GET['incidencia'];
echo "<i>La incidencia es: </i><b>".strtoupper($incidencia)."</b><br>";
$comentario=$_GET['comentario'];
echo "<i>Comentario: </i><b>".strtoupper($comentario)."</b><br>";
?>