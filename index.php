<?php
require __DIR__ . '/vendor/autoload.php';
require "bootstrap.php";

use Router\Router;
use App\Controller\AppController;

$router = new Router($_GET['url']);
$router->get("/", function(){
    AppController::index();
});

$router->run();
