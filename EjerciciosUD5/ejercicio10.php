<?php
/**
 * @author Sergio Salvago Medina
 */
/* Dado un vector asociativo de trabajadores con su salario, crea usando funciones y a criterio del usuario, el salario máximo, el salario mínimo y el salario medio.
(puede elegir uno de ellos, varios o todos). */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombres = $_POST["nombres"];
        $salarios = $_POST["salarios"];

        function salmax($vec){
            $max = max($vec);
            echo "El salario máximo es: " . $max . "<br>";
        }
        function salmin($vec){
            $min = min($vec);
            echo "El salario mínimo es: " . $min . "<br>";
        }
        function salmed($vec){
            $long = count($vec);
            $media = array_sum($vec) / $long;
            echo "El salario medio es: " . $media . "<br>";
        }

        salmax($salarios);
        salmin($salarios);
        salmed($salarios);
    }

    ?>
<!DOCTYPE html>
<html>
<head>
    <title>CEjercicio 10</title>
</head>
<body>
    <form method="post" action="ejercicio10.php">
        <label for="nombre">Nombre del trabajador</label>
        <input type="text" id="nombre" name="nombres[]" required>
        <label for="salario">Salario del trabajador</label>
        <input type="number" id="salario" name="salarios[]" required><br><br>

        <label for="nombre">Nombre del trabajador</label>
        <input type="text" id="nombre" name="nombres[]" required>
        <label for="salario">Salario del trabajador</label>
        <input type="number" id="salario" name="salarios[]" required><br><br>
        
        <input type="submit" value="Calcular">
    </form>

   
</body>
</html>
