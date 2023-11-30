<?php 
$correo = $_GET["correo"];
   if(filter_var($correo, FILTER_VALIDATE_EMAIL) && isset($_GET["publicidad"])){
    echo ("El usuario con email $correo ha aceptado recibir publicidad <br>");
}else if(filter_var($correo, FILTER_VALIDATE_EMAIL) && !isset($_GET["publicidad"])){
    echo ("El usuario con email $correo no ha aceptado recibir publicidad <br>");;
}
else{
    echo ("El correo está mal puesto");;
}
?>