<?php
/**
 * @author Sergio Salvago Medina
 */
/* Escribe un formulario de recogida de datos que conste de dos páginas: En la primera página se solicitan los datos y se muestran errores tras validarlos.
En la segunda página se muestra toda la información introducida por el usuario si no hay errores errores. Los datos a introducir son:
Nombre, Apellidos, Edad, Peso (entre 10 y 150), Sexo, Estado Civil (Soltero, Casado, Viudo, Divorciado, Otro) Aficiones:
Cine, Deporte, Literatura, Música, Cómics, Series, Videojuegos. Debe tener los botones de Enviar y Borrar. */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 24</title>
</head>
<body>
    <h2>Formulario - Página 1</h2>
    <form method="post" action="ejercicio24b.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br><br>

        <label for="peso">Peso (entre 10 y 150):</label>
        <input type="number" name="peso" min="10" max="150" required><br><br>

        <label for="sexo">Sexo:</label>
        <input type="radio" name="sexo" value="masculino" required> Masculino
        <input type="radio" name="sexo" value="femenino" required> Femenino<br><br>

        <label for="estado_civil">Estado Civil:</label>
        <select name="estado_civil">
            <option value="soltero">Soltero</option>
            <option value="casado">Casado</option>
            <option value="viudo">Viudo</option>
            <option value="divorciado">Divorciado</option>
            <option value="otro">Otro</option>
        </select><br><br>

        <label>Aficiones:</label><br>
        <input type="checkbox" name="aficiones[]" value="cine"> Cine<br>
        <input type="checkbox" name="aficiones[]" value="deporte"> Deporte<br>
        <input type="checkbox" name="aficiones[]" value="literatura"> Literatura<br>
        <input type="checkbox" name="aficiones[]" value="musica"> Música<br>
        <input type="checkbox" name="aficiones[]" value="comics"> Cómics<br>
        <input type="checkbox" name="aficiones[]" value="series"> Series<br>
        <input type="checkbox" name="aficiones[]" value="videojuegos"> Videojuegos<br><br>

        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" name="borrar" value="Borrar">
    </form>
</body>
</html>