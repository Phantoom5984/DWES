<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 6. Realiza un programa que pida 8 números enteros, los almacene en un vector junto con la palabra “par” o “impar” según proceda y los muestre.
Además debe indicar la cantidad de números en cada caso y el porcentaje de pares e impares. */
$por=0;
$por2=0;
$nums=[];
for ($i=0;$i<8;$i++) { 
    $num=ReadLine("Dime un número que no se repita: "); //Pido un número.
    if($num%2==0){ //Si es par lo meto en el array como par y sumo 1 al contador de pares.
        $nums[$num]="par";
        $por++;
    }else{ //Si es impar lo meto en el array como impar y sumo 1 al contador de impares.
        $nums[$num]="impar";
        $por2++;
    }
    print_r($nums);
}
echo ("La cantidad de pares son: ".$por." y de impares: ".$por2."\n");
$porPar=($por/8)*100;
$porImpar=($por2/8)*100; //Calculo las medias con la cantidad de pares e impares.
echo ("El % de pares es: ".$porPar."% y el de impares: ".$porImpar."%");
?>