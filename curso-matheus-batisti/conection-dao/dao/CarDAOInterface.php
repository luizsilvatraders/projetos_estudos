<?php

require_once 'models/Car.php';

interface CarDAOInterface
{
    public function create(Car $car);

    public function findAll();
}
