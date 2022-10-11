<?php

/*Escreva um programa que leia o número de um funcionário,
seu número de horas trabalhadas, o valor que recebe por hora e
 calcula o salário desse funcionário. A seguir,
mostre o número e o salário do funcionário, com duas casas decimais.*/

$numeroFuncionario = fgets(STDIN);
$horaTrabalhada = fgets(STDIN);
$vlPorHora = fgets(STDIN);

$salario = number_format($horaTrabalhada * $vlPorHora, 2, '.', '');

echo "NUMBER = $numeroFuncionario";
echo "SALARY = U$ $salario" . PHP_EOL;
