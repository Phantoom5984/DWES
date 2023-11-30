<?php
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
?>