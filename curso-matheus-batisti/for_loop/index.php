<?php

$var = 0;
$nome =  "Luiz";
//contador for
for ($i=0; $i < 10; $i++) {
    if ($i == 4){
        echo "$nome <br>".PHP_EOL;
    }
    if ($i == 8){
        break;
    }

    echo "testando for de $i <br>" . PHP_EOL;

}
