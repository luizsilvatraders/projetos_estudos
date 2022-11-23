<?php

namespace App\models;

interface CarDAOInterface
{
    public function create(Carro $car);

    public function findAll();
}
