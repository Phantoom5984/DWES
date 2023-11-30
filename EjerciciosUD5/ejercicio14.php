<?php 
/**
 * @author Sergio Salvago Medina
 */
/* Formulario 2, petición por POST y mostrar en NombreAlumnoForm2OK.php los resultados indicando el campo en cursiva y el contenido en negrita */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
<h1>Sergio Salvago Medina - Formulario de registro 2</h1>
    <form action="SergioForm2OK.php" method="post">
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
        Situación: <select multiple size="2" name="situacion[]">
        <option SELECTED>Estudiando</option>
        <option SELECTED>Trabajando</option>
        <option>Buscando empleo</option>
        <option>Otro</option>
        </select><br><br>
        <textarea cols="60" rows="6" name="comentario"></textarea><br><br>
        <input type="checkbox" name="checbox1" CHECKED> Deseo recibir información sobre novedades y ofertas<br><br>
        <input type="checkbox" name="checbox2"> Declaro haber leído y aceptar las condiciones generales del programa y la normativa sobre protección de datos<br><br>
        <input type="reset" name="limpiar" value="Limpiar">
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>