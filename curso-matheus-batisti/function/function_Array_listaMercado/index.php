<?php

$itens = ['macarão', 'arroz', 'carne', 'alface', 'pera'];

function listaCompras($valoresDoArray){

    $str = "você levou esses itens do mercado: ";

    for ($i=0; $i <count($valoresDoArray); $i++) {

        //se i + 1 for igual a contagem do array recebe um ponto no final
        if ($i + 1 == count($valoresDoArray)) {
            $str .= "$valoresDoArray[$i].";
        } else{//se não recebe somante virgula
            $str .= "$valoresDoArray[$i], ";
        }

    }

    return $str;

}

echo listaCompras($itens);
