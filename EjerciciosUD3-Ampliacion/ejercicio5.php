<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 5. Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El programa nos pedirá la combinación para abrirla.
Si no acertamos, se nos mostrará el mensaje “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto satisfactoriamente”.
Tendremos cuatro oportunidades para abrir la caja fuerte. */
$con=1245; //Combinación correcta de la caja fuerte.
$numero=0;
$contador=1;
while($contador<5 && $con!=$numero){ //Mientras el contador sea menor que 5 y la combinación no sea correcta.
    $numero=ReadLine("Dime una combinación de 4 cifras: "); //Pido un número.
    if($numero>999 && $numero<10000){ //Si el número es de 4 cifras.
    if($numero==$con){ //Se ha acertado el número.
        echo ("La caja fuerte se ha abierto satisfactoriamente\n");
        echo ("Has abierto la caja fuerte en ".$contador." intentos");
    }else{
        echo ("Lo siento, esa no es la combinación\n");
    }
    $contador++;  //Se suma un intento.
}else{
    echo ("Introduce una combinación de 4 cifras\n");
    $numero=ReadLine("Dime una combinación de 4 cifras: ");
}
}
if($contador>=5){  //Se ha pasado el número de intentos.
echo ("Lo siento, no has podido abrir la caja fuerte, suerte la próxima vez");
}else{
    echo("");
}
?>