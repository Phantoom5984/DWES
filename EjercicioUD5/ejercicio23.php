<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 23. Escribe un formulario de recogida de datos que conste de dos páginas: En la primera página se solicitan los datos y se muestran errores tras validarlos.
En la segunda página se muestra toda la información introducida por el usuario si no hay errores errores. Los datos a recoger son datos personales, nivel de estudios (desplegable),
situación actual (selección múltiple: estudiando, trabajando, buscando empleo, desempleado) y hobbies (marcar de varios mostrados y poner otro con opción a introducir texto). */
if(trim($_POST["nombre"])===""){
    echo ("error");
}else{
    
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sergio Salvago Medina - Ejercicio 23</title>
</head>
<body>
    <h1>Sergio Salvago Medina - Ejercicio 23</h1>
    <form action="ejercicio23b.php" method="post/get">
    Nombre: <input type="text" name="nombre" size="50"><br><br>
        Estudios: <select name="estudios">
        <option>Primaria</option>
        <option>Eso</option>
        <option>Bachiller</option>
        </select><br><br>
        Situación actual: <select multiple size="2" name="situacion[]">
        <option SELECTED>Estudiando</option>
        <option SELECTED>Trabajando</option>
        <option>Buscando empleo</option>
        <option>Desempleado</option>
        </select><br><br>
        Hoobies: <select multiple size="2" name="hoobies[]">
        <option SELECTED>Jugar</option>
        <option SELECTED>Estudiar</option>
        <option>Dormir</option>
        <input name="hoobies[]" type="text">
    </select><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>