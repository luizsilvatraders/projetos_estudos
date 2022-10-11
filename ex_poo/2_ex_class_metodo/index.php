<?php

class Cachorro
{
    function latir()
    {
        echo "au au <br>";
    }

    function andar($m)
    {
        echo "cachorro andou $m metros <br>";
    }
}

    $billi  = new Cachorro();
    $gamora = new Cachorro();

    $billi  -> latir();
    $gamora -> latir();

    $gamora -> andar(100);
    $billi  -> andar(50);
