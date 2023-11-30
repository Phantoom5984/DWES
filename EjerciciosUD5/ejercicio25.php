<?php
/**
 * @author Sergio Salvago Medina
 */
/*Crea una Web para obtener los siguientes datos: Nombre completo, Contraseña (mínimo 6 caracteres), Nivel de Estudios(Sin estudios,
Educación Secundaria Obligatoria, Bachillerato, Formación Profesional, Estudios Universitarios), Nacionalidad (Española, Otra), Idiomas (Español, Inglés, Francés, Alemán Italiano),
Email, Adjuntar Foto (sólo extensiones jpg, gif y png, tamaño máximo 50 KB). Además de las comprobaciones de validación, se debe comprobar que sube fichero,
que el fichero tiene extensión (puedes usar explode()) y ésta es válida, que hay directorio donde guardarlo y que se genera con nombre único. Si todo ha ido bien, redirige al
usuario a una página donde se le indique que se ha procesado con éxito e incluye tu nombre y grupo de clase. */
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
        $target = "img/" . basename($_FILES["foto"]["nombre"]).getdate()["year"].getdate()["mon"].getdate()["mday"].getdate()["hours"].getdate()["minutes"].getdate()["seconds"];
        move_uploaded_file($_FILES["foto"]["tmp_name"], $target);
        $cabecera = "Location:ejercicio25b.php";
        header($cabecera);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 25</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form action="ejercicio25b.php" method="post" enctype="multipart/form-data">
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