<?php

class Humano
{
    public $dedos = 9;//não tem um dedo kkk
    public $pernas = 2;

    public function falar()
    {
        echo "Vamos para aula <br>";
    }
}

class Professor extends Humano
{
    public $graduado = "mestrado <br>";


    public function acessandoFalar()
    {
        $this->falar();
    }
}

$gabriel =  new Humano();

echo $gabriel->dedos . "<br>";
echo $gabriel->pernas . "<br>";
$gabriel->falar();



$separa = "-----------------------------------------------------------------<br>";
echo $separa;

$petrius = new Professor();

echo $petrius->graduado . "<br>";
$petrius->falar();
$petrius->acessandoFalar();
