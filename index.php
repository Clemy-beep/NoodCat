<?php

namespace App;

session_start();

require __DIR__ . '/vendor/autoload.php';
require "bootstrap.php";

use Router\Router;
use App\Controller\AppController;
use App\Controller\PersonController;
use App\Entity\Client;

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
$router->get('/login', function () {
    AppController::login();
});
$router->post('/login', function () {
    AppController::login();
});

$router->get('/home', function () {
    AppController::home();
});



if (empty($_SESSION['type'])) {
    $_SESSION['type'] = '';
} else
    switch ($_SESSION['type']) {

        case 'client':

            break;

        case 'cashier':
            break;

        case 'ceo':
            $router->get('/ceo/bars', function () {
                var_dump($_SESSION);
            });
            break;

        default:
    }









// $router->get("cats/show/:id", "\src\Controller\CatsController.php@show"); //liste des chats pour l'id d'un bar
// $router->get("bars/show", "\src\Controller\BarsController.php@show"); //afficher liste de tous les bars






$router->run();
