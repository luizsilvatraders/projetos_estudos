<?php

namespace App\Model;

class Conexao
{
    //instaciando
    private static $instance;

    //metodo de conexao
    public static function getConn()
    {
        //verificação se não existir uma estancia crie uma
        if(!isset(self::$instance)){

            self::$instance = new PDO ('mysql:host=localhost;dbname=pdo;charset=utf8','admin','admin');
        }
        // se existir ele retorna a estancia
        return self::$instance;


    }
}
