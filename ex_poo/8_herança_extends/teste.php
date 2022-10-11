<?php

class Aluno
{
    public $ra;
    protected $nome;

    public function __construct()
    {
    }
}

class SalaDeAula
{
    protected $alunos = [];
    protected $materia;

    public function matricularAluno(Aluno $aluno)
    {
        // verifica documentos
        // emissao RA
        // cadastro de boletim
        // Liberação de acesso no AVA

        $this->alunos[$aluno->ra] = $aluno;
    }

    public function desmatricularAluno(Aluno $aluno)
    {
        // Arquivar documentos
        // destruição RA
        // arquivamento do boletim
        // Remoção de acesso no AVA

        unset($this->alunos[$aluno->ra]);
    }

    public function obtemQtdeAlunos()
    {
        return count($this->alunos);
    }

    public function listaAlunos()
    {
        echo '<br> Lista de alunos <br>';

        foreach ($this->alunos as $key => $aluno) {
            echo $aluno->ra . '<br>';
        }
    }
}

class SalaDeMatematica extends SalaDeAula
{
    public function __construct()
    {
        $this->materia = 'Matemática';
    }
}

// ===============================

$salaDeAula = new SalaDeAula();

$jose = new Aluno();
$jose->ra = 3333;

$salaDeAula->matricularAluno($jose);

echo 'A quantidade de alunos é de ' . $salaDeAula->obtemQtdeAlunos() . '<br>';

$gabriel =  new Aluno(); // Aluno
$gabriel->ra = 2210; // Colocou o RA do novo aluno

$salaDeAula->matricularAluno($gabriel); // Sala de aula -> matricular
$salaDeAula->listaAlunos();
