<?php
    require_once '../vendor/autoload.php';

    use App\controllers\IndexController;

    $controller = new IndexController();
    $controller->listagem();
