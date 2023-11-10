<?php
/**
 * @author Sergio Salvago Medina
 */
$matriz=[];
for ($i=1;$i<=8;$i++) {
    for ($j=1;$j<=8;$j++) { 
        $matriz[$i][$j]=0;
    }
}
$matriz2=[];
for ($i=1;$i<=8;$i++) {
    for ($j=1;$j<=8;$j++) { 
        $matriz2[$i][$j]=0;
    }
}

$barco4_1=$matriz[1][1]=1;
$barco4_2=$matriz[1][2]=1;
$barco4_3=$matriz[1][3]=1;
$barco4_4=$matriz[1][4]=1;

$barco3_1=$matriz[1][6]=1;
$barco3_2=$matriz[2][6]=1;
$barco3_3=$matriz[3][6]=1;
$barco3_4=$matriz[5][6]=1;
$barco3_5=$matriz[6][6]=1;
$barco3_6=$matriz[7][6]=1;

$barco2_1=$matriz[5][4]=1;
$barco2_2=$matriz[5][3]=1;
$barco2_3=$matriz[8][1]=1;
$barco2_4=$matriz[8][2]=1;
$barco2_5=$matriz[8][4]=1;
$barco2_6=$matriz[8][5]=1;

$barco1_1=$matriz[8][8]=1;
$barco1_2=$matriz[6][8]=1;
$barco1_3=$matriz[1][8]=1;
$barco1_4=$matriz[5][5]=1;

$long=count($matriz);
for ($i=1;$i<=$long;$i++) { 
    for ($j=1;$j<=$long;$j++) { 
        printf ("%d\t",$matriz[$i][$j]);
    }
    echo ("\n");
}
$numero=0;
$contador=1;
$fil=ReadLine("Dime una fila: ");
$colum=ReadLine("Dime una columna: ");
while($matriz!=$matriz2){
if($matriz[$fil][$colum]==1 || $matriz[$fil][$colum]==-1){
    if($matriz[$fil+1][$colum+1]==0 || $matriz[$fil-1][$colum-1]==0){
    $matriz2[$fil][$colum]=2;
    $matriz[$fil][$colum]=2;
    }else{
        $matriz2[$fil][$colum]=-1;
        $matriz[$fil][$colum]=-1;
        echo ("Tocado\n");
    }
}
else{
    $matriz2[$fil][$colum]=0;
    $matriz[$fil][$colum]=0;
    echo ("Agua\n");
}
$long=count($matriz2);
for ($i=1;$i<=$long;$i++) { 
    for ($j=1;$j<=$long;$j++) { 
        printf ("%d\t",$matriz2[$i][$j]);
    }
    echo ("\n");
}
$fil=ReadLine("Dime una fila: ");
$colum=ReadLine("Dime una columna: ");
$contador++;
}
if($contador<=20){  //Se ha pasado el número de intentos.
    echo ("Master");
    }else if($contador<=30){  //Se ha pasado el número de intentos.
        echo ("Expert");
    }else if($contador<=50){  //Se ha pasado el número de intentos.
        echo ("Casual");
    }else if($contador>50){  //Se ha pasado el número de intentos.
        echo ("Noob");
    }
