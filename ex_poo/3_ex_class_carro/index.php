<?php

class Carro
{
    //propriedade publicas(variaveis)
    public $rodas = 4;
    public $aro = 20;
    public $cor = "azul";

    //metodos (funçoes)
    function ligar()
    {
        echo "vrummmmm <br>";
    }
}

    $citroen = new Carro();
    $bmw = new Carro();

    echo $citroen->aro . "<br>";
    echo $citroen->rodas . "<br>";

    /*mesmo com a propriedade cor defenida
    posso alterar p/ outra cor */
    $citroen->cor = "verde ";

    echo $citroen->cor . "<br>";

    //sem mudar propriedade cor
    echo $bmw->cor . "<br>";

    //chmando metodo ligar(função)
    $citroen->ligar();
    $bmw->ligar();
