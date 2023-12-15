<?php
/**
 * @author Sergio Salvago Medina
 */
/* Usa el formulario (Ejercicio 3 UD5) del conversor euros a pesetas y viceversa de la cantidad introducida por el usuario y guardar los datos en una Cookie.
Se deben mostrar la cantidad, moneda y conversión actual y la cantidad, moneda y conversión anterior (cookie). */
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    $valor = $_GET["euro"];
    $resultado="";
    $conversor = $_GET["conversor"];
    $valor2="";
    $cookie_value=[];
    
    if($conversor === "pesetas"){
        $resultado=$valor*0.0060;
        $valor2=round($resultado,2);
        array_push($cookie_value,$valor2);
        array_push($cookie_value,$valor);
        array_push($cookie_value,$conversor);
    }
    
    if($conversor === "euros"){
        $resultado=$valor*166.386;
        $valor2=round($resultado);
        array_push($cookie_value,$valor2);
        array_push($cookie_value,$valor);
        array_push($cookie_value,$conversor);
    }
    }
    
    $cookie_name="Ejercicio4";
    $cookie_value=$valor2."".$conversor." = ".$valor;
    setcookie($cookie_name, $cookie_value);
    echo ($valor."en ".$conversor." son: ".$resultado." que redondeado son: ".$valor2);
    ?>
    
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <form method="get">
                    <label for="conversor">Introduce la cantidad:</label><br><br>
    
                    <input type="radio" name="conversor" value="euros" >€<br><br>
                    <input type="radio" name="conversor" value="pesetas" >Pesetas<br><br>
    
                    <input type="text" name="euro"><br><br>
    
                    <p>1€ equivale a 166.386 pesetas</p>
                    <p>1pta equivale a 0.0060 euros</p>
    
                    <input type="submit" name="boton" value="calcular"><br><br>
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