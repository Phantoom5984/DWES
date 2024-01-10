<?php
/**
 * @author Sergio Salvago Medina
 */
/*13. Aplica la sesión en el ejercicio 25 de la UD5 para poder pasar los datos en lugar de construir la url para enviarlos
(de la foto sólo enviaremos nombre, extensión, ruta y tamaño).  */
session_start(); //iniciamos la sesión
if (isset($_POST["enviar"])) {
    $redirect=true;
    $allowed_image_extension = array(
        "png",
        "jpg",
        "gif"
    );
    $file_extension = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
    if (!in_array($file_extension, $allowed_image_extension)) {
        echo '<p style="color:red;">El tipo de fichero es invalido</br><p>';
        $redirect=false;
    }
    if (($_FILES["foto"]["size"] > 1024*50)) {
        echo '<p style="color:red;">El archivo es demasiado grande</br><p>';
        $redirect=false;
    }
    if ($redirect){
        $target = "img/" . basename($_FILES["foto"]["name"]).getdate()["year"].getdate()["mon"].getdate()["mday"].getdate()["hours"].getdate()["minutes"].getdate()["seconds"];
        move_uploaded_file($_FILES["foto"]["tmp_name"], $target);
        $cabecera = "Location:ejercicio13.php";
        header($cabecera);
    }
    if (empty($_SESSION['nombre']) && empty($_SESSION['password']) && empty($_SESSION['estudios']) && empty($_SESSION['nacionalidad']) && empty($_SESSION['idiomas'])
    && empty($_SESSION['email'])) {
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['estudios'] = $_POST['estudios'];
        $_SESSION['nacionalidad'] = $_POST['nacionalidad'];
        $_SESSION['idiomas'] = $_POST['idiomas'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['foto']=$_POST['foto'];
    }else{
        echo "La imagen es:<br> <img src=",$_SESSION["foto"].">";

    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 13</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form action="ejercicio13.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre completo:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="password">Contraseña (mínimo 6 caracteres):</label>
        <input type="password" name="password" minlength="6" required><br><br>

        <label for="estudios">Nivel de Estudios:</label>
        <select name="estudios">
            <option value="sin_estudios">Sin estudios</option>
            <option value="eso">Educación Secundaria Obligatoria</option>
            <option value="bachillerato">Bachillerato</option>
            <option value="formacion_profesional">Formación Profesional</option>
            <option value="universitarios">Estudios Universitarios</option>
        </select><br><br>

        <label for="nacionalidad">Nacionalidad:</label>
        <input type="radio" name="nacionalidad" value="espanola" required> Española
        <input type="radio" name="nacionalidad" value="otra" required> Otra<br><br>

        <label for="idiomas[]">Idiomas:</label><br>
        <input type="checkbox" name="idiomas[]" value="espanol"> Español<br>
        <input type="checkbox" name="idiomas[]" value="ingles"> Inglés<br>
        <input type="checkbox" name="idiomas[]" value="frances"> Francés<br>
        <input type="checkbox" name="idiomas[]" value="aleman"> Alemán<br>
        <input type="checkbox" name="idiomas[]" value="italiano"> Italiano<br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="foto">Adjuntar Foto (solo jpg, gif, png - max. 50KB):</label>
        <input type="file" name="foto" accept="image/jpeg, image/gif, image/png" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>