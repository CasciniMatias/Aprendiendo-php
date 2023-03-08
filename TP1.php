<?php

echo "Ejercicio 1";
echo PHP_EOL;


$A = 1;
$B = 3;
$C = 4;

$F = ($A*$B/sqrt($C))/($C - 1/$B) - 2*$C/$A;
echo "F vale: $F";

echo PHP_EOL;

$G = (2*$A - $B/sqrt($C))/($C + 1/$B)*$B/4;
echo "G vale: $G";

echo PHP_EOL;
echo PHP_EOL;


echo "Ejercicio 2";
echo PHP_EOL;


$A = 10;
$B = 20;

$valor = !(!($A<>10) or (20>$B) and ($A==10) and false) and true;
var_dump ($valor);

echo PHP_EOL;

echo "Ejercicio 3";
echo PHP_EOL;


$A = 33;
$valor1 = !(($A>10) and ($A<20));
var_dump ($valor1);

$valor2 = !(($A>10) or !($A<20));
var_dump ($valor2);

echo PHP_EOL;

echo "Ejercicio 4";
echo PHP_EOL;

$A = 20;
$B = $A;
$C = 15;
$D = 10;

$valor3 = (($A==$B) or ($B>$C)) or ($C<$D);
var_dump ($valor3);

echo PHP_EOL;

echo "Ejercicio 5";
echo PHP_EOL;

$A =10;
$B = 12;
$C = 13;
$D = 10;

$a =(($A>$B) or ($A<$C)) and (($A==$C) or ($A>=$B));
$b = (($A>=$B) or ($A<$D)) and (($A>=$D) and ($C>$D));
$c = !($A==$C) and ($C>$D);
var_dump($a);
var_dump($b);
var_dump($c);
echo PHP_EOL;

echo "Ejercicio 6";
echo PHP_EOL;

$M = 8;
$N = 9;
$R = 5;
$S = 5;
$T = 4;
$V = 27;

$val = !(($M>$N and $R>$S) or (!($T<$V and $S>$M)));
var_dump($val);
echo PHP_EOL;

echo "Ejercicio 7";
echo PHP_EOL;

$A = (3*2-4/2*1)>(3*2+2*1) and (5>11%4);
$B = (3>=3 or 5!=5)and !(15/5+2!=5);
$C = !(!((3*(-3)))*2>(3-(-3)*2) or 1^3*2>6);
$D = (3>=4 and 5>3 and 3>3) or !(4<=4 or 5>4 or 6>=7);

var_dump($A);
var_dump($B);
var_dump($C);
var_dump($D);
echo PHP_EOL;

echo "Ejercicio 8";
echo PHP_EOL;

?>