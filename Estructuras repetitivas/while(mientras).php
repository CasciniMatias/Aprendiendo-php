<?php

$contador = 10;
while($contador <= 10){
    echo  $contador.PHP_EOL;
    $contador--;
    if ($contador == 5){
        echo "El contador llegó a 5".PHP_EOL;
        break;
    }
}

echo "---DO WHILE---".PHP_EOL;

$contador=10;
do {
    echo "cuenta regresiva: $contador".PHP_EOL;
    $contador --;
} while ($contador > 10);

/* el do while lo que hace es entrar al bucle sin verificar la condicion del while
y luego evalua, por ejemplo, en el anterior, entra porque $contador = 10 y nos devuelve
"cuenta regresiva: 10", pero cuando llega al while y evalua nos da False, por lo que corta
el bucle.
*/ 


?>
