<?php

namespace App\controllers;

use App\models\CarDAO;
use App\views\VisualizadorPrincipal;
use App\models\Carro;

class IndexController
{
    public function listagem()
    {
        $car = new CarDAO();
        $cars = $car->findAll();

        VisualizadorPrincipal::renderizaPaNois('formulario.phtml', [
            'cars' => $cars,
        ]);
    }

    public function process($modelo, $km, $cor)
    {
        $carDao = new CarDAO();

        $newCar = new Carro();

        $newCar->setModelo($modelo);
        $newCar->setKm($km);
        $newCar->setCor($cor);

        $carDao->create($newCar);

        VisualizadorPrincipal::redirecionaPara('index.php');
    }
}
