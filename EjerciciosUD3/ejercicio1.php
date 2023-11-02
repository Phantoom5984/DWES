<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 1. Elabora un programa que dado un carácter determine si es:
1. una letra mayúscula
2. una letra minúscula
3. un carácter numérico
4. un carácter blanco
5. un carácter de puntuación
6. un carácter especial */
$letra = ReadLine("Hola dime un carácter: "); // Con esta línea de código recojo la letra que se escribe por teclado.
if(ctype_upper($letra)){
    echo ("La letra es mayúscula\n");
}else if(ctype_lower($letra)){
    echo ("La letra es minúscula\n");
}else if(is_numeric($letra)){
    echo ("El carácter es un número\n");
}else if(ctype_space($letra)){
    echo ("El carácter es un espacio\n");
}else if(ctype_punct($letra)){
    echo ("El carácter es de puntuación\n");
}
if(ctype_alnum($letra)==false){
    echo ("El carácter es especial");
}
//Con estas líneas de código hago unos ifs dependiendo de cada caso.
?>