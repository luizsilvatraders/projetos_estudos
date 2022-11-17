
<?php

$arr = [];

for ($j=0; $i <= 30; $i++) {
    array_push($arr, $i);
}

print_r($arr);

function valoresMaioresQueSete($valorArray){

    $retornoValores = [];

    for ($j=0; $j < count($valorArray); $j++) {

       if ($valorArray[$j] > 7) {
            array_push($retornoValores, $valorArray[$j]);
       }
    }

    return $retornoValores;

}

$novoValores = valoresMaioresQueSete($arr);

print_r($novoValores);
