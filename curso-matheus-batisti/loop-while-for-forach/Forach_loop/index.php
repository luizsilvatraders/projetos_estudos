<?php

$carros = ["meriva", "parati", "gol", "santana", "fiat marea "];

foreach ($carros as $carro){

    echo "os carros são: $carro <br>" . PHP_EOL ;

    if ($carro == "fiat marea ") {
        echo "carro muitooo ruim !! <br>" . PHP_EOL;
    }
}
