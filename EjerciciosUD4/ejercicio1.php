<?php
/**
 * @author Sergio Salvago Medina
 */
/* Formulario 1
Crea una página web que contenga un formulario con los siguientes campos de información:
• El nombre, con un control de tipo texto. Tamaño máximo 50 caracteres
• Los apellidos, con un control de tipo texto. Tamaño máximo 200 caracteres
• El sexo, con dos opciones excluyentes: hombre o mujer.
• El correo electrónico, con un control de tipo texto. Tamaño máximo 250 caracteres
• Provincia: un desplegable con los valores Alicante, Castellón y Valencia y sólo se podrá
seleccionar uno de ellos
• Una casilla de verificación con el texto "Deseo recibir información sobre novedades y ofertas".
Deberá estar activada por defecto
• Una casilla de verificación con el texto "Declaro haber leído y aceptar las condiciones generales
del programa y la normativa sobre protección de datos".
• Un botón de envío.
Además, tienes que tener en cuenta los siguientes requisitos:
• El título de la página debe ser Alumnos - Formulario de registro.
• Incluir un título con el mismo texto que el título de la página
• El método de envío del formulario debe ser GET.
• El destino del envío del formulario debe ser el mismo fichero.
• Cada campo tiene que llevar una etiqueta asociada para la descripción del mismo.
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="ejercicio1.php">
        <input type="text" name="nombre"value="Nombre" size="50">
        <input type="text" name="apellidos" value="Apellidos" size="200">
        <INPUT type="radio" name="sexo" value="H">
        <INPUT type="radio" name="sexo" value="M">
    </form>
</body>
</html>