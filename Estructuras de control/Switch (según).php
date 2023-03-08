<?php

/*

switch (expression) {
    case 0:
        codigo
        break;
    case 1:
        codigo
        break;
    case 2:
        codigo
        break;
    default: (opcional)
}

*/

$nota = readline ("Ingrese una nota: ");
switch ($nota) {
    case 0:
    case 1:
    case 2:
    case 3:
        echo "su examen está reprobado";
        break;  //es muy importante el break para que no siga recorriendo y nos devuelva
                // todos los valores 
    case 4:
    case 5:
    case 6:
        echo "su examen está regular";
        break;
    case 7:
    case 8:
    case 9:
        echo "su examen esta promocionado";
        break;
    case 10:
        echo "su examen esta excelente";
        break;
    default:
        echo "la nota ingresada no es válida";
        break;
}

?>
