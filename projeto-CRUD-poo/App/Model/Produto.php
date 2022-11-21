<?php

namespace App\Model;

class Produto
{
    private $id, $nome, $descricao;

    //ID
    public function getId()
    {
        return $this->id;
    }
    public function setid($id)
    {
        return $this->id = $id;
    }

    //NOME
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        return $this->nome = $nome;
    }

    //DESCRIÇÂO
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao)
    {
        return $this->descricao = $descricao;
    }
}
