<?php

// ELse If  -  Si no es verdadera, pero si la siguiente es verdadera, ejecuta el código

$edad = readline('ingrese su edad :');
$salario = readline('Ingrese su salario :');	

if ($salario<70_000) {
    echo "Usted cobra menos del salario minimo";
} elseif ($salario<100_000) {
    echo "usted cobra un poco mas del minimo";
} elseif ($salario<200_000) {
    echo "Usted cobra relativamente bien";
} elseif ($salario<300_000) {
    echo "Usted cobra por encima de la media";
} else {
    echo "Usted cobra demasiado";
}

?>