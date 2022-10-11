<?php

/*Comando abstract é utilizado para criar classes abstratas ,também não posso
estanciar a classe ,ja chamo o metodo  diratamente com ( :: )*/
/*ideia principal utilizar o metodo sem a classe estar instaciada */


abstract class teste
{
    public static function testandoCalsse()
    {
        echo "este metodo é uma classe abstrata <br>";
    }

    abstract public function testAbs();
}


teste::testandoCalsse();//estatico

//esse aqui estou com pouco de dificuldade para entender

/*pelo que entendi metodos abstrados tem que ser implementados nas
nas clases que herdam (extends)  para serem instaciados !!*/
class nova extends teste
{
    public function testAbs()
    {
        echo "teste metodo abstrato <br> ";
    }
}


$n = new Nova();
$n->testAbs();
