<?php
/**
 * @author Sergio Salvago Medina
 */
/*3. Usa el formulario del ejercicio 3 de Cookies del selector de operación de modo que uses la sesión para mostrar el resultado de la operación indicando
 cuáles han sido las operaciones elegidas en la ejecución actual y el resultado y las operaciones elegidas en la ejecución anterior a la actual.*/
 if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    session_start();
    if (empty($_SESSION['numero1']) && empty($_SESSION['numero2']) && empty($_SESSION['operacion'])) {
        $_SESSION['numero1'] = $_POST['numero1'];
        $_SESSION['numero2'] = $_POST['numero2'];
        $_SESSION['operacion'] = $_POST['operacion'];
    } else {
        $_SESSION['numero1Antiguo'] = $_SESSION['numero1'];
        $_SESSION['numero1'] = $_POST['numero1'];

        $_SESSION['numero2Antiguo'] = $_SESSION['numero2'];
        $_SESSION['numero2'] = $_POST['numero2'];

        $_SESSION['operacion2'] = $_SESSION['operacion'];
        $_SESSION['operacion'] = $_POST['operacion'];

        echo "El dato introducido anteriormente es: ", $_SESSION['numero1Antiguo'] . "-" . $_SESSION['numero2Antiguo'] . "-" . implode(", ", $_SESSION['operacion2'])."<br>";
    }
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacion = $_POST["operacion"];
    $res="";
    foreach ($operacion as $resultado) {
        switch ($resultado) {
            case 'suma':
                $res=$numero1+$numero2;
                echo "$resultado ";
                echo "$res ";
                break;
            case 'resta':
                $res=$numero1-$numero2;
                echo "$resultado ";
                echo "$res ";
                break;
            case 'multiplicación':
                $res=$numero1*$numero2;
                echo "$resultado ";
                echo "$res ";
                break;
            case 'división':
                $res=$numero1/$numero2;
                echo "$resultado ";
                echo "$res ";
                break;
            default:
                "Error en el sistema";
                break;
        }
    }
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
        <form method="post">
    
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