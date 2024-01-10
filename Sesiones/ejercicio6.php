<?php
/**
 * @author Sergio Salvago Medina
 */
 /*6. Usa el formulario del ejercicio 6 de Cookies con la tabla de multiplicar de modo que uses la sesión para mostrar el multiplicando,
 el multiplicador y la tabla actuales y además muestre el multiplicando, el multiplicador y la tabla de la ejecución anterior.*/
 if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    session_start();

    if (empty($_SESSION['numero'])) {
        $_SESSION['numero'] = $_POST['numero'];
       
    } else {
        $_SESSION['numero2'] = $_SESSION['numero'];
        $_SESSION['numero'] = $_POST['numero'];

        echo "El dato introducido anteriormente es: ", $_SESSION['numero2']."<br>";
        
    }
    if (isset($_POST["enviar"])) {
        $numeros=[];
        $numero=$_POST["numero"];
        for($i=1;$i<=10;$i++){
            array_push($numeros,$numero*$i);
        }
        echo implode(",", $numeros);
    }
    }
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 6</title>
    </head>
    <body>
        <form method="post">
            <label for="numero">Introduce el numero:</label><br><br>
            <input type="number" name="numero" ><br><br>
            <input type="submit" name="enviar" value="Enviar"><br><br>
    
        </form>
    </body>
    </html>