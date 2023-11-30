<?php
$nombre=$_POST['nombre'];
echo "<i>Nombre: </i><b>".strtoupper($nombre)."</b><br>";
$apellidos=$_POST['apellidos'];
echo "<i>Apellidos: </i><b>".strtoupper($apellidos)."</b><br>";
$usuario=$_POST['usuario'];
echo "<i>Nombre de usuario: </i><b>".strtoupper($usuario)."</b><br>";
$password=$_POST['password'];
echo "<i>Password: </i><b>".strtoupper($password)."</b><br>";
$sexo=$_POST['sexo'];
echo "<i>Sexo: </i><b>".strtoupper($sexo)."</b><br>";
$correo=$_POST['correo'];
echo "<i>Correo: </i><b>".strtoupper($correo)."</b><br>";
$provincia=$_POST['provincia'];
echo "<i>Provincia: </i><b>".strtoupper($provincia)."</b><br>";
$situacion = $_POST['situacion'];
echo "<i>Situación: </i><b>";
echo implode(" - ", $situacion);
echo "</b><br>";
$comentario=$_POST['comentario'];
echo "<i>Comentario: </i><b>".strtoupper($comentario)."</b><br>";
$checbox1=isset($_POST['checbox1']) ? "<b>Ha seleccionado recibir ofertas</b>" : "<b>No ha seleccionado recibir ofertas</b>";
echo strtoupper($checbox1)."<br>";
$checbox2=isset($_POST['checbox2']) ? "<b>Ha seleccionado aceptar las condiciones</b>" : "<b>No ha seleccionado aceptar las condiciones</b>";
echo strtoupper($checbox2)."<br>";
?>