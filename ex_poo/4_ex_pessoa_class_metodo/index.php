<?php

class Pessoa
{
    public $nome;
    public $idade;

    function andar($m)
    {

        echo "o a pessoa andou $m metros <br>";
    }

    function treina($dias)
    {

        echo "treina $dias dias por semana ";
    }
}

    $luiz = new Pessoa();

    $luiz->nome = "luiz";
    $luiz->idade = 29;

    echo "o nome dele é  $luiz->nome e tem $luiz->idade anos  <br>";

    $luiz->andar(15);

    //estanciar outro objeto com a class
    $petrius = new Pessoa();

    $petrius->nome = "petrius";
    $petrius->idade = 30;
    echo "o nome do programador é $petrius->nome e tem $petrius->idade anos <br> ";
    $petrius->treina(5);
