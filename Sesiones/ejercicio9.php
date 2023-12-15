<?php
/**
 * @author ADrián Oriola Martos
 * 9. Usa el formulario del ejercicio 9 de Cookies con selección de cálculo de media, mediana y
 * moda de modo que uses la sesión para mostrar los números, la media, mediana y/o moda
 * seleccionadas actualmente y además muestre los números, la media, mediana y moda de la
 * selección anterior.
 */
session_start(); //iniciamos la sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $zonaHoraria = $_POST["zona_horaria"];

    if (empty($zonaHoraria)) {
        echo "<p>Por favor, selecciona una zona horaria.</p>";
    } else {
        /*Esta función coge la fecha y hora actual dependiendo de que zona horaria hemos seleccionado*/
        date_default_timezone_set($zonaHoraria);
        /*Le damos formato al date para que solo nos printee Horas(H), Minutos(i) y Segundo(s)*/
        $horaActual = date("H:i:s");
        $_SESSION['horaActual'] = $horaActual;

        echo "<p>La hora actual en la zona horaria $zonaHoraria es: $horaActual</p>";
    }

    if (empty($_SESSION['zona_horaria']) && empty($_SESSION['horaActual'])) {
        $_SESSION['zona_horaria'] = $_POST['zona_horaria'];
        $_SESSION['horaActual'] = $_POST['horaActual'];

    } else {
        $_SESSION['zona_horariaAntigua'] = $_SESSION['zona_horaria'];
        $_SESSION['zona_horaria'] = $_POST['zona_horaria'];

        $_SESSION['horaActualAntigua'] = $_SESSION['horaActual'];
        $_SESSION['horaActual'] = $_POST['horaActual'];

        echo "El dato introducido anteriormente es: ", $_SESSION['zona_horariaAntigua'] . "-" . $_SESSION['horaActualAntigua'];

    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Adrián Oriola</title>
</head>

<body>
    <h1>La hora en distintas zonas horarias</h1>
    <form method="post" action="ejercicio9.php" enctype="multipart/form-data">
        <label for="zona_horaria">Selecciona una zona horaria:</label>
        <select name="zona_horaria" required>
            <?php
            /*Con el DateTimeZone::listIdentifiers genera una lista de todas las zonas horarias del mundo
            Aquí he pedido ayuda a un amigo que trabaja con PHP porque no tenía ni idea de como hacer esto*/
            $zonasHorarias = DateTimeZone::listIdentifiers();
            foreach ($zonasHorarias as $zona) {
                echo "<option value=\"$zona\">$zona</option>";
            }
            /*Preguntar a Silvia por este método de agregar código PHP en mitad de un HTML*/
            ?>
        </select><br>

        <input type="submit" value="Obtener Hora"><br><br>

    </form>

</body>

</html>