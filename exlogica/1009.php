<?php

/*Faça um programa que leia o nome de um vendedor,
 o seu salário fixo e o total de vendas efetuadas por ele no mês (em dinheiro).
 Sabendo que este vendedor ganha 15% de comissão sobre suas vendas efetuadas,
 informar o total a receber no final do mês, com duas casas decimais.*/

 $nomeVendedor = fgets(STDIN);
 $salerioFixo = fgets(STDIN);
 $totalVendas = fgets(STDIN);

 $totalMensal = number_format($salerioFixo + ($totalVendas * 0.15), 2, '.', '');

 echo "TOTAL = R$ $totalMensal" . PHP_EOL;
