<?php

/*Leia quatro valores inteiros A, B, C e D. A seguir,
calcule e mostre a diferença do produto de A e B
pelo produto de C e D segundo a fórmula: DIFERENCA = (A * B - C * D).*/

$valora = fgets(STDIN);
$valorb = fgets(STDIN);
$valorc = fgets(STDIN);
$valord = fgets(STDIN);

$diferenca = (($valora * $valorb ) - ($valorc * $valord));

echo "DIFERENCA = $diferenca" . PHP_EOL;
