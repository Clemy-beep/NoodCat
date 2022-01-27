<?php

use App\Router\Router;

require __DIR__ . '/vendor/autoload.php';
require "bootstrap.php";

$router = new Router($_GET['url']);

$router->get('/', function(){});
