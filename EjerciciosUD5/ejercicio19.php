<?php
/**
 * @author Sergio Salvago Medina
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['curso'], $_POST['modulos'], $_POST['horas'])) {
        $curso = $_POST['curso'];
        $modulo = $_POST['modulos'];
        $horas_seleccionadas = $_POST['horas'];

        echo "<h3>Curso: $curso</h3>";
        echo "<h3>Módulo: $modulo</h3>";

        echo "<table border='1'>";
        echo "<tr><th>Hora</th><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th></tr>";

        $horarios = [];
        foreach ($horas_seleccionadas as $hora) {
            $horarios[$hora] = [];
            for ($i = 0; $i < 5; $i++) {
                $horarios[$hora][$i] = '';
            }
        }

        foreach ($horarios as $hora => $dias) {
            echo "<tr><td>$hora</td>";
            foreach ($dias as $dia) {
                echo "<td>$dia</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No se han proporcionado todos los datos necesarios.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<body>
    <h2>Generador de Horario</h2>
    <form action="ejercicio19.php" method="post">
        <label for="curso">Seleccione el curso:</label><br>
        <input type="radio" name="curso" value="Curso A"> DAW<br>
        <input type="radio" name="curso" value="Curso B"> DAM<br>
        <input type="radio" name="curso" value="Curso C"> ASIR<br><br>

        <label for="modulos">Seleccione los módulos:</label><br>
        <select name="modulos">
            <option value="Modulo 1">Modulo 1</option>
            <option value="Modulo 2">Modulo 2</option>
            <option value="Modulo 3">Modulo 3</option>
            <option value="Modulo 4">Modulo 4</option>
        </select><br><br>

        <label>Seleccione las horas:</label><br>
        <input type="checkbox" name="horas[]" value="8:00"> 8:00<br>
        <input type="checkbox" name="horas[]" value="9:00"> 9:00<br>
        <input type="checkbox" name="horas[]" value="10:00"> 10:00<br>
        <input type="checkbox" name="horas[]" value="11:00"> 11:00<br>
        <input type="checkbox" name="horas[]" value="12:00"> 12:00<br>
        <input type="checkbox" name="horas[]" value="13:00"> 13:00<br><br>

        <input type="submit" value="Generar Horario">
    </form>
</body>
</html>
