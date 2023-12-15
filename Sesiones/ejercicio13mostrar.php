<?php 
session_start();

foreach ($_SESSION['imagen'] as $clave => $valor) {
 echo "El dato introducido es: $clave => $valor<br>";
}
 echo "La imagen es:<br> <img src=",$_SESSION["imagen"]["ruta"],$_SESSION["imagen"]["nombre"],".",$_SESSION["imagen"]["extension"],">";
?>