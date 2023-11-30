<?php 
/**
 * @author Sergio Salvago Medina
 */
// Ejercicios de Expresiones Regulares: debes probar con preg_match el patrón que hayas generado con una cadena válida y una cadena no válida.
// Genera el patrón para los teléfonos fijos de la provincia de Valencia.
echo ("Validar un número de teléfono fijo en Valencia\n");
$vc = "+34987654321";
$vi = "+34123456789";
$regex = "/^(\+34|0034|34)?(8|9)([0-9]){8}/";
validarExpresiones($regex, $vc);
validarExpresiones($regex, $vi);

echo ("\n");

// Genera el patrón para los códigos postales de la Comunidad Valenciana.
echo ("Validar un código postal\n");
$vc2 = "46789";
$vi2 = "12356";
$regex2 = "/^46\d{3}/";
validarExpresiones($regex2, $vc2);
validarExpresiones($regex2, $vi2);

echo ("\n");

// Genera el patrón para los teléfonos móviles.
echo ("Validar un teléfono móvil\n");
$vc3 = "678912345";
$vi3 = "123456789";
$regex3 = "/^[6-9]\d{8}/";
validarExpresiones($regex3, $vc3);
validarExpresiones($regex3, $vi3);

echo ("\n");

// Genera el patrón para un NIF.
echo ("Validar un NIF\n");
$vc4 = "12345678K";
$vi4 = "012345678n";
$regex4 = "/^[0-9]{8}[ABCDEFGHIJKLMNÑOPQRSTUVWXYZ]/i";
validarExpresiones($regex4, $vc4);
validarExpresiones($regex4, $vi4);

echo ("\n");

// Genera el patrón para fecha en formato dd/mm/aaaa o bien dd-mm-aaaa.
echo ("Validar una fecha\n");
$vc5 = "29/11/2023";
$vi5 = "29-11-23";
$regex5 = "/^(0[1-9]|[12][0-9]|3[01])[-\/](0[1-9]|1[0-2])[-\/]\d{4}/";
validarExpresiones($regex5, $vc5);
validarExpresiones($regex5, $vi5);

echo ("\n");

// Genera el patrón para una cadena que sea aprobado (puede ser mayúsculas o minúsculas).
echo ("Validar la cadena 'aprobado' ya sea mayúsculas o minúsculas\n");
$vc6 = "aprobado";
$vc61 = "APROBADO";
$vi6 = "aprodado";
$regex6 = "/^aprobado/i";
validarExpresiones($regex6, $vc6);
validarExpresiones($regex6, $vc61);
validarExpresiones($regex6, $vi6);

echo ("\n");

// Genera el patrón para una cadena que contenga aprobado en minúsculas.
echo ("Validar la cadena 'aprobado' en minúsculas\n");
$vc7 = "aprobado";
$vi7 = "Aprobado";
$regex7 = "/^aprobado/";
validarExpresiones($regex7, $vc7);
validarExpresiones($regex7, $vi7);

echo ("\n");

// Genera el patrón para una cadena que contenga aprobado tanto en mayúsculas como en minúsculas.
echo ("Validar la cadena 'aprobado' ya sea mayúsculas o minúsculas\n");
$vc8 = "AproBado";
$vi8 = "aprodado";
$regex8 = "/^aprobado/i";
validarExpresiones($regex8, $vc8);
validarExpresiones($regex8, $vi8);

echo ("\n");

// Genera el patrón para letras mayúsculas/minúsculas y espacios.
echo ("Validar mayúsculas, minúsculas y espacios\n");
$vc9 = "Hola Mundo";
$vi9 = "@#~$";
$regex9 = "/^[A-Za-z\s]+/";
validarExpresiones($regex9, $vc9);
validarExpresiones($regex9, $vi9);

echo ("\n");

// Genera el patrón para solamente números, sin espacios.
echo ("Validar números sin espacios\n");
$vc10 = "369";
$vi10 = "hola";
$regex10 = "/^\d+/";
validarExpresiones($regex10, $vc10);
validarExpresiones($regex10, $vi10);

echo ("\n");

