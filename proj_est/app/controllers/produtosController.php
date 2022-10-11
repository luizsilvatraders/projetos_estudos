<?php

class produtos extends controller
{
    public function index()
    {
        $db = new Produtos_Model();
        print_r($db->insert('posts', array(

            "titulo" => "titulo aqui",
            "resumo" => "resumo aqui",
            "conteudo" => "conteudo aqui"
        )));


        //$this->view('produtosIndex');
    }

    public function novos()
    {

        $this->view('produtosNovos');
    }
}
