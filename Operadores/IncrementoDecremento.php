<?php

//-------------------------------
//-- Operadores de incremento y decremento: ++ --
//-------------------------------


$incrementadora = 10;
//pre-incremento. El ++ se ejecuta antes de la funcion echo
echo ++$incrementadora;
echo ("<br>");

// Post-incremento. El ++ se ejecuta despues de la funcion echo
echo $incrementadora++; //11
echo ("</br>");
echo $incrementadora;  //12
echo ("</br>");

//el pre y pos decremento es con el --

echo --$incrementadora;  //11
echo ("</br>");
echo $incrementadora--;  //11
echo ("</br>");
echo $incrementadora;   //10




?>