// Genera el patrón para números con espacios.
echo ("Validar números con espacios\n");
$vc11 = "3 6 9";
$vi11 = "ho la";
$regex11 = "/^[\d\s]+/";
validarExpresiones($regex11, $vc11);
validarExpresiones($regex11, $vi11);

echo ("\n");

// Genera el patrón para texto en blanco, números, mayúsculas/minúsculas y caracteres acentuados.
echo ("Validar espacios en blanco, números, mayus/minus y acentos\n");
$vc12 = "Hola Mundo y Adrián";
$vi12 = "@|";
$regex12 = "/^[\p{L}\d\s]+/u";
validarExpresiones($regex12, $vc12);
validarExpresiones($regex12, $vi12);

echo ("\n");

// Genera el patrón para el caso anterior añadiendo los signos de puntuación: comillas simples, coma, punto, punto y coma, dos puntos y guiones.
echo ("Validar todo lo anterior más comas, punto y coma, guiones, dos puntos, punto\n");
$vc13 = "Hola-Mundo: todo correcto, hasta luego;";
$vi13 = "#";
$regex13 = "/^[\p{L}\d\s'.,;: -]+/u";
validarExpresiones($regex13, $vc13);
validarExpresiones($regex13, $vi13);

echo ("\n");

// Genera el patrón para validar una dirección de email.
echo ("Validar un email\n");
$vc14 = "sergio@gmail.com";
$vi14 = "sergiogmail.com";
$regex14 = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";
validarExpresiones($regex14, $vc14);
validarExpresiones($regex14, $vi14);

echo ("\n");

// Genera el patrón para validar una URL sencilla (http://www.ieslasenia.org/ejercicio?16).
echo ("Validar URL\n");
$vc15 = "http://www.ieslasenia.org/ejercicio?16";
$vi15 = "www.ieslaseniaorg/ejercicio?16";
$regex15 = "/^https?:\/\/www\.[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}\/[a-zA-Z0-9\/?-]+/";
validarExpresiones($regex15, $vc15);
validarExpresiones($regex15, $vi15);

echo ("\n");

// Genera el patrón para validar una contraseña con al menos un carácter en minúscula, una mayúscula, un número y al menos 6 caracteres de longitud.
echo ("Validar contraseña con minúsculas, mayúsculas y 6 carácteres máximo\n");
$vc16 = "Sergio8";
$vi16 = "sergio";
$regex16 = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}/";
validarExpresiones($regex16, $vc16);
validarExpresiones($regex16, $vi16);
echo ("\n");

// Genera el patrón para validar una IPv4.
echo ("Validar una IPv4\n");
$vc17 = "100.100.1.1";
$vi17 = "0.0.1";
$regex17 = "/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){2}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/";
validarExpresiones($regex17, $vc17);
validarExpresiones($regex17, $vi17);

echo ("\n");

// Genera el patrón para validar una MAC separada por :.
echo ("Validar una dirección MAC separada por dos puntos :\n");
$vc18 = "01:02:03:04:05:aA";
$vi18 = "0102030405aA";
$regex18 = "/^([0-9A-Fa-f]{2}:){5}[0-9A-Fa-f]{2}/";
validarExpresiones($regex18, $vc18);
validarExpresiones($regex18, $vi18);

echo ("\n");

// Genera el patrón para validar una MAC separada por -.
echo ("Validar una dirección MAC separada por guión -\n");
$vc19 = "01-02-03-04-05-aA";
$vi19 = "0102030405aA";
$regex19 = "/^([0-9A-Fa-f]{2}-){5}[0-9A-Fa-f]{2}/";
validarExpresiones($regex19, $vc19);
validarExpresiones($regex19, $vi19);

echo ("\n");

// Genera el patrón para validar una matrícula de vehículo española.
echo ("Validar matrícula española\n");
$vc20 = "1234 ABC";
$vi20 = "A1234";
$regex20 = "/^[0-9]{4}\s?[ABCDEFGHIJKLMNÑOPQRSTUVWXYZ]{3}/i";
validarExpresiones($regex20, $vc20);
validarExpresiones($regex20, $vi20);

echo ("\n");

function validarExpresiones ($regex, $valor){
    if(preg_match($regex, $valor)){
        echo "Expresión regular correcta\n";
    } else {
        echo "Expresión regular incorrecta\n";
    }
}
?>