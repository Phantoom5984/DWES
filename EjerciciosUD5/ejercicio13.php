<?php 
/**
 * @author Sergio Salvago Medins
 */
/* Formulario 1, petición por GET y mostrar en NombreAlumnoForm1OK.php los resultados indicando el campo en cursiva y el contenido en negrita. */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <h1>Sergio Salvago Medina - Formulario de registro</h1>

    <form action="SergioForm1OK.php" method="get">
    Nombre: <input type="text" name="nombre" size="50"><br><br>
    Apellidos: <input type="text" name="apellidos" size="200"><br><br>
        Sexo: <input type="radio" name="sexo" value="H">hombre
        <input type="radio" name="sexo" value="M">mujer<br><br>
        Correo: <input type="text" name="correo" size="250"><br><br>
        Provincia: <select name="provincia">
        <option>Valencia</option>
        <option>Alicante</option>
        <option>Castellón</option>
        </select><br><br>
        <input type="checkbox" name="checbox1" CHECKED> Deseo recibir información sobre novedades y ofertas<br><br>
        <input type="checkbox" name="checbox2"> Declaro haber leído y aceptar las condiciones generales del programa y la normativa sobre protección de datos<br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>