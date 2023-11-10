<?php
/**
* @author Sergio Salvago Medina
*/
$barcos=array("barco4"=>array("tamaño"=>4,"filaInicio"=>0,"colInicio"=>0,"direccion"=>0),
"barco3_1"=>array("tamaño"=>3,"filaInicio"=>1,"colInicio"=>6,"direccion"=>1),
"barco3_2"=>array("tamaño"=>3,"filaInicio"=>5,"colInicio"=>6,"direccion"=>1),
"barco2_1"=>array("tamaño"=>2,"filaInicio"=>5,"colInicio"=>4,"direccion"=>0),
"barco2_2"=>array("tamaño"=>2,"filaInicio"=>8,"colInicio"=>1,"direccion"=>0),
"barco2_3"=>array("tamaño"=>2,"filaInicio"=>8,"colInicio"=>4,"direccion"=>0),
"barco1_1"=>array("tamaño"=>1,"filaInicio"=>8,"colInicio"=>8,"direccion"=>0),
"barco1_2"=>array("tamaño"=>1,"filaInicio"=>6,"colInicio"=>8,"direccion"=>0),
"barco1_3"=>array("tamaño"=>1,"filaInicio"=>1,"colInicio"=>8,"direccion"=>0),
"barco1_4"=>array("tamaño"=>1,"filaInicio"=>5,"colInicio"=>5,"direccion"=>0)
);
foreach($barcos as $barco=>$value){
    echo ("El barco ".$barco.":\n");
    echo ("El tamaño es: ".$value["tamaño"]."\t\t");
    echo ("La fila inicial es: ".$value["filaInicio"]."\t\t");
    echo ("La columna inicial es: ".$value["colInicio"]."\t");
    echo ("La dirección es: ".$value["direccion"]."\n");
    echo ("\n");
}
?>