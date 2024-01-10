<?php
/**
 * @author Sergio Salvago Medina
 */
/*12. Aplica la sesión en el ejercicio 24 de la UD5 para poder pasar los datos en lugar de construir lacurl para enviarlos.*/
session_start();
$errores = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        empty($_POST["nombre"]) || empty($_POST["apellidos"]) || empty($_POST["edad"]) ||
        empty($_POST["peso"]) || empty($_POST["sexo"]) || empty($_POST["estado_civil"])
    ) {
        echo "<p>Error: Todos los campos son obligatorios.</p>";
        $errores = true;
    } elseif ($_POST["peso"] < 10 || $_POST["peso"] > 150) {
        echo "<p>Error: El peso debe estar entre 10 y 150.</p>";
        $errores = true;
    }
}

// Si no hay errores, mostrar la información del usuario
if (!$errores && $_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p><strong>Nombre:</strong> " . $_POST["nombre"] . "</p>";
    echo "<p><strong>Apellidos:</strong> " . $_POST["apellidos"] . "</p>";
    echo "<p><strong>Edad:</strong> " . $_POST["edad"] . "</p>";
    echo "<p><strong>Peso:</strong> " . $_POST["peso"] . "</p>";
    echo "<p><strong>Sexo:</strong> " . $_POST["sexo"] . "</p>";
    echo "<p><strong>Estado Civil:</strong> " . $_POST["estado_civil"] . "</p>";

    echo "<p><strong>Aficiones:</strong> ";
    if (!empty($_POST["aficiones"])) {
        $aficiones = $_POST["aficiones"];
        foreach ($aficiones as $aficion) {
            echo $aficion . ", ";
        }
    }
    echo "</p>";
} else {
    echo "<p>Por favor, regrese al <a href='formulario.php'>formulario</a> y complete la información.</p>";
}
    
        if (empty($_SESSION['nombre']) && empty($_POST['apellidos']) && empty($_POST['edad']) && empty($_POST['peso']) && empty($_POST['sexo']) && empty($_POST['estado_civil'])
        && empty($_POST['aficiones'])) {
            $_SESSION['nombre'] = $_POST['nombre'];
            $_SESSION['apellidos'] = $_POST['apellidos'];
            $_SESSION['edad'] = $_POST['edad'];
            $_SESSION['peso'] = $_POST['peso'];
            $_SESSION['sexo'] = $_POST['sexo'];
            $_SESSION['estado_civil'] = $_POST['estado_civil'];
            $_SESSION['aficiones'] = $_POST['aficiones'];
        
        } else {
            $_SESSION['nombre2'] = $_SESSION['nombre'];
            $_SESSION['nombre'] = $_POST['nombre'];

            $_SESSION['apellidos2'] = $_SESSION['apellidos'];
            $_SESSION['apellidos'] = $_POST['apellidos'];

            $_SESSION['edad2'] = $_SESSION['edad'];
            $_SESSION['edad'] = $_POST['edad'];

            $_SESSION['peso2'] = $_SESSION['peso'];
            $_SESSION['peso'] = $_POST['peso'];

            $_SESSION['sexo2'] = $_SESSION['sexo'];
            $_SESSION['sexo'] = $_POST['sexo'];

            $_SESSION['estado_civil2'] = $_SESSION['estado_civil'];
            $_SESSION['estado_civil'] = $_POST['estado_civil'];

            $_SESSION['aficiones2'] = $_SESSION['aficiones'];
            $_SESSION['aficiones'] = $_POST['aficiones'];
            echo "El dato introducido es: ", $_SESSION['nombre2'] ."-" . $_SESSION['apellidos2'] ."-" . $_SESSION['edad2'] ."-" . $_SESSION['peso2'] ."-" . $_SESSION['sexo2'] .
            "-" . $_SESSION['estado_civil2'] ."-" . implode(", ", $_SESSION['aficiones2']);
        }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 12</title>
</head>
<body>
    <h2>Formulario - Página 1</h2>
    <form method="post" action="ejercicio12.php">
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
