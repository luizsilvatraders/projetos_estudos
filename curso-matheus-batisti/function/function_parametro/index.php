<?php
function velocidadeCarro($vel){

    //condição de insersão numero inteiro, se for strins entra no else

    if(is_int($vel)) {
        echo "A velocidade do carro é: $vel KM/h " . PHP_EOL;
    } else {
        echo "Por favor passe um numero inteiro" . PHP_EOL;
    }

}

velocidadeCarro("quarenta");
$velocidadeMax = 1000;
velocidadeCarro($velocidadeMax);
velocidadeCarro(300);
velocidadeCarro(500);
echo "=============" . PHP_EOL;

//function com mais parametros
function infoCarr($marca, $modelo){

    echo "informações do veiculo: $marca, $modelo" . PHP_EOL;
    echo "A marca do  veiculo é: $marca" . PHP_EOL;
    echo "O modelo do veiculo é: $modelo" . PHP_EOL;
    echo  "=============" . PHP_EOL;

}

infoCarr("Citroen", "C4 Pallas");
infoCarr("Chevrolet", "Montana");
