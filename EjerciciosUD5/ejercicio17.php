<?php
    /**
     * @author Sergio Salvago Medina
     */
    /* 17. Escribe un programa que dadas 10 palabras en inglés muestre su traducción al castellano a su derecha en una tabla.
    El usuario debe seleccionar la/s palabra/s a traducir (podría seleccionarlas todas). */
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $palabras = array(
            "Bus"=> "Autobús",
            "Mouse"=> "Ratón",
            "Day"=> "Día",
            "Time"=> "Tiempo",
            "Apple"=> "Manzana",
            "Banana"=> "Plátano",
            "Friend"=> "Amigo",
            "Bird"=> "Pájaro",
            "Bone"=> "Hueso",
            "Box"=> "Caja",         
        );

        echo ('<table border="3">');
        echo ("<tr><th>Palabra en Inglés</th><th>Traducción al Castellano</th></tr>");

        foreach ($_POST["palabras"] as $palabra) {
            echo "<tr>";
            echo "<td>" . $palabra . "</td>";
            echo "<td>" . (isset($palabras[$palabra]) ? $palabras[$palabra] : "No hay traducción") . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
    <h2>Traductor de Palabras</h2>
    <form action="ejercicio17.php" method="post">
        <label for="palabras">Selecciona palabras:</label>
        <select name="palabras[]"  multiple>
            <option value="Bus">Bus</option>
            <option value="Mouse">Mouse</option>
            <option value="Day">Day</option>
            <option value="Time">Time</option>
            <option value="Apple">Apple</option>
            <option value="Banana">Banana</option>
            <option value="Bird">Bird</option>
            <option value="Bone">Bone</option>
            <option value="Box">Caja</option>
        </select>
        <br>
        <input type="submit" value="Traducir">
    </form>
</body>
</html>
