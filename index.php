<?php
require __DIR__ . '/vendor/autoload.php';
require "bootstrap.php";

use Router\Router;
use App\Controller\AppController;

$router = new Router($_GET['url']);
$router->get("/", function(){
    AppController::index();
});
$router->get("/not-found", AppController::notFound());


$router->get("cats/show/:id", "\src\Controller\CatsController.php@show"); //liste des chats pour l'id d'un bar
$router->get("bars/show", "\src\Controller\BarsController.php@show"); //afficher liste de tous les bars









$router->run();











