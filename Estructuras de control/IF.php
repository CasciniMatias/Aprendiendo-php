<?php

$edad = readline("Ingrse su edad: ");
$salario = readline("Ingrse su salario: ");

if ($edad>=21 && $salario>=200_000) {
    echo "Puede acceder al préstamo". PHP_EOL;
}   else {
        echo "No cumple con las condiciones para obtener el préstamo". PHP_EOL;
}


$user = 'admin';
$pass = 'admin';
$usuario = readline("Ingrse su usuario: ");
$password = readline("Ingrse su contraseña: ");



if($user == $usuario) {
    if ($pass == $password) {
        echo "Usuario logueado correctamente";
    }   else {
            echo "Contraseña incorrecta";
    }
} else {
    echo "Usuario incorrecto";
}


?>
