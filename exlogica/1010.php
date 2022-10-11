<?php

/*Neste problema, deve-se ler o código de uma peça 1,
o número de peças 1, o valor unitário de cada peça 1,
o código de uma peça 2, o número de peças 2 e o valor unitário de cada peça 2.
Após, calcule e mostre o valor a ser pago.
Entrada
O arquivo de entrada contém duas linhas de dados.
Em cada linha haverá 3 valores, respectivamente dois inteiros e um valor com 2
casas decimais.*/

        $peca1 = explode(" ", fgets(STDIN));
        $peca2 = explode(" ", fgets(STDIN));

        $valorPagar = number_format(($peca1[1] * $peca1[2]) + ($peca2[1] * $peca2[2]), 2, '.', '');

        echo "VALOR A PAGAR: R$ $valorPagar" . PHP_EOL;
