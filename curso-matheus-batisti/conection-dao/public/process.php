<?php

require_once '../vendor/autoload.php';

use App\controllers\IndexController;

$controller = new IndexController();
$controller->process($_POST["modelo"], $_POST["km"], $_POST["cor"]);
