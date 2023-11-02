<?php
$numeros=array();
$numeritos=ReadLine("¿Cuantos números quieres ingresar? ");
while ($numeritos<5){
    echo ("Tienen que ser mínimo 5 \n");
    $numeritos=ReadLine("¿Cuantos números quieres ingresar? ");
}
for ($i=1;$i<=$numeritos;$i++) {
    $numero=ReadLine("Porfavor dime ".$numeritos. " números: ");
    array_push($numeros, $numero);
}
$cuenta=count($numeros);
$suma=array_sum($numeros);
$media=$suma/$cuenta;
$mediaRed=round($media);
echo ("Has introducido los números: ".implode(",",$numeros)."\n");
echo ("La media es ".$media." y el redondeado es: ".$mediaRed);
?>