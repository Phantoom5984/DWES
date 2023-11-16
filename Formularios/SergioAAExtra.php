<?php
/**
* @author Sergio Salvago Medina
*/
/* Ejericio 1. Crea un array asociativo para personas que contengan los siguientes datos: Nombre, Dirección, Teléfono, Población (debe ser Valencia o Alicante).
Al menos debe haber 5 personas distintas. */
$personas=array("Persona1"=>array("Nombre"=>"Sergio","Dirección"=>"Avenida del Cid 12", "Teléfono"=>123456789, "Población"=>"Valencia"),
"Persona2"=>array("Nombre"=>"Adrián","Dirección"=>"Avenida Gregorio Gea 24", "Teléfono"=>234567891, "Población"=>"Alicante"),
"Persona3"=>array("Nombre"=>"Lucas","Dirección"=>"Avenida del Puerto 51", "Teléfono"=>345678912, "Población"=>"Valencia"),
"Persona4"=>array("Nombre"=>"Alejandro","Dirección"=>"Avenida de Baleares 60", "Teléfono"=>456789123, "Población"=>"Alicante"),
"Persona5"=>array("Nombre"=>"José","Dirección"=>"Avenida de las Cortes Valencianas 83", "Teléfono"=>567891234, "Población"=>"Valencia")
);
// Ejericio 2. Recorre la estructura anterior para mostrar todos los datos de cada persona.
foreach($personas as $persona=>$value){
    echo ("La persona ".$persona.":\n");
    echo ("El nombre es: ".$value["Nombre"]."\t\t");
    echo ("La dirección es: ".$value["Dirección"]."\t\t");
    echo ("El teléfono es: ".$value["Teléfono"]."\t");
    echo ("La población es: ".$value["Población"]."\n");
    echo ("\n");
}
/* Ejericio 3. Para cada una de las personas, debes incluir sus hobbies o favoritos que consisten en al menos 3 películas, 3 libros y 3 canciones.
Modifica la estructura anterior para reflejar estos cambios. */
$personas=array("Persona1"=>array("Nombre"=>"Sergio","Dirección"=>"Avenida del Cid 12", "Teléfono"=>123456789, "Población"=>"Valencia", "Hoobies"=>array(
    "Películas"=>array("Star Wars","Harry Potter","El señor de los anillos"),
    "Libros"=>array("La chica del verano","Un amor","El problema final"),
    "Canciones"=>array("Alpha","Golden","Mónaco"))
),
"Persona2"=>array("Nombre"=>"Adrián","Dirección"=>"Avenida Gregorio Gea 24", "Teléfono"=>234567891, "Población"=>"Alicante", "Hoobies"=>array(
    "Películas"=>array("Nowhere","La llegada","El asesino"),
    "Libros"=>array("El infierno","Todo arde","Verdad o reto"),
    "Canciones"=>array("Reina","Perro negro","Columbia"))
),
"Persona3"=>array("Nombre"=>"Lucas","Dirección"=>"Avenida del Puerto 51", "Teléfono"=>345678912, "Población"=>"Valencia", "Hoobies"=>array(
    "Películas"=>array("Down Low","Mafia Mamma","Pippa"),
    "Libros"=>array("Maldita Roma","Roma soy yo","Berenguela"),
    "Canciones"=>array("Seda","El mambo","1989"))
),
"Persona4"=>array("Nombre"=>"Alejandro","Dirección"=>"Avenida de Baleares 60", "Teléfono"=>456789123, "Población"=>"Alicante", "Hoobies"=>array(
    "Películas"=>array("Hogar","La cara oculta","Tu hijo"),
    "Libros"=>array("Rompre el hielo","Jaque mate al amor","¿Tú lo harías?"),
    "Canciones"=>array("Copas de yate","El Madrileño","Cowboys de la A3"))
),
"Persona5"=>array("Nombre"=>"José","Dirección"=>"Avenida de las Cortes Valencianas 83", "Teléfono"=>567891234, "Población"=>"Valencia", "Hoobies"=>array(
    "Películas"=>array("Juego limpio","Quien a hierro mata","El practicante"),
    "Libros"=>array("La sombra de los Dioses","La guerra de la amapola","Choque de reyes"),
    "Canciones"=>array("Guts","Motomami","Midnights"))
)
);
// Ejericio 4. Recorre la estructura anterior para mostrar todos los datos de cada persona y sus hobbies.
foreach($personas as $persona=>$value){
    echo ("La persona ".$persona.":\n");
    echo ("El nombre es: ".$value["Nombre"]."\n");
    echo ("La dirección es: ".$value["Dirección"]."\n");
    echo ("El teléfono es: ".$value["Teléfono"]."\n");
    echo ("La población es: ".$value["Población"]."\n");
    echo ("Las películas son: ".implode(", ", $value["Hoobies"]["Películas"])."\n");
    echo ("Los libros son: ".implode(", ", $value["Hoobies"]["Libros"])."\n");
    echo ("Las canciones son: ".implode(", ", $value["Hoobies"]["Canciones"])."\n");
    echo ("\n");
}
?>