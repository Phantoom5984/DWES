<?php 
$nombre=$_GET['nombre'];
echo "<i>Nombre: </i><b>".strtoupper($nombre)."</b><br>";
$apellidos=$_GET['apellidos'];
echo "<i>Apellidos: </i><b>".strtoupper($apellidos)."</b><br>";
$sexo=$_GET['sexo'];
echo "<i>Sexo: </i><b>".strtoupper($sexo)."</b><br>";
$correo=$_GET['correo'];
echo "<i>Correo: </i><b>".strtoupper($correo)."</b><br>";
$provincia=$_GET['provincia'];
echo "<i>Provincia: </i><b>".strtoupper($provincia)."</b><br>";
$checbox1=isset($_GET['checbox1']) ? "<b>Ha seleccionado recibir ofertas</b>" : "<b>No ha seleccionado recibir ofertas</b>";
echo strtoupper($checbox1)."<br>";
$checbox2=isset($_GET['checbox2']) ? "<b>Ha seleccionado aceptar las condiciones</b>" : "<b>No ha seleccionado aceptar las condiciones</b>";
echo strtoupper($checbox2)."<br>";
?>