<?php

class Carro
{
    public $tetoSolar;
    public $cor;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($velocidade)
    {
        $this->velocidadeMaxima = $velocidade;
    }

    function getVelocidadeMaxima()
    {

        echo "a velocidade máxima deste carro é: $this->velocidadeMaxima km/h <br>";
    }
}

$bmw = new Carro();

$bmw->cor = "branca";
$bmw->tetoSolar = true;

$bmw->setVelocidadeMaxima(100);

$bmw->getVelocidadeMaxima();
