<!DOCTYPE html>
<html>
<head>
    <title>Datos Recogidos</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <h1>Datos Recogidos</h1>

    <?php
        $nombre=isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : '';
        $correo = isset($_GET['correo']) ? htmlspecialchars($_GET['correo']) : '';
        $usuario=isset($_GET['usuario']) ? htmlspecialchars($_GET['usuario']) : '';
        $password=isset($_GET['password']) ? htmlspecialchars($_GET['password']) : '';
        $telefono=isset($_GET['telefono']) ? htmlspecialchars($_GET['telefono']) : '';
        $direccion=isset($_GET['direccion']) ? htmlspecialchars($_GET['direccion']) : '';
        $CP=isset($_GET['CP']) ? htmlspecialchars($_GET['CP']) : '';
        $usuarioTipo=isset($_GET['usuarioTipo']) ? htmlspecialchars($_GET['usuarioTipo']) : '';
        $ley = isset($_GET['ley']) ? htmlspecialchars($_GET['ley']) : '';
        $contacto=isset($_GET['contacto']) ? htmlspecialchars($_GET['contacto']) : '';
        $preferencias = isset($_GET['preferencias']) ? htmlspecialchars($_GET['preferencias']) : '';
        $pago=isset($_GET['pago']) ? htmlspecialchars($_GET['pago']) : '';
    echo("<p style='color:blue;'>Sus datos han sido enviados correctamente - Sergio");
    foreach ($_GET as $tipo=>$dato){
        echo "<p><i>".ucfirst($tipo)."</i> tiene el valor <strong>".  strtoupper($dato) ."</strong> </p>";
}

$datos=array("personales"=>array("nombre"=>$nombre,"correo"=>$correo,"usuario"=>$usuario,"password"=>$password,"telefono"=>$telefono,"direccion"=>$direccion,"CP"=>$CP),
"contacto"=>array("ley"=>$ley,"contacto"=>$contacto,"preferencias"=>$preferencias),
"pago"=>$pago
);
foreach ($datos as $tipo=>$dato){
    echo "<p><i>".ucfirst($tipo)."</i> tiene el valor".  $dato["personales"]["nombre"] ." </p>";
    echo "<p><i>".ucfirst($tipo)."</i> tiene el valor".  $dato["personales"]["correo"] ." </p>";
    echo "<p><i>".ucfirst($tipo)."</i> tiene el valor".  $dato["personales"]["usuario"] ." </p>";
    echo "<p><i>".ucfirst($tipo)."</i> tiene el valor".  $dato["personales"]["password"] ." </p>";
    echo "<p><i>".ucfirst($tipo)."</i> tiene el valor".  $dato["personales"]["telefono"] ." </p>";
    echo "<p><i>".ucfirst($tipo)."</i> tiene el valor".  $dato["personales"]["direccion"] ." </p>";
    echo "<p><i>".ucfirst($tipo)."</i> tiene el valor".  $dato["personales"]["CP"] ." </p>";
    echo "<p><i>".ucfirst($tipo)."</i> tiene el valor".  $dato["contacto"]["ley"] ." </p>";
    echo "<p><i>".ucfirst($tipo)."</i> tiene el valor".  $dato["contacto"]["contacto"] ." </p>";
    echo "<p><i>".ucfirst($tipo)."</i> tiene el valor".  $dato["contacto"]["preferencias"] ." </p>";
    echo "<p><i>".ucfirst($tipo)."</i> tiene el valor".  $dato["pago"] ." </p>";
}
    ?>

</body>
</html>
