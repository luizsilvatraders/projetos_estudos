<?php

class DAOPDO
{
    protected $conn;

    public function __construct(){
        $db   = "daoteste";
        $host = "localhost";
        $user = "admin";
        $pass = "admin";

        $this->conn = new PDO ("mysql:dbname=$db;host=$host", $user, $pass);
    }
}
