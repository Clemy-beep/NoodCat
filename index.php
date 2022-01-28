<?php
require __DIR__ . '/vendor/autoload.php';
require "bootstrap.php";

use Router\Router;
use App\Controller\AppController;
use App\Entity\Client ;

$router = new Router($_GET['url']);
$router->get("/", function(){
    AppController::index();
});

$router->get("/not-found", AppController::notFound());

if (!empty($_SESSION['type'])) {
    $_SESSION['type'] = "";
}

    switch ($_SESSION['type']) {
    
            case 'client':
        break;

            case 'cashier':
        break;

            case 'CEO':
        break;

    default:

}

$router->get('/login', 'App\Controller\AppController@login');
$router->post('/login', 'App\Controller\AppController@login');

$router->run();
