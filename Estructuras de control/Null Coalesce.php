<?php

/*

$a ?? "valor por defecto"

si el primer valor es null entonces tomará el segundo valor.

*/

$cargo = $cargo ?? "Empleado común";
echo "El cargo que ocupa la persona es: $cargo";

//aqui se pone como ejemplo que si en nuestra base de datos tenemos empleados cargados y
//no está especidifaco el cargo, cuando ese valor sea null, lo cambie por "empleado común"

?>
