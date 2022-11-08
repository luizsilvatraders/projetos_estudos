<?php

function verificaParImpar($n){

    if($n % 2 === 0){
        echo "o numero $n é par " . PHP_EOL;
    } else {
        echo "o numero $n é impar " . PHP_EOL;
    }

}

verificaParImpar(1);
verificaParImpar(40);
verificaParImpar(35);
