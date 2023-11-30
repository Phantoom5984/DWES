<?php 
/**
 * @author Sergio Salvago Medina
 */
/* Formulario 3, petición por POST y mostrar en NombreAlumnoForm3OK.php los resultados indicando el campo en cursiva y el contenido en negrita */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <h1>Sergio Salvago Medina - Formulario de registro 3</h1>
    <form action="SergioForm3OK.php" method="get">
    Nombre: <input type="text" name="nombre" size="50"><br><br>
    Apellidos: <input type="text" name="apellidos" size="200"><br><br>
    Nombre de usuario: <input type="text" name="usuario" size="5"><br><br>
    Password: <input type="password" name="password" size="15"><br><br>
        Sexo: <input type="radio" name="sexo" value="Hombre">hombre
        <input type="radio" name="sexo" value="Mujer">mujer<br><br>
        Correo: <input type="text" name="correo" size="250"><br><br>
        Provincia: <select name="provincia">
        <option>Valencia</option>
        <option>Alicante</option>
        <option>Castellón</option>
        </select><br><br>
        Horario de contacto: <select multiple size="2" name="horario[]">
        <option SELECTED>De 8 a 14 horas</option>
        <option SELECTED>De 14 a 18 horas</option>
        <option>De 18 a 21 horas</option>
        </select><br><br>
        ¿Cómo nos ha conocido?<br><input type="checkbox" name="conocer[]" value="Un amigo">Un amigo
        <input type="checkbox" name="conocer[]" value="Web">Web
        <input type="checkbox" name="conocer[]" value="Prensa">Prensa
        <input type="checkbox" name="conocer[]" value="Otros">Otros<br><br>
        <textarea cols="60" rows="6" name="comentario"></textarea><br><br>
        <input type="checkbox" name="checbox1" CHECKED> Deseo recibir información sobre novedades y ofertas<br><br>
        <input type="checkbox" name="checbox2"> Declaro haber leído y aceptar las condiciones generales del programa y la normativa sobre protección de datos<br><br>
        <input type="reset" name="limpiar" value="Limpiar">
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>