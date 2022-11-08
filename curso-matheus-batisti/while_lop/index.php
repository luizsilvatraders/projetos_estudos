<?php

$a = 10;

while($a > 0) {

    echo "executando loop $a <br>";

    $a --;
}

echo "<br>_______________________ <br> ";

$aluno = 10 ;

while ($aluno > 0 ) {


    if($aluno == 5 || $aluno == 7 ){

        echo "pulou a execução $aluno <br>";

        $aluno --;

        continue;

    }

        echo "executando loop $aluno <br> ";

    $aluno --;
}
