<?php
/**
 * @author Sergio Salvago Medina
 */
/*4. Usa el formulario del ejercicio 4 de Cookies del conversor de euros y pesetas de modo que uses la sesión para mostrar la cantidad,
moneda y conversión actuales y además muestre la cantidad, moneda y conversión anterior.*/
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    session_start();

    if (empty($_SESSION['conversor']) && empty($_POST['euro'])) {
        $_SESSION['conversor'] = $_POST['conversor'];
        $_SESSION['euro'] = $_POST['euro'];
    
    } else {
        $_SESSION['conversor2'] = $_SESSION['conversor'];
        $_SESSION['conversor'] = $_POST['conversor'];

        $_SESSION['euro2'] = $_SESSION['euro'];
        $_SESSION['euro'] = $_POST['euro'];

        echo "El dato introducido anteriormente es: ", $_SESSION['conversor2']. "-" .$_SESSION['euro2']."<br>";
        
    }
    $valor = $_POST["euro"];
    $resultado="";
    $conversor = $_POST["conversor"];
    $valor2="";
    
    if($conversor === "pesetas"){
        $resultado=$valor*0.0060;
        $valor2=round($resultado,2);
        echo "$valor2 euros $valor$conversor";
    }
    
    if($conversor === "euros"){
        $resultado=$valor*166.386;
        $valor2=round($resultado);
        echo "$valor2 pesetas $valor$conversor";
    }
    }
    ?>
    
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <form method="post">
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