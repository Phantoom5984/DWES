<?php
/**
 * @author Sergio Salvago Medina
 */
/* Usa el formulario (Ejercicio 9 UD5) de la tabla de multiplicar donde se indique multiplicando y multiplicador guardando estos datos en una Cookie.
Se deben mostrar la tabla, el multiplicando y multiplicador actual y el multiplicando y multiplicador anterior (cookie). */
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    if (isset($_GET["enviar"])) {
        $numeros=[];
        $numero=$_GET["numero"];
        $numerito="";
        for($i=1;$i<=10;$i++){
            array_push($numeros,$numero*$i);
        }


    $cookie_name="Ejercicio6";
    $cookie_value=implode(" , ",$numeros).", multiplcando: ".$numero;
    setcookie($cookie_name, $cookie_value);
    echo implode(" , ",$numeros).", multiplcando: ".$numero;
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
        <form method="get">
            <label for="numero">Introduce el numero:</label><br><br>
            <input type="number" name="numero" ><br><br>
            <input type="submit" name="enviar" value="Enviar"><br><br>
    
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