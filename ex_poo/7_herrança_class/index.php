<?php

class Caminhao
{
    public $rodas = 6;
    public $pneu = "pneu careca";
}

class Mecanico
{
    public function alterarRodas($caminhaoCarreteiro)
    {
        $caminhaoCarreteiro->rodas = 8 ;
    }

    public function trocarPneu($caminhaoCarreteiro, $pneuNovo)
    {
        $caminhaoCarreteiro->pneu = $pneuNovo;
    }
}


    $caminhaoCarreteiro = new Caminhao();
    echo $caminhaoCarreteiro->rodas . "<br>";


    $luizao = new Mecanico();

    $luizao->alterarRodas($caminhaoCarreteiro);
    echo $caminhaoCarreteiro->rodas . "<br>";

    $luizao->trocarPneu($caminhaoCarreteiro, "pneu novos Goodyar");
    echo $caminhaoCarreteiro->pneu;
