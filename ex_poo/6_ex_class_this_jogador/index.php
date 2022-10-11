<?php

class Time
{
    public $goleiro;
    public $corDaCamisa;
    public $qtdMaxJogadores;


    function set_qtdMaxJogadores($qtd)
    {
        $this->qtdMaxJogadores = $qtd;
    }

    function get_qtdMaxJogadores()
    {
        echo "A quatidade maxima de jogadores é $this->qtdMaxJogadores <br>";
    }
}

$saoPaulo = new Time();

$saoPaulo->goleiro = true . "<br>";
$saoPaulo->corDaCamisa = "vermelha/branca <br>";

$saoPaulo->set_qtdMaxJogadores(12);

$saoPaulo->get_qtdMaxJogadores();
echo $saoPaulo->goleiro;
echo $saoPaulo->corDaCamisa;
