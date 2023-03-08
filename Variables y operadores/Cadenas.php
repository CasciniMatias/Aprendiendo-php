<?php

// Vamos a ver las cadenas ---> STRING

$estoEsUnaCadenaDeCaracteres = "Cadena de caracteres" ;
echo $estoEsUnaCadenaDeCaracteres;

echo "<br>";

$cadenaDeComillasSimples = 'tengo comillas simples' ;
echo $cadenaDeComillasSimples;

echo "<br>";


$ponerComillasEnUnaFrase = "Este jugador es \"bueno\"" ;
echo $ponerComillasEnUnaFrase ;

echo "<br>";  //"<br>" es el salto de linea en HTML

$cadena1 = "hola" ;
$cadena2 = "mundo";
$cadena3 = $cadena1 . " " .$cadena2;   //asi concatenamos, con puntos en vez de usar el +
echo $cadena3;



?>