<?php

$arr = ["luiz", 2, "carro", 3, "tomate", 5,];

$contador = 0;

while ($contador < count($arr)){

    echo "Elemento: $arr[$contador] <br> ";

    $contador ++;
}

echo "====================<br>";


$arr = ["luiz", 2, "carro", 3, "tomate", 5,];

$contador = 0;

while ($contador < count($arr)){

    $valorAtual = $arr[$contador];

    if($valorAtual == "luiz"|| $valorAtual == 3 ){
        $contador ++;
        continue;
    }

    echo "Elemento: $valorAtual <br> ";

    $contador ++;
}
