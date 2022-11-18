<?php

require_once 'dao/CarDAO.php';
require_once 'models/Car.php';

$carDao = new CarDAO($conn);

$modelo = $_POST["modelo"];
$km     = $_POST["km"];
$cor    = $_POST["cor"];

$newCar = new Car();

$newCar->setModelo($modelo);
$newCar->setKm($km);
$newCar->setCor($cor);

$carDao->create($newCar);

header("Location: index.php");
