<?php
    $nombre=isset($_POST["nombre"]) ? $_POST["nombre"] : null;
    $correo = isset($_POST['correo']) ? $_POST['correo'] : null;
    $usuario=isset($_POST["usuario"]) ? $_POST["usuario"] : null;
    $password=isset($_POST["password"]) ? $_POST["password"] : null;
    $telefono=isset($_POST["telefono"]) ? $_POST["telefono"] : null;
    $direccion=isset($_POST["direccion"]) ? $_POST["direccion"] : null;
    $CP=isset($_POST["CP"]) ? $_POST["CP"] : null;
    $usuarioTipo=isset($_POST["usuarioTipo"]) ? $_POST["usuarioTipo"] : null;
    $ley = isset($_POST['ley']) ? $_POST['ley'] : [];
    $contacto=isset($_POST["contacto"]) ? $_POST["contacto"] : [];
    $preferencias = isset($_POST['preferencias']) ? $_POST['preferencias'] : [];
    $pago=isset($_POST["pago"]) ? $_POST["pago"] : null;
    $errores = array();

     function validaRequerido($valor){
         if(trim($valor) === ''){
             return false;
         }else{
             return true;
         }
     }

     function validarNum($valor){
        return is_numeric($valor) && $valor > 100000000 && $valor < 1000000000;

    }

    function validarPas($valor){
        return $valor && count($valor) > 5;

    }

    function validarCheckbox($valor){
        return is_array($valor) && count($valor) >0;
    }

     function validaEmail($valor){
         if(filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE){
             return false;
         }else{
             return true;
         }
     }

     if($_SERVER['REQUEST_METHOD'] === 'POST'){
         if(!validaRequerido($nombre)){
             $errores[] ="El campo nombre es obligatorio";
         }

         if (!validaEmail($correo)) {
             $errores[] = 'El campo email es incorrecto.';
         }

         if(!validaRequerido($usuario)){
             $errores[] ="El campo usuario es obligatorio";
         }

         if(!validarNum($telefono)){
            $errores[]="El campo teléfono es obligatorio";
         }

         if(!validaRequerido($direccion)){
            $errores[]="El campo dirección es obligatorio";
         }

         if(!validaRequerido($CP)){
            $errores[]="El CP es obligatorio";
         }

         if(!validarCheckbox($ley)){
            $errores[]="El campo ley es obligatorio";
         }

         if(!validarCheckbox($contacto)){
            $errores[]="El campo contacto es obligatorio";
         }

         if(!validarCheckbox($preferencias)){
            $errores[]="El campo preferencias es obligatorio";
         }


         $tipoPago = ['efectivo', 'tarjeta', 'transferencia', 'contra_rembolso'];
         if (!in_array($pago, $tipoPago)) {
             $errores[] = 'Selecciona un nivel de estudios válido.';
         }

         if (!$errores) {
      
             $urlDatos = 'sergio_ok.php?nombre=' . urlencode($nombre) .
                         '&correo=' . urlencode($correo) .
                         '&usuario=' . urlencode($usuario) .
                         '&password=' . urlencode($password) .
                         '&telefono=' . urlencode($telefono) .
                         '&direccion=' . urlencode($direccion) .
                         '&cp=' . urlencode($CP) .
                         '&usuarioTipo=' . urlencode($usuarioTipo) .
                         '&ley=' . urlencode(implode(",",$ley)) .
                         '&contacto=' . urlencode(implode(',', $contacto)) .
                         '&preferencias=' . urlencode(implode(',', $preferencias)) .
                        '&pago=' . urlencode($pago);
    
            header('Location: ' . $urlDatos);
            exit;
         }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php if ($errores): ?>
        <ul style="color: #f00;">
            <?php foreach ($errores as $error): ?>
                <li><?php echo $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif;  ?>
    <form action="sergio.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>"></br>

        <label for="correo"> Correo: </label>
    <input type="text" id="correo" name="correo" maxlength="250"><br>

    <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" value="<?php echo $usuario; ?>"></br>

        <label for="password"> Password: </label>
        <input type="password" id="password" name="password" value="<?php echo $password ?>"><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" value="<?php echo $telefono; ?>"></br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" value="<?php echo $direccion; ?>"></br>

        <label for="CP">CP:</label>
        <input type="text" name="CP" value="<?php echo $CP; ?>"></br>

        <label for="usuarioTipo">Usuario de tipo:</label>
        <input type="radio" name="usuarioTipo" value="nuevo" <?php echo ($usuarioTipo === "nuevo") ? "checked" : ""; ?>> Nuevo
        <input type="radio" name="usuarioTipo" value="existente" <?php echo ($usuarioTipo === "existente") ? "checked" : ""; ?>> Existente
        <br>

        <label>Acepta LOPDGDD:</label><br />
        <input type="checkbox" name="ley[]" value="acepto la ley LOPDGDD" <?php echo in_array('acepto la ley LOPDGDD', $ley) ? 'checked' : ''; ?>> Acepto la ley LOPDGDD<br>
        <input type="checkbox" name="ley[]" value="no acepto la ley LOPDGDD" <?php echo in_array('no acepto la ley LOPDGDD', $ley) ? 'checked' : ''; ?>> No acepto la ley LOPDGDD:<br>


        <label for="contacto">Contacto:</label></br>
        <select name="contacto[]" multiple>
            <option value="8-12" <?php echo in_array('8-12', $contacto) ? 'selected' : ''; ?>>8-12</option>
            <option value="10-14" <?php echo in_array('10-14', $contacto) ? 'selected' : ''; ?>>10-14</option>
            <option value="12-16" <?php echo in_array('12-16', $contacto) ? 'selected' : ''; ?>>12-16</option>
            <option value="14-18" <?php echo in_array('14-18', $contacto) ? 'selected' : ''; ?>>14-18</option>
            <option value="16-20" <?php echo in_array('16-20', $contacto) ? 'selected' : ''; ?>>16-20</option>
            <option value="18-22" <?php echo in_array('18-22', $contacto) ? 'selected' : ''; ?>>18-22</option>
            <option value="20-22" <?php echo in_array('20-22', $contacto) ? 'selected' : ''; ?>>20-22</option>
        </select></br>

        <label for="preferencias">Preferencias:</label></br>
        <select name="preferencias[]" multiple>
            <option value="telefono" <?php echo in_array('telefono', $preferencias) ? 'selected' : ''; ?>>Teléfono</option>
            <option value="email" <?php echo in_array('email', $preferencias) ? 'selected' : ''; ?>>Email</option>
            <option value="SMS" <?php echo in_array('SMS', $preferencias) ? 'selected' : ''; ?>>SMS</option>
            <option value="WhatsApp/Telegram" <?php echo in_array('WhatsApp/Telegram', $preferencias) ? 'selected' : ''; ?>>WhatsApp/Telegram</option>
        </select></br>

        <label>Opción de pago:</label><br />
        <select name="pago">
            <option value="efectivo" <?php echo ($pago == "efectivo") ? "selected" :"" ?>>Efectivo</option>
            <option value="tarjeta" <?php echo($pago == "tarjeta") ? "selected" :"" ?>>tarjeta</option>
            <option value="transferencia" <?php echo($pago == "trasnferencia") ? "selected" :"" ?>>Transferencia</option>
            <option value="contra_rembolso" <?php echo($pago == "contra_rembolso") ? "selected" :"" ?>>Contra Rembolso</option>
        </select></br>

    <input type="reset" name="limpiar" value="Limpiar">
    <input type="submit" value="Enviar">
    </form>
</body>
</html>