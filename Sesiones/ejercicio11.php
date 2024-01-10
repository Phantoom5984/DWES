<?php
/**
 * @author Sergio Salvago Medina
 */
/*11. Aplica la sesión en el ejercicio 23 de la UD5 para poder pasar los datos en lugar de construir la url para enviarlos.*/
session_start();
$errores = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nombre"]) || empty($_POST["email"])) {
        echo "<p>Error: Nombre y email son campos obligatorios.</p>";
        $errores = true;
    }
}

if (!$errores && $_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p><strong>Nombre:</strong> " . $_POST["nombre"] . "</p>";
    echo "<p><strong>Email:</strong> " . $_POST["email"] . "</p>";
    echo "<p><strong>Nivel de estudios:</strong> " . $_POST["estudios"] . "</p>";

    if (!empty($_POST["situacion"])) {
        echo "<p><strong>Situación actual:</strong> " . implode(", ", $_POST["situacion"]) . "</p>";
    }

    echo "<p><strong>Hobbies:</strong> ";
    if (!empty($_POST["hobbies"])) {
        $hobbies = $_POST["hobbies"];
        foreach ($hobbies as $hobby) {
            echo $hobby . ", ";
        }
    }
    if (!empty($_POST["otro_hobby"])) {
        echo $_POST["otro_hobby"];
    }
    echo "</p>";
} else {
    echo "<p>Por favor, regrese al <a href='ejercicio23.php'>formulario</a> y complete la información.</p>";
}
    if (
        empty($_SESSION["nombre"]) && empty($_SESSION["email"]) && empty($_SESSION["estudios"])
        && empty($_SESSION["situacion"]) && empty($_SESSION["hobbies"])
    ) {
        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["estudios"] = $_POST["estudios"];
        $_SESSION["situacion"] = $_POST["situacion"];
        $_SESSION["hobbies"] = $_POST["hobbies"];
        
    } else {
        $_SESSION["nombre2"]  = $_SESSION["nombre"];
        $_SESSION["nombre"] = $_POST["nombre"];

        $_SESSION["email2"]  = $_SESSION["email"];
        $_SESSION["email"] = $_POST["email"];

        $_SESSION["estudios2"]  = $_SESSION["estudios"];
        $_SESSION["estudios"] = $_POST["estudios"];

        $_SESSION["situacion2"]  = $_SESSION["situacion"];
        $_SESSION["situacion"] = $_POST["situacion"];

        $_SESSION["hobbies2"]  = $_SESSION["hobbies"];
        $_SESSION["hobbies"] = $_POST["hobbies"];
        echo "El dato introducido es: ", $_SESSION['nombre2'] . "-" . $_SESSION['email2'] . "-" . $_SESSION['estudios2'] . "-" . implode(", ", $_SESSION['situacion2']).
"-" . implode(", ", $_SESSION['hobbies2']);

    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 11</title>
</head>
<body>
    <h2>Formulario - Página 1</h2>
    <form method="post" action="ejercicio11.php">
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