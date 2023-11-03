<?php
/**
 * @author Sergio Salvago Medina
 */
/* Formulario 4
Crea una página web que contenga un formulario con los siguientes campos de información:
Bloque Datos Personales
• El nombre, con un control de tipo texto. Tamaño máximo 50 caracteres
• Los apellidos, con un control de tipo texto. Tamaño máximo 200 caracteres
• El correo electrónico, con un control de tipo texto. Tamaño máximo 250 caracteres
• El usuario, con un control de tipo texto. Tamaño máximo 5 caracteres
• El password, con un control adecuado al contenido. Tamaño máximo 15 caracteres
• El sexo, con dos opciones excluyentes: hombre o mujer. Se seleccionará hombre por defecto
Bloque Datos de contacto
• Provincia: un desplegable con los valores Alicante, Castellón y Valencia y sólo se podrá
seleccionar uno de ellos
• Horario de contacto: un desplegable con los valores De 8 a 14 horas, De 14 a 18 horas y De 18
a 21 horas de modo que se podrá seleccionar uno o varios de ellos. Deberá mostrar 3 elementos
cada vez.
• ¿Cómo nos ha conocido? con checkbox para Un amigo, Web, Prensa y Otros
Bloque Datos de la incidencia
• Un desplegable Tipo de incidencia con los valores Teléfono fijo, Teléfono móvil, Internet y
Televisión de los cuales sólo se podrá elegir un único valor
• Descripción de la incidencia: Deberá mostrar un área de texto para que el usuario pueda escribir
lo que desee. Su tamaño será de 4x40
Botones
• Un botón de envío y otro de reset para limpiar el formulario.
Además, tienes que tener en cuenta los siguientes requisitos:
• El título de la página debe ser Alumno - Formulario de registro 4
• Se debe incluir un título que coincidirá con el de la página.
• El método de envío del formulario debe ser GET.
• El destino del envío del formulario debe ser el mismo fichero.
• Cada campo tiene que llevar una etiqueta asociada para la descripción del mismo.
• Se debe introducir el atributo placeholder (ayuda textual) en los campos Nombre, Apellidos, Email, Nombre de usuario, Password y Descripción de la incidencia.
 */
$nombre=$_GET['nombre'];
echo "<b>Nombre: </b>".strtoupper($nombre)."<br>";
$apellidos=$_GET['apellidos'];
echo "<b>Apellidos: </b>".strtoupper($apellidos)."<br>";
$usuario=$_GET['usuario'];
echo "<b>Nombre de usuario: </b>".strtoupper($usuario)."<br>";
$password=$_GET['password'];
echo "<b>Password: </b>".strtoupper($password)."<br>";
$sexo=$_GET['sexo'];
echo "<b>Sexo: </b>".strtoupper($sexo)."<br>";
$correo=$_GET['correo'];
echo "<b>Correo: </b>".strtoupper($correo)."<br>";
$provincia=$_GET['provincia'];
echo "<b>Provincia: </b>".strtoupper($provincia)."<br>";
$horario = $_GET['horario'];
echo "<b>Horario de contacto: </b>";
echo implode(" - ", $horario);
echo "<br>";
$conocer = $_GET['conocer'];
echo "<b>¿Cómo nos ha conocido?: </b>";
echo implode(" - ", $conocer);
echo "<br>";
$incidencia = $_GET['incidencia'];
echo "<b>La incidencia es: </b>".strtoupper($incidencia)."<br>";
$comentario=$_GET['comentario'];
echo "<b>Comentario: </b>".strtoupper($comentario)."<br>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sergio Salvago Medina - Formulario de registro 4</title>
</head>
<body>
    <h1>Sergio Salvago Medina - Formulario de registro 4</h1>
    <form action="ejercicio4.php" method="get">
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