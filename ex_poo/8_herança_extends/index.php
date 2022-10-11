<?php

//criei clase Humano
class Humano
{
    //criei duas propriedades
    public $idade = 29;
    public $corOlhos = "cor dos olhos verdes <br>";

    //criei um metodo
    public function falar()
    {
        echo "boraaaa Bill!! <br>";
    }
    /*criei um metodo private !mas para acessar esse metodo
    tenho que criar um metodo public */
    private function gritar()
    {
        echo "PHP É MUITO BOM !!!! <br>";
    }

    /*criei um metodo public para acessar o metodo private utilizando this*/
    public function acessaGritar()
    {
        $this->gritar();
    }
    /*criei um metodo protected !vou criar um puclic para acessar o protected
    porém posso acessar a mesma com as clases filhas */
    protected function falarBaixo()
    {
        echo "Falar baixo por favor..... <br>";
    }
    /*criei um metodo public para acessar o metodo protect utilizando this*/
    public function acessarFalarBaixo()
    {
        $this->falarBaixo();
    }
}


class Programador extends Humano
{
    //consigo acessar nas classes filhas
    public function falarBaixoProgramador()
    {
        $this->falarBaixo();
    }
}

//--------------------------------------------//
//estanciei criando um objeto
$tamires = new Humano();
//acionei o metodo da clase Humano
$tamires->falar();
//acionei metodo private gritar pelo metodo public acessarGritar
$tamires->acessaGritar();
//acionei metodo protec falarBaixo pelo metodo public acessarFalarBaixo
$tamires->acessarFalarBaixo();
//mudando valores de propriedades
echo $tamires->corOlhos;
$tamires->corOlhos = "cor dos olhos azuis <br>";
echo $tamires->corOlhos;

//--------------------------------------------//

$separa = "-----------------------------------------------------------------<br>";
echo $separa;

//--------------------------------------------//
//estanciei criando um novo objeto com a nova class de herança programador (humano)
$luizProgramador = new Programador();
//utilizei echo com objeto $luizProgramador chamando a propriedade idade
echo $luizProgramador->idade . "<br>";
//acionei metodo falar ("bora bill")
$luizProgramador->falar();
//acionei metodo private gritar pelo metodo public acessarGritar
$luizProgramador->acessaGritar();
//acionei metodo protec falarBaixo pelo metodo public acessarFalarBaixo//
$luizProgramador->acessarFalarBaixo();
//acionei a class filha Programador buscando a metodo pretected da clase pai falarBaixo
$luizProgramador->falarBaixoProgramador();
//--------------------------------------------//
