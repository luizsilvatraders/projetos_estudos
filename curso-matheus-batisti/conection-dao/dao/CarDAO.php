<?php

require_once 'models/Car.php';
require_once 'CarDAOInterface.php';
require_once 'DAOPDO.php';

class CarDAO extends DAOPDO implements CarDAOInterface {

    public function findAll(){

        $cars = [];

        $stmt = $this->conn->query("SELECT * FROM cars");

        $data = $stmt->fetchAll();

        foreach($data as $item){

            $car = new Car();
            $car->setId($item["id"]);
            $car->setModelo($item["modelo"]);
            $car->setKm($item["km"]);
            $car->setCor($item["cor"]);

            $cars[] = $car;

        }

        return $cars;

    }

    public function create(Car $car){

        $stmt = $this->conn->prepare("INSERT INTO cars (modelo, km, cor) VALUES (:modelo, :km, :cor)");

        $stmt->bindParam(":modelo", $car->getModelo());
        $stmt->bindParam(":km", $car->getKm());
        $stmt->bindParam(":cor", $car->getCor());

        $stmt->execute();

    }
}
