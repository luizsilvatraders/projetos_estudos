<?php

namespace App\views;

class VisualizadorPrincipal
{
    public static function renderizaPaNois($nomeArquivo, $dados)
    {
        extract($dados);

        return require_once '../templates/' . $nomeArquivo;
    }

    public static function redirecionaPara($url)
    {
        header('Location: ' . $url);
    }
}
