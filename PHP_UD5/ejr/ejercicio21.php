<?php
$zonasHorarias=array(
        'America/New_York',
        'Europe/London',
        'Europe/Paris',
        'Asia/Tokyo',
        'Australia/Sydney'
    );

    $zonaSeleccionada="";
    $horaZonaSeleccionada="";
    foreach($zonasHorarias as $zona){
        $horaactual= new DateTime('now',new DateTimeZone($zona));
        $horaZona=$horaactual->format('H:i:s');
        $zonas[$zona]=$horaZona;
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $zonaSeleccionada=$_POST["zonaHoraria"];

        //validar zona
        if(!empty($zonaSeleccionada) && in_array($zonaSeleccionada, $zonasHorarias)){
            $zonaSeleccionada=$zonas[$zonaSeleccionada];
            echo "<p>La hora actual en $zonaSeleccionada es: $horaZonaSeleccionada</p>";

        }else {
            echo "<p>Por favor, selecciona una zona horaria válida.</p>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio21.php" method="post">
        <label for="zonaHoraria">Selecciona una Zona Horaria:</label>
        <select name="zonaHoraria">
            <?php
            foreach ($zonasHorarias as $zona) {
                echo "<option value=\"$zona\" " . ($zona == $zonaSeleccionada ? 'selected' : '') . ">$zona</option>";
            }
            ?>
        </select>
        <br>

        <input type="submit" value="Obtener Hora">
    </form>

</body>
</html>