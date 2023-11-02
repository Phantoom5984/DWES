<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 12. Crea un programa para leer las notas de los alumnos de una clase, y que informe del número de alumnos cuya nota sea mayor de la media de la clase.
$alumnos=ReadLine("Dime la cantidad de alumnos: ");
$notas=[];
for ($i=0;$i<$alumnos;$i++) { 
    $nom=ReadLine("Dime su nombre: ");
    $nota=ReadLine("Dime su nota: ");
    if($nota>=0 && $nota<=10){
    $notas[$nom]=$nota;
    }else{
        echo ("La nota mínima es 0 y la máxima es 10\n");
        $nota=ReadLine("Dime su nota: ");
        $notas[$nom]=$nota;
    }
    // Con estas líneas de código hago un for para rellenar el array asociativo y dentro de eso for un if para que la nota se entre 0 y 10.
}
$long=count($notas);
$contador=0;
$media=array_sum($notas)/$long;
echo ("La media es: ".$media."\n");
foreach ($notas as $k=>$a){ 
    if($a>$media){
        echo ($a."\n");
        $contador++;
    } 
    }
    // Con estas líneas de código cuento el array y saco la media de este, luego un foreach para recorrer el array y un if para saber las notas superiores a la media.
echo ("Hay un total de: ".$contador." alumnos que han superado la media");
?>