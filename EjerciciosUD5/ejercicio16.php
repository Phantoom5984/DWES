<?php 
/**
 * @author Sergio Salvago Medina
 */
/* Formulario 4, petición por POST y mostrar en NombreAlumnoForm1OK.php los resultados indicando el campo en cursiva y el contenido en negrita */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <h1>Sergio Salvago Medina - Formulario de registro 4</h1>
    <form action="SergioForm4OK.php" method="get">
    Datos Personales <div style="border: 1px solid black">
    Nombre: <input type="text" name="nombre" size="50" placeholder="Escriba su Nombre"><br><br>
    Apellidos: <input type="text" name="apellidos" size="200" placeholder="Escriba sus Apellidos"><br><br>
    Correo: <input type="text" name="correo" size="250" placeholder="usuario@empresa.com"><br><br>
    Nombre de usuario: <input type="text" name="usuario" size="5" placeholder="Escriba su nombre de usuario"><br><br>
    Password: <input type="password" name="password" size="15" placeholder="Escriba su password"><br><br>
        Sexo: <input type="radio" name="sexo" value="Hombre">hombre
        <input type="radio" name="sexo" value="Mujer">mujer<br><br>
    </div><br>
    Datos de contacto <div style="border: 1px solid black">
        Provincia: <select name="provincia">
        <option>Valencia</option>
        <option>Alicante</option>
        <option>Castellón</option>
        </select><br><br>
        Horario de contacto: <select multiple size="3" name="horario[]">
        <option>De 8 a 14 horas</option>
        <option>De 14 a 18 horas</option>
        <option>De 18 a 21 horas</option>
        </select><br><br>
        ¿Cómo nos ha conocido?<br><input type="checkbox" name="conocer[]" value="Un amigo">Un amigo
        <input type="checkbox" name="conocer[]" value="Web">Web
        <input type="checkbox" name="conocer[]" value="Prensa">Prensa
        <input type="checkbox" name="conocer[]" value="Otros">Otros<br><br>
    </div><br>
    Datos de la incidencia <div style="border: 1px solid black">
        Tipo: <select name="incidencia">
        <option>Teléfono fijo</option>
        <option>Teléfono móvil</option>
        <option>Internet</option>
        <option>Televisión</option>
        </select><br><br>
        Descripción de la incidencia: <textarea cols="40" rows="4" name="comentario" placeholder="Describa la incidencia..."></textarea><br><br>
    </div><br>
    Botones <div style="border: 1px solid black">
        <input type="reset" name="limpiar" value="Limpiar">
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>