/*
rellenarBarco($matriz);
function rellenarBarco($matriz){
    $long=count($matriz);
    $barco4=ReadLine("Dime si quieres poner el barco de 4 celdas en horizontal o vertical: ");
    while($barco4!="horizontal" && $barco4!="vertical"){
        $barco4=ReadLine("Solo están las opciones en horizontal o vertical: ");
}
if($barco4=="horizontal"){
    $barco4I=ReadLine("Dime la fila: ");
    $colum=0;
    for($k=0;$k<4;$k++){
        $barco4J=ReadLine("Dime las columnas (que no se repitan y sean contiguas): ");
        while($barco4J==$colum){
            $barco4J=ReadLine("No se pueden repetir columnas: ");
        }
        $matriz[$barco4I][$barco4J]=1;
        $colum=$barco4J;
    }
}else if($barco4=="vertical"){
    $barco4J=ReadLine("Dime la columna: ");
    $fil=0;
    for($k=0;$k<4;$k++){
        $barco4I=ReadLine("Dime las filas (que no se repitan y sean contiguas): ");
        while($barco4I==$fil){
            $barco4I=ReadLine("No se pueden repetir filas: ");
        }
        $matriz[$barco4I][$barco4J]=1;
        $fil=$barco4I;
    }
}
$long=count($matriz);
for ($i=1;$i<=$long;$i++) { 
    for ($j=1;$j<=$long;$j++) { 
        printf ("%d\t",$matriz[$i][$j]);
    }
    echo ("\n");
}
for($l=0;$l<1;$l++){
    $barco3=ReadLine("Dime si quieres poner el barco de 3 celdas en horizontal o vertical: ");
    while($barco3!="horizontal" && $barco3!="vertical"){
        $barco3=ReadLine("Solo están las opciones en horizontal o vertical: ");
}
if($barco3=="horizontal"){
    $barco3I=ReadLine("Dime la fila: ");
    while($barco3I==$barco4I && $matriz[$barco4I+1]==0){
        $barco3I=ReadLine("Esa fila ya está ocupada: ");
    }
    $colum=0;
    for($k=0;$k<3;$k++){
        $barco3J=ReadLine("Dime las columnas (que no se repitan y sean contiguas): ");
        while($barco3J==$barco4J && $matriz[$barco4J+1]==0){
            $barco3J=ReadLine("Esa columna ya está ocupada: ");
        }
        while($barco3J==$colum){
            $barco3J=ReadLine("No se pueden repetir columnas: ");
        }
        $matriz[$barco3I][$barco3J]=1;
        $colum=$barco3J;
    }
}else if($barco3=="vertical"){
    $barco3J=ReadLine("Dime la columna: ");
    while($barco3J==$barco4J && $matriz[$barco4J+1]==0){
        $barco3J=ReadLine("Esa columna ya está ocupada: ");
    }
    $fil=0;
    for($k=0;$k<3;$k++){
        $barco3I=ReadLine("Dime las filas (que no se repitan y sean contiguas): ");
        while($barco3I==$barco4I && $matriz[$barco4I+1]==0){
            $barco3I=ReadLine("Esa fila ya está ocupada: ");
        }
        while($barco3I==$fil){
            $barco3I=ReadLine("No se pueden repetir filas: ");
        }
        $matriz[$barco3I][$barco3J]=1;
        $fil=$barco3I;
    }
}
for ($i=1;$i<=$long;$i++) { 
    for ($j=1;$j<=$long;$j++) { 
        printf ("%d\t",$matriz[$i][$j]);
    }
    echo ("\n");
}
    }
    for($l=0;$l<2;$l++){
        $barco2=ReadLine("Dime si quieres poner el barco de 2 celdas en horizontal o vertical: ");
        while($barco2!="horizontal" && $barco2!="vertical"){
            $barco2=ReadLine("Solo están las opciones en horizontal o vertical: ");
    }
    if($barco2=="horizontal"){
        $barco2I=ReadLine("Dime la fila: ");
        while($barco2I==$barco4I && $barco2I+1!=0 || $barco2I==$barco3I && $barco2I+1!=0 ){
            $barco2I=ReadLine("Esa fila ya está ocupada: ");
        }
        $colum=0;
        for($k=0;$k<3;$k++){
            $barco2J=ReadLine("Dime las columnas (que no se repitan y sean contiguas): ");
            while($barco2J==$barco4J && $barco2J+1==0 || $barco2J==$barco3J && $barco2J+1==0 ){
                $barco2J=ReadLine("Esa columna ya está ocupada: ");
            }
            while($barco2J==$colum){
                $barco2J=ReadLine("No se pueden repetir columnas: ");
            }
            $matriz[$barco2I][$barco2J]=1;
            $colum=$barco2J;
        }
    }else if($barco2=="vertical"){
        $barco2J=ReadLine("Dime la columna: ");
        while($barco2J==$barco4J && $barco2J+1!=0 || $barco2J==$barco3J && $barco2J+1!=0 ){
            $barco2J=ReadLine("Esa columna ya está ocupada: ");
        }
        $fil=0;
        for($k=0;$k<3;$k++){
            $barco2I=ReadLine("Dime las filas (que no se repitan y sean contiguas): ");
            while($barco2I==$barco4I && $barco2I+1!=0 || $barco2I==$barco3I && $barco2I+1!=0 ){
                $barco2I=ReadLine("Esa fila ya está ocupada: ");
            }
            while($barco2I==$fil){
                $barco2I=ReadLine("No se pueden repetir filas: ");
            }
            $matriz[$barco2I][$barco2J]=1;
            $fil=$barco2I;
        }
    }
    for ($i=1;$i<=$long;$i++) { 
        for ($j=1;$j<=$long;$j++) { 
            printf ("%d\t",$matriz[$i][$j]);
        }
        echo ("\n");
    }
        }
        for($l=0;$l<3;$l++){
            $barco1=ReadLine("Dime si quieres poner el barco de 1 celdas en horizontal o vertical: ");
            while($barco1!="horizontal" && $barco1!="vertical"){
                $barco1=ReadLine("Solo están las opciones en horizontal o vertical: ");
        }
        if($barco1=="horizontal"){
            $barco1I=ReadLine("Dime la fila: ");
            while($barco1I==$barco4I && $barco1I+1!=0 || $barco1I==$barco3I && $barco1I+1!=0 || $barco1I==$barco2I && $barco1I+1!=0){
                $barco1I=ReadLine("Esa fila ya está ocupada: ");
            }
            $colum=0;
            for($k=0;$k<3;$k++){
                $barco1J=ReadLine("Dime las columnas (que no se repitan y sean contiguas): ");
                while($barco1J==$barco4J && $barco1J+1!=0 || $barco1J==$barco3J && $barco1J+1!=0 || $barco1J==$barco2J && $barco1J+1!=0){
                    $barco1J=ReadLine("Esa columna ya está ocupada: ");
                }
                while($barco1J==$colum){
                    $barco1J=ReadLine("No se pueden repetir columnas: ");
                }
                $matriz[$barco1I][$barco1J]=1;
                $colum=$barco1J;
            }
        }else if($barco1=="vertical"){
            $barco1J=ReadLine("Dime la columna: ");
            while($barco1J==$barco4J && $barco1J+1!=0 || $barco1J==$barco3J && $barco1J+1!=0 || $barco1J==$barco2J && $barco1J+1!=0){
                $barco1J=ReadLine("Esa columna ya está ocupada: ");
            }
            $fil=0;
            for($k=0;$k<3;$k++){
                $barco1I=ReadLine("Dime las filas (que no se repitan y sean contiguas): ");
                while($barco1I==$barco4I && $barco1I+1!=0 || $barco1I==$barco3I && $barco1I+1!=0 || $barco1I==$barco2I && $barco1I+1!=0){
                    $barco1I=ReadLine("Esa fila ya está ocupada: ");
                }
                while($barco1I==$fil){
                    $barco1I=ReadLine("No se pueden repetir filas: ");
                }
                $matriz[$barco1I][$barco1J]=1;
                $fil=$barco1I;
            }
        }
        for ($i=1;$i<=$long;$i++) { 
            for ($j=1;$j<=$long;$j++) { 
                printf ("%d\t",$matriz[$i][$j]);
            }
            echo ("\n");
        }
            }
}*/
?>