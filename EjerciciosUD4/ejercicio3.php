<?php
/**
 * @author Sergio Salvago Medina
 */
/* Formulario 3
Crea una página web que contenga un formulario con los siguientes campos de información:
• El nombre, con un control de tipo texto. Tamaño máximo 50 caracteres
• Los apellidos, con un control de tipo texto. Tamaño máximo 200 caracteres
• El correo electrónico, con un control de tipo texto. Tamaño máximo 250 caracteres
• El usuario, con un control de tipo texto. Tamaño máximo 5 caracteres
• El password, con un control adecuado al contenido. Tamaño máximo 15 caracteres
• El sexo, con dos opciones excluyentes: hombre o mujer.
• Provincia: un desplegable con los valores Alicante, Castellón y Valencia y sólo se podrá
seleccionar uno de ellos
• Horario de contacto: un desplegable con los valores De 8 a 14 horas, De 14 a 18 horas y De 18
a 21 horas de modo que se podrá seleccionar uno o varios de ellos. Deberá mostrar 2 elementos
cada vez.
• ¿Cómo nos ha conocido? con checkbox para Un amigo, Web, Prensa y Otros
• Comentario: Deberá mostrar un área de texto para que el usuario pueda escribir lo que desee. Su
tamaño será de 6x60
• Una casilla de verificación con el texto "Deseo recibir información sobre novedades y ofertas".
Deberá estar activada por defecto
• Una casilla de verificación con el texto "Declaro haber leído y aceptar las condiciones generales
del programa y la normativa sobre protección de datos".
• Un botón de envío y otro de reset para limpiar el formulario.
Además, tienes que tener en cuenta los siguientes requisitos:
• El título de la página debe ser Alumnos - Formulario de registro 3
• Se debe incluir un título que coincidirá con el de la página.
• El método de envío del formulario debe ser GET.
• El destino del envío del formulario debe ser el mismo fichero.
• Cada campo tiene que llevar una etiqueta asociada para la descripción del mismo.
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
$comentario=$_GET['comentario'];
echo "<b>Comentario: </b>".strtoupper($comentario)."<br>";
$checbox1=isset($_GET['checbox1']) ? "Ha seleccionado recibir ofertas" : "No ha seleccionado recibir ofertas";
echo strtoupper($checbox1)."<br>";
$checbox2=isset($_GET['checbox2']) ? "Ha seleccionado aceptar las condiciones" : "No ha seleccionado aceptar las condiciones";
echo strtoupper($checbox2)."<br>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sergio Salvago Medina - Formulario de registro 3</title>
</head>
<body>
    <h1>Sergio Salvago Medina - Formulario de registro 3</h1>
    <form action="ejercicio3.php" method="get">
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