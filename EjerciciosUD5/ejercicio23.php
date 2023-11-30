<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 23. Escribe un formulario de recogida de datos que conste de dos páginas: En la primera página se solicitan los datos y se muestran errores tras validarlos.
En la segunda página se muestra toda la información introducida por el usuario si no hay errores errores. Los datos a recoger son datos personales, nivel de estudios (desplegable),
situación actual (selección múltiple: estudiando, trabajando, buscando empleo, desempleado) y hobbies (marcar de varios mostrados y poner otro con opción a introducir texto). */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 23</title>
</head>
<body>
    <h2>Formulario - Página 1</h2>
    <form method="post" action="ejercicio23b.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="estudios">Nivel de estudios:</label>
        <select name="estudios">
            <option value="primaria">Primaria</option>
            <option value="secundaria">Secundaria</option>
            <option value="universidad">Universidad</option>
        </select><br><br>

        <label for="situacion">Situación actual:</label><br>
        <input type="checkbox" name="situacion[]" value="estudiando"> Estudiando<br>
        <input type="checkbox" name="situacion[]" value="trabajando"> Trabajando<br>
        <input type="checkbox" name="situacion[]" value="buscando_empleo"> Buscando empleo<br>
        <input type="checkbox" name="situacion[]" value="desempleado"> Desempleado<br><br>

        <label for="hobbies[]">Hobbies:</label><br>
        <input type="checkbox" name="hobbies[]" value="deporte"> Deporte<br>
        <input type="checkbox" name="hobbies[]" value="lectura"> Lectura<br>
        <input type="checkbox" name="hobbies[]" value="viajes"> Viajes<br>
        <input type="checkbox" name="hobbies[]" value="otro"> Otro:
        <input type="text" name="otro_hobby"><br><br>

        <input type="submit" value="Siguiente">
    </form>
</body>
</html>