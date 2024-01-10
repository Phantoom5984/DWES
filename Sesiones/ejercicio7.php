<?php
/**
 * @author Sergio Salvago Medina
 */
/*7. Usa el formulario del ejercicio 7 de Cookies de caja fuerte de modo que uses la sesión para mostrar la contraseña introducida
 y el número de intentos actuales y además muestre el las contraseñas introducidas de la ejecución anterior. Si abre la caja o llega al máximo de intentos,
 a los datos anteriores se añadirá la contraseña correcta y un mensaje de éxito o no conseguido.*/
 $numeroRandom = isset($_POST["numeroRandom"]) ? $_POST["numeroRandom"] : rand(1000, 9999);
 $intentos = isset($_POST["intentos"]) ? $_POST["intentos"] : 4;
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();

    if (empty($_SESSION['numeroRandom']) && empty($_SESSION['numero']) ) {
        $_SESSION['numeroRandom'] = $_POST['numeroRandom'];
        $_SESSION['numero'] = $_POST['numero'];
       
    } else {
        $_SESSION['numeroRandom2'] = $_SESSION['numeroRandom'];
        $_SESSION['numeroRandom'] = $_POST['numeroRandom'];

        $_SESSION['numero2'] = $_SESSION['numero'];
        $_SESSION['numero'] = $_POST['numero'];

        echo "El dato introducido anteriormente es: ", $_SESSION['numeroRandom2']. "-" .$_SESSION['numero2']."<br>";
        
    }
     $numero = $_POST["numero"];
     $intentos--;
     echo $numeroRandom.", contraseña introducida: ".$numero.", intentos: ".$intentos;
 }
 ?>
 
 <!DOCTYPE html>
 <html lang="es">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ejercicio 7</title>
 </head>
 <body>
     <form method="post">
         <input type="hidden" name="numeroRandom" value="<?php echo $numeroRandom; ?>">
         <input type="hidden" name="intentos" value="<?php echo $intentos; ?>">
 
         <label for="numero">Introduce el número de 4 cifras</label><br><br>
         <input type="text" name="numero"><br><br>
         <input type="submit" name="enviar" value="Enviar">
     </form>
 </body>
 </html>