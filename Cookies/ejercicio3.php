<?php
/**
 * @author Sergio Salvago Medina
 */
/* Usa el formulario (Ejercicio 1 UD5) del selector de operación y las operaciones de suma, resta, división y multiplicación de modo
que se guarde en la Cookie las operaciones elegidas y muestre el resultado de la operación indicando cuáles han sido las operaciones elegidas en la ejecución actual (formulario)
y las elegidas en la operación anterior a la actual (cookie). */
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];
    $operacion = $_GET["operacion"];
    $res="";
    $cookie_value=[];
    foreach ($operacion as $resultado) {
        switch ($resultado) {
            case 'suma':
                $res=$numero1+$numero2;
                array_push($cookie_value,$resultado);
                array_push($cookie_value,($res));
                break;
            case 'resta':
                $res=$numero1-$numero2;
                array_push($cookie_value,$resultado);
                array_push($cookie_value,($res));
                break;
            case 'multiplicación':
                $res=$numero1*$numero2;
                array_push($cookie_value,$resultado);
                array_push($cookie_value,($res));
                break;
            case 'división':
                $res=$numero1/$numero2;
                array_push($cookie_value,$resultado);
                array_push($cookie_value,($res));
                break;
            default:
                "Error en el sistema";
                break;
        }
    }
    $cookie_name="Ejercicio3";
    $cookie_value=implode(" , ",$cookie_value);
    setcookie($cookie_name, $cookie_value);
    echo "La $resultado de $numero1 y $numero2 es ".$res. "<br><br>";
}
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <form method="get">
    
            <label for="numero1">Numero 1:</label>
            <input type="text" name="numero1"><br><br>
    
            <label for="numero1">Numero 2:</label>
            <input type="text" name="numero2"><br><br>
    
            <select multiple name="operacion[]" id="operacion">Operación:
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicación">Multiplicación</option>
                <option value="división">División</option>
            </select><br><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
    </html>
    <?php
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
        }
        ?>