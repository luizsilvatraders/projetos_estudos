<?php

class controller
{
    protected function view($nome)
    {

        return require_once('app/views/' . $nome . '.phtml');
        exit();
    }
}
