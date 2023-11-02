<?php
/**
 * @author Sergio Salvago Medina
 */
/* Ejercicio 13. Diseñar la función operaMatriz, a la que se le pasa dos matrices de enteros positivos mayores de 0 y la operación que se desea realizar:
sumar, restar, multiplicar o dividir (mediante un carácter: 's', 'r', 'm', 'd'). La función debe imprimir las matrices originales,
indicar la operación a realizar y la matriz con los resultados. */
$mat1=[];
$mat2=[];
$long=ReadLine("Dime la longitud de las matrices: ");
for ($i=0;$i<$long;$i++) { 
    for ($j=0;$j<$long;$j++) { 
        $mat1[$i][$j]=rand(1,100);
        $mat2[$i][$j]=rand(1,100); //Relleno las matrices con números random entre el 1 y el 100.
    }
}
operaMatriz($mat1,$mat2);
function operaMatriz($mat1,$mat2){
    $long=count($mat1); //Cuento la longitud de las filas y columnas.
    $mat3=[];
    for ($i=0;$i<$long;$i++) { 
        for ($j=0;$j<$long;$j++) { 
            printf ("%d\t",$mat1[$i][$j]); //Hago un print de la primera matriz.
        }
        echo ("\n");
    }
    echo ("\n");
    for ($i=0;$i<$long;$i++) { 
        for ($j=0;$j<$long;$j++) { 
            printf ("%d\t",$mat2[$i][$j]); //Hago un print de la segunda matriz.
        }
        echo ("\n");
    }
    $letra=ReadLine("Dime una operación 's', 'r'. 'm', 'd' y 'q' para salir: ");
    while($letra!='q'){
    if($letra=='s'){
        for ($i=0;$i<$long;$i++) { 
            for ($j=0;$j<$long;$j++) { 
                $mat3[$i][$j]=$mat1[$i][$j]+$mat2[$i][$j]; //Relleno la matriz en cada posición sumando los números de ambas matrices en esa posición.
                printf ("%d\t",$mat3[$i][$j]); //Y hago un print de la tercera la matriz.
            }
            echo ("\n");
        }
    }else if($letra=='r'){
        for ($i=0;$i<$long;$i++) { 
            for ($j=0;$j<$long;$j++) { 
                $mat3[$i][$j]=$mat1[$i][$j]-$mat2[$i][$j]; //Relleno la matriz en cada posición restando los números de ambas matrices en esa posición.
                printf ("%d\t",$mat3[$i][$j]); //Y hago un print de la tercera la matriz.
            }
            echo ("\n");
        }
    }else if($letra=='m'){
        for ($i=0;$i<$long;$i++) { 
            for ($j=0;$j<$long;$j++) {
                $mat3[$i][$j]=0;
                $p=0;
                for ($k=0;$k<$long;$k++) { 
                    $p+=$mat1[$i][$k]*$mat2[$k][$j]; /*Relleno la matriz en cada posición multiplicando los números en la misma posicion y
                    luego sumando los números de respectivas filas o columnas, es decir, si tengo una 2x2 que es 1 2 3 4 y otra 5 6 7 8 la muliplicación la primera posición sería:
                    1*5 + 2*6.*/
                }
                $mat3[$i][$j]=$p;
                printf ("%d\t",$mat3[$i][$j]); //Y hago un print de la tercera la matriz.
            }
            echo ("\n");
        }
    }
    else if($letra=='d'){
        for ($i=0;$i<$long;$i++) { 
            for ($j=0;$j<$long;$j++) { 
                $mat3[$i][$j]=$mat1[$i][$j]/$mat2[$i][$j]; //Relleno la matriz en cada posición dividiendo los números de ambas matrices en esa posición.
                printf ("%d\t",$mat3[$i][$j]); //Y hago un print de la tercera la matriz.
            }
            echo ("\n");
        }
    }
    $letra=ReadLine("Dime una operación 's', 'r'. 'm', 'd' y 'q' para salir: ");
}
echo ("Hasta luego");
}
?>