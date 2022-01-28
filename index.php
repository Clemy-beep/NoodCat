<?php
require __DIR__ . '/vendor/autoload.php';
require "bootstrap.php";

use Router\Router;
use App\Controller\AppController;
use App\Controller\PersonController;

$router = new Router($_GET['url']);
$router->get("/", function () {
    AppController::index();
});

$router->get("/sign-up", function () {
    AppController::signUpForm();
});
$router->post('/sign-up', function () {
    PersonController::signUp();
});
// $router->get("/not-found", function () {
//     AppController::notFound();
// });

$router->run();
