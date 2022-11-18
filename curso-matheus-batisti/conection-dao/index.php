<?php
    require_once 'dao/CarDAO.php';

    $car = new CarDAO();
    $cars = $car->findAll();

    require_once 'templates/formulario.phtml';
