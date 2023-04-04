<?php
 $nombre = ["EVER", "LUZ", "MARTIN", "JHESSICA", "PAUL", "RODRIGO", "JUAN RONALDO", "MARISOL", "JOEL", "BORIS", "YOLA", "ROSSE"];
 //muestra los elementos del vector
 echo $nombre[11]."<br>";
 //muestra la posicion de los elemnetos 
 $clave = array_search("MARISOL",$nombre);
 echo $clave."<br>";
 //contar la cantidad de elementos
 echo "la cantidad de elementos son: ".count($nombre)." elementos";
?>