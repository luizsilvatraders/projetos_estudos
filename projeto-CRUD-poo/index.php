<?php

require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setNome('Teclado gamer com PIPE');
$produto->setDescricao('Este teclado conten LED e a tecla PIPE');

var_dump($produto);
