
<?php

//clase humano
class Humano
{
}
//clase animal
class Animal
{
}

//clase filho profesor pai humano
class Professor extends Humano
{
}

$luiz = new Humano();

$cachorraGamaora = new Animal();

//comando instaceof e utilizado para informar de qual classe o objeto pertence !!
//se objeto luiz for da classe humano ele vai escrever luiz é humano !!
if ($luiz instanceof Humano) {
    echo "luiz é humano <br>";
} else {
    echo "luiz não e humano <br>";
}

//comando instaceof e utilizado para informar de qual classe o objeto pertence !!
//se objeto cachorraGamora for da classe humano ele vai escrever  cachorraGamora é humano!
//se nao gamora não e humano
if ($cachorraGamaora instanceof Humano) {
    echo "gamoara é humano <br>";
} else {
    echo "gamora não e humano <br>";
}

/*aqui estou fazendo a comparação na clase filho o comando instanceof ve a condição
como herdeiro do pai*/
$gabriel =  new Professor();
if ($gabriel instanceof Professor) {
    echo "gabriel é professor <br>";
} else {
    echo "gabriel não é professor <br>";
}

if ($gabriel instanceof Humano) {
    echo "gabriel é humano <br>";
} else {
    echo "gabriel não e humano <br>";
}
