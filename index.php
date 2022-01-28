<?php
require __DIR__ . '/vendor/autoload.php';
require "bootstrap.php";

use Router\Router;
use App\Controller\AppController;
use App\Controller\PersonController;
use App\Entity\Client;


if (!empty($_SESSION['type'])) {
    switch ($_SESSION['type']) {

        case 'client':
            break;

        case 'cashier':
            break;

        case 'CEO':
            break;

        default:
    }
}
$router = new Router($_GET['url']);
$router->get("/", function () {
    AppController::index();
});


$router->get("/sign-up", function () {
    PersonController::signUp();
});
$router->post('/sign-up', function () {
    PersonController::signUp();
});
$router->get("/not-found", function () {
    AppController::notFound();
});

$router->get('/home', function () {
    AppController::home();
});




$router->get('/login', function () {
    AppController::login();
});
$router->post('/login', function () {
    AppController::login();
});

$router->run();
