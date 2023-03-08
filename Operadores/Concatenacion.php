<?php

//---------------------------------------
//-- Operador de cadenas: .
//---------------------------------------

/* 

Utiliza la misma variable y concatena la nueva cadena y almacena de nuevo en la misma variable

*/

$cadena = "hola";

$cadena = $cadena . "mundo";  //el punto concatena cosas
echo $cadena;
echo ("</br>");

$cadena .= "Mundo!";
echo $cadena;
?>