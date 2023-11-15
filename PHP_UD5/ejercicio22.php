<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="ejercicio22_Procesar.php" method="post">
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" required>
        <br>

        <label for="confirmarEmail">Confirmar Correo Electrónico:</label>
        <input type="email" name="confirmarEmail" required>
        <br>

        <label for="publicidad">Aceptar recibir publicidad:</label>
        <input type="checkbox" name="publicidad" value="si">
        <br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>
