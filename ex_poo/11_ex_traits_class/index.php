<?php

/*entendi que esse metodo é aplicado para separar heranças deixando a
codificação mais organizada */
trait Objeto
{
    public function teste()
    {
        echo "testeando traits de objeto <br>";
    }
}

trait testando
{
    public function traitTeste()
    {
        echo "esse metodo e da trait testando ";
    }
}


class Central
{
    use objeto;
    use testando;
}


$x = new Central();

$x->teste();
$x->traitTeste();
