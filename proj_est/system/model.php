<?php

class Model
{
    protected $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=blog', 'blog', 'blog123');
    }

    public function insert($tabela, array $dados)
    {

        $sql = "INSERT INTO tabela(campo1,campos2)VALUES('valor1','valor2')";
        $array = array(
            "titulo" => "titulo aqui",
            "resumo" => "resumo aqui",
            "conteudo" => "conteudo aqui",
            "comentarios" => "100"
        );
        foreach ($dados as $inds => $vals) {
            $campos[] = $inds;
            $valores[] = $vals;
        }
        $campos = implode(",", $campos);
        $valores = "'" . implode("','", $valores) . "'";
        return $this->db->query("INSERT INTO `{$tabela}`({$campos}) 
        VALUES ({$valores})");
    }

    public function read()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
