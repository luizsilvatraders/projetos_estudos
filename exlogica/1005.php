<?php

    $pesoy = 3.5;
    $pesox = 7.5;

    $pesoTotal = $pesoy + $pesox;

    $valory = fgets(STDIN) * $pesoy;
    $valorx = fgets(STDIN) * $pesox;

    $casasDecimais = 5;

    $media = number_format(($valory + $valorx) / $pesoTotal, $casasDecimais, '.', '');

    echo "MEDIA = $media" . PHP_EOL;
