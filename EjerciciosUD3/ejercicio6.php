<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 6. Escribe un programa que lea tres números positivos y compruebe si son iguales. Por ejemplo:
* Si la entrada fuese 5 5 5, la salida debería ser “hay tres números iguales a 5“.
* Si la entrada fuese 4 6 4, la salida debería ser “hay dos números iguales a 4“.
* Si la entrada fuese 0 1 2, la salida debería ser “no hay números iguales“. */
$numero1=ReadLine("Dime un número: ");
$numero2=ReadLine("Dime otro número: ");
$numero3=ReadLine("Dime un último número: "); // Con estas líneas de código recojo los números.
if($numero1>=0 && $numero2>=0 && $numero3>=0){
    if($numero1==$numero2 && $numero1==$numero3){
        echo ("Todos los números son iguales a ".$numero1);
    }
    else if($numero1==$numero2 || $numero1==$numero3){
        echo ("Hay dos números iguales a ".$numero1);
    }
    else if($numero2==$numero3){
        echo ("Hay dos números iguales a ".$numero2);
    }else{
        echo ("No hay números iguales");
    }
    // Con estas líneas de código hago unos ifs para saber si los números son iguales.
}else{
    echo ("Los números tienen que ser mayores a 0");
}
?>