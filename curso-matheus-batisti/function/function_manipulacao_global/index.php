<?php

function alterarDados($nome, $idade){

    $nome = "Sr.$nome";
    $idade = "$idade anos ";

    return[$nome, $idade];

}

$dados = alterarDados("Luiz Carlos", 27);

print_r($dados);

echo "br" . PHP_EOL;

echo "Ola $dados[0], você tem $dados[1]";
