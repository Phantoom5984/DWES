<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 4. Muestra los múltiplos de 5 entre 0 y 100 usando:
a) bucle for
b) bucle while
c) bucle do-while */
for ($i=0;$i<=100;$i++){ 
    if ($i%5==0) { //Compruebo si el número es un múltiplo de 5
        echo ($i." ");
    }else{
        echo ("");
    }
}
echo ("\n");
$num=0;
while ($num<=100){
    echo ($num." ");
    $num+=5; //Aumento $num en 5 cada vez que se entre al while para obtener el siguiente múltiplo de 5.
}
echo ("\n");
$num=0;
do{
    echo ($num." ");
    $num+=5; //Aumento $num en 5 cada vez que se entre al while para obtener el siguiente múltiplo de 5.
}while($num<=100);
